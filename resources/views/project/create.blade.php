@extends('layout')
@section('content')

<h1 align = 'center'>Create Project</h1><br/>
<!-- show errors valiadtor output -->
{{HTML::ul($errors->all())}}

<!-- <form class="form-horizontal" > -->
{{ Form::open(array('url' => 'project','method'=>'POST', 'class'=> 'form-horizontal')) }}

  <div class="form-group">
    <!-- <label class="control-label col-sm-2" for="name">Project Name:</label> -->
    {{Form::label('name', 'Project Name', ['class' => 'control-label col-sm-2'])}}
    <div class="col-sm-10">
      <!-- <input type="text" class="form-control" id="name" placeholder="Enter Project Name" name="name"> -->
      {{ Form::text('name','', array('class'=>'form-control', 'id'=>'name', 'placeholder'=>'Enter Project Name') )}}
    </div>
  </div>
  <!-- <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
  </div> -->
  <div class="form-group">
    <!-- <label class="control-label col-sm-2" for="description">Description:</label> -->
    {{Form::label('description', 'Description', ['class' => 'control-label col-sm-2'])}}
    <div class="col-sm-10">
      <!-- <textarea type="text" class="form-control" id="description" placeholder="Enter Description" name="description"></textarea> -->
        {{ Form::text('description','', array('class'=>'form-control', 'id'=>'description', 'placeholder'=>'Enter Description') )}}
    </div>
  </div>
  <div class="form-group">
    <!-- <label class="control-label col-sm-2" for="remarks">Remarks:</label> -->
    {{Form::label('remarks', 'Remarks', ['class' => 'control-label col-sm-2'])}}
    <div class="col-sm-10">
      <!-- <textarea type="text" class="form-control" id="remarks" placeholder="Enter Remarks" name="remarks"></textarea> -->
        {{ Form::text('remarks','', array('class'=>'form-control', 'id'=>'remarks', 'placeholder'=>'Enter Remarks') )}}
    </div>
  </div>

<div class="form-group">
<!-- <label class="control-label col-sm-2" for="department">Department:</label> -->
{{Form::label('department', 'Department', ['class' => 'control-label col-sm-2'])}}
    <div class="col-sm-10">
{{ Form::select('department', ['All Departments'=>'All Departments','Finance'=>'Finance', 'Devolution'=>'Devolution', 'Governor & CS'=>'Governor & CS', 'Trade'=>'Trade', 'Lands'=>'Lands', 'Gender'=>'Gender', 'Health'=>'Health', 'Agriculture'=>'Agriculture', 'Education & ICT'=>'Education & ICT', 'Transport'=>'Transport', 'Water'=>'Water'], null,  ['class'=>'form-control'] )}}
   <!-- <select class="form-control" id="department">
     <option>Finance</option>
     <option>Devolution</option>
     <option>Governor & CS</option>
     <option>Trade</option>
     <option>Lands</option>
     <option>Gender</option>
     <option>Health</option>
     <option>Agriculture</option>
     <option>Education & ICT</option>
     <option>Transport</option>
     <option>Water</option>
   </select> -->
 </div>
</div>


<div class="form-group">
 <!-- <label class="control-label col-sm-2" for="Ward">Ward:</label> -->
 {{Form::label('ward', 'Ward', ['class' => 'control-label col-sm-2'])}}
     <div class="col-sm-10">

  {{ Form::select('ward', ['All Wards'=>'All Wards', 'Pongwe'=>'Pongwe', 'Matuga'=>'Matuga', 'Kinango' => 'Kinango', 'Msambweni'=>'Msambweni', 'Lungalunga'=>'Lungalunga', 'Likoni'=>'Likoni', 'Ukunda'=>'Ukunda', 'Shimoni'=>'Shimoni', 'Shimba Hills'=>'Shimba Hills', 'Koneni'=>'Koneni', 'Diani'=>'Diani'], null,  ['class'=>'form-control'] )}}
    <!-- <select class="form-control" id="ward" name="ward">
      <option value="All Wards">All Wards</option>
      <option value="Pongwe">Pongwe</option>
      <option value="Matuga">Matuga</option>
      <option value="Kinango">Kinango</option>
      <option value="Msambweni">Msambweni</option>
      <option value="Lungalunga">Lungalunga</option>
      <option value="Likoni">Likoni</option>
      <option value="Ukunda">Ukunda</option>
      <option value="Shimoni">Shimoni</option>
      <option value="Shimba hills">Shimba Hills</option>
      <option value="Kikoneni">Kikoneni</option>
      <option value="Diani">Diani</option>
    </select> -->
  </div>
