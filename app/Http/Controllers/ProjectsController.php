<?php namespace App\Http\Controllers;

class ProjectsController extends Controller {

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('list');
    }

}