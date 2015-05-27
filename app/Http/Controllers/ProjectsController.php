<?php namespace App\Http\Controllers;

use App\Project;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ProjectsController extends Controller {

    public $restful = true;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function get_new(){




        return view('projects.add');
    }

    public function post_create()
    {
        //$imgs = MediaController::getImages();


        //$project = new Project();
        //$id = Project::add($project);

        $date = new \DateTime();

        $user = User::find(2);

        $project = new Project();

        $project->name = Input::get('name');
        $project->description = Input::get('description');
        $project->started_at = Input::get('started_at');
        $project->created_by = $user->id;
        $project->updated_by = 2;
        $project->approved_by = 2;
        $project->observations = Input::get('observations');
        $project->featured_until = Input::get('featured_until');
        $project->state = Input::get('state');
        $project->created_at = $date->getTimestamp();
        $project->updated_at = $date->getTimestamp();
        $project->save();


        /*Project::create(array(
            'name' => Input::get('name'),
            'description' => Input::get('description'),
            'started_at' => Input::get('date'),
            'created_by' => $user->id,
            'updated_by' => 2,
            'approved_by' => 2,
            'observations' => Input::get('observations'),
            'featured_until' => Input::get('featured_until'),
            'state' => Input::get('state'),
            'created_at' => $date->getTimestamp(),
            'updated_at' => $date->getTimestamp()
        ));*/


        //if($id != null){


            return Redirect::to_route('projects/list')->with('message', 'O projecto foi submito para aprovacção');

        //}
    }

    public function index()
    {

        $imgs = MediaController::getImages();
        return view('projects/list', compact('imgs'));
    }

}