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

 <form action="{{url('/conveyance/store')}}" method="post" autocomplete="off" enctype="multipart/form-data"
 target="_blank">
    
    <!-- Main Content-->
  <main class="app-content">
      <div class="app-title">
        <div>
          <h4><i class="fa fa-inr"></i>Conveyance Management <a href="{{url('/conveyance/index')}}" class="btn btn-primary fa fa-plus">View All Your Conveyance</a>
             <a href="{{url('/conveyance/policy')}}" class="btn btn-primary fa fa-eye "> View Conveyance Policy</a>
</h4>
<a href="{{URL::previous()}}" class="fa fa-arrow-circle-left btn btn-primary btn-lg"> Back</a>
        
        </div>
      
      </div>
       

            {{ csrf_field() }}

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">

              <h6 style="color:red;">If mode of travel is other than car and bike then please fill the actual amount paid and also submit the bill copy (where ever applicable) by using upload bill option.</h6>
           <h6 style="color:red;">If mode of travel is CAB then please submit the bill copy by using upload bill option*.</h6>  
<!--               <a href="#" class="btn btn-primary btn-lg fa fa-plus add_conveyance"> ADD</a>
 -->        
            <a href="#" class="btn btn-primary fa fa-plus add_conveyance"> ADD MORE</a>

              <ul style="list-style-type: none;" class="conveyance_form">

                <li >
                  <div class="row">
                     
             <div class="col-md-3"> 
                <div class="form-group">
                  <strong><label for="">Date</label></strong>  
                    <input class="form-control date" id="date" name="con_date[]"  type="text" value="" aria-describedby="emailHelp" placeholder="Date" required="">
                </div>
             </div>
             <div class="col-md-3"> 
              <div class="form-group">
                  <strong><label for="">Reason</label></strong>  
                    <input class="form-control" id="reason" name="reason[]"  value="" type="text" aria-describedby="emailHelp" placeholder="Reason/remarks" required="">
                </div>
             </div>
              <div class="col-md-3"> 
              <div class="form-group">
                   <strong><label for="">Travel From</label></strong> 
                    <input class="form-control" id="disfrom" name="disfrom[]"  type="text" aria-describedby="emailHelp" placeholder="Travel from (Eg. Kailash Colony)" required>
                </div>
             </div>
             
             <div class="col-md-3"> 
              <div class="form-group">
                  <strong><label for="">Travel To</label></strong>  
                    <input class="form-control " id="disto" name="disto[]"  type="text" aria-describedby="emailHelp" placeholder="Travel to (Eg. Vasant Kunj)" required="">
                </div>
             </div>
                       <div class="col-md-3"> 
              <div class="form-group">
                   <strong> <label for="">Distance</label></strong>
                    <input class="form-control " id="distance" name="distance[]"  type="text" aria-describedby="emailHelp" placeholder="(Eg. 20)" >
                </div>
             </div>
              <div class="col-md-3"> 
              <div class="form-group">
                   <strong> <label for="">Mode</label></strong>
                    <select class="form-control mode"  id="mode" name="mode[]" required="">
                      <option>Please Select Mode</option>
                      <option value="Auto">Auto</option>
                       <option value="Bike">Bike</option>
                        <option value="Bus">Bus</option>
                      <option value="Car">Car</option>
                      <option value="Cab">Cab</option>
                       <option value="Metro">Metro</option>
                      <option value="Riksha">Riksha</option>
                      <option value="Other">Other</option>
                    </select>
                </div>
             </div>
              <div class="col-md-3"> 
              <div class="form-group">
                   <strong> <label for="">Amount</label></strong>
                    <input class="form-control " id="amount" name="amount[]"  type="text" aria-describedby="emailHelp" placeholder="Amount" value="0">
                </div>
             </div>
              <div class="col-md-2"> 
              <div class="form-group">
                   <strong> <label for="">Calculated(Amt.)</label></strong>
                    <input class="form-control " id="paid" name="paid[]"  type="text" aria-describedby="emailHelp" placeholder="" value="0" readonly>
                </div>
             </div>
              <div class="col-md-4"> 
              <div class="form-group">
                   <strong> <label for="">Upload Bill(Optional Exclude CAB)</label></strong>
                    <input class="form-control " id="uploadcimg" name="uploadcimg[]" type="file" aria-describedby="emailHelp" placeholder="" >
                </div>
             </div>
            <!--  <div class="col-md-4" style="margin-top: 30px;"> 
              <div class="form-group">
              <a href="#" class="btn btn-primary fa fa-plus btn-lg add-row" >ADD TO LIST</a>
               <input type="reset" class="btn btn-info btn-lg fa fa-refresh" name="" value="RESET FORM">
                </div>
             </div> -->

            </div>

       

                </li>
              </ul>
            </div>
            <div class="tile-footer" id="submitConveyance">
                        <button class="btn btn-primary" type="submit">Submit</button>  
             </div>
          </div>
            
        </div>

      </div>

    
    </main>