</div>


<div class="form-group">
  <!-- <label class="control-label col-sm-2" for="subward">Sub Ward:</label> -->
  {{Form::label('subward', 'Sub-Ward', ['class' => 'control-label col-sm-2'])}}
      <div class="col-sm-10">

  {{ Form::select('subward', ['All Sub-Ward'=>'All Sub-Ward', 'Maganya Kulo'=>'Maganya Kulo', 'Shika Adabu'=>'Shika Adabu', 'Kombani' => 'Kombani', 'Waa'=>'Waa', 'Mrima'=>'Mrima', 'Perani'=>'Perani', 'Ramisi'=>'Ramisi', 'Kinodndo'=>'Kinondo', 'Gasi'=>'Gasi', 'Denyenye'=>'Denyenye','Golini'=>'Golini' ], null,  ['class'=>'form-control'] )}}
     <!-- <select class="form-control" id="subward" name="subward">
       <option value="All Sub-Ward">All Sub-Ward</option>
       <option value="Maganya Kulo">Maganya Kulo</option>
       <option value="Shika Adabu">Shika Adabu</option>
       <option value="Kombani">Kombani</option>
       <option value="Waa">Waa</option>
       <option value="Mrima">Mrima</option>
       <option value="Perani">Perani</option>
       <option value="Ramisi">Ramisi</option>
       <option value="Kinondo">Kinondo</option>
       <option value="Gasi">Gasi</option>
       <option value="Denyenye">Denyenye</option>
       <option value="Golini">Golini</option>
     </select> -->
   </div>
 </div>


<div class="form-group">
  <!-- <label class="control-label col-sm-2" for="location">Location:</label> -->
  {{Form::label('location', 'Location', ['class' => 'control-label col-sm-2'])}}
      <div class="col-sm-10">
     <!-- <select class="form-control" id="location" name="location"> -->
         {{ Form::select('location', ['All Locations'=>'All Locations', 'Kikoneni'=>'Kikoneni', 'Lungalunga'=>'Lungalunga', 'Samburu' => 'Samburu', 'Kinango'=>'Kinango', 'Matuga'=>'Matuga', 'Taru'=>'Taru'], null,  ['class'=>'form-control'] )}}
       <!-- <option value="All Locations">All Locations</option>
       <option value="Kikoneni">Kikoneni</option>
       <option value="Lungalunga">Lungalunga</option>
       <option value="Samburu">Samburu</option>
       <option value="Kinango">Kinango</option>
       <option value="Matuga">Matuga</option>
       <option value="Taru">Taru</option> -->
     <!-- </select> -->
   </div>
 </div>


 <div class="form-group">
   <!-- <label class="control-label col-sm-2" for="sublocation">Sub Location:</label> -->
   {{Form::label('sublocation', 'Sub Location', ['class' => 'control-label col-sm-2'])}}
       <div class="col-sm-10">
         {{ Form::select('sublocation', ['All Sub-locations'=>'All Sub-locations','Mkurupuko'=>'Mkurupuko', 'Zangani'=>'Zangani', 'Muiano'=>'Muiano', 'Uwazi' => 'Uwazi', 'Ulinzi'=>'Ulinzi', 'Umbea'=>'Umbea', 'Mizizi'=>'Mizizi'], null,  ['class'=>'form-control'] )}}
      <!-- <select class="form-control" id="sublocation" name="sublocation">
        <option value="Mkurupuko">Mkurupuko</option>
        <option value="Zangani">Zangani</option>
        <option value="Muiano">Muiano</option>
        <option value="Uwzai">Uwazi</option>
        <option value="Ulinzi">Ulinzi</option>
        <option value="Umbea">Umbea</option>
        <option value="Mizizi">Mizizi</option>

      </select> -->
    </div>
  </div>


  <div class="form-group">
    <!-- <label class="control-label col-sm-2" for="budget">Budget (Ksh):</label> -->
    {{Form::label('budget', 'Budget (Ksh)', ['class' => 'control-label col-sm-2'])}}
    <div class="col-sm-10">
      <!-- <input type="text" class="form-control" id="budget" placeholder="Enter Budget Allocated" name="budget"> -->
      {{ Form::text('budget','', array('class'=>'form-control', 'id'=>'budget', 'placeholder'=>'Enter Budget Allocated') )}}
    </div>
  </div>



        <div class="form-group">
        <!-- <label class="control-label col-sm-2" for="expenditure">Expenditure (Ksh):</label> -->
        {{Form::label('expenditure', 'Expenditure', ['class' => 'control-label col-sm-2'])}}
        <div class="col-sm-10">
          <!-- <input type="text" class="form-control" id="expenditure" placeholder="Enter Project Expenditure" name="expenditure"> -->
          {{ Form::text('expenditure','', array('class'=>'form-control', 'id'=>'name', 'placeholder'=>'Enter Expenditure') )}}
        </div>
      </div>

      <div class="form-group">
        <!-- <label class="control-label col-sm-2" for="financialyear">Financial Year:</label> -->
        {{Form::label('financialyear', 'Financial year', ['class' => 'control-label col-sm-2'])}}
            <div class="col-sm-10">

