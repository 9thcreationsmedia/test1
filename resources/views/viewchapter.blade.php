<!doctype html>
 <html class="no-js" lang=""> 
   <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>View chapter Details </title>
        <link rel="icon" type="image/ico" href="ncm/images/fav.png" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <link rel="stylesheet" href="ncm/css/bootstrap.min.css">
        <link rel="stylesheet" href="ncm/css/animate.css">
        <link rel="stylesheet" href="ncm/css/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="ncm/css/animsition.min.css">
        <link rel="stylesheet" href="ncm/css/main.css">
        <!-- ==========================================
        =========================================== -->
        <script src="ncm/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
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
                                            <li><a href="{{ URL ('/') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                                          <!--   <li>
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
                                                    <li><a href="addstudent"><i class="fa fa-caret-right"></i>Add Student</a></li>
                                                   <!-- <li><a href="student-profile.html"><i class="fa fa-caret-right"></i>Student Profile</a></li>-->
                                                    <li><a href="studentdetails"><i class="fa fa-caret-right"></i> View Student Details</a></li>
                                                    <!--<li><a href="view-summarizationstudent-data.html"><i class="fa fa-caret-right"></i>View Summarization Details</a></li>-->
                                                    <li><a href="studentsettings"><i class="fa fa-caret-right"></i>Settings</a></li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-user-secret"></i> <span>Parents</span></a>
                                                <ul>
                                                      <!-- <li><a href="addparent-info.html"><i class="fa fa-caret-right"></i>Add Parent </a></li>-->
                                                       <li><a href="parentdetails"><i class="fa fa-caret-right"></i>View Parent Details</a></li>
                                                       <li><a href="parentsettings"><i class="fa fa-caret-right"></i>Settings</a></li>

                                           </ul>
                                            </li>
                                         <!--    <li>
                                                <a href="#"><i class="fa fa-user-plus"></i> <span>Teachers</span></a>
                                                <ul>
                                                <li><a href="viewteacher-details.html"><i class="fa fa-caret-right"></i>View Teacher Details</a></li>
                                                    
                                                 <li><a href="tech-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                           </ul>
                                            </li>
                                            </li> -->
                                           <!--  <li>
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
         <li><a href="addemployee"><i class="fa fa-caret-right"></i> Add Employee</a></li>
           <li><a href="viewemployee"><i class="fa fa-caret-right"></i>Employee Details</a></li>
                  <li><a href="employeesettings"><i class="fa fa-caret-right"></i>Settings</a></li>

                                                </ul>
                                           </li> -->
                                            <li>
                           <a href="#"><i class="fa fa-sitemap"></i> <span>Class</span></a>
                                                <ul>
                                     <li><a href="{{ URL::to('class') }}"><i class="fa fa-caret-right"></i> Add Class</a></li>
                                  <!--    <li><a href="{{ URL::to('class') }}"><i class="fa fa-caret-right"></i> View Class Details</a></li>
                                     <li><a href="{{ URL::to('class') }}"><i class="fa fa-caret-right"></i>Class Settings</a></li> -->
                                     <li><a href="{{ URL::to('addsection') }}"><i class="fa fa-caret-right"></i> Add Section</a></li>
                                    <li><a href="{{ URL::to('viewsection') }}"><i class="fa fa-caret-right"></i> View Section Details</a></li>
                                     <li><a href="{{ URL::to('sectionsettings') }}"><i class="fa fa-caret-right"></i>Section Settings</a></li>      
                                                </ul>
                                            </li> 
                                            <li  class="active open">
                                                <a href="#"><i class="fa fa-columns"></i> <span>Subjects</span></a>
                                                 <ul>
                  <li><a href="addsubject"><i class="fa fa-caret-right"></i>Add Subject</a></li>
                  <li><a href="addchapter"><i class="fa fa-caret-right"></i> Add Chapter</a></li>
                  <li><a href="viewsubject"><i class="fa fa-caret-right"></i>View Subject</a></li>
                  <li class="active"><a href="viewchapter"><i class="fa fa-caret-right"></i> View Chapter</a></li>
                  <li><a href="subjectsettings"><i class="fa fa-caret-right"></i>Subject Settings</a></li>
                  <li><a href="chaptersettings"><i class="fa fa-caret-right"></i>Chapter Settings</a></li>
             
             </ul>
                                            </li>
                                           <!--  <li>
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
                 <li>
				<a href="#"><i class="fa fa-table"></i> <span>Timetable</span></a>
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
                    <li><a href="reportcard.html"><i class="fa fa-caret-right"></i>Report Card</a></li>

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
 
  -->                    </ul>
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
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">
                            <!-- tile -->
                            <section class="tile">
                                <!-- tile header -->

                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong> View chapter Details </strong></h1>
                                </div>
                                <!-- /tile header -->            
                                <!--form-->
                <form name="form2" role="form" id="form2" data-parsley-validate>
               <div class="row" style="padding:10px;">
         <div class="form-group">
            <!--multiple dropdown functionality-->
                                      
                                        <div style="clear:both;"></div>
                                       
                                        </div>

                                        @if ($message = Session::get('add'))
                                          <div class="alert alert-success">
                                              <p>{{ $message }}</p>
                                          </div>
                                      @endif
                                      
                                    </form>
                                <!--form end-->
                                <!--field ends-->
                                
                                 <div style="clear:both;"></div>
                                <div class="tile-body">
                                    <div class="table-responsive">
                                        <table class="table table-custom" id="editable-usage">
                                            <thead>
                                            <tr>
                                                <th>Subject Name</th>
                                                <th>Class Name</th>
                                                <th>Section Name</th>
                                                <th>Chapter Name</th>
                                                <th>Chapter Number</th>
                                                <th>Chapter Start Date</th>
                                                <th>Chapter End Date</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            
                                            @foreach ($chname as $row)
                                            <tr class="odd gradeX">
                                              
                                              @foreach($sname as $subjectname)
                                                 @if($row->subject_id===$subjectname->id)


                                               <td>{{ $subjectname->subject_name }}</td>
                                                 @endif
                                              @endforeach



                                   @foreach($cname as $classname)
                                        @if($row->class_id===$classname->id)

                                        <td>{{ $classname->class_name }}</td>
                                        @endif
                                     @endforeach



                                     @foreach($secname as $sectionname)
                                        @if($row->section_id===$sectionname->id)

                                        <td>{{ $sectionname->section_name }}</td>
                                        @endif
                                     @endforeach
                                                <td><?php echo $row->chapter_name; ?></td>
                                                <td><?php echo $row->chapter_number; ?></td>
                                                <td><?php echo $row->chapter_start_date; ?></td>
                                                <td><?php echo $row->chapter_end_date; ?></td>
                                                <!--<td class="actions"><a href="add-employee.html">EDIT</a></td>-->  
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
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

        <script src="ncm/js/main.js"></script>

	    <script>
		 
		    $("#beerStyle").change ( function () {
            var targID  = $(this).val ();
            $("div.style-sub-1").hide ();
            $('#' + targID).show ();
            } )
		

		</script>
        <script> 
    $("#Ale2").change ( function () {
    var targID  = $(this).val ();
    $("div.style-sub-2").hide ();
    $('#' + targID).show ();
} )
    </script>
 
    </body>
</html>