</form>
    <!-- Essential javascripts for application to work-->
   <!--  {!!View('partials.include_js')!!} -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- <script type="text/javascript">
    $(document).ready(function(){

        var i=1;
        $(".add-row").click(function(){

            var date = $("#date").val();
            var reason = $("#reason").val();
            var disfrom = $("#disfrom").val();
            var disto = $("#disto").val();
            var distance = $("#distance").val();
            var mode = $("#mode").val();
            var amount = $("#amount").val();
            var paid = $("#paid").val();
           
            var uploadcimg = $("#uploadcimg").val();
    
           var markup = "<tr><td class='conDate'>" + date + "<input type='hidden' id='date"+i+"' name='date[]'></td><td>" + reason + "<input type='hidden' id='reason"+i+"' name='reason[]'></td><td>" + disfrom + "<input type='hidden' id='disfrom"+i+"' name='disfrom[]'></td><td>" + disto + "<input type='hidden' id='disto"+i+"' name='disto[]'></td><td>" + distance + "<input type='hidden' name='distances[]' id='distance"+i+"'></td><td>" + mode + "<input type='hidden' name='mode[]' id='mode"+i+"'></td><td id='myamount'>" + amount + "<input type='hidden' name='amount[]' id='amount"+i+"'></td><td id='bill'><input type='file' name='uploadcimg[]' id='uploadcimg"+i+"'></td><td><a href='#' class='btn btn-danger fa fa-trash removeButton'></td></tr>";
            $("table tbody").append(markup);
            $('#date'+i).val(date);
            $('#reason'+i).val(reason);
            $('#disfrom'+i).val(disfrom);
            $('#disto'+i).val(disto);
            $('#distance'+i).val(distance);
           //  $('#amount'+i).val(paid);
            $('#mode'+i).val(mode);


            if (mode =="Car" || mode == "Bike" || mode=="Other" ) {
              $('#bill').show();
            } else{
              $('#bill').hide();
            }

         if (mode == "Car") {
          $('#amount'+i).val(paid);
         }
         else if(mode == "Bike"){
           $('#amount'+i).val(paid);
         }
         else{
          $('#amount'+i).val(amount);
         }

      $('#uploadcimg'+i).val(uploadcimg);
      i++;
 });
 
        $("table tbody").on('click','.removeButton',function() {
        $(this).closest("tr").remove();
        var len = $('#tblConveyance tr').length;
          if(len==1)
          {
            $('#tblConveyance').hide();  
          } 
          
      });


 });    
  </script> -->


<script>
   $(document).ready(function(){
      $("#tblConveyance").hide();
      

       $(".add-row").click(function () {
         
     $("#tblConveyance").show();
   
    });

 });

</script>

<script type="text/javascript">
  // Add new input with associated 'remove' link when 'add' button is clicked.
