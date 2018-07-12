<!DOCTYPE html>
<html lang="en">
  

<head>
    
    <title>IIFM MIS</title>
    

    <!-- Main CSS-->
    {!!View('partials.include_css')!!}
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  </head>
  
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    
    {!!View('partials.header')!!}




    <!-- Sidebar menu-->
    {!!View('partials.sidebar')!!}


    
    <!-- Main Content-->
   <main class="app-content">
<div class="row">

  <div class="col-md-12">
     <?php if(Session::has('message')) {?>
        <div id="alert" class="alert alert-success">{{ Session::get('message') }}

        </div><?php } ?>
    <div class="col-md-3">
     
   <div class="card tile">
    <img class="card-img-top" src="{{URL::asset('images/ff.png')}}" alt="Card image">
    <div class="card-body">
      <h4 class="card-title" style="font-family: Times New Roman;text-align: center;">{{Auth::user()->name}}</h4>
      <p class="card-text" style="text-align: center">{{$designation}}
      <a href="{{url('/user-details/edit')}}" class="btn btn-success fa fa-pencil"></a>
    </div>
  </div>
      
    </div>
     <div class="col-md-9 tile">
       <h3 class="tile-title" style="font-family: Times New Roman">OFFICIAL INFORMATION</h3>
            <table class="table">
            <tr>
              <th>Email ID</th>
              <td>{{Auth::user()->email}}</td>
            </tr>
             <tr>
              <th>Mobile</th>
              <td>{{$mobile}}</td>
            </tr>
             <tr>
              <th>Employee ID</th>
              <td>{{'IIFM00'.Auth::user()->id}}</td>
            </tr>
             <tr>
              <th>Department</th>
              <td>{{$department}}</td>
            </tr>
             <tr>
              <th>Location/Centre</th>
              <td>{{$locationcentre}}</td>
            </tr>
             <tr>
              <th>Date Of Joining</th>
              <td>{{$doj}}</td>
            </tr>

            </table>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 tile">
     <h3 class="tile-title" style="font-family: Times New Roman">EDUCATIONAL INFORMATION <a href="{{url('/user-education/edit')}}" class="btn btn-success fa fa-plus"></a> </h3>
      <table class="table-responsive table" >
          
           <thead>
            <tr>
              <th>#</th>
              <th>Course Name</th>
               <th>Start Year</th>
              <th>End Year</th>
              <th>College/Institution</th>
              <th>Specialization</th>
              <th>Percentage/Grades</th>
              <th>Added By</th>
              
            </tr>
          </thead><?php $i=1; ?>
          @foreach($useredu as $value)

          <tbody>
            <tr>
              <td>{{$i++}}</td>
              <td width="10%">{{$value->course}}</td>
              <td>{{$value->strtyear}}</td>
              <td>{{$value->endyear}}</td>
              <td>{{$value->college}}</td>
              <td>{{$value->specialization}}</td>
              <td>{{$value->percentage}}</td>
              <td>{{$value->addedby}}</td> 
            </tr>
          @endforeach
          </tbody>
        </table>
  </div>
</div>

<div class="row">
  <div class="col-md-12 tile">
     <h3 class="tile-title" style="font-family: Times New Roman">PROFESSIONAL INFORMATION <a href="{{url('/user-professional')}}" class="btn btn-success fa fa-plus"></a></h3>
       <table class="table-responsive table" >
           <thead>
            <tr>
              <th>#</th>
              <th style="width: 20%">Company Name</th>
              <th style="width: 20%">Designation</th>
              <th style="width: 20%">From</th>
              <th style="width: 20%">To</th>
              <th style="width: 20%">Company Address</th>
             
              
            </tr>
          </thead>
          <?php $J=1; ?>
          @foreach($user_work as $value)
          <tbody>
            <tr>
              <td>{{$J++}}</td>
              <td>{{$value->company}}</td>
              <td>{{$value->designation1}}</td>
              <td>{{$value->fromdate}}</td>
              <td>{{$value->todate}}</td>
              <td>{{$value->address}}</td>
            </tr>
          </tbody>
          @endforeach
        </table>
           
  </div>
</div>

  <div class="row">
  <div class="col-md-12 tile">
     <h3 class="tile-title" style="font-family: Times New Roman">PERSONAL INFORMATION</h3>
      <table class="table table-responsive">
            <tr>
              <th>Gender</th>
              <td></td>
            </tr>
             <tr>
              <th>Date of Birth</th>
              <td></td>
            </tr>
             <tr>
              <th>Current Address</th>
              <td></td>
            </tr>
             <tr>
              <th>Permanent Address</th>
              <td></td>
            </tr>
             <tr>
              <th>Alternate Contact Number</th>
              <td></td>
            </tr>
            
            </table>
  </div>
  </div>

  <div class="row">
  <div class="col-md-12 tile">
     <h3 class="tile-title" style="font-family: Times New Roman">FAMILY INFORMATION</h3>
      <table class="table">
            <tr>
              <th>Father Name</th>
              <td></td>
            </tr>
             <tr>
              <th>Father's Occuption</th>
              <td></td>
            </tr>
             <tr>
              <th>Father's Contact Number</th>
              <td></td>
            </tr>
            <tr>
              <th>Mother Name</th>
              <td></td>
            </tr>
             <tr>
              <th>Mother's Occuption</th>
              <td></td>
            </tr>
             <tr>
              <th>Father's Contact Number</th>
              <td></td>
            </tr>
             <tr>
              <th>Marital Status</th>
              <td></td>
            </tr>
             <tr>
              <th>Spouse Name</th>
              <td></td>
            </tr>
            <tr>
              <th>Spouse Occuption</th>
              <td></td>
            </tr>
            <tr>
              <th>Marriage Anniversery Date</th>
              <td></td>
            </tr>
            
            </table>
  </div>
</div>
</main>




    <!-- Essential javascripts for application to work-->
    {!!View('partials.include_js')!!}

    
  </body>

<!-- Mirrored from pratikborsadiya.in/vali-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jul 2018 06:07:27 GMT -->
</html>