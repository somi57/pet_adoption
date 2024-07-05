<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdoptionformController;
 
  
Route::get('/',[HomeController::class,'home']);

Route::get('/project',[HomeController::class,'project'])->name('projects'); 

Route::get('/service',[HomeController::class,'service'])->name('services'); 

Route::get('/team',[HomeController::class,'team'])->name('teams'); 

Route::get('/client',[HomeController::class,'client'])->name('clients'); 

Route::get('/about',[HomeController::class,'about'])->name('abouts'); 

Route::get('/adoptionform', [AdoptionformController::class, 'create'])->name('adoptionform.create');
Route::post('/adoptionform/store', [AdoptionformController::class, 'store'])->name('adoptionform.store');



Route::get('/dashboard',[HomeController::class,'login_home'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);


// Service//

// Route::get('view_service',[AdminController::class,'view_service'])->middleware(['auth','admin']);

Route::get('add_service',[AdminController::class,'add_service'])->middleware(['auth','admin']);

Route::post('upload_service',[AdminController::class,'upload_service'])->middleware(['auth','admin']);

Route::get('view_service',[AdminController::class,'view_service'])->middleware(['auth','admin']);

Route::get('delete_service/{id}',[AdminController::class,'delete_service'])->middleware(['auth','admin']);

Route::get('update_service/{id}',[AdminController::class,'update_service'])->middleware(['auth','admin']);


Route::post('edit_service/{id}',[AdminController::class,'edit_service'])->middleware(['auth','admin']);

Route::get('service_search',[AdminController::class,'service_search'])->middleware(['auth','admin']);




//Project
Route::get('add_project',[AdminController::class,'add_project'])->middleware(['auth','admin']);

Route::post('upload_project',[AdminController::class,'upload_project'])->middleware(['auth','admin']);

Route::get('view_project',[AdminController::class,'view_project'])->middleware(['auth','admin']);

Route::get('delete_project/{id}',[AdminController::class,'delete_project'])->middleware(['auth','admin']);

Route::get('update_project/{id}',[AdminController::class,'update_project'])->middleware(['auth','admin']);

Route::post('edit_project/{id}',[AdminController::class,'edit_project'])->middleware(['auth','admin']);

Route::get('project_search',[AdminController::class,'project_search'])->middleware(['auth','admin']);

Route::get('project_details/{id}',[HomeController::class,'project_details']);



//Clients

Route::get('add_client',[AdminController::class,'add_client'])->middleware(['auth','admin']);

Route::post('upload_client',[AdminController::class,'upload_client'])->middleware(['auth','admin']);

Route::get('view_client',[AdminController::class,'view_client'])->middleware(['auth','admin']);

Route::get('delete_client/{id}',[AdminController::class,'delete_client'])->middleware(['auth','admin']);

Route::get('update_client/{id}',[AdminController::class,'update_client'])->middleware(['auth','admin']);

Route::post('edit_client/{id}',[AdminController::class,'edit_client'])->middleware(['auth','admin']);



//Team//

Route::get('add_team',[AdminController::class,'add_team'])->middleware(['auth','admin']);

Route::post('upload_team',[AdminController::class,'upload_team'])->middleware(['auth','admin']);

Route::get('view_team',[AdminController::class,'view_team'])->middleware(['auth','admin']);

Route::get('delete_team/{id}',[AdminController::class,'delete_team'])->middleware(['auth','admin']);

Route::get('update_team/{id}',[AdminController::class,'update_team'])->middleware(['auth','admin']);

Route::post('edit_team/{id}',[AdminController::class,'edit_team'])->middleware(['auth','admin']);

Route::get('team_search',[AdminController::class,'team_search'])->middleware(['auth','admin']);

Route::get('team_details/{id}',[HomeController::class,'team_details']);
