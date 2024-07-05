<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Service;
use App\Models\Client;
use App\Models\Team;


class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function home()
    {
        $project = Project::all();
        $service = Service::all();
        $team = Team::all();
        $client = Client::all();
        return view('home.index',compact('project','service','team','client'));
    }

    public function login_home()
    {
        $project = Project::all();
        $service = Service::all();
        $team = Team::all();
        $client = Client::all();
        return view('home.index',compact('project','service','team','client'));


    }


    public function about()
    {
        // $project = Project::all();
        // $service = Service::all();
        // $team = Team::all();
        // $client = Client::all();
        // // $about = About::all();
        return view('home.about');
    }

    public function project()
    {
        $project = Project::all();
        $service = Service::all();
        $team = Team::all();
        $client = Client::all();
        return view('home.displayproject',compact('project','service','team','client'));
    }

    public function service()
    {
        $project = Project::all();
        $service = Service::all();
        $team = Team::all();
        $client = Client::all();
        return view('home.displayservice',compact('service'));
    }

    public function team()
    {
        $project = Project::all();
        $service = Service::all();
        $team = Team::all();
        $client = Client::all();      
        return view('home.displayteam',compact('team'));
    }

    public function client()
    { 
        $project = Project::all();
        $service = Service::all();
        $team = Team::all();
        $client = Client::all();      
        return view('home.displayclient',compact('client'));
    }


    public function project_details($id)
    {
        $data = Project::find($id);
        
        return view('home.project_details',compact('data'));
    }

    
}
