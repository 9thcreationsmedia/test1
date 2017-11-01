<!doctype html>
<html class="no-js" lang="" ng-app="myApp" ng-cloak> 
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>OSMS</title>
        <link rel="icon" type="image/ico" href="ncm/images/fav.png" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- ============================================
        ================= Stylesheets ===================-->
        <link rel="stylesheet" href="ncm/css/bootstrap.min.css">
        <link rel="stylesheet" href="ncm/css/animate.css">
        <link rel="stylesheet" href="ncm/css/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="ncm/css/animsition.min.css">
        <link rel="stylesheet" href="ncm/css/main.css">
        <link rel="stylesheet" href="ncm/css/bootstrap-datetimepicker.min.css">      
        <!--/ stylesheets -->
        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="ncm/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <!--/ modernizr -->
        <style>
            .ermsg{
                width: auto;
                height: 2px;
                background-color: transparent;
            }
        </style>
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
                        <a class="brand" href="{{ URL ('/') }}">
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
                                        <a data-toggle="collapse" href="#sidebarNav"> </a>
                                    </h4>
                                </div>
                                <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">
                                        <!-- ===================================================
                                        ================= NAVIGATION Content ===================
                                        ==================================================== -->
                                        <ul id="navigation">
                                            <li><a href="{{ URL ('/') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                                           <!--  <li>
                                             <a href="#"><i class="fa fa-user"></i> <span>School Information</span> </a>
                                                <ul>
                                                    <li><a href="school-information.html"><i class="fa fa-caret-right"></i>School Info</a></li>
                                                    <li><a href="addschool-info.html"><i class="fa fa-caret-right"></i>Add Branch Details</a></li>
                                                    <li><a href="school-settings.html"><i class="fa fa-caret-right"></i>School Settings</a></li>
                                                    
                                                </ul>
                                            </li> -->
                                            <li>
                                             <a href="#"><i class="fa fa-user"></i> <span>Student</span> </a>
                                                <ul>
                                                    
                                                    <!-- <li><a href="{{url('studentdetails')}}"><i class="fa fa-caret-right"></i> View Student Details</a></li> -->
                                                    <li><a href="{{url('studentsettings')}}"><i class="fa fa-caret-right"></i>Student Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="active open">
                                                <a href="#"><i class="fa fa-user-secret"></i> <span>Parents</span></a>
                                                <ul>
                                                  <li class="active"><a href="{{url('parent')}}"><i class="fa fa-caret-right"></i>Add Parent</a></li>
                                                       <!-- <li><a href="{{url('parentdetails')}}"><i class="fa fa-caret-right"></i>View Parent Details</a></li> -->
                                                       <li><a href="{{url('parentsettings')}}"><i class="fa fa-caret-right"></i>Parent Details</a></li>
                                           </ul>
                                            </li>
                                           <!--  <li>
                                                <a href="#"><i class="fa fa-user-plus"></i> <span>Teachers</span></a>
                                                <ul>
                                                <li><a href="viewteacher-details.html"><i class="fa fa-caret-right"></i>View Teacher Details</a></li>
                                                    
                                                 <li><a href="tech-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                           </ul>
                                            </li> -->
                                           <!--  <li>
      <a href="#"><i class="fa fa-users"></i> <span>Users</span> </a>
                                                <ul>
                             <li><a href="add-user.html"><i class="fa fa-caret-right"></i>Add User</a></li>
                   <li><a href="view-user.html"><i class="fa fa-caret-right"></i> View User</a></li>
                                      <li><a href="user-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                                   
                                                </ul>
                                            </li> -->
                                           <!--  <li>
                            <a role="button" tabindex="0"><i class="fa fa-user"></i> <span>Employee</span></a>
                                                <ul>
         <li><a href="{{url('addemployee')}}"><i class="fa fa-caret-right"></i> Add Employee</a></li>
           <li><a href="{{url('viewemployee')}}"><i class="fa fa-caret-right"></i>Employee Details</a></li>
                  <li><a href="{{url('employeesettings')}}"><i class="fa fa-caret-right"></i>Settings</a></li>

                                                </ul>
                                           </li> -->
                                            <li>
                           <a href="#"><i class="fa fa-sitemap"></i> <span>Class</span></a>
                                                <ul>
                                     <li><a href="{{ URL::to('class') }}"><i class="fa fa-caret-right"></i> Add Class</a></li>
                                   <!--   <li><a href="{{ URL::to('class') }}"><i class="fa fa-caret-right"></i> View Class Details</a></li>
                                     <li><a href="{{ URL::to('class') }}"><i class="fa fa-caret-right"></i>Class Settings</a></li> -->
                                     <li><a href="{{ URL::to('addsection') }}"><i class="fa fa-caret-right"></i> Add Section</a></li>
                                    <li><a href="{{ URL::to('viewsection') }}"><i class="fa fa-caret-right"></i> View Section Details</a></li>
                                     <li><a href="{{ URL::to('sectionsettings') }}"><i class="fa fa-caret-right"></i>Section Settings</a></li>
          
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
                                         <!--    <li>
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
                                            </li> -->
                                         <!--    <li>
                                                <a href="add-library.html"><i class="fa  fa-institution "></i> <span>Library</span></a>
                                                <ul>
                     <li><a href="add-books.html"><i class="fa fa-caret-right"></i>Add Books</a></li>
                    <li><a href="view-books.html"><i class="fa fa-caret-right"></i>View Books</a></li>
                    <li><a href="issue-books.html"><i class="fa fa-caret-right"></i>Issue Books</a></li>
                     <li><a href="update-book.html"><i class="fa fa-caret-right"></i>Update Books</a></li>
                                       <li><a href="library-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                                </ul>
                                            </li> -->
             <!--    <li><a href="#"><i class="fa fa-table"></i> <span>Timetable</span></a>
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
                </li> -->
                        <!--  <li><a href="#"><i class="fa fa-table"></i> <span>Exam</span></a>
                         <ul>
                     <li><a href="add-exam.html"><i class="fa fa-caret-right"></i>Add Exam</a></li>
                    <li><a href="add-marks.html"><i class="fa fa-caret-right"></i>Add Marks</a></li>
                    <li><a href="report-card.html"><i class="fa fa-caret-right"></i>Report Card</a></li>

                              </ul>
                            </li> -->
                       <!--    <li><a href="#"><i class="fa fa-bar-chart-o"></i> <span>Syllabus</span></a>
                          <ul>
                          <li><a href="syllabus-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                          </ul>               
                          </li> -->

                         <!-- <li>
                          <a href="#"><i class="fa fa-home"></i> <span>Hostel</span></a>              
                        <ul> 
                         <li><a href="add-building.html"><i class="fa fa-caret-right"></i>Add Building</a></li>
                        <li><a href="add-room.html"><i class="fa fa-caret-right"></i>Add Room</a></li>               
            <li><a href="room-availability.html"><i class="fa fa-caret-right"></i>Room Availability</a></li>
                        <li><a href="room-allocation.html"><i class="fa fa-caret-right"></i>Room Allocation</a></li>                   
            <li><a href="view-hostel-students.html"><i class="fa fa-caret-right"></i>View Hostel Students</a></li>
                        <li><a href="hostel-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>
                        </ul>   
                        </li> -->

                        <!--  <li>
                         <a href="#"><i class="fa fa-edit"></i> <span>Leave</span></a>
                         <ul>
                         <li><a href="holidays-list.html"><i class="fa fa-caret-right"></i>Holiday List</a></li>
                         <li><a href="request-for-leave.html"><i class="fa fa-caret-right"></i>Request for Leave</a></li>
                         <li><a href="leave-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                         </ul>
                         </li> -->
                        <!--  <li>
                         <a href="#"><i class="fa fa-envelope"></i> <span>Messages</span></a>
                          <ul>
                         <li><a href="message-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                         </ul>
                         </li> -->
                       <!--   <li>
                         <a href="#"><i class="fa fa-pencil"></i> <span>Accounts</span></a>
                         <ul>
                         <li><a href="account-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                         </ul>
                         </li> -->
                        <!--   <li>
                         <a href="#"><i class="fa fa-taxi"></i> <span>Transport</span></a>
                         <ul>
                         <li><a href="transport-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                         </ul>
                         </li> -->
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
                <div class="page page-forms-validate">         
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                          <div class="col-md-12">
                            <!-- tile -->
                            <section class="tile">
                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong style="text-align:center;">Add Parent/Guardian Details</strong></h1>
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
                                    <form name="form" role="form" id="form" method="post" action="parent" enctype="multipart/form-data">
                                    
                                                                        
                                        



                                         
                                        
                                            <div class="form-group col-md-4">
                                                <label for="pfname"><span style="color: red">*</span>&nbsp;First Name: </label>
                                                <input type="text" name="pfname" id="pfname" ng-model="pfname" class="form-control" pattern="^[a-zA-Z]{2,}$" required>
                                                <div class="ermsg">
                                                <span style="color: red" ng-show="form.pfname.$touched && form.pfname.$invalid">
                                                    <span ng-show="form.pfname.$error.required">First Name Required</span>
                                                    <span ng-show="!form.pfname.$error.required && form.pfname.$invalid">'min-2-letters'</span>
                                                </span></div>
                                            </div>
                                             <div class="form-group col-md-4">
                                                <label for="plname"><span style="color: red">*</span>&nbsp;Last Name: </label>
                                                <input type="text" name="plname" id="plname" ng-model="plname" class="form-control" pattern="^[a-zA-Z]{1,}$" required>
                                                 <div class="ermsg">
                                                <span style="color: red" ng-show="form.plname.$touched && form.plname.$invalid">
                                                    <span ng-show="form.plname.$error.required">First Name Required</span>
                                                    <span ng-show="!form.plname.$error.required && form.plname.$invalid">'min-2-letters'</span>
                                                </span></div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="pgender"><span style="color: red">*</span>&nbsp;Gender: </label>
                                               
                                                <select name="pgender" id="pgender" ng-model="pgender" class="form-control mb-10"
                                                        
                                                        required>
                                                    <option value="">Select option...</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                                <div class="ermsg">
                                                <span style="color: red" ng-show="form.pgender.$touched && form.pgender.$invalid">
                                                    <span ng-show="form.pgender.$error.required">Required field</span>
                                                </span></div>
                                               
                                        </div>
                                        
                                        <div style="clear:both;"></div>
                                            <div class="form-group col-md-4">
                                                <label for="prelation"><span style="color: red">*</span>&nbsp;Relation With Student: </label>
                                               
                                                <select name="prelation" id="prelation" ng-model="prelation" class="form-control mb-10"
                                                        
                                                        required>
                                                    <option value="">Select option...</option>
                                                    <option value="mother">Mother</option>
                                                    <option value="father">Father</option>
                                                    <option value="guardian">Guardian</option>

                                                </select>
                                                <div class="ermsg">
                                                <span style="color: red" ng-show="form.prelation.$touched && form.prelation.$invalid">
                                                    <span ng-show="form.prelation.$error.required">Required field</span>
                                                </span></div>
                                               
                                        </div>


                                           <div class="form-group col-md-4">
                                                <label for="phone"><span style="color: red">*</span>&nbsp;Contact No: </label>
                                                <input type="tel" name="pcontact" ng-model="phone" id="phone" class="form-control" pattern="^[7-9]{1}[0-9]{9}$" maxlength="10" required>
                                               <div class="ermsg">
                                                <span style="color: red" ng-show="form.phone.$touched && form.phone.$invalid">
                                                    <span ng-show="form.phone.$error.required">Phone Number Required</span>
                                                    <span ng-show="!form.phone.$error.required && form.phone.$invalid">Enter 10 digit phone number</span>
                                                </span></div>
                                            </div>
  
                                           <div class="form-group col-md-4">
                                                <label for="pemail">Email: </label>
                                                <input type="pemail" id="pemail" ng-model="pemail" name="pemail" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                                       data-parsley-trigger="change"
                                                       >
                                                
                                            </div>
                                            
                                        <div style="clear:both;"></div>
                                             <div class="form-group col-md-4">
                                                <label for="paadharno">Aadhar No: </label>
                                                <input type="text" name="parent_aadhar" ng-model="paadharno" id="paadharno" class="form-control" placeholder="" maxlength="12" pattern="^\d{12}$" required data-parsley-trigger="change">
                                                 
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="panno">Pan No: </label>
                                                <input type="text" name="parent_pan" ng-model="panno" id="panno" class="form-control" placeholder="" pattern="^[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}$" maxlength="10"
                                                       data-parsley-trigger="change"
                                                       >
                                                
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="qualification">Qualification:(Optional) </label>
                                               <select name="parent_qualification" id="qualification" class="form-control mb-10">
                                                    <option value="">Select option...</option>
                                                    <option value="Graduate">Graduate</option>
                                                    <option value="Postgraduation">Postgraduation</option>

                                                </select>
                                            </div>
                                            
                                        <div style="clear:both;"></div>
                                          
                                          
                                                      <div class="form-group col-md-4">
                                                <label for="puploadphoto">Upload Photo: </label>
                                                <input type="file" name="pphoto" id="puploadphoto" class="form-control" placeholder="Email" accept="image/jpeg, image/jpg, image/png">
                                            </div>
                                            
                                            
                                            <!-- <div class="form-group col-md-4">
                                                <label for="certificates">Certificates:(optinal) </label>
                                                <input type="file" name="fc11" class="form-control" placeholder="Email"
                                                       
                                                       required>
                                            </div>
                                             <div class="form-group col-md-4">
                                                <label for="certificates">TC:(optional) </label>
                                                <input type="file" name="fc11" class="form-control" placeholder="Email"
                                                       
                                                       required>
                                            </div>-->
                                            
                                             <div class="form-group col-md-4">
                                                <label for="bloodgroup">Bloodgroup:(Optional) </label>
                                               
                                                <select name="parent_bloodgroup" id="bloodgroup" class="form-control mb-10">
                                                    <option value="">Select option...</option>
                                                    <option value="A+">A +</option>
                                                    <option value="A-">A -</option>
                                                    <option value="B+">B +</option>
                                                    <option value="B-">B -</option>
                                                    <option value="AB+">AB +</option>
                                                    <option value="AB-">AB -</option>
                                                    <option value="O+">O +</option>
                                                    <option value="O-">O -</option>

                                                </select>
                                               
                                        </div>
                                        <div class="form-group col-md-4">
                                                <label for="pcaste">Caste: </label>
                                               
                                                <select name="pcaste" id="pcaste" ng-model="pcaste" class="form-control mb-10">
                                                    <option value="">Select option...</option>
                                                    <option value="oc">OC</option>
                                                    <option value="bc">BC</option>
                                                </select>
                                         
                                               
                                        </div>


                                         <div class="form-group col-md-4">
                                                <label for="religion">Religion: </label>
                                               
                                                <select name="religion" id="religion" ng-model="religion" class="form-control mb-10">
                                                    <option value="">Select option...</option>
                                                    <option value="hindu">Hindu</option>
                                                    <option value="muslim">Muselim</option>
                                                </select>
                                             
                                               
                                        </div>




                                        <div class="form-group col-md-4">
                                                <label for="pstate"><span style="color: red">*</span>&nbsp;State: </label>
                                               
                                                <select name="pstate" id="state" ng-model="state" class="form-control mb-10" required>
                                                    <option value="">Select option...</option>
                                                    <option value="oc">Telanagana</option>
                                                    <option value="bc">Andhrapradesh</option>
                                                </select>
                                            
                                               
                                        </div>

                                        <div class="form-group col-md-4">
                                                <label for="pcaste"><span style="color: red">*</span>&nbsp;City: </label>
                                               
                                                <select name="city" id="city" ng-model="city" class="form-control mb-10"
                                                        
                                                        required>
                                                    <option value="">Select option...</option>
                                                    <option value="oc">Hyderabad</option>
                                                    <option value="bc">Bangalore</option>
                                                </select>
                                           
                                               
                                        </div>
                                         <div class="form-group col-md-4">
                                                <label for="phone">Zip: </label>
                                                <input type="text" name="zip" ng-model="zip" id="zip" class="form-control" maxlength="20">
                                               
                                            </div>
                                        <div style="clear:both;"></div>
                                              <div class="form-group col-md-4">
                                            <label for="preaddr"><span style="color: red">*</span>&nbsp;Present Address: </label>
                                            <textarea class="form-control" rows="6" name="present_add" id="preaddr" placeholder="Type your address" ng-model="preaddr" required></textarea>
                                                  
                                        </div>
                                       
                                        <div class="form-group col-md-4">
                                            <label for="peraddr"><span style="color: red">*</span>&nbsp;Permanent Address: </label>
                                            <textarea class="form-control" rows="6" name="perm_add" id="peraddr" placeholder="Type your address" ng-model="peraddr" required></textarea>
                                            
                                        </div>



                                        <div class="form-group col-md-4">
                                                <label for="dob">DOB: </label>
                                            <div class='input-group date' id='par_datetimepicker1'>
                                                <input type='text' class="form-control" name="par_dob" id="par_dob" />
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </span>
                                                
                                            </div>
                                               
                                        </div>
           
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      
                                        </div>
                                        <div style="clear:both;"></div>
                                      
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
                                    <button type="submit" class="btn btn-lightred" id="">Add</button>
                                </div>
                                    </form>

                                </div>
                                <!-- /tile body -->

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
      
        <script src="ncm/js/bootstrap.min.js"></script>

        <script src="ncm/js/jRespond.min.js"></script>


        <script src="ncm/js/jquery.slimscroll.min.js"></script>

        <script src="ncm/js/jquery.animsition.min.js"></script>

        <script src="ncm/js/screenfull.min.js"></script>

        <script src="ncm/js/moment.min.js"></script>

        <script src="ncm/js/bootstrap-datetimepicker.min.js"></script>


        <script src="ncm/js/main.js"></script>
        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <!--for datepicker-->
        <script>
            $(window).load(function(){

                $('#datepicker-inline').datetimepicker({
                    inline: true
                });

                $('#datetimepicker1').datetimepicker();
                $('#datetimepicker2').datetimepicker();
                $('#par_datetimepicker1').datetimepicker();

             
            });
        </script>
   <script>
    angular.module("myApp",[]);
</script>
    <script>
    document.querySelector("#fname").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^a-zA-Z]/g,"");
});
        document.querySelector("#pfname").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^a-zA-Z]/g,"");
});
    document.querySelector("#lname").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^a-zA-Z]/g,"");
});
        document.querySelector("#plname").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^a-zA-Z]/g,"");
});
    document.querySelector("#phone").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^0-9]/g,"");
});
    document.querySelector("#aadharno").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^0-9]/g,"");
});
        document.querySelector("#paadharno").addEventListener("keyup",function(){
        this.value=this.value.replace(/[^0-9]/g,"");
});
</script>
        <!--/ Page Specific Scripts -->

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
    var uploadField = document.getElementById("puploadphoto");

uploadField.onchange = function() {
    if(this.files[0].size > 100000){
       alert("File must be less than 100kb");
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
    var uploadField = document.getElementById("tc");

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
      
    </body>
</html>
