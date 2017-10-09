<!doctype html>

<html class="no-js" lang="">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>OSMS</title>
        <link rel="icon" type="image/ico" href="ncm/images/fav.png" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <link rel="stylesheet" href="ncm/css/bootstrap.min.css">
        <link rel="stylesheet" href="ncm/cssanimate.css">
        <link rel="stylesheet" href="ncm/css/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="ncm/css/animsition.min.css">
       
        <link rel="stylesheet" href="ncm/css/main.css">
       
        <script src="ncm/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
      <body id="" class="appWrapper">
     
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
                                            <li  class="active open"><a href="index.html"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                                            <li>
                                             <a href="#"><i class="fa fa-user"></i> <span>School Information</span> </a>
                                                <ul>
                                                    <li><a href="school-information.html"><i class="fa fa-caret-right"></i>School Info</a></li>
                                                    <li><a href="addschool-info.html"><i class="fa fa-caret-right"></i>Add Branch Details</a></li>
                                                    <li><a href="school-settings.html"><i class="fa fa-caret-right"></i>School Settings</a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li>
                                             <a href="#"><i class="fa fa-user"></i> <span>Student</span> </a>
                                                <ul>
                                                    <li><a href="add-student.html"><i class="fa fa-caret-right"></i>Add Student</a></li>
                                                   <!-- <li><a href="student-profile.html"><i class="fa fa-caret-right"></i>Student Profile</a></li>-->
                                                    <li><a href="student-details.html"><i class="fa fa-caret-right"></i> View Student Details</a></li>
                                                    <li><a href="view-summarizationstudent-data.html"><i class="fa fa-caret-right"></i>View Summarization Details</a></li>
                                                    <li><a href="student-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-user-secret"></i> <span>Parents</span></a>
                                                <ul>
                 <!-- <li><a href="addparent-info.html"><i class="fa fa-caret-right"></i>Add Parent </a></li>-->
                 <li><a href="viewparent-details.html"><i class="fa fa-caret-right"></i>View Parent Details</a></li>
                   <li><a href="parent-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                           </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-user-plus"></i> <span>Teachers</span></a>
                                                <ul>
                                                <li><a href="viewteacher-details.html"><i class="fa fa-caret-right"></i>View Teacher Details</a></li>
                                                    
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
                                     <li><a href="{{ URL::to('addclass') }}"><i class="fa fa-caret-right"></i> Add Class</a></li>
                                     <li><a href="{{ URL::to('viewclass') }}"><i class="fa fa-caret-right"></i> View Class Details</a></li>
                                     <li><a href="{{ URL::to('classsettings') }}"><i class="fa fa-caret-right"></i>Class Settings</a></li>
                                     <li><a href="{{ URL::to('addsection') }}"><i class="fa fa-caret-right"></i> Add Section</a></li>
                                    <li><a href="{{ URL::to('viewsection') }}"><i class="fa fa-caret-right"></i> View Section Details</a></li>
                                     <li><a href="{{ URL::to('sectionsettings') }}"><i class="fa fa-caret-right"></i>Section Settings</a></li>
          
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

                         </ul>
                         </li>
 
                                        </ul>
                                        <!--/ NAVIGATION Content -->
                                    
                                    </div>
                                </div>
                            </div>
                        

                </aside>                <!--/ SIDEBAR Content -->

            </div>
            <!--/ CONTROLS Content -->




            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
              <section id="content">

                <div class="page page-dashboard">

                    <div class="pageheader">

                   <div class="row">
                        <center>
                   <img src="ncm/images/mn-logo.png">
                      </center>
                            </div>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">

                           <h4  style="text-align:center;">Welcome To Admin Dashboard</h4>

                            </ul>

                        </div>

                    </div>

                    <!-- first  row starts -->
                    <div class="row">

                        <!-- col -->
                        <div class="col-md-1" style="border-radius:16px;">
                    
                           </div>

                        <!-- /col -->

                        <!-- col -->
                      <div class="col-md-2">
                       <section class="tile tile-simple">

                                <div class="tile-widget bg-cyan text-center p-30">
                                    <i class=""><img src="ncm/images/student.png"></i>
                                </div>

                                <div class="tile-body text-center">

                                    <h4 class="m-0">Student</h4>

                                </div>

                            </section>
                           </div>
                        <!-- /col -->
                         <!-- col -->
                       <div class="col-md-2">
                       <section class="tile tile-simple">

                                <div class="tile-widget bg-cyan text-center p-30">
                                    <i class=""><img src="ncm/images/parents.png"></i>
                                </div>

                                <div class="tile-body text-center">

                                    <h4 class="m-0">Parent</h4>

                                </div>

                            </section>
                           </div>
                        <!-- /col -->

                        <!-- col -->
                       <div class="col-md-2">
                       <section class="tile tile-simple">

                                <div class="tile-widget bg-cyan text-center p-30">
                                    <i class=""><img src="ncm/images/teacher.png"></i>
                                </div>

                                <div class="tile-body text-center">

                                    <h4 class="m-0">Teacher</h4>

                                </div>

                            </section>
                           </div>
                        <!--col-->
                         <!-- col -->
                       <div class="col-md-2">
                       <section class="tile tile-simple">

                                <div class="tile-widget bg-cyan text-center p-30">
                                    <i class=""><img src="ncm/images/employee.png"></i>
                                </div>

                                <div class="tile-body text-center">

                                    <h4 class="m-0">Employee</h4>

                                </div>

                            </section>
                           </div>
                        <!--col-->
                        <!-- col -->
                      <div class="col-md-2">
                       <section class="tile tile-simple">

                                <div class="tile-widget bg-cyan text-center p-30">
                                    <i class=""><img src="ncm/images/library.png"></i>
                                </div>

                                <div class="tile-body text-center">

                                    <h4 class="m-0">Library</h4>

                                </div>

                            </section>
                           </div>
                        <!--col-->
                         <div class="col-md-1" style="border-radius:16px;">
                     </div>
                    </div>
                    <!-- first row ends -->
                    
                   <!-- second  row starts -->
                    <div class="row">

                        <!-- col -->
                        <div class="col-md-1" style="border-radius:16px;">
                      
                           </div>

                        <!-- /col -->

                        <!-- col -->
                      <div class="col-md-2">
                       <section class="tile tile-simple">

                                <div class="tile-widget bg-cyan text-center p-30">
                                    <i class=""><img src="ncm/images/time-table.png"></i>
                                </div>

                                <div class="tile-body text-center">

                                    <h4 class="m-0">Timetable</h4>

                                </div>

                            </section>
                           </div>
                        <!-- /col -->
                         <!-- col -->
                       <div class="col-md-2">
                       <section class="tile tile-simple">

                                <div class="tile-widget bg-cyan text-center p-30">
                                    <i class=""><img src="ncm/images/messeges.png"></i>
                                </div>

                                <div class="tile-body text-center">

                                    <h4 class="m-0">Messages</h4>

                                </div>

                            </section>
                           </div>
                        <!-- /col -->

                        <!-- col -->
                       <div class="col-md-2">
                       <section class="tile tile-simple">

                                <div class="tile-widget bg-cyan text-center p-30">
                                    <i class=""><img src="ncm/images/transport.png"></i>
                                </div>

                                <div class="tile-body text-center">

                                    <h4 class="m-0">Transport</h4>

                                </div>

                            </section>
                           </div>
                        <!--col-->
                         <!-- col -->
                       <div class="col-md-2">
                       <section class="tile tile-simple">

                                <div class="tile-widget bg-cyan text-center p-30">
                                    <i class=""><img src="ncm/images/accounts.png"></i>
                                </div>

                                <div class="tile-body text-center">

                                    <h4 class="m-0">Accounts</h4>

                                </div>

                            </section>
                           </div>
                        <!--col-->
                        <!-- col -->
                      <div class="col-md-2">
                       <section class="tile tile-simple">

                                <div class="tile-widget bg-cyan text-center p-30">
                                    <i class=""><img src="ncm/images/syllabus.png"></i>
                                </div>

                                <div class="tile-body text-center">

                                    <h4 class="m-0">Syllabus</h4>

                                </div>

                            </section>
                           </div>
                        <!--col-->
                     <div class="col-md-1" style="border-radius:16px;">
                     </div>

                    </div>
                    <!-- second row ends -->

                </div>

                
            </section>
            <!--/ CONTENT -->
         </div>

        <!-- ============================================
        ============== JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
       

        <script src="ncm/js/bootstrap.min.js"></script>

        <script src="ncm/js/jRespond.min.js"></script>

        <script src="ncm/js/jquery.slimscroll.min.js"></script>

        <script src="ncm/js/jquery.animsition.min.js"></script>

        <script src="ncm/js/main.js"></script>








    </body>
</html>
