<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Client;
use App\Models\Team;

class AdminController extends Controller
{
    // public function add_service(Request $request)
    // {
    //     $service = new Service;
    //     $service->service_name = $request->service;
    //     $service->image = $request->image;
    //     $service->save();

    //     return redirect()->back();
    // }

    public function add_project()
    {
        return view('admin.add_project');
    }
    public function upload_project(Request $request)
    {
        $data = new Project;
        $data->title = $request->title;
        $data->description = $request->description;

        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('projects', $imagename);

            $data->image = $imagename;
        }
        $data->save();



        return redirect()->back();
    }

    public function view_project()
    {
        $project = Project::paginate(3);
        return view('admin.view_project', compact('project'));
    }
    public function delete_project($id)
    {
        $data = Project::find($id);
        $data->delete();

        return redirect()->back();

    }



    public function update_project($id)
    {
        $data = Project::find($id);
        return view('admin.update_project', compact('data'));
    }

    public function edit_project(Request $request, $id)
    {
        $data = Project::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('projects', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect('/view_project');
    }

    public function project_search(Request $request)
    {
        $search = $request->search;
        $project = Project::where('title', 'LIKE', '%' . $search . '%')->paginate(3);

        return view('admin.view_project', compact('project'));

    }

    //Service


    public function add_service()
    {
        return view('admin.add_service');
    }

    public function upload_service(Request $request)
    {
        $data = new Service();
        $data->service_name = $request->service_name;
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('services', $imagename);

            $data->image = $imagename;
        }
        $data->save();

        return redirect()->back();
    }
    public function view_service()
    {
        $service = Service::paginate(3);
        return view('admin.view_service', compact('service'));
    }

    public function delete_service($id)
    {
        $data = Service::find($id);
        $data->delete();
        return redirect()->back();

    }


    public function update_service($id)
    {
        $data = Service::find($id);
        return view('admin.update_service', compact('data'));
    }
    public function edit_service(Request $request, $id)
    {
        $data = Service::find($id);
        $data->service_name = $request->service_name;
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('services', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect('/view_service');
    }

    public function service_search(Request $request)
    {
        $search = $request->search;
        $service = Service::where('service_name', 'LIKE', '%' . $search . '%')->paginate(3);

        return view('admin.view_service', compact('service'));

    }



//clients//


        public function add_client()
        {
            return view('admin.add_client');
        }


        public function upload_client(Request $request)
    {
        $data = new Client();
        // $data->service_name = $request->client_name;
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('clients', $imagename);

            $data->image = $imagename;
        }
        $data->save();

        return redirect()->back();
    }

    public function view_client()
    {
        $client = Client::paginate(3);
        return view('admin.view_client', compact('client'));
    }
    public function delete_client($id)
    {
        $data = Client::find($id);
        $data->delete();
        return redirect()->back();

    }
    public function update_client($id)
    {
        $data = Client::find($id);
        return view('admin.update_client', compact('data'));
    }
    public function edit_client(Request $request, $id)
    {
        $data = Client::find($id);
       
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('clients', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect('/view_client');
    }


  //Team
  
  public function add_team()
  {
      return view('admin.add_team');
  }
 
  public function upload_team(Request $request)
    {
        $data = new Team;
        $data->name = $request->name;
        $data->description = $request->description;

        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('teams', $imagename);

            $data->image = $imagename;
        }
        $data->save();



        return redirect()->back();
    }

    public function view_team()
    {
        $team = Team::paginate(3);
        return view('admin.view_team', compact('team'));
    }


    public function delete_team($id)
    {
        $data = Team::find($id);
        $data->delete();

        return redirect()->back();

    }



    public function update_team($id)
    {
        $data = Team::find($id);
        return view('admin.update_team', compact('data'));
    }

    public function edit_team(Request $request, $id)
    {
        $data = Team::find($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('teams', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect('/view_team');
    }

    public function team_search(Request $request)
    {
        $search = $request->search;
        $team = Team::where('name', 'LIKE', '%' . $search . '%')->paginate(3);

        return view('admin.view_team', compact('team'));

    }

}





