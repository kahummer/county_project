<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\project;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function myHome()
    {
        $project = new Project;

        return view('myHome', compact('project'));
        // $project = Project::all();

        // return view('myHome', ['project' => $project]);

        // return view('myHome');
    }

    /**
     * Show the my users page.
     *
     * @return \Illuminate\Http\Response
     */
    public function myUsers()
    {
        return view('myUsers');
    }
}