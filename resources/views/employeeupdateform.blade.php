<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="" ng-app="myApp" ng-cloak> <!--<![endif]-->



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Update Employee</title>
        <link rel="icon" type="image/ico" href="ncm/images/favicon.ico" />
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
  <!--<link rel="stylesheet" href="ncm/js/datetimepicker/css/bootstrap-datetimepicker.min.css">-->

        <!-- project main css files -->
        <link rel="stylesheet" href="ncm/css/main.css">
        <!--/ stylesheets -->
<!--datepicker starts-->
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<link href="ncm/css/datepicker.css" rel="stylesheet" type="text/css">

        <!--datepicker ends -->


        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="ncm/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->
    


{!! Html::style('ncm/css/bootstrap.min.css') !!}
{!! Html::style('ncm/css/animate.css') !!}

{!! Html::style('ncm/css/fonts/font-awesome.min.css') !!}

{!! Html::style('ncm/css/animsition.min.css') !!}
{!! Html::style('ncm/css/main.css') !!}
{!! Html::style('ncm/css/datepicker.css') !!}


{!! Html::script('https://code.jquery.com/jquery-1.12.4.js') !!}
{!! Html::script('ncm/js/modernizr-2.8.3-respond-1.4.2.min.js') !!}





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
                            <img src={{ asset('ncm/images/lg2.png') }}>
                        </a>
                        <a href="#" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                    <!-- Branding end -->



                    <!-- Left-side navigation -->
                    <!--<ul class="nav-left pull-left list-unstyled list-inline">
                        <li class="sidebar-collapse divided-right">
                            <a href="#" class="collapse-sidebar">
                                <i class="fa fa-outdent"></i>
                            </a>
                        </li>
                       
                                

                                </ul>
                        </li>
                    </ul>-->
                    <!-- Left-side navigation end -->




                    <!-- Search -->
                  <!--  <div class="search" id="main-search">
                        <input type="text" class="form-control underline-input" placeholder="Search...">
                    </div>-->
                    <!-- Search end -->




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
                                
                                <!--<li>
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
                                </li>-->
                                <li>
                                    <a href="#">
                                        <i class="fa fa-cog"></i>Settings
                                    </a>
                                </li>
                                <li class="divider"></li>
                               <!-- <li>
                                    <a href="#">
                                        <i class="fa fa-lock"></i>Lock
                                    </a>
                                </li>-->
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
                                             <i class=""></i>
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
                                           
                                            <li>
      <a href="#"><i class="fa fa-users"></i> <span>Users</span> </a>
                                                <ul>
                             <li><a href="add-user.html"><i class="fa fa-caret-right"></i>Add User</a></li>
                   <li><a href="view-user.html"><i class="fa fa-caret-right"></i> View User</a></li>
                                      <li><a href="user-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                                   
                                                </ul>
                                            </li>
                                            <li   class="active open">
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
                                            <li>
                 <a href="#"><i class="fa fa-money"></i> <span>Fees</span> </a>
                                                <ul>
              <li><a href="add-acadamic-fee.html"><i class="fa fa-caret-right"></i>Add Academic Fee</a></li>
             <li><a href="add-transport-fee.html"><i class="fa fa-caret-right"></i>Add Transport Fee</a></li>
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
                                        <li>
                         <a href="#"><i class="fa fa-edit"></i> <span>Miscellaneous</span></a>
                         <ul>
                         <li><a href="#"><i class="fa fa-caret-right"></i>Cast</a>
                            <ul>
                         <li><a href="addcast.html"><i class="fa fa-caret-right"></i>Add Cast</a></li>
                         <li><a href="viewcast.html"><i class="fa fa-caret-right"></i>View Cast</a></li>
                         </ul>
                        </li>
                         <li><a href="#"><i class="fa fa-caret-right"></i>Religion</a>
                            <ul>
                         <li><a href="addreligion.html"><i class="fa fa-caret-right"></i>Add Religion</a></li>
                         <li><a href="viewreligion.html"><i class="fa fa-caret-right"></i>View Religion</a></li>
                         </ul>     
                        </li>
                         <li><a href="#"><i class="fa fa-caret-right"></i>Nationality</a>
                             <ul>
                         <li><a href="addnationality.html"><i class="fa fa-caret-right"></i>Add Nationality</a></li>
                         <li><a href="viewnationality.html"><i class="fa fa-caret-right"></i>View Nationality</a></li>
                         </ul>    
                        </li>
                             <li><a href="#"><i class="fa fa-caret-right"></i>Job</a>
                             <ul>
                         <li><a href="addjob.html"><i class="fa fa-caret-right"></i>Add Job</a></li>
                         <li><a href="viewjob.html"><i class="fa fa-caret-right"></i>View Job</a></li>
                         </ul>    
                        </li>
                             <li><a href="#"><i class="fa fa-caret-right"></i>Role</a>
                             <ul>
                         <li><a href="addrole.html"><i class="fa fa-caret-right"></i>Add Role</a></li>
                         <li><a href="viewrole.html"><i class="fa fa-caret-right"></i>View Role</a></li>
                         </ul>    
                        </li>

                         </ul>
                         </li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Job</a>
                             <ul>
                         <li><a href="addjob.html"><i class="fa fa-caret-right"></i>Add Job</a></li>
                         <li><a href="viewjob.html"><i class="fa fa-caret-right"></i>View Job</a></li>
                         </ul>    
                        </li>
                             <li><a href="#"><i class="fa fa-caret-right"></i>Role</a>
                             <ul>
                         <li><a href="addrole.html"><i class="fa fa-caret-right"></i>Add Role</a></li>
                         <li><a href="viewrole.html"><i class="fa fa-caret-right"></i>View Role</a></li>
                         </ul>    
                        </li>
    
 
                                        </ul>
                                        <!--/ NAVIGATION Content -->
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        

                              <!--/ SIDEBAR Content -->



                <!-- =================================================
                ================= RIGHTBAR Content ===================
                ================================================== -->
                               <!--/ RIGHTBAR Content -->




            </div>
                                  </div>
                </aside>
            <!--/ CONTROLS Content -->




            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-forms-validate">

               <!--     <div class="pageheader">

                        <h2>Validation Elements <span>// You can place subtitle here</span></h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html"><i class="fa fa-home"></i> Minovate</a>
                                </li>
                                <li>
                                    <a href="#">Form Stuff</a>
                                </li>
                                <li>
                                    <a href="form-validate.html">Validation Elements</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>


                    <!-- row -->
                    <div class="row">

                        <!-- col -->
                       <!-- <div class="col-md-6">

                            <!-- tile -->
                         <!--   <section class="tile">

                                <!-- tile header -->
                               <!-- <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Disabled</strong> Submit</h1>
                                    <!--<ul class="controls">
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
                               <!-- </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

