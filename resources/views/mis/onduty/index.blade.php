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
          <h1><i class="fa fa-th-list"></i> On-Duty Management</h1>
        </div>
      
      </div>
      <div class="row">
        <div class="col-md-12">
            <a href="{{url('/on-duty/create')}}" class="btn btn-primary fa fa-plus btn-lg">ADD On-Duty Request</a>

          <div class="tile">
            <div class="tile-body">
              <div id="table" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="sampleTable_length">
                   
                </div>
              </div>
              
            </div>
            <div class="row"><div class="col-sm-12 pre-scrollable">
              <?php $i=1;?>
               <?php if(Session::has('message')) {?>
        <div id="alert" class="alert alert-success">{{ Session::get('message') }}

        </div><?php } ?>
              <table class="table table-hover table-bordered dataTable no-footer" id="sampleTable" role="grid" aria-describedby="sampleTable_info">
                <thead>
                  <tr role="row">
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th >Mobile</th>
                    <th>OD Date</th>
                    <th>In Time</th>
                    <th>Out Time</th>
                    <th>OD Type</th>
                    <th>Reason</th>
                    <th>Status</th>
                    <th style="text-align: center;">Approval From</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  
          <?php foreach ($onduty as  $value) {  ?>
                <tr role="row" class="odd">
                    <td><?= $i++;?></td>
                    <td><?= $value->empname;?></td>
                    <td><?= $value->empemail;?></td>
                    <td><?= $value->empmobile;?></td>
                     <td><?= $value->od_date;?></td>
                    <td><?= $value->intime;?></td>
                    <td><?= $value->outtime;?></td>
                    <td><?= $value->odtype;?></td>
                    <td><?= $value->reason;?></td>
                    <td><?= $value->approvalfrom;?></td>
                    <td><?= $value->status;?></td>
                    <td><a href="{{url('/on-duty/edit')}}/<?= $value->id;?>" class="btn btn-primary fa fa-pencil"></a>
                        <a href="{{url('/on-duty/delete')}}/<?= $value->id;?>" class="btn btn-danger fa fa-trash demoSwal"></a>
                    </td>
                  </tr>
               
        </tbody>
      <?php } ?>
          </table>
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

    
  </body>

<!-- Mirrored from pratikborsadiya.in/vali-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Jul 2018 06:07:27 GMT -->
</html>