$('.add_conveyance').click(function(e) {
    e.preventDefault();
    $i=1;

    $(".conveyance_form").append(
        '<li>'

      + '<div class="row"><div class="col-md-3"><div class="form-group"><strong><label for="">Date</label></strong><input class="form-control date" id="date" name="con_date[]" type="text" value="" aria-describedby="emailHelp" placeholder="Date" required=""></div></div><div class="col-md-3"> <div class="form-group"><strong><label for="">Reason</label></strong><input class="form-control" id="reason" name="reason[]" value="" type="text" aria-describedby="emailHelp" placeholder="Reason/remarks" required=""></div></div><div class="col-md-3"><div class="form-group"><strong><label for="">Travel From</label></strong><input class="form-control" id="disfrom" name="disfrom[]" type="text" aria-describedby="emailHelp" placeholder="Travel from (Eg. Kailash Colony)" required></div></div><input type="hidden" name="user_id" value="{{Auth::user()->id}}"><div class="col-md-3"><div class="form-group"><strong><label for="">Travel To</label></strong><input class="form-control " id="disto" name="disto[]" type="text" aria-describedby="emailHelp" placeholder="Travel to (Eg. Vasant Kunj)" required=""></div></div><div class="col-md-3"><div class="form-group"><strong> <label for="">Distance</label></strong><input class="form-control " id="distance"  onblur="getDistance(this.value)" name="distance[]" type="text" aria-describedby="emailHelp" placeholder="(Eg. 20)"></div></div><div class="col-md-3">  <div class="form-group"><strong> <label for="">Mode</label></strong><select class="form-control mode" name="mode[]" id="mode" required="" onblur="getMode(this.value)"><option>Please Select Mode</option><option value="Auto">Auto</option><option value="Bike">Bike</option><option value="Bus">Bus</option><option value="Car">Car</option><option value="Cab">Cab</option><option value="Metro">Metro</option><option value="Riksha">Riksha</option><option value="Other">Other</option></select></div></div> <div class="col-md-3"><div class="form-group"><strong> <label for="">Amount</label></strong><input class="form-control " id="amount" name="amount[]" onblur="getAmount(this.value)" type="text" aria-describedby="emailHelp" placeholder="Amount"></div></div><div class="col-md-2"><div class="form-group"><strong> <label for="">Calculated(Amt.)</label></strong><input class="form-control " id="paid" name="paid[]" type="text" aria-describedby="emailHelp" placeholder="" readonly></div></div><div class="col-md-4"><div class="form-group"><strong> <label for="">Upload Bill(Optional Exclude CAB)</label></strong><input class="form-control " id="uploadcimg" name="uploadcimg[]" type="file" aria-describedby="emailHelp" placeholder="" ></div></div></div>'
      + '<a href="#" class="remove_conveyance btn btn-danger fa fa-trash" > Remove</a>'
      + '</li>');
});
    $('body').on('focus',".date", function(){
      <?php
      $date = date("d");
            if($date <= '12'){
        $prevmonth = date('01 F Y', strtotime('-1 months'));
      ?>
      $(this).datepicker({ 
        dateFormat: 'dd MM yy',
        minDate: "<?php echo $prevmonth;?>", 
        maxDate: new Date(),
        onSelect: function(){
            $(this).prop( "readOnly", true ); 
          },
      });
      <?php
      }
      
      else{
        $currmonth = date('01 F Y');
      ?>
      $(this).datepicker({ 
        dateFormat: 'dd MM yy',
        minDate: "<?php echo $currmonth;?>", 
        maxDate: new Date(),
        onSelect: function(){
            $(this).prop( "readOnly", true ); 
          },
      });
      <?php 
      }
      ?>
    });



// Remove parent of 'remove' link when link is clicked.
$('.conveyance_form').on('click', '.remove_conveyance', function(e) {
    e.preventDefault();

    $(this).parent().remove();
});
</script>
<script type="text/javascript">
 $(document).ready(function(){
    $("select.mode").change(function(){
        var paid = $('#paid').val();
        var amount = $('#amount').val();
        var distance = $('#distance').val();
        var selectedMode = $(".mode option:selected").val();

          /*  $('#paid').attr('name',selectedMode);
             $('#amount').attr('name',selectedMode);*/


       // 
       var mode = $("#mode").val();

        if(mode == "Car"){
           $('#amount').attr("readonly",true);
            paid = distance*3.5;
           document.getElementById('paid').value=paid;
           $('#amount').val(0);
        }
        else if(mode == "Bike"){
          $('#amount').attr("readonly", "true");
          paid = distance * 2.5;
          document.getElementById('paid').value=paid;
          $('#amount').val(0);
        }
        else if(mode == "Cab"){
              document.getElementById('paid').value=0;
             $('#amount').removeAttr("readonly",false);
             document.getElementById('uploadcimg').value=null;
            $('#amount').val(0);
             alert("Please attach copy of Cab Bill");
        }
        else{
          document.getElementById('paid').value=0;
          $('#amount').css("border-color", "red");
          $('#amount').removeAttr("readonly",false);
          $('#amount').val(0);
        }
       

    });
});
</script>


    
  </body>

<!-- Mirrored from pratikborsadiya.in/vali-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jul 2018 06:07:27 GMT -->
</html>