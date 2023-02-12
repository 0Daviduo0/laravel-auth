<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function homepage() {

        $projects = Project :: all();

        return view('pages.homepage', compact('projects'));
    }

    public function adminpage() {

        $projects = Project :: all();
    
        return view('pages.admin', compact('projects'));

    }

    //visualizzazione nel dettaglio
    public function projectShow(Project $project) {

        return view('pages.projectShow', compact('project'));
    }

    //eliminazione
    public function projectDelete(Project $project) {

        $project -> delete();
    
        return redirect() -> route('homepage');
    }

    //modifica
    public function projectEdit(Project $project) {

        return view('pages.projectEdit', compact('project'));
    }

    //validazione modifica
    public function projectUpdate(Request $request, Project $project) {

        $data = $request -> validate([
            'name' => 'required|string|max:64|unique:projects,name,',
            'description' => 'nullable|string',
            'main_image' => 'required|image|max:2048|mimes:jpg,png,jpeg,gif,svg',
            'release_date' => 'required|date|before:today',
            'repo_link' => 'required|string',
        ]);

        $img_path = Storage::put('uploads', $data['main_image']);
        $data['main_image'] = $img_path;
    
        $project -> name = $data['name'];
        $project -> description = $data['description'];
        $project -> main_image = $data['main_image'];
        $project -> release_date = $data['release_date'];
        $project -> repo_link = $data['repo_link'];
    
        $project -> save();
    
        return redirect() -> route('admin');
    }

    //nuovo
    public function projectCreate() {

        return view('pages.projectCreate');
    }

    //validazione nuovo
    public function projectStore(Request $request) {

        $data = $request -> validate([
            'name' => 'required|string|max:64|unique:projects,name,',
            'description' => 'nullable|string',
            'main_image' => 'required|image|max:2048|mimes:jpg,png,jpeg,gif,svg',
            'release_date' => 'required|date|before:today',
            'repo_link' => 'required|string',
        ]);

        $img_path = Storage::put('uploads', $data['main_image']);
        $data['main_image'] = $img_path;
    
        $project = new Project();
    
        $project -> name = $data['name'];
        $project -> description = $data['description'];
        $project -> main_image = $data['main_image'];
        $project -> release_date = $data['release_date'];
        $project -> repo_link = $data['repo_link'];
    
        $project -> save();
    
        return redirect() -> route('homepage');
    }
}
