<!doctype html>
<html class="no-js" lang="" ng-app="myApp" ng-cloak>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Add Class</title>
        <link rel="icon" type="image/ico" href="ncm/images/fav.png" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <!-- vendor css files -->
        <link rel="stylesheet" href="ncm/css/bootstrap.min.css">
        <link rel="stylesheet" href="ncm/css/animate.css">
        <link rel="stylesheet" href="ncm/css/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="ncm/css/animsition.min.css">
        <!-- project main css files -->
        <link rel="stylesheet" href="ncm/css/main.css">
        <!--/ stylesheets -->
        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="ncm/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style>
          .modal-header{
            background-color: #2c3e50;
          }
        </style>
        <!--/ modernizr -->
    </head>
    <body id="" class="appWrapper">
        <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" class="animsition">
            <!-- ===============================================
            ================= HEADER Content ===================
            ================================================ -->
            <section id="header">
                <header class="clearfix">
                    <!-- Branding -->
                    <div class="branding">
                        <a class="brand" href="{{url('/')}}">
                            <img src="ncm/images/lg2.png">
                        </a>
                        <a href="#" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                    <!-- Right-side navigation -->
                    <ul class="nav-right pull-right list-inline">
                        <li class="">
                            <a href="#">
                                <i class="fa fa-comments"></i>
                            </a>
                        </li>
                        <li class="dropdown nav-profile">
                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                <img src="ncm/images/user-icn.png" alt="" class="img-circle size-30x30">
                                <span>Admin <i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul class="dropdown-menu animated littleFadeInRight" role="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-cog"></i>Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-sign-out"></i>Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Right-side navigation end -->
                </header>
            </section>
            <!--/ HEADER Content  -->
            <!-- =================================================
            ================= CONTROLS Content ===================
            ================================================== -->
            <div id="controls">
                <!-- ================================================
                ================= SIDEBAR Content ===================
                ================================================= -->
                <aside id="sidebar">
                    <div id="sidebar-wrap">
                        <div class="panel-group slim-scroll" role="tablist">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#sidebarNav">
                                        </a>
                                    </h4>
                                </div>
                                <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
                                        <!-- ===================================================
                                        ================= NAVIGATION Content ===================
                                        ==================================================== -->
                                        <ul id="navigation">
                                            <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                                           <!--  <li>
                                             <a href="#"><i class="fa fa-user"></i> <span>School Information</span> </a>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i>School Info</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i>Add Branch Details</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i>School Settings</a></li> 
                                                </ul>
                                            </li> -->
                                           <li>
                                             <a href="#"><i class="fa fa-user"></i> <span>Student</span> </a>
                                                <ul>
                                                    
                                                    <!-- <li><a href="{{url('studentdetails')}}"><i class="fa fa-caret-right"></i> View Student Details</a></li> -->
                                                    <li><a href="{{url('studentsettings')}}"><i class="fa fa-caret-right"></i>Student Details</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-user-secret"></i> <span>Parents</span></a>
                                                <ul>
                                                  <li><a href="{{url('parent')}}"><i class="fa fa-caret-right"></i>Add Parent</a></li>
                                                       <!-- <li><a href="{{url('parentdetails')}}"><i class="fa fa-caret-right"></i>View Parent Details</a></li> -->
                                                       <li><a href="{{url('parentsettings')}}"><i class="fa fa-caret-right"></i>Parent Details</a></li>
                                           </ul>
                                            </li>
                                           <!--  <li>
                                                <a href="#"><i class="fa fa-user-plus"></i> <span>Teachers</span></a>
                                                <ul>
                                                <li><a href="#"><i class="fa fa-caret-right"></i>View Teacher Details</a></li>
                                                    
                                                 <li><a href="#"><i class="fa fa-caret-right"></i>Settings</a></li>
                                           </ul>
                                            </li> -->
                                            <!-- </li> -->
                                            <!-- <li>
      <a href="#"><i class="fa fa-users"></i> <span>Users</span> </a>
                                                <ul>
                             <li><a href="#"><i class="fa fa-caret-right"></i>Add User</a></li>
                   <li><a href="#"><i class="fa fa-caret-right"></i> View User</a></li>
                                      <li><a href="#"><i class="fa fa-caret-right"></i>Settings</a></li>
                                                </ul>
                                            </li> -->
                                            <!-- <li>
                            <a role="button" tabindex="0"><i class="fa fa-user"></i> <span>Employee</span></a>
                                                <ul>
         <li><a href="{{url('addemployee')}}"><i class="fa fa-caret-right"></i> Add Employee</a></li>
           <li><a href="{{url('viewemployee')}}"><i class="fa fa-caret-right"></i>Employee Details</a></li>
                  <li><a href="{{url('employeesettings')}}"><i class="fa fa-caret-right"></i>Settings</a></li>

                                                </ul>
                                           </li> -->
                                            <li class="active open">
                           <a href="#"><i class="fa fa-sitemap"></i> <span>Class</span></a>
                                                <ul>
                                     <li class="active"><a href="{{ URL::to('class') }}"><i class="fa fa-caret-right"></i>Class Details</a></li>
                                    <!--  <li><a href="{{ URL::to('class') }}"><i class="fa fa-caret-right"></i> View Class Details</a></li>
                                     <li><a href="{{ URL::to('class') }}"><i class="fa fa-caret-right"></i>Class Settings</a></li> -->
                                     <li><a href="{{ URL::to('section') }}"><i class="fa fa-caret-right"></i> Section Details</a></li>
                                    <!-- <li><a href="{{ URL::to('viewsection') }}"><i class="fa fa-caret-right"></i> View Section Details</a></li>
                                     <li><a href="{{ URL::to('sectionsettings') }}"><i class="fa fa-caret-right"></i>Section Settings</a></li> -->
          
                                                </ul>
                                            </li>
                                            <li>
              <a href="#"><i class="fa fa-columns"></i> <span>Subjects</span></a>
             <ul>
                  <li><a href="{{url('addsubject')}}"><i class="fa fa-caret-right"></i>Add Subject</a></li>
                  <li><a href="{{url('addchapter')}}"><i class="fa fa-caret-right"></i> Add Chapter</a></li>
                  <li><a href="{{url('viewsubject')}}"><i class="fa fa-caret-right"></i>View Subject</a></li>
                  <li><a href="{{url('viewchapter')}}"><i class="fa fa-caret-right"></i> View Chapter</a></li>
                  <li><a href="{{url('subjectsettings')}}"><i class="fa fa-caret-right"></i>Subject Settings</a></li>
                  <li><a href="{{url('chaptersettings')}}"><i class="fa fa-caret-right"></i>Chapter Settings</a></li>
             
             </ul>
                                            </li>
                                            <!-- <li>
                 <a href="#"><i class="fa fa-money"></i> <span>Fees</span> </a>
                                                <ul>
              <li><a href="#"><i class="fa fa-caret-right"></i>Add Academic Fee</a></li>
             <li><a href="#"><i class="fa fa-caret-right"></i>Add Transport Fee</a></li>
             <li><a href="#"><i class="fa fa-caret-right"></i>Add Book Fee</a></li>
                   <li><a href="#"><i class="fa fa-caret-right"></i> View Academic Fee</a></li>
             <li><a href="#"><i class="fa fa-caret-right"></i> View Transport Fee</a></li>
             <li><a href="#"><i class="fa fa-caret-right"></i>View Book Fee</a></li>
             <li><a href="#"><i class="fa fa-caret-right"></i>Settings</a></li>


                                                </ul>
                                            </li> -->
                                         <!--    <li>
                     <a href="#"><i class="fa  fa-institution "></i> <span>Library</span></a>
                                                <ul>
                     <li><a href="#"><i class="fa fa-caret-right"></i>Add Books</a></li>
                    <li><a href="#"><i class="fa fa-caret-right"></i>View Books</a></li>
                    <li><a href="#"><i class="fa fa-caret-right"></i>Issue Books</a></li>
                     <li><a href="#"><i class="fa fa-caret-right"></i>Update Books</a></li>
                     <li><a href="#"><i class="fa fa-caret-right"></i>Settings</a></li>

                                                </ul>
                                            </li> -->
               <!--  <li><a href="#"><i class="fa fa-table"></i> <span>Timetable</span></a>
                <ul>
                 <li><a href="#"><i class="fa fa-caret-right"></i>Exam Timetable</a></li>
                <ul>
                <li><a href="#"><i class="fa fa-caret-right"></i>Add Timetable</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i>View Timetable</a></li>
                </ul>
                </ul>
                <ul>
                <li><a href="#"><i class="fa fa-caret-right"></i>Class Timetable</a></li>
                <ul>
                <li><a href="#"><i class="fa fa-caret-right"></i>Add Timetable</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i>View Timetable</a></li>
                </ul>
                </ul>
        </li> -->
                   <!--  <li><a href="#"><i class="fa fa-table"></i> <span>Exam</span></a>
                    <ul>
                    <li><a href="#"><i class="fa fa-caret-right"></i>Add Exam</a></li>
                    <li><a href="#"><i class="fa fa-caret-right"></i>Add Marks</a></li>
                    <li><a href="#"><i class="fa fa-caret-right"></i>Report Card</a></li>
                    </ul>
                    </li> -->
                     <!--   <li><a href="#"><i class="fa fa-bar-chart-o"></i> <span>Syllabus</span></a>
                       <ul>
                       <li><a href="#"><i class="fa fa-caret-right"></i>Settings</a></li>
                       </ul>               
                       </li> -->
                      <!--  <li>
                        <a href="#"><i class="fa fa-home"></i> <span>Hostel</span></a>              
                        <ul>                     
                        <li><a href="#"><i class="fa fa-caret-right"></i>Add Building</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i>Add Room</a></li>                 
                                    <li><a href="#"><i class="fa fa-caret-right"></i>Room Availability</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i>Room Allocation</a></li>             
                                    <li><a href="#"><i class="fa fa-caret-right"></i>View Hostel Students</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i>Settings</a></li>
                        </ul>   
                        </li> -->
                        <!--  <li>
                         <a href="#"><i class="fa fa-edit"></i> <span>Leave</span></a>
                         <ul>
                         <li><a href="#"><i class="fa fa-caret-right"></i>Holiday List</a></li>
                         <li><a href="#"><i class="fa fa-caret-right"></i>Request for Leave</a></li>
                         <li><a href="#"><i class="fa fa-caret-right"></i>Settings</a></li>
                         </ul>
                         </li> -->
                       <!--   <li>
                         <a href="#"><i class="fa fa-envelope"></i> <span>Messages</span></a>
                          <ul>
                         <li><a href="#"><i class="fa fa-caret-right"></i>Settings</a></li>
                         </ul>
                         </li> -->
                        <!--  <li>
                         <a href="#"><i class="fa fa-pencil"></i> <span>Accounts</span></a>
                         <ul>
                         <li><a href="#"><i class="fa fa-caret-right"></i>Settings</a></li>
                         </ul>
                         </li> -->
                          <!-- <li>
                         <a href="#"><i class="fa fa-taxi"></i> <span>Transport</span></a>
                         <ul>
                         <li><a href="#"><i class="fa fa-caret-right"></i>Settings</a></li>
                         </ul>
                         </li> -->
                         </ul>
                        <!--/ NAVIGATION Content -->  
                        </div>
                        </div>
                       </div>
                </aside>                <!--/ SIDEBAR Content -->
            </div>


            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-tables-datatables">

                  
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">


                            <!-- tile -->
                            <section class="tile">

                                @if ($errors->any())
                                   <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Add Class</strong></h1>
                                
                                </div>
                                <!-- /tile header -->
                                                      



                                <!-- tile body -->
                                
                                <!--fiel starts-->
                       <div class="tile-body">
                           <div class="row">
                                 <div class="panel-heading">
 <button id="btn_add" name="btn_add" class="btn btn-default btn-rounded pull-right"  style="background-color: #2c3e50;color:#fff;">Add New Class</button>
 <br><br>
    </div>
      <div class="panel-body"> 
        <div class="table-responsive">
       <table class="table table-bordered table-striped" style="text-align:center;">
        <thead style="background-color: #2c3e50;color:#fff;">
          <tr>
            <td>Class Name</td>
            <td>Incharge</td>
            <td>Action</td>
          </tr>
         </thead>
         <tbody id="products-list" name="products-list">
           @foreach ($class as $classdata)
            <tr id="product{{$classdata->id}}">
             <td>{{$classdata->class_name}}</td>
             @foreach($incharge as $inch)
             @if($classdata->teacher_id === $inch->id)
             <td>{{$inch->employee_fname}}</td>
             @else
             <td></td>
             @endif
                          
             @endforeach

             <td>
              <button class="btn btn-xs btn-detail btn-rounded open_modal" value="{{$classdata->id}}"  style="background-color:#2c3e50;color:#fff;">Edit</button>&nbsp;&nbsp;&nbsp;
            <button class="btn btn-xs btn-warning btn-rounded btn-delete delete-product" value="{{$classdata->id}}">Delete</button> 

              </td>
            </tr>
            @endforeach
        </tbody>
        </table>
       </div>
   </div>
       </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content" style="width:80%;margin:auto;">
             <div class="modal-header">
             <button type="button" class="btn-cancel close"  data-dismiss="modal" aria-label="Close" style="color:#fff;"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Class</h4>

            </div>
                
  <div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
    </div>
            <div class="modal-body">
            <form id="frmProducts" name="frmProducts" class="form-horizontal">
                <div class="form-group error">
                 <label for="inputName" class="col-sm-3 control-label"><span style="color: red">*</span>&nbsp;Class Name</label>
                   <div class="col-sm-9">
                    <input type="text" class="form-control has-error" id="name" name="class_name" placeholder="Class Name" value="" required>
                   </div>
                   </div>
                   {{ csrf_field() }}
                 <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Class Incharge</label>
                    <div class="col-sm-9">
                        
                        <select name="class_teacher" id="details" class="form-control">
                            <option value="">---Select Incharge---</option>
                            @foreach($incharge as $incharge)
                            <option value="{{$incharge->id}}">{{$incharge->employee_fname}}</option>
                            @endforeach

                        </select>
                    <!-- <input type="text" class="form-control" id="details" name="class_teacher" placeholder="Incharge" value=""> -->
                    </div>
                </div>
                
            
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn-save" value="add" style="background-color: #2c3e50;color:#fff;">Save Class</button>
            <button type="button" class="btn btn-warning btn-cancel">Cancel</button>
            <input type="hidden" id="product_id" name="product_id" value="0">
            </div>
        </div>
      </div>
      </form>
  </div>
