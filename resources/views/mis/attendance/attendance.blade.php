<!DOCTYPE html>
<html lang="en">
  
<head>
  
    <title>IIFM MIS</title>
    
    <!-- Main CSS-->
    {!!View('partials.include_css')!!}
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

  </head>
  
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    
    {!!View('partials.header')!!}


    <!-- Sidebar menu-->
    {!!View('partials.sidebar')!!}


    
    <!-- Main Content-->
  
<main class="app-content">
      <div class="app-title">

        <div>
           <h4><i class="fa fa-th-list"></i>On-Duty Management  <a href="{{url('/on-duty/index')}}" class="btn btn-primary fa fa-eye">View Your OD</a></h4>
 
        </div>
      
      </div>
      <div class="row">
        <a href="{{URL::previous()}}" class="fa fa-arrow-circle-left btn btn-primary btn-lg"> Back</a>
        <form action="{{url('/on-duty/store')}}" method="post" autocomplete="off">

            {{ csrf_field() }}
      
      
        
        </form>
</div>

 </main>


    <!-- Essential javascripts for application to work-->
   <!--  {!!View('partials.include_js')!!} -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#od_date" ).datepicker({minDate:0});
  } );
  </script>
    
  </body>

<!-- Mirrored from pratikborsadiya.in/vali-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jul 2018 06:07:27 GMT -->
</html>

