<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>IIFM MIS</title>

    <!-- Main CSS-->
    {!!View('partials.include_css')!!}

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
          <h1><i class="fa fa-th-list"></i> Attendance Management</h1>
        </div>
      
      </div>
      <div class="row">
        <div class="col-md-12">
            
          <div class="tile">
            <div class="tile-body">
              <div id="table" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="sampleTable_length">
                   
                </div>
              </div>
              
            </div>
            <div class="row">
              <div class="col-sm-12">
              
               
          @if(Session::has('message'))
             <div id="alert" class="alert alert-success">{{ Session::get('message') }}
          @endif
           @if(Session::has('errorMsg'))
             <div id="errorMsg" class="alert alert-success">{{ Session::get('errorMsg') }}
          @endif
           @if(Session::has('successMsg'))
             <div id="successMsg" class="alert alert-danger">{{ Session::get('successMsg') }}
          @endif
          
            <form method="post" action="{{url('/attendance/store')}}">
             {{ csrf_field() }}
               <input type="hidden" name="member_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="date" value="{{date('Y-m-d')}}">
                <input type="hidden" name="time" value="{{date('H:i:s')}}">
                <input type="hidden" name="sip" value="{{\Request::ip()}}">

              <center> <h3 class="fa fa-user"> Name: {{Auth::user()->name}}</h3></center> 
               <center> <h3 class="fa fa-calendar"> Date: {{date('Y-m-d H:i:s')}}</h3></center>   
                 <center> <button onclick="getLocation()" class="btn btn-success fa fa-check" type="submit" style="margin-top: 20px;"> Mark Attendance</button> <center>
                <!--  <center> <h3 class="fa fa-calendar">Location: </h3></center>    -->
              <a href="#" class="btn btn-primary fa fa-marker" style="margin-top: 20px;" id="demo">Get Location</a>
            </form>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-5">
         
        </div>
       
        </div>
      </div>
            </div>
          </div>
        </div>
      </div>
    </main>




    <!-- Essential javascripts for application to work-->
    {!!View('partials.include_js')!!}
<script>
getLocation();

  var y = document.getElementById("demo");

  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition, showError);
      navigator.geolocation.getCurrentPosition(showPosition2, showError);
    } else {
      alert("Geolocation is not supported by this browser.");
    }
  }

  function showPosition2(position) {
    //y.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
    document.getElementById('latitude1').value = position.coords.latitude;
    document.getElementById('longitude1').value = position.coords.longitude;
    
    //document.getElementById('latitude2').value = position.coords.latitude;
    //document.getElementById('longitude2').value = position.coords.longitude;
  }

  function showPosition(position) {
    var latlon = position.coords.latitude + "," + position.coords.longitude;

    var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="
    +latlon+"&zoom=14&size=400x300&sensor=false&key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU";
    //document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
  }
  //To use this code on your website, get a free API key from Google.
  //Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp

  function showError(error) {
    switch(error.code) {
      case error.PERMISSION_DENIED:
        x.innerHTML = "User denied the request for Geolocation."
        break;
      case error.POSITION_UNAVAILABLE:
        x.innerHTML = "Location information is unavailable."
        break;
      case error.TIMEOUT:
        x.innerHTML = "The request to get user location timed out."
        break;
      case error.UNKNOWN_ERROR:
        x.innerHTML = "An unknown error occurred."
        break;
    }
  }
</script> 
    
  </body>

<!-- Mirrored from pratikborsadiya.in/vali-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jul 2018 06:07:27 GMT -->
</html>