<!--                                    <p class="text-muted">Submit button will be enabled after completing form.</p>
-->
                                    <form name="form1" role="form" id="form1">

                                      <!--  <div class="form-group">
                                            <label for="username">Username: </label>
                                            <input type="text" name="username" id="username" class="form-control"
                                                   data-parsley-trigger="change"
                                                   data-parsley-range="[4, 20]"
                                                   required>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email: </label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                   data-parsley-trigger="change"
                                                   required>
                                        </div>

                                        <div class="row">

                                            <div class="form-group col-md-6">
                                                <label for="password">Password: </label>
                                                <input type="password" name="password" id="password" class="form-control"
                                                       data-parsley-trigger="change"
                                                       data-parsley-range="[4, 20]"
                                                       required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="passwordConfirm">Password confirmation: </label>
                                                <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control"
                                                       data-parsley-trigger="change"
                                                       data-parsley-range="[4, 20]"
                                                       data-parsley-equalto="#password"
                                                       required>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="phone">Phone: </label>
                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="(XXX) XXXX XXX"
                                                   data-parsley-trigger="change"
                                                   pattern="^[\d\+\-\.\(\)\/\s]*$"
                                                   required>
                                        </div>

                                        <div class="checkbox">
                                            <label class="checkbox checkbox-custom">
                                                <input type="checkbox" name="agree" id="agree"
                                                       data-parsley-trigger="change"
                                                       required>
                                                <i></i> I agree to the <a href class="text-info">Terms of Service</a>
                                            </label>
                                        </div>-->

                                    </form>

                                </div>
                                <!-- /tile body -->

                                <!-- tile footer -->
                              <!--  <div class="tile-footer text-right bg-tr-black lter dvd dvd-top">
                                    <!-- SUBMIT BUTTON -->
                                  <!--  <button type="submit" class="btn btn-success" id="form1Submit" disabled>Submit</button>
                                </div>
                                <!-- /tile footer -->

                           <!-- </section>-->
                            <!-- /tile -->


                            <!-- tile -->
                           <!-- <section class="tile">

                                <!-- tile header -->
                              <!--  <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Basic</strong> Validations</h1>
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


                                    <form class="form-horizontal" name="form3" role="form" id="form3" data-parsley-validate>


                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Required</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="fc1" class="form-control mb-10" placeholder="Required field"
                                                       data-parsley-trigger="change"
                                                       required>
                                                <select name="f2" class="form-control mb-10"
                                                        data-parsley-trigger="change"
                                                        required>
                                                    <option value="">Select option...</option>
                                                    <option value="foo">Foo</option>
                                                    <option value="bar">Bar</option>
                                                </select>
                                                <label class="checkbox checkbox-custom">
                                                    <input name="fc3" type="checkbox" class="form-control"
                                                           data-parsley-trigger="change"
                                                           required><i></i> Agree
                                                </label>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Min Length</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="fc4" class="form-control" placeholder="minlength = 5"
                                                       data-parsley-trigger="change"
                                                       minlength="5"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Max Length</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="fc5" class="form-control" placeholder="maxlength = 5"
                                                       data-parsley-trigger="change"
                                                       maxlength="5"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Length Range</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="fc6" class="form-control" placeholder="minlength = 5 & maxlength = 10"
                                                       data-parsley-trigger="change"
                                                       data-parsley-length="[5, 10]"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Min value</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="fc7" class="form-control" placeholder="min = 8"
                                                       min="8"
                                                       data-parsley-trigger="change"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Max value</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="fc8" class="form-control" placeholder="max = 8"
                                                       max="8"
                                                       data-parsley-trigger="change"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Value Range</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="fc9" class="form-control" placeholder="min = 8 & max = 20"
                                                       data-parsley-range="[8,20]"
                                                       data-parsley-trigger="change"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">HEX Regex</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="fc10" class="form-control" placeholder="#ffffff"
                                                       pattern="/^#(?:[0-9a-fA-F]{3}){1,2}$/"
                                                       data-parsley-trigger="change"
                                                       required>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                                <!-- /tile body -->

                                <!-- tile footer -->
                               <!-- <div class="tile-footer text-right bg-tr-black lter dvd dvd-top">
                                    <!-- SUBMIT BUTTON -->
                                   <!-- <button type="submit" class="btn btn-default" id="form3Submit">Submit</button>
                                </div>
                                <!-- /tile footer -->

                           <!-- </section>
                            <!-- /tile -->


                        <!--</div>
                        <!-- /col -->


                        <!-- col -->
                        <div class="col-md-12">

                            <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong style="text-align:center;">Update Employee</strong></h1>
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
                                <div class="tile-body">

