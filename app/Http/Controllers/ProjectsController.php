<?php namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller {

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        //$imgs = MediaController::getImages();
        //$id = Project::add();
        //if($id != null){
            return view('projects/add', compact('id'));
        //}
    }

    public function index()
    {

        $imgs = MediaController::getImages();
        return view('projects/list', compact('imgs'));
    }

}