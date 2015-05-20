<?php namespace App\Http\Controllers;

class ProjectsController extends Controller {

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {

        $imgs = MediaController::getImages();
        return view('list', compact('imgs'));
    }

}