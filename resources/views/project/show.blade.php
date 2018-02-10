@extends('layout')
@section('content')





  <h3 align = "center"> View Project {{ $project[0]->name }} Details </h3>

    <div class="container">
      <div class="row">
       <div class="col-md-4">
         <div class="panel-group">
         <div class="panel panel-primary">
           <div class="panel-heading"><b>Basic Info</b></div>
           <div class="panel-body"><b>Department:</b> {{ $project[0]->department }} </div>
           <div class="panel-body"><b>Project Name:</b> {{ $project[0]->name }} </div>
           <div class="panel-body"><b>Project Desc:</b> {{ $project[0]->description }} </div>
           <div class="panel-body"><b>Remarks:</b> {{ $project[0]->remarks }} </div>
         </div>
         </div>
       </div>
       <div class="col-md-4">
         <div class="panel-group">
         <div class="panel panel-info">
           <div class="panel-heading"><b>Location Info</b></div>
           <!-- <div class="panel-body">Department: {{ $project[0]->department }} </div> -->
           <div class="panel-body"><b>Ward:</b> {{ $project[0]->ward }} </div>
           <div class="panel-body"><b>Subward:</b> {{ $project[0]->subward }} </div>
           <div class="panel-body"><b>Location:</b> {{ $project[0]->location }} </div>
           <div class="panel-body"><b>Sublocation:</b> {{ $project[0]->sublocation }} </div>

         </div>
       </div>
       </div>
       <div class="col-md-4">
         <div class="panel-group">
         <div class="panel panel-success">
           <div class="panel-heading"><b>Funding and Implementation</b></div>
           <div class="panel-body"><b>Budget:</b> {{ $project[0]->budget }} </div>
           <div class="panel-body"><b>Expenditure:</b> {{ $project[0]->expenditure }} </div>
           <div class="panel-body"><b>Financial Year:</b> {{ $project[0]->financialyear }} </div>
           <div class="panel-body"><b>Source of Funds:</b> {{ $project[0]->sourcefunds }} </div>
           <div class="panel-body"><b>Implementing Agency:</b> {{ $project[0]->implementagency }} </div>
           <div class="panel-body"><b>Status:</b> {{ $project[0]->status }} </div>

           <div class="panel-body"><b>Date Created:</b> {{ $project[0]->created_at }} </div>
         </div>
       </div>

       </div>
     </div>
    </div>

    <!-- <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">Panel with panel-default class</div>
      <div class="panel-body">Panel Content</div>
    </div>

    <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">Panel with panel-default class</div>
      <div class="panel-body">Panel Content</div>
    </div> -->

    <style>
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #337ab7;
        color: white;
        text-align: center;
    }
    </style>

    <div class="footer">
    <p> &copy Kwale County Government | 2018</p>
    </div>

@endsection
