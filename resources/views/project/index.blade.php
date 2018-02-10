
@extends('layout')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kwale County</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>


<div class="container">

  <h2 align="center">Welcome to Kwale County</h2></br>
  <h3>All Projects</h3>
@if(Session::has('message'))
  <div class="alert alert-info">
{{Session::get('message')}}
  </div>
@endif

<table class="table table-striped table-info">
 <thead>
    <tr>
      <td>Project ID</td>
      <td>Project Name</td>
      <td> Description</td>
      <td>Remarks</td>
      <td>Department</td>
      <td>Ward</td>
      <td> Sub-Ward </td>
      <td>location</td>
      <td>Sub-location</td>
      <td>Budget</td>
      <td>Expenditure</td>
      <td>Financial Year</td>
      <td>Source Funds</td>
      <td>Implementing Agency</td>
      <td>Status</td>
      <td>Created At</td>
      <td>Actions</td>



    </tr>
 </thead>
 <tbody>

<?php
   foreach($projects as $project){
?>
     <tr>
        <td>{{$project->id}}</td>
        <td>{{$project->name}}</td>
        <td>{{$project->description}}</td>
        <td>{{$project->remarks}}</td>
        <td>{{$project->department}}</td>
        <td>{{$project->ward}}</td>
        <td>{{$project->subward}}</td>
        <td>{{$project->location}}</td>
        <td>{{$project->sublocation}}</td>
        <td>{{$project->budget}}</td>
        <td>{{$project->expenditure}}</td>
        <td>{{$project->financialyear}}</td>
        <td>{{$project->sourcefunds}}</td>
        <td>{{$project->implementagency}}</td>
        <td>{{$project->status}}</td>
        <td>{{$project->created_at}}</td>

        <td>
 <!-- Show specific row for projects -->
                              {{ Form::open(array('url' => 'project/' . $project->id, 'class' => 'pull-right')) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Delete this Nerd', array('class' => 'btn btn-warning')) }}
                                        {{ Form::close() }}

              <a class="btn btn-small btn-success" href="{{ URL::to('project/' .$project->id)}}">Show this Project</a>
              <a class="btn btn-small btn-info" href="{{ URL::to('project/' .$project->id. '/edit')}}">Edit Project</a>

        </td>


     </tr>
     <?php
   }
   ?>


 </tbody>
</table


</div>

</body>

</html>
