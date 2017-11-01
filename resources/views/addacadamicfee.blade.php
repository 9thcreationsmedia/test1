<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="" ng-app=""> <!--<![endif]-->



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Add Acadamic Fee</title>
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
        <link rel="stylesheet" href="ncm/js/vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" href="ncm/js/vendor/datatables/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="ncm/js/vendor/datatables/datatables.bootstrap.min.css">
        <link rel="stylesheet" href="ncm/js/vendor/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css">
        <link rel="stylesheet" href="ncm/js/vendor/datatables/extensions/Responsive/css/dataTables.responsive.css">
        <link rel="stylesheet" href="ncm/js/vendor/datatables/extensions/ColVis/css/dataTables.colVis.min.css">
        <link rel="stylesheet" href="ncm/js/vendor/datatables/extensions/TableTools/css/dataTables.tableTools.min.css">

        <!-- project main css files -->
        <link rel="stylesheet" href="ncm/css/main.css">
        <!--/ stylesheets -->



        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="ncm/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->



    </head>





    <body id="minovate" class="appWrapper">






        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->












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
                        <a class="brand" href="index.html">
                            <img src="ncm/images/lg2.png">
                        </a>
                        <a href="#" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                    <!-- Branding end -->



                    <!-- Left-side navigation -->
                    <ul class="nav-left pull-left list-unstyled list-inline">
                        <li class="sidebar-collapse divided-right">
                            <a href="#" class="collapse-sidebar">
                                <i class="fa fa-outdent"></i>
                            </a>
                        </li>
                                            </ul>
                    <!-- Left-side navigation end -->




                    <!-- Search -->
                    <div class="search" id="main-search">
                        <input type="text" class="form-control underline-input" placeholder="Search...">
                    </div>
                    <!-- Search end -->




                    <!-- Right-side navigation -->
                    <ul class="nav-right pull-right list-inline">
                      
                        <li class="dropdown nav-profile">

                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                <img src="ncm/images/user-icn.png" alt="" class="img-circle size-30x30">
                                <span>Admin <i class="fa fa-angle-down"></i></span>
                            </a>

                            <ul class="dropdown-menu animated littleFadeInRight" role="menu">

                                <li>
                                    <a href="#">
                                        <span class="badge bg-greensea pull-right">86%</span>
                                        <i class="fa fa-user"></i>Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label bg-lightred pull-right">new</span>
                                        <i class="fa fa-check"></i>Tasks
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-cog"></i>Settings
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-lock"></i>Lock
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-sign-out"></i>Logout
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class="">
                            <a href="#">
                                <i class="fa fa-comments"></i>
                            </a>
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
                                            Navigation <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">


                                        <!-- ===================================================
                                        ================= NAVIGATION Content ===================
                                        ==================================================== -->
                                        <ul id="navigation">
                                            <li><a href="index.html"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                                            <li>
       <a href="#"><i class="fa fa-user"></i> <span>Student</span> </a>
                                                <ul>
                                                    <li><a href="add-student.html"><i class="fa fa-caret-right"></i>Add Student</a></li>
                                                    <li><a href="student-profile.html"><i class="fa fa-caret-right"></i>Student Profile</a></li>
                                                    <li><a href="student-details.html"><i class="fa fa-caret-right"></i> Student Details</a></li>
                                     <li><a href="stu-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-user-secret"></i> <span>Parents</span></a>
                                                <ul>
                 <li><a href="parent-details.html"><i class="fa fa-caret-right"></i>Parent Details</a></li>
                   <li><a href="par-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                           </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-user-plus"></i> <span>Teachers</span></a>
                                                <ul>
                   <li><a href="tech-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                           </ul>
                                            </li>
                                            </li>
                                            <li>
      <a href="#"><i class="fa fa-users"></i> <span>Users</span> </a>
                                                <ul>
                             <li><a href="add-user.html"><i class="fa fa-caret-right"></i>Add User</a></li>
                   <li><a href="view-user.html"><i class="fa fa-caret-right"></i> View User</a></li>
                                      <li><a href="user-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                                   
                                                </ul>
                                            </li>
                                            <li>
                            <a role="button" tabindex="0"><i class="fa fa-user"></i> <span>Employee</span></a>
                                                <ul>
         <li><a href="add-employee.html"><i class="fa fa-caret-right"></i> Add Employee</a></li>
           <li><a href="employee-details.html"><i class="fa fa-caret-right"></i>Employee Details</a></li>
                  <li><a href="emp-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                                </ul>
                                           </li>
                                            <li>
                           <a href="#"><i class="fa fa-sitemap"></i> <span>Class</span></a>
                                                <ul>
                                     <li><a href="add-class.html"><i class="fa fa-caret-right"></i> Add Class</a></li>
                                     <li><a href="class-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>
          
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-columns"></i> <span>Subjects</span></a>
                                                <ul>
                  <li><a href="add-subject1.html"><i class="fa fa-caret-right"></i>Add Subject</a></li>
             <li><a href="add-chapter1.html"><i class="fa fa-caret-right"></i> Add Chapter</a></li>
                                 <li><a href="subject-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>
             
                                                </ul>
                                            </li>
                                            <li   class="active open">
                 <a href="#"><i class="fa fa-money"></i> <span>Fees</span> </a>
                                                <ul>
              <li><a href="add-acadamic-fee.html"><i class="fa fa-caret-right"></i>Add Academic Fee</a></li>
             <li><a href="add-transportationfee.html"><i class="fa fa-caret-right"></i>Add Transport Fee</a></li>
             <li><a href="books-fee.html"><i class="fa fa-caret-right"></i>Add Book Fee</a></li>
			  <li><a href="view-acadamic-fee.html"><i class="fa fa-caret-right"></i> View Academic Fee</a></li>
             <li><a href="view-transport-fee.html"><i class="fa fa-caret-right"></i> View Transport Fee</a></li>
             <li><a href="view-book-fee.html"><i class="fa fa-caret-right"></i>View Book Fee</a></li>
             <li><a href="fee-settings"><i class="fa fa-caret-right"></i>Settings</a></li>


                                                </ul>
                                            </li>
                                            <li>
                                                <a href="add-library.html"><i class="fa  fa-institution "></i> <span>Library</span></a>
                                                <ul>
                     <li><a href="add-books.html"><i class="fa fa-caret-right"></i>Add Books</a></li>
                    <li><a href="view-books.html"><i class="fa fa-caret-right"></i>View Books</a></li>
                    <li><a href="issue-books.html"><i class="fa fa-caret-right"></i>Issue Books</a></li>
                     <li><a href="update-book.html"><i class="fa fa-caret-right"></i>Update Books</a></li>
                                       <li><a href="library-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                                </ul>
                                            </li>
                <li><a href="#"><i class="fa fa-table"></i> <span>Timetable</span></a>
                <ul>
				<li><a href="#"><i class="fa fa-caret-right"></i>Exam Timetable</a></li>
				<ul>
				<li><a href="add-timetable.html"><i class="fa fa-caret-right"></i>Add Timetable</a></li>
				<li><a href="view-timetable.html"><i class="fa fa-caret-right"></i>View Timetable</a></li>
				</ul>
				</ul>
				<ul>
				<li><a href="#"><i class="fa fa-caret-right"></i>Class Timetable</a></li>
				<ul>
				<li><a href="add-timetable.html"><i class="fa fa-caret-right"></i>Add Timetable</a></li>
				<li><a href="view-timetable.html"><i class="fa fa-caret-right"></i>View Timetable</a></li>
				</ul>
				</ul>
                </li>
                         <li><a href="#"><i class="fa fa-table"></i> <span>Exam</span></a>
                         <ul>
                     <li><a href="add-exam.html"><i class="fa fa-caret-right"></i>Add Exam</a></li>
                    <li><a href="add-marks.html"><i class="fa fa-caret-right"></i>Add Marks</a></li>
                    <li><a href="report-card.html"><i class="fa fa-caret-right"></i>Report Card</a></li>

                              </ul>
                            </li>
                          <li><a href="#"><i class="fa fa-bar-chart-o"></i> <span>Syllabus</span></a>
                          <ul>
                          <li><a href="syllabus-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                          </ul>               
                          </li>

                         <li>
                          <a href="#"><i class="fa fa-home"></i> <span>Hostel</span></a>              
                        <ul>                     
                        <li><a href="add-building.html"><i class="fa fa-caret-right"></i>Add Building</a></li>
                        <li><a href="add-room.html"><i class="fa fa-caret-right"></i>Add Room</a></li>                 
						<li><a href="room-availability.html"><i class="fa fa-caret-right"></i>Room Availability</a></li>
                        <li><a href="room-allocation.html"><i class="fa fa-caret-right"></i>Room Allocation</a></li>             
						<li><a href="view-hostel-students.html"><i class="fa fa-caret-right"></i>View Hostel Students</a></li>
                        <li><a href="hostel-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>


                        </ul>   
                        </li>

                         <li>
                         <a href="#"><i class="fa fa-edit"></i> <span>Leave</span></a>
                         <ul>
                         <li><a href="holidays-list.html"><i class="fa fa-caret-right"></i>Holiday List</a></li>
                         <li><a href="request-for-leave.html"><i class="fa fa-caret-right"></i>Request for Leave</a></li>
                         <li><a href="leave-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                         </ul>
                         </li>
                         <li>
                         <a href="#"><i class="fa fa-envelope"></i> <span>Messages</span></a>
                          <ul>
                         <li><a href="message-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                         </ul>
                         </li>
                         <li>
                         <a href="#"><i class="fa fa-pencil"></i> <span>Accounts</span></a>
                         <ul>
                         <li><a href="account-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                         </ul>
                         </li>
                          <li>
                         <a href="#"><i class="fa fa-taxi"></i> <span>Transport</span></a>
                         <ul>
                         <li><a href="transport-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                         </ul>
                         </li>
 
 
                                        </ul>
                                        <!--/ NAVIGATION Content -->
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        

                </aside>                <!--/ SIDEBAR Content -->



                <!-- =================================================
                ================= RIGHTBAR Content ===================
                ================================================== -->
             
                <!--/ RIGHTBAR Content -->




            </div>
            <!--/ CONTROLS Content -->




            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-tables-datatables">

                    <!--<div class="pageheader">

                        <h2>Datatables <span>// You can place subtitle here</span></h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html"><i class="fa fa-home"></i> Minovate</a>
                                </li>
                                <li>
                                    <a href="#">Tables</a>
                                </li>
                                <li>
                                    <a href="tables-datatables.html">Datatables</a>
                                </li>
                            </ul>

                        </div>

                    </div>-->

                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">


                            <!-- tile -->
                           <!-- <section class="tile">

                                <!-- tile header -->
                               <!-- <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Basic</strong> Usage</h1>
                                    <div class="note"><strong>including:</strong> multi-column sorting, row select and colReorder</div>
                                    <ul class="controls">
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                               <!-- <div class="tile-body">
                                    <div class="table-responsive">
                                        <table class="table table-custom" id="basic-usage">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <!-- /tile body -->

                           <!-- </section>
                            <!-- /tile -->

                            <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                       <!--         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title custom-font">I'm a modal!</h3>
                    </div>
                    <div class="modal-body">
                        Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i> Submit</button>
                        <button class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Cancel</button>
                    </div>
                </div>
            </div>
        </div>
         <button class="btn btn-default" data-toggle="modal" data-target="#myModal">Open me!</button>-->

                                
                                
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Add Acadamic Fee</strong></h1>
									<!-- <button class="btn btn-default" data-toggle="modal" data-target="#myModal">Add Acadamic Fee</button> -->
                             <!--       <ul class="controls">
                                        <li>
                    <a role="button" tabindex="0" id="add-entry"><i class="fa fa-plus mr-5"></i> Add Entry</a>

                                        </li>
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>-->
                                </div>
                                <!-- /tile header -->
                                                      



                                <!-- tile body -->
                                
                                <!--fiel starts-->
                       <div class="tile-body">
                           <div class="row">
                                 <form name="form2" role="form" id="form2" method="post" action="{{url('addacadamicfee')}}" data-parsley-validate>

                                        <input type="hidden" name="fee_type" value="acadamic_fee">
                                       
                                          <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">Select Class Name</label>
                                            <div class="col-sm-6">
                                                 <select name="class_id" class="form-control mb-10"
                                                        data-parsley-trigger="change"
                                                        required>
                                                    <option value="">--Select Class Name--</option>
                                                    @foreach($data as $data)
                                                    <option value="{{$data->id}}">{{$data->class_name}}</option>
                                                    @endforeach
                                                    

                                                </select>
                                            </div>
                   <!--<button type="button" class="btn btn-blue btn-rounded mb-10">Search</button>-->
                                        </div>
                                        </div>
                                        
                                        <div class="row">
                                        <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">Total Academic Fee</label>
                                            <div class="col-sm-6">
                                                <input type="number" name="acadamic_fee" id="acadamic_fee" class="form-control" required>
                                            </div>
                  
                                        </div>
                                        </div>


                                        <div class="row">
                                        <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">Extra Curricular Fee</label>
                                            <div class="col-sm-6">
                                                <input type="number" name="curricular_fee" id="curricular_fee" class="form-control" pattern="^(0|[1-9][0-9]*)$" required>
                                            </div>
                  
                                        </div>
                                        </div>



                                        <div class="row">
                                        <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">No of Terms</label>
                                            <div class="col-sm-6">
                                                <select name="terms" class="form-control"
                                                        
                                                        required>
                                                        <option>--Select Number of Terms--</option>
                                                     <option value="dogs">1
                                                      <option value="tuts">2
                                                      <option value="cars">3
                                                     <option value="terms">4
                                                     <option value="term5">5
                                                     <option value="term6">6
                                                </select>
                                            </div>
                  
                                        </div>
                                        </div>


                                        <div class="form-group">
                                             <button type="submit" class="btn btn-blue btn-rounded mb-10">Add</button>&nbsp;&nbsp;&nbsp;
                                         </div>
                                       </form>
                                        </div>
                                            <!--angular concept-->
      
                                <!--      <div ng-switch="myVar">
                                     <div ng-switch-when="dogs">
                                         <div class="row">
                                        <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">Term1</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                  
                                        </div>
                                        </div>
                                     <!--<h1>Term1</h1>
                                     <input type="text" id="input1">-->
                                     <!--
                                      </div>
                                   <div ng-switch-when="tuts">
                                   <div class="row">
                                        <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">Term2</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                                           
                                            <div class="col-sm-3">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                  
                                        </div>
                                        </div>
                                   
                                    </div>
                                <div ng-switch-when="cars">
                                <div class="row">
                                        <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">Term3</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                                           
                                            <div class="col-sm-3">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                  
                                        </div>
                                        </div>
                                </div>
                              <div ng-switch-when="terms">
                                 <div class="row">
                                        <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">Term4</label>
                                            <div class="col-sm-2">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                                           
                                            <div class="col-sm-2">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                  
                                        </div>
                                        </div>
                                 </div>
                                 <div ng-switch-when="term5">
                                 <div class="row">
                                        <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">Term5</label>
                                            <div class="col-sm-2">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                                           
                                            <div class="col-sm-2">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                  
                                        </div>
                                        </div>
                                 </div>
                                  <div ng-switch-when="term6">
                                 <div class="row">
                                        <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">Term6</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                                           
                                            <div class="col-sm-3">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                                            <div style="clear:both"></div><br>
                                            
                                             <label for="input01" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-3">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                                             <div class="col-sm-3">
                                                <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                  
                                        </div>
                                        </div>
                                 </div>
  <!--<div ng-switch-default> -->
    <!--
     <h1>Switch</h1>
     <p>Select topic from the dropdown, to switch the content of this DIV.</p>
  </div>