</div>

    <meta name="_token" content="{!! csrf_token() !!}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{asset('js/ajaxscript.js')}}"></script>



                              
                            </section>
                            <!-- /tile -->
                          
                          
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->

                </div>
                
            </section>
            <!--/ CONTENT -->
        </div>
        <!--/ Application Content -->

        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
       <!-- <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>-->

        <script src="ncm/js/bootstrap.min.js"></script>

        <script src="ncm/js/jRespond.min.js"></script>

        <script src="ncm/js/jquery.sparkline.min.js"></script>

        <script src="ncm/js/jquery.slimscroll.min.js"></script>

        <script src="ncm/js/jquery.animsition.min.js"></script>

        <script src="ncm/js/screenfull.min.js"></script>

        <script src="ncm/js/jquery.dataTables.min.js"></script>
        <script src="ncm/js/dataTables.colReorder.min.js"></script>
        <script src="ncm/js/dataTables.responsive.min.js"></script>
        <script src="ncm/js/dataTables.colVis.min.js"></script>
        <script src="ncm/js/dataTables.tableTools.min.js"></script>
        <script src="ncm/js/dataTables.bootstrap.js"></script>

        <!--/ vendor javascripts -->




        <script src="ncm/js/bootstrap-datetimepicker.min.js"></script>

        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="ncm/js/main.js"></script>
        <!--/ custom javascripts -->






      

<script>
    angular.module('myApp',[]);
</script>
            <script>
                document.querySelector("#ct").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^a-zA-Z]/g,"");
});
            </script>



       
    </body>
</html>