<!--                                    <p class="text-muted">Inputs in this form validate on submit.</p>
-->
                                  <!--  <form name="form" action="{{action('EmployeeController@employeeupdate')}}" role="form" id="form" accept-charset="ss.html"  enctype="multipart/form-data">-->
                                        {!! Form::open(['action'=>'EmployeeController@employeeupdate','files'=>true]) !!}


                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="tid"><span style="color: red">*</span>&nbsp;ID:</label>
                                                <input type="text" name="id" id="tid" value="<?php echo $data->id?>" class="form-control" required readonly>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="fname"><span style="color: red">*</span>&nbsp;First Name: </label>
                                                <input type="text" name="employee_fname" ng-model="fname" id="fname" class="form-control" pattern="^[a-zA-Z]{1,}$" value="<?php echo $data->employee_fname?>" required>
                                               
                                            </div>
                                             <div class="form-group col-md-4">
                                                <label for="lname"><span style="color: red">*</span>&nbsp;Last Name: </label>
                                                <input type="text" name="employee_lname" ng-model="lname" id="lname" class="form-control" pattern="^[a-zA-Z]{1,}$" value="<?php echo $data->employee_lname?>" required>
                                                
                                                 
                                            </div>
                                             

</div>
                             <div class="row">
                                 <div class="form-group col-md-4">
                                                <label for="gender"><span style="color: red">*</span>&nbsp;Gender: </label>
                                               
                                                <select name="gender" ng-model="gender" id="gender" class="form-control mb-10" value="<?php echo $data->gender?>" required>
                                                    <option value="<?php echo $data->gender?>"><?php echo $data->gender?></option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                                 
                                               
                                        </div>
                                           <div class="form-group col-md-4">
                                                <label for="dob"><span style="color: red">*</span>&nbsp;Date of Birth: </label>
                                            <div class='input-group' >
                                                <input type='text' class="form-control" name="dob" id="db" value="<?php echo $data->dob?>"  required />
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </span>
                                            </div>
                                               
                                        </div>
                                        
                                             <div class="form-group col-md-4">
                                                <label for="pemail"><span style="color: red">*</span>&nbsp;Email: </label>
                                                <input type="pemail" id="pemail" ng-model="pemail" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                                       data-parsley-trigger="change" value="<?php echo $data->email?>"
                                                       required>
                                               
                                            </div>
                                            </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="phone"><span style="color: red">*</span>&nbsp;Contact No: </label>
                                                <input type="tel" name="phone" ng-model="phone" id="phone" class="form-control" pattern="^[7-9]{1}[0-9]{9}$" maxlength="10" value="<?php echo $data->phone?>" required>
                                               
                                            </div>
                                             <div class="form-group col-md-4">
                                                <label for="paadharno"><span style="color: red">*</span>&nbsp;Aadhar No: </label>
                                                <input type="text" name="aadhar" ng-model="paadharno" id="paadharno" class="form-control" placeholder="" maxlength="12" pattern="^\d{12}$" value="<?php echo $data->aadhar?>"
                                                       data-parsley-trigger="change" required>
                                               
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="panno">Pan No: </label>
                                                <input type="text" name="pan" ng-model="panno" id="panno" class="form-control" placeholder="" pattern="^[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}$" maxlength="10" value="<?php echo $data->pan?>"
                                                       data-parsley-trigger="change">
                                              
                                            </div>
                                            
                                        </div>
                                        <div class="row">

                                            <div class="form-group col-md-4">
                                                <label for="hobbies"><span style="color: red">*</span>&nbsp;Hobbies: </label>
                                               
                                                <input type="text" name="hobbies" id="hobbies" ng-model="hobbies" class="form-control mb-10" value="<?php echo $data->hobbies?>"  required>
                                           
                                        </div>
                                             <div class="form-group col-md-4">
                                                <label for="bloodgroup">Bloodgroup: </label>
                                               
                                                <select name="blood_groop" id="bloodgroup" class="form-control mb-10">
                                                    <option value="<?php echo $data->blood_groop?>"><?php echo $data->blood_groop?></option>
                                                    <option value="A +">A +</option>
                                                    <option value="A -">A -</option>
                                                    <option value="B +">B +</option>
                                                    <option value="B -">B -</option>
                                                    <option value="AB +">AB +</option>
                                                    <option value="AB -">AB -</option>
                                                    <option value="O +">O +</option>
                                                    <option value="O -">O -</option>

                                                </select>
                                               
                                        </div>
                                             <div class="form-group col-md-4">
                                                <label for="religion">Religion: </label>
                                               
                                                <select name="religion" id="religion" ng-model="religion" class="form-control mb-10">
                                                    <option value="<?php echo $data->religion?>"><?php echo $data->religion?></option>
                                                    <option value="hindu">Hindu</option>
                                                    <option value="muslim">Muselim</option>
                                                </select>
                                            
                                               
                                        </div>

                                        </div>
                                        <div class="row">

                                            <div class="form-group col-md-4">
                                                <label for="pcaste">Caste: </label>
                                               
                                                <select name="caste" id="pcaste" ng-model="pcaste" class="form-control mb-10">
                                                    <option value="<?php echo $data->caste?>"><?php echo $data->caste?></option>
                                                    <option value="OC">OC</option>
                                                    <option value="Bc">BC</option>
                                                </select>
                                           
                                        </div>
                                            <div class="form-group col-md-4">
                                            <label for="preaddr"><span style="color: red">*</span>&nbsp;Address: </label>
                                            <textarea class="form-control" rows="2" name="present_address" id="preaddr" value="<?php echo 
                                            $data->present_address?>" ng-model="preaddr" required><?php echo $data->present_address?></textarea>
                                                
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="city"><span style="color: red">*</span>&nbsp;City: </label>
                                            <select class="form-control" rows="6" name="city" id="city" ng-model="city" required>
                                                <option value="<?php echo $data->city?>"><?php echo $data->city?></option>
                                                <option value="Hyderabad">Hyderabad</option>
                                                <option value="vijayavada">Vijayawada</option>
                                                <option value="Tirupati">Tirupati</option>
                                            </select>
                                           
                                        </div>
                                             

                                        </div>
                                        <div class="row">

                                            <div class="form-group col-md-4">
                                                <label for="state"><span style="color: red">*</span>&nbsp;State: </label>
                                               
                                                <select name="state" id="state" ng-model="state" class="form-control mb-10" required>
                                                    <option value="<?php echo $data->state?>"><?php echo $data->state?></option>
                                                    <option value="AP">Andhra Pradesh</option>
                                                    <option value="TN">Telangana</option>
                                                </select>
                                           
                                               
                                        </div>
                                            <div class="form-group col-md-4">
                                            <label for="zipcode"><span style="color: red">*</span>&nbsp;Zip Code: </label>
                                            <input type="text" class="form-control" maxlength="6" pattern="^[0-9]{6}$" name="zip" id="zipcode"  ng-model="zipcode" value="<?php echo $data->zip?>" required>
                                                
                                        </div>
                                        <div class="form-group col-md-4">
                                             <label for="certificates">Upload Photo: </label>
                                              <input class="form-control" type="file" name="upload_photo" value = '{{$data->upload_photo}}'>
                                                <?php echo $data->upload_photo; ?>
       
                                            </div>
                                             

                                        </div>
                                        <div class="row">
                                             
                                             
                                         
                                        <div class="form-group col-md-4">
                                                <label for="qualification"><span style="color: red">*</span>&nbsp;Qualification: </label>
                                               
                                                <select name="qualification" id="qualification" ng-model="qualification" class="form-control mb-10"
                                                        data-parsley-trigger="change" required>
                                                    <option value="<?php echo $data->qualification ?>"><?php echo $data->qualification?></option>
                                                    <option value="Degree">Degree</option>
                                                    <option value="B.tech">B.tech</option>
                                                    <option value="Post Graduation">Post Graduation</option>

                                                </select>
                                           
                                               
                                        </div>
                                            <div class="form-group col-md-4">
                                                <label for="expy"><span style="color: red">*</span>&nbsp;Experiance in Years:</label>
                                                <input type="text" name="experience_in_years" id="expy" ng-model="expy" class="form-control" value="<?php echo $data->experience_in_years?>" required>
                                           
                                            </div>
                                            <div class="form-group col-md-4">
                                               
                                               <label for="certificates">Upload Resume: </label>
                                                 <input class="form-control" type="file" name="upload_resume" value = '{{$data->upload_resume}}'>
   <?php echo $data->upload_resume; ?>
                                               
                                            </div>
                                      </div>
                                      <div class="row">
                                          
                                         
                                          <div class="form-group col-md-4">
                                                 <label for="certificates">Upload Certificates: </label>
                                                 <input class="form-control" type="file" name="upload_certificates" value = '{{$data->upload_certificates}}'>
   <?php echo $data->upload_certificates; ?>
                                               
                                            </div> 
                                            
                                        <div class="form-group col-md-4">
                                                <label for="doj"><span style="color: red">*</span>&nbsp;Date of Joining: </label>
                                            <div class='input-group'>
                                                <input type='text' class="form-control" name="doj" id="doj" value="<?php echo $data->doj ?>" required />
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </span>
                                            </div>
                                           
                                        </div>
                                         <div class="form-group col-md-4">
                                                <label for="dol">Date of Leaving: </label>
                                            <div class='input-group'>
                                                <input type='text' class="form-control" name="dol" id="dol" value="<?php echo $data->dol?>" />
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </span>
                                            </div>
                                           
                                        </div>
                                          
                                        </div>
                                        <div class="row">
                                             
                                            <div class="form-group col-md-4">
                                                <label for="jtype"><span style="color: red">*</span>&nbsp;Job Type: </label>
                                               
                                                <select name="user_type" id="jtype" ng-model="jtype" class="form-control mb-10"
                                                        data-parsley-trigger="change" value="<?php echo $data->user_type?>"
                                                        required>
                                                    <option value="<?php echo $data->user_type?>"><?php echo $data->user_type?></option>
                                                    <option value="Teacher">Teacher</option>
                                                    <option value="Admin">Admin</option>
                                                </select>
                                              
                                               
                                        </div>
                                             
                                             

                                        </div>
                                        
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                                      
                                       <!-- <div class="form-group">
                                            <label for="website">Website: </label>
                                            <input type="text" name="website" id="website" class="form-control" placeholder="http://" pattern="/(https?:\/\/(?:www\.|(?!www))[^\s\.]+\.[^\s]{2,}|www\.[^\s]+\.[^\s]{2,})/">
                                        </div>

                                        <div class="form-group">
                                            <label for="message">Message: </label>
                                            <textarea class="form-control" rows="6" name="message" id="message" placeholder="Type your message" required></textarea>
                                        </div>-->
                                 <div class="tile-footer text-right bg-tr-black lter dvd dvd-top">
                                    <!-- SUBMIT BUTTON -->
                                    {!! Form::submit('Update', array( 'class'=>'btn btn-blue btn-rounded' )) !!}
                                    <!--<input type="submit" class="btn btn-blue btn-rounded" value="Update" id="">-->
                                    <input type="reset" class="btn btn-blue btn-rounded" value="Cancle" id="">
                                 </div>
                    </form>


                                </div>
                                <!-- /tile body -->

                                <!-- tile footer -->
                                
                                <!-- /tile footer -->

                            </section>
                            <!-- /tile -->


                            <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                              <!--  <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Type</strong> Validations</h1>
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
<!--                                <div class="tile-body">
-->

                                    <form class="form-horizontal" name="form4" role="form" id="form4" data-parsley-validate>

                                      <!--  <div class="form-group">
                                            <label class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" name="fc11" class="form-control" placeholder="Email"
                                                       data-parsley-trigger="change"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Url</label>
                                            <div class="col-sm-9">
                                                <input type="url" name="fc12" class="form-control" placeholder="http://"
                                                       data-parsley-trigger="change"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Digits</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="fc13" class="form-control" placeholder="Digits"
                                                       data-parsley-trigger="change"
                                                       data-parsley-type="digits"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Numbers</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="fc14" class="form-control" placeholder="Number"
                                                       data-parsley-trigger="change"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Alphanumeric</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="fc15" class="form-control" placeholder="Alphanumeric"
                                                       data-parsley-trigger="change"
                                                       data-parsley-type="alphanum"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Alpha</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="fc16" class="form-control" placeholder="Alpha"
                                                       data-parsley-trigger="change"
                                                       pattern="/^[a-zA-Z]+$/"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Date ISO</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="fc17" class="form-control" placeholder="YYYY-MM-DD"
                                                       data-parsley-trigger="change"
                                                       pattern="/[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])$/"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Phone</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="fc18" class="form-control" placeholder="(XXX) XXXX XXX" ng-model="fc18"
                                                       data-parsley-trigger="change"
                                                       pattern="^[\d\+\-\.\(\)\/\s]*$"
                                                       required>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full" />

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Equal</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" id="fc19" name="fc19" class="form-control"
                                                               data-parsley-trigger="change"
                                                               required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="fc20" name="fc20" class="form-control"
                                                               data-parsley-trigger="change"
                                                               data-parsley-equalto="#fc19"
                                                               required>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>-->

                                    </form>

