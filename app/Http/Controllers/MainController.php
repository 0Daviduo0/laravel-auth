<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class MainController extends Controller
{
    public function homepage() {

        $projects = Project :: all();

        return view('pages.homepage', compact('projects'));
    }
}
