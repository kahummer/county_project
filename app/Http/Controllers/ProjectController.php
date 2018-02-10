<?php

namespace App\Http\Controllers;

use App\project;
use Illuminate\Http\Request;
use\View;
use Input;
use Redirect;
use Session;
// use App\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::all();
        // dd($project);

         return view('project.index',['projects'=>$projects]);
         // echo $project;
          // return view('admin.index', compact('project'));
          // return "hello world";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View::make('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'=>'required',
            'description'=>'required',
            'remarks' => 'required',
            'department'=>'required',
            'ward'=>'required',
            'subward'=>'required',
            'location'=>'required',
            'sublocation'=>'required',
            'budget'=>'required|numeric',
            'expenditure'=>'required',
            'financialyear'=>'required',
            'sourcefunds'=>'required',
            'implementagency'=>'required',
            'status'=>'required',

        );
        $validator = \Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('project/create')->withErrors($validator);


        } else {
            // store
            $project = new Project;
            $project->name  = Input::get('name');
            $project->description  = Input::get('description');
            $project->remarks = Input::get('remarks');
            $project->department = Input::get('department');
            $project->ward = Input::get('ward');
            $project->subward = Input::get('subward');
            $project->location = Input::get('location');
            $project->sublocation = Input::get('sublocation');
            $project->budget = Input::get('budget');
            $project->expenditure = Input::get('expenditure');
            $project->financialyear = Input::get('financialyear');
            $project->sourcefunds = Input::get('sourcefunds');
            $project->implementagency = Input::get('implementagency');
            $project->status = Input::get('status');
            $project->save();

            // redirect
            Session::flash('message', 'Successfully created Project!');
            return Redirect::to('project');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        //retrieve one specific row from our table

        // get the nerd
        $project =  Project::find($project);

        // show the view and pass the nerd to it
        return View::make('project.show')->with('project', $project);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project)
    {

        // get the nerd
        $projects = Project::find($project);

        // show the edit form and pass the nerd
        return View::make('project.edit')
            ->with('projects', $projects);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project $project)
    {
      // validate
     // read more on validation at http://laravel.com/docs/validation
     $rules = array(
         'name'=>'required',
         'description'=>'required',
         'remarks' => 'required',
         'department'=>'required',
         'ward'=>'required',
         'subward'=>'required',
         'location'=>'required',
         'sublocation'=>'required',
         'budget'=>'required|numeric',
         'expenditure'=>'required',
         'financialyear'=>'required',
         'sourcefunds'=>'required',
         'implementagency'=>'required',
         'status'=>'required',

     );
     $validator = \Validator::make(Input::all(), $rules);

     // process the login
     if ($validator->fails()) {
         return Redirect::to('project/create')->withErrors($validator);


     } else {
         // store
         $project = Project::find($project)->first();

         $project->name  = Input::get('name');
         $project->description  = Input::get('description');
         $project->remarks = Input::get('remarks');
         $project->department = Input::get('department');
         $project->ward = Input::get('ward');
         $project->subward = Input::get('subward');
         $project->location = Input::get('location');
         $project->sublocation = Input::get('sublocation');
         $project->budget = Input::get('budget');
         $project->expenditure = Input::get('expenditure');
         $project->financialyear = Input::get('financialyear');
         $project->sourcefunds = Input::get('sourcefunds');
         $project->implementagency = Input::get('implementagency');
         $project->status = Input::get('status');
         // dd($project);
         $project->save();

         // redirect
         Session::flash('message', 'Successfully Updated Project!');
         return Redirect::to('project');
     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project)
    {
        //delete logic
              echo "<script>alert('Are you sure You want to delete') </script>";
              $project = Project::find($project)->first();
              $project->delete();
              //return message to user
              Session::flash('message', 'Successfully deleted the project!');
              return Redirect::to('project');
    }
}