<!--                                </div>
-->                                <!-- /tile body -->

                                <!-- tile footer -->
                              <!--  <div class="tile-footer text-right bg-tr-black lter dvd dvd-top">
                                    <!-- SUBMIT BUTTON -->
                                  <!--  <button type="submit" class="btn btn-default" id="form4Submit">Submit</button>
                                </div>
                                <!-- /tile footer -->

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

        </div>












        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
       

        <script src="ncm/js/bootstrap.min.js"></script>

        <script src="ncm/js/jRespond.min.js"></script>

        <script src="ncm/js/jquery.sparkline.min.js"></script>

        <script src="ncm/js/jquery.slimscroll.min.js"></script>

        <script src="ncm/js/jquery.animsition.min.js"></script>

        <script src="ncm/js/screenfull.min.js"></script>

        <script src="ncm/js/parsley.min.js"></script>
           

        <script src="ncm/js/jquery.countTo.js"></script>

       <!-- <script src="ncm/js/daterangepicker/moment.min.js"></script>

        <script src="ncm/js/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>-->

        <script src="ncm/js/jquery.raty-fa.js"></script>

        <script src="ncm/js/typeahead.bundle.min.js"></script>

        <script src="ncm/js/handlebars-v3.0.3.js"></script>

<!--ext-->



     
        <!--/ vendor javascripts -->
{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js') !!}
{!! Html::script('ncm/js/bootstrap.min.js') !!}

{!! Html::script('ncm/js/jRespond.min.js') !!}

{!! Html::script('ncm/js/jquery.sparkline.min.js') !!}
{!! Html::script('ncm/js/jquery.slimscroll.min.js') !!}
{!! Html::script('ncm/js/jquery.animsition.min.js') !!}


{!! Html::script('ncm/js/screenfull.min.js') !!}
{!! Html::script('ncm/js/parsley.min.js') !!}
{!! Html::script('ncm/js/jquery.countTo.js') !!}
{!! Html::script('ncm/js/jquery.raty-fa.js') !!}
{!! Html::script('ncm/js/typeahead.bundle.min.js') !!}
{!! Html::script('ncm/js/handlebars-v3.0.3.js') !!}


{!! Html::script('ncm/js/main.js') !!}
{!! Html::script('https://code.jquery.com/ui/1.12.1/jquery-ui.js') !!}


        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="ncm/js/main.js"></script>
        <!--/ custom javascripts -->

<!--date piceker file starts-->
<!--datepicker file ends-->

<script>
    $(document).ready(function(){
        $("#dol").datepicker({

      numberOfMonths: 1,
      changeMonth:true,
               changeYear:true
        });

  $("#db").datepicker({

      numberOfMonths: 1,
      changeMonth:true,
               changeYear:true,

      onSelect: function(selected) {

        $("#doj").datepicker("option","minDate", selected)

      }

  });

  $("#doj").datepicker({

      numberOfMonths: 1,
      changeMonth:true,
               changeYear:true,

      onSelect: function(selected) {

         $("#db").datepicker("option","maxDate", selected)

      }

  }); 

});
</script>
            <script>
var uploadField = document.getElementById("uploadphoto");

uploadField.onchange = function() {
    if(this.files[0].size > 100000){
       alert("File must be less than 100kb");
       this.value = "";
    }else if(this.files[0].size < 50000){
       alert("File must be more than 50kb");
       this.value = "";
    };
};
    var uploadField = document.getElementById("resume");

uploadField.onchange = function() {
    if(this.files[0].size > 300000){
       alert("File must be less than 300kb");
       this.value = "";
    }else if(this.files[0].size < 50000){
       alert("File must be more than 50kb");
       this.value = "";
    };
};
    var uploadField = document.getElementById("certificates");

uploadField.onchange = function() {
    if(this.files[0].size > 300000){
       alert("File must be less than 300kb");
       this.value = "";
    }else if(this.files[0].size < 50000){
       alert("File must be more than 50kb");
       this.value = "";
    };
};

    </script>
<script>
    document.querySelector("#fname").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^a-zA-Z]/g,"");
});
        
    document.querySelector("#lname").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^a-zA-Z]/g,"");
});
        
    document.querySelector("#phone").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^0-9]/g,"");
});
    document.querySelector("#paadharno").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^0-9]/g,"");
});
        
</script>

        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->


<script>
    angular.module('myApp',[]);
</script>


<!--for datepicker-->

        <!--/ Page Specific Scripts -->


       
    </body>
</html>