{{ Form::select('financialyear', ['2018/2019'=>'2018/2019', '2019/2020'=>'2019/2020', '2020/2021'=>'2020/2021', '2021/2022' => '2021/2022', '2022/2023'=>'2022/2023', '2023/2024'=>'2023/2024', '2024/2025'=>'2024/2025'], null,  ['class'=>'form-control'] )}}
           <!-- <select class="form-control" id="financialyear" name="financialyear">
             <option value="2018/2019">2018/2019</option>
             <option value="2019/2020">2019/2020</option>
             <option value="2020/2021">2020/2021</option>
             <option value="2021/2022">2021/2022</option>
             <option value="2022/2023">2022/2023</option>
             <option value="2023/2024">2023/2024</option>
             <option value="2024/2025">2024/2025</option>
           </select> -->
         </div>
       </div>

       <div class="form-group">
         <!-- <label class="control-label col-sm-2" for="sourcefunds">Source of Funds:</label> -->
         {{Form::label('sourcefunds', 'Source of Funds', ['class' => 'control-label col-sm-2'])}}
             <div class="col-sm-10">
               {{ Form::select('sourcefunds', ['Exchequer'=>'Exchequer', 'National Government'=>'National Government', 'External Investor'=>'External Investor'], null,  ['class'=>'form-control'] )}}
            <!-- <select class="form-control" id="sourcefunds" name="sourcefunds">
              <option value="Exchequer">Exchequer </option>
              <option value="National Government">National Government</option>
              <option value="External Investor">External Investor</option>
            </select> -->
          </div>
        </div>


                  <div class="form-group">
                  <!-- <label class="control-label col-sm-2" for="implementagency">Implementing Agency:</label> -->
                  {{Form::label('implementagency', 'Implement Agency', ['class' => 'control-label col-sm-2'])}}
                  <div class="col-sm-10">
                    <!-- <input type="text" class="form-control" id="implementagency" placeholder="Enter Implementing Agency" name="implementagency"> -->
                      {{ Form::text('implementagency','', array('class'=>'form-control', 'id'=>'implementagency', 'placeholder'=>'Enter Implementing Agency') )}}
                  </div>
                </div>

                <div class="form-group">
                  <!-- <label class="control-label col-sm-2" for="status">Status:</label> -->
                  {{Form::label('status', 'Status', ['class' => 'control-label col-sm-2'])}}
                      <div class="col-sm-10">

                         {{ Form::select('status', ['Complete'=>'Complete', 'Ongoing'=>'Ongoing', 'Delayed'=>'Delayed','New'=>'New', 'Floated'=>'Floated', 'Awaiting Contract'=>'Awaiting Contract', 'Requisitioned'=> 'Requisitioned'], null,  ['class'=>'form-control'] )}}

                     <!-- <select class="form-control" id="status" name="status">
                       <option value="Complete">Completed Project</option>
                       <option value="Ongoing">Ongoing Project</option>
                       <option value="Delayed">Delayed Project</option>
                       <option value="New">New Project</option>
                       <option value="Floated">Floated</option>
                       <option value="Awaiting Contract">Awaiting Contract</option>
                       <option value="Requisitioned">Requisitioned</option>

                     </select> -->
                   </div>
                 </div>




  <!-- <div class="form-group">
    <label class="control-label col-sm-2" for="image">Upload Image:</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="image" placeholder="Enter password" name="image">
    </div>
  </div> -->

  <!-- <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox" name="remember"> Remember Me</label>
      </div>
    </div>
  </div> -->
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <!-- <button type="submit" class="btn btn-default">Submit</button> -->
      {{ Form::submit('Create project!', array('class' => 'btn btn-primary')) }}
    </div>
  </div>
<!-- </form> -->
{{ Form::close() }}

@endsection
