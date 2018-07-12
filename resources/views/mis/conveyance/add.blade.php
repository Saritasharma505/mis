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
          <h1><i class="fa fa-inr"></i>Conveyance Management</h1>
        
        </div>
      
      </div>
        <a href="{{URL::previous()}}" class="fa fa-arrow-circle-left btn btn-primary btn-lg"> Back</a>
        <form action="{{url('/conveyance/store')}}" method="post">

            {{ csrf_field() }}
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <a href="#" class="btn btn-primary btn-lg fa fa-plus add_conveyance"> ADD</a>
              <ul style="list-style-type: none;" class="conveyance_form">
                <li >
                  <div class="row">
                     
             <div class="col-md-3"> 
                <div class="form-group">
                  <strong><label for="">Date</label></strong>  
                    <input class="form-control demoDate" id="date" name="date[]" type="text" value="" aria-describedby="emailHelp" placeholder="Date" >
                </div>
             </div>
             <div class="col-md-3"> 
              <div class="form-group">
                  <strong><label for="">Reason</label></strong>  
                    <input class="form-control" id="reason" name="reason[]" value="" type="text" aria-describedby="emailHelp" placeholder="Reason/remarks" >
                </div>
             </div>
              <div class="col-md-3"> 
              <div class="form-group">
                   <strong><label for="">Travel From</label></strong> 
                    <input class="form-control" id="travelfrom" name="travelfrom[]" type="text" aria-describedby="emailHelp" placeholder="Travel from (Eg. Kailash Colony)">
                </div>
             </div>
             
             
             <div class="col-md-3"> 
              <div class="form-group">
                  <strong><label for="">Travel To</label></strong>  
                    <input class="form-control " id="travelto" name="travelto[]" type="text" aria-describedby="emailHelp" placeholder="Travel to (Eg. Vasant Kunj)">
                </div>
             </div>
                       <div class="col-md-3"> 
              <div class="form-group">
                   <strong> <label for="">Distance</label></strong>
                    <input class="form-control " id="distance" name="distance[]" type="text" aria-describedby="emailHelp" placeholder="(Eg. 20)">
                </div>
             </div>
              <div class="col-md-3"> 
              <div class="form-group">
                   <strong> <label for="">Mode</label></strong>
                    <select class="form-control" name="mode[]" id="mode">
                      <option>Please Select Mode</option>
                      <option>Car</option>
                      <option>Bike</option>
                      <option>Cab</option>
                      <option>Riksha</option>
                      <option>Bus</option>
                      <option>Metro</option>
                      <option>Auto</option>
                      <option>Other</option>
                    </select>
                </div>
             </div>
              <div class="col-md-3"> 
              <div class="form-group">
                   <strong> <label for="">Amount</label></strong>
                    <input class="form-control " id="amt" name="amt[]" type="text" aria-describedby="emailHelp" placeholder="Amount">
                </div>
             </div>
              <div class="col-md-2"> 
              <div class="form-group">
                   <strong> <label for="">Calculated(Amt.)</label></strong>
                    <input class="form-control " id="rate" name="rate[]" type="text" aria-describedby="emailHelp" placeholder="" readonly>
                </div>
             </div>
              <div class="col-md-4"> 
              <div class="form-group">
                   <strong> <label for="">Upload Bill(Optional Exclude CAB)</label></strong>
                    <input class="form-control " id="uploadfile" name="uploadfile[]" type="file" aria-describedby="emailHelp" placeholder="" >
                </div>
             </div>
            </div>
                </li>
              </ul>
            </div>
             <div class="tile-footer">
              <button class="btn btn-primary" type="submit">Submit</button>
           
            </div>
          </div>

        </div>

      </div>

    </form>
    </main>



    <!-- Essential javascripts for application to work-->
    {!!View('partials.include_js')!!}
<script type="text/javascript">
  // Add new input with associated 'remove' link when 'add' button is clicked.
$('.add_conveyance').click(function(e) {
    e.preventDefault();

    $(".conveyance_form").append(
        '<li>'

      + '<div class="row"><div class="col-md-3"><div class="form-group"><strong><label for="">Date</label></strong>  <input class="form-control demoDate" id="date" name="date[]" type="text" value="" aria-describedby="emailHelp" placeholder="Date"></div></div><div class="col-md-3"><div class="form-group"><strong><label for="">Reason</label></strong><input class="form-control" id="reason" name="reason[]" value="" type="text" aria-describedby="emailHelp" placeholder="Reason/remarks" ></div></div><div class="col-md-3"> <div class="form-group"><strong><label for="">Travel From</label></strong><input class="form-control" id="travelfrom" name="travelfrom[]" type="text" aria-describedby="emailHelp" placeholder="Travel from (Eg. Kailash Colony)"></div></div><div class="col-md-3"><div class="form-group"><strong><label for="">Travel To</label></strong><input class="form-control " id="travelto" name="travelto[]" type="text" aria-describedby="emailHelp" placeholder="Travel to (Eg. Vasant Kunj)"></div></div><div class="col-md-3"> <div class="form-group"><strong> <label for="">Distance</label></strong><input class="form-control " id="distance" name="distance[]" type="text" aria-describedby="emailHelp" placeholder="(Eg. 20)"></div></div><div class="col-md-3"><div class="form-group"><strong> <label for="">Mode</label></strong><select class="form-control" name="mode[]" id="mode"><option>Please Select Mode</option><option>Car</option><option>Bike</option><option>Cab</option><option>Riksha</option><option>Bus</option><option>Metro</option><option>Auto</option><option>Other</option></select></div></div><div class="col-md-3"><div class="form-group"><strong> <label for="">Amount</label></strong><input class="form-control " id="amt" name="amt[]" type="text" aria-describedby="emailHelp" placeholder="Amount"></div></div><div class="col-md-2"><div class="form-group"><strong> <label for="">Calculated(Amt.)</label></strong><input class="form-control " id="rate" name="rate[]" type="text" aria-describedby="emailHelp" placeholder="" readonly></div></div> <div class="col-md-4"> <div class="form-group"><strong> <label for="">Upload Bill(Optional Exclude CAB)</label></strong><input class="form-control " id="uploadfile" name="uploadfile[]" type="file" aria-describedby="emailHelp" placeholder="" ></div></div></div> '
      + '<a href="#" class="remove_conveyance btn btn-danger fa fa-trash" > Remove</a>'
      + '</li>');
});



// Remove parent of 'remove' link when link is clicked.
$('.conveyance_form').on('click', '.remove_conveyance', function(e) {
    e.preventDefault();

    $(this).parent().remove();
});
</script>
    
  </body>

<!-- Mirrored from pratikborsadiya.in/vali-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jul 2018 06:07:27 GMT -->
</html>