</div>
<hr>-->

<!--close angular concept-->
     
          

                                <!--field ends-->
                                
                              <!--  <div style="clear:both;"></div>
                                <div class="tile-body">
                                    <div class="table-responsive">
                                        <table class="table table-custom" id="editable-usage">
                                            <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Class Name</th>
                                                <th>Phone</th>
                                                <th>D.O.B</th>
                                                <th>D.O.J</th>
                                                <th>Blood Group</th>
                                                <th>Hobbies</th>
                                                <th style="width: 160px;" class="no-sort">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="odd gradeX">
                                                <td>01</td>
                                                <td>Vasantha</td>
                                                <td>9160008626</td>
                                                <td>7/8/1991</td>
                                                <td>9/5/1992</td>
                                                <td>O+ve</td>
                                                <td>Book Reading</td>
                                                <td class="actions"><a role="button" tabindex="0" class="edit text-primary text-uppercase text-strong text-sm mr-10">Edit</a><a role="button" tabindex="0" class="delete text-danger text-uppercase text-strong text-sm mr-10">Remove</a></td>
                                            </tr>
                                           <tr class="odd gradeX">
                                                <td>01</td>
                                                <td>Vasantha</td>
                                                <td>9160008626</td>
                                                <td>7/8/1991</td>
                                                <td>9/5/1992</td>
                                                <td>O+ve</td>
                                                <td>Book Reading</td>
                                                <td class="actions"><a role="button" tabindex="0" class="edit text-primary text-uppercase text-strong text-sm mr-10">Edit</a><a role="button" tabindex="0" class="delete text-danger text-uppercase text-strong text-sm mr-10">Remove</a></td>
                                            </tr>
                                             <tr class="odd gradeX">
                                                <td>01</td>
                                                <td>Vasantha</td>
                                                <td>9160008626</td>
                                                <td>7/8/1991</td>
                                                <td>9/5/1992</td>
                                                <td>O+ve</td>
                                                <td>Book Reading</td>
                                                <td class="actions"><a role="button" tabindex="0" class="edit text-primary text-uppercase text-strong text-sm mr-10">Edit</a><a role="button" tabindex="0" class="delete text-danger text-uppercase text-strong text-sm mr-10">Remove</a></td>
                                            </tr>
                                           <tr class="odd gradeX">
                                                <td>01</td>
                                                <td>Vasantha</td>
                                                <td>9160008626</td>
                                                <td>7/8/1991</td>
                                                <td>9/5/1992</td>
                                                <td>O+ve</td>
                                                <td>Book Reading</td>
                                                <td class="actions"><a role="button" tabindex="0" class="edit text-primary text-uppercase text-strong text-sm mr-10">Edit</a><a role="button" tabindex="0" class="delete text-danger text-uppercase text-strong text-sm mr-10">Remove</a></td>
                                            </tr>
                                           <tr class="odd gradeX">
                                                <td>01</td>
                                                <td>Vasantha</td>
                                                <td>9160008626</td>
                                                <td>7/8/1991</td>
                                                <td>9/5/1992</td>
                                                <td>O+ve</td>
                                                <td>Book Reading</td>
                                                <td class="actions"><a role="button" tabindex="0" class="edit text-primary text-uppercase text-strong text-sm mr-10">Edit</a><a role="button" tabindex="0" class="delete text-danger text-uppercase text-strong text-sm mr-10">Remove</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>-->
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->

                            <!-- tile -->
                           <!-- <section class="tile">

                                <!-- tile header -->
                              <!--  <div class="tile-header dvd dvd-btm">

                                    <h1 class="custom-font"><strong>Responsive</strong> Table</h1>
                                    <ul class="controls">
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                               <!-- <div class="tile-body">
                                    <table class="table table-custom dt-responsive" id="responsive-usage" width="100%">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th class="none">Phone</th>
                                            <th class="none">Street Address</th>
                                            <th class="none">City</th>
                                            <th class="none">State</th>
                                            <th class="none">ZIP</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- /tile body -->

                           <!-- </section>
                            <!-- /tile -->

                            <!-- tile -->
                          <!---  <section class="tile">

                                <!-- tile header -->
                               <!-- <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Advanced</strong> Table</h1>
                                    <ul class="controls">
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                               <!-- <div class="tile-body">
                                    <div class="row">
                                        <div class="col-md-6"><div id="tableTools"></div></div>
                                        <div class="col-md-6"><div id="colVis"></div></div>
                                    </div>
                                    <table class="table table-custom" id="advanced-usage">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- /tile body -->

                           <!-- </section>
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
        <script>window.jQuery || document.write('<script src="ncm/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="ncm/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="ncm/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="ncm/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="ncm/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="ncm/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="ncm/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="ncm/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="ncm/js/vendor/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
        <script src="ncm/js/vendor/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
        <script src="ncm/js/vendor/datatables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
        <script src="ncm/js/vendor/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
        <script src="ncm/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>

        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="ncm/js/main.js"></script>
        <!--/ custom javascripts -->

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

        <!--/ vendor javascripts -->



        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){

                //initialize basic datatable
                var table = $('#basic-usage').DataTable({
                    "ajax": 'ncm/extras/datatables-basic.json',
                    "columns": [
                        { "data": "id" },
                        { "data": "firstName" },
                        { "data": "lastName" }
                    ],
                    "aoColumnDefs": [
                      { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ],
                    "dom": 'Rlfrtip'
                });

                $('#basic-usage tbody').on( 'click', 'tr', function () {
                    if ( $(this).hasClass('row_selected') ) {
                        $(this).removeClass('row_selected');
                    }
                    else {
                        table.$('tr.row_selected').removeClass('row_selected');
                        $(this).addClass('row_selected');
                    }
                });
                //*initialize basic datatable




                //initialize editable datatable

                function restoreRow(oTable, nRow) {
                    var aData = oTable.row(nRow).data();
                    var jqTds = $('>td', nRow);

                    for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                        oTable.row(nRow).data(aData[i]);
                    }

                    oTable.draw();
                }

                function editRow(oTable, nRow) {
                    var aData = oTable.row(nRow).data();
                    var jqTds = $('>td', nRow);
                    jqTds[0].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[0] + '">';
                    jqTds[1].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[1] + '">';
                    jqTds[2].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[2] + '">';
                    jqTds[3].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[3] + '">';
                    jqTds[4].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[4] + '">';
                    jqTds[5].innerHTML = '<a role="button" tabindex="0" class="edit text-success text-uppercase text-strong text-sm mr-10">Save</a><a role="button" tabindex="0" class="cancel text-warning text-uppercase text-strong text-sm mr-10">Cancel</a>';
                }

                function saveRow(oTable, nRow) {
                    var jqInputs = $('input', nRow);
                    oTable.cell(nRow, 0).data(jqInputs[0].value);
                    oTable.cell(nRow, 1).data(jqInputs[1].value);
                    oTable.cell(nRow, 2).data(jqInputs[2].value);
                    oTable.cell(nRow, 3).data(jqInputs[3].value);
                    oTable.cell(nRow, 4).data(jqInputs[4].value);
                    oTable.cell(nRow, 5).data('<a role="button" tabindex="0" class="edit text-primary text-uppercase text-strong text-sm mr-10">Edit</a><a role="button" tabindex="0" class="delete text-danger text-uppercase text-strong text-sm mr-10">Remove</a>');
                    oTable.draw();
                }

                var table2 = $('#editable-usage');

                var oTable = $('#editable-usage').DataTable({
                    "aoColumnDefs": [
                      { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ]
                });

                var nEditing = null;
                var nNew = false;

                $('#add-entry').click(function (e) {
                    e.preventDefault();

                    if (nNew && nEditing) {
                        if (confirm("Previous row is not saved yet. Save it ?")) {
                            saveRow(oTable, nEditing); // save
                            $(nEditing).find("td:first").html("Untitled");
                            nEditing = null;
                            nNew = false;

                        } else {
                            oTable.row(nEditing).remove().draw(); // cancel
                            nEditing = null;
                            nNew = false;

                            return;
                        }
                    }

                    var aiNew = oTable.row.add(['', '', '', '', '', '', '']).draw();
                    var nRow = oTable.row(aiNew[0]).node();
                    editRow(oTable, nRow);
                    nEditing = nRow;
                    nNew = true;
                });

                table2.on('click', '.delete', function (e) {
                    e.preventDefault();

                    if (confirm("Are you sure?") == false) {
                        return;
                    }

                    var nRow = $(this).parents('tr')[0];
                    oTable.row(nRow).remove().draw();
                    alert("Deleted!");
                });

                table2.on('click', '.cancel', function (e) {
                    e.preventDefault();
                    if (nNew) {
                        oTable.row(nEditing).remove().draw();
                        nEditing = null;
                        nNew = false;
                    } else {
                        restoreRow(oTable, nEditing);
                        nEditing = null;
                    }
                });

                table2.on('click', '.edit', function (e) {
                    e.preventDefault();

                    /* Get the row as a parent of the link that was clicked on */
                    var nRow = $(this).parents('tr')[0];

                    if (nEditing !== null && nEditing != nRow) {
                        /* Currently editing - but not this row - restore the old before continuing to edit mode */
                        restoreRow(oTable, nEditing);
                        editRow(oTable, nRow);
                        nEditing = nRow;
                    } else if (nEditing == nRow && this.innerHTML == "Save") {
                        /* Editing this row and want to save it */
                        saveRow(oTable, nEditing);
                        nEditing = null;
                        alert("Updated!");
                    } else {
                        /* No edit in progress - let's start one */
                        editRow(oTable, nRow);
                        nEditing = nRow;
                    }
                });
                //*initialize editable datatable

                //initialize responsive datatable
                var table3 = $('#responsive-usage').DataTable({
                    "ajax": 'ncm/extras/datatables-responsive.json',
                    "columns": [
                        { "data": "id" },
                        { "data": "firstName" },
                        { "data": "lastName" },
                        { "data": "tel" },
                        { "data": "address" },
                        { "data": "city" },
                        { "data": "state" },
                        { "data": "zip" }
                    ],
                    "aoColumnDefs": [
                      { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ]
                });
                //*initialize responsive datatable

                //initialize responsive datatable
                function stateChange(iColumn, bVisible) {
                    console.log('The column', iColumn, ' has changed its status to', bVisible);
                }

                var table4 = $('#advanced-usage').DataTable({
                    "ajax": 'ncm/extras/datatables-basic.json',
                    "columns": [
                        { "data": "id" },
                        { "data": "firstName" },
                        { "data": "lastName" }
                    ],
                    "aoColumnDefs": [
                      { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ]
                });

                var colvis = new $.fn.dataTable.ColVis(table4);

                $(colvis.button()).insertAfter('#colVis');
                $(colvis.button()).find('button').addClass('btn btn-default').removeClass('ColVis_Button');

                var tt = new $.fn.dataTable.TableTools(table4, {
                    sRowSelect: 'single',
                    "aButtons": [
                        'copy',
                        'print', {
                            'sExtends': 'collection',
                            'sButtonText': 'Save',
                            'aButtons': ['csv', 'xls', 'pdf']
                        }
                    ],
                    "sSwfPath": "ncm/js/vendor/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                });

                $(tt.fnContainer()).insertAfter('#tableTools');
                //*initialize responsive datatable

            });
        </script>
        <!--/ Page Specific Scripts -->





       
    </body>
</html>
