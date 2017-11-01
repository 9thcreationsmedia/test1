<!doctype html>

 <html class="no-js" lang=""> 



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>View Employee Details </title>
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
        <link rel="stylesheet" href="ncm/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="ncm/css/datatables.bootstrap.min.css">
        <link rel="stylesheet" href="ncm/css/dataTables.colReorder.min.css">
        <link rel="stylesheet" href="ncm/css/dataTables.responsive.css">
        <link rel="stylesheet" href="ncm/css/dataTables.colVis.min.css">
        <link rel="stylesheet" href="ncm/css/dataTables.tableTools.min.css">

        <!-- project main css files -->
        <link rel="stylesheet" href="ncm/css/main.css">
        <!--/ stylesheets -->



        <!-- ==========================================
        ================= Modernizr ===================
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
                        <a class="brand" href="index.html">
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
                                                 
                                                    <li><a href="student-details.html"><i class="fa fa-caret-right"></i> View Student Details</a></li>
                                                    <li><a href="view-summarizationstudent-data.html"><i class="fa fa-caret-right"></i>View Summarization Details</a></li>
                                                    <li><a href="student-settings.html"><i class="fa fa-caret-right"></i>Settings</a></li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-user-secret"></i> <span>Parents</span></a>
                                                <ul>
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
                                            <li  class="active">
                            <a role="button" tabindex="0"><i class="fa fa-user"></i> <span>Employee</span></a>
                                                <ul>
         <li><a href="{{ URL::to('addemployee') }}"><i class="fa fa-caret-right"></i> Add Employee</a></li>
           <li><a href="{{ URL::to('viewemployee') }}"><i class="fa fa-caret-right"></i>Employee Details</a></li>
                  <li><a href="{{ URL::to('employeesettings') }}"><i class="fa fa-caret-right"></i>Settings</a></li>

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

                    
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">


                           
                            <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title custom-font">Add Class</h3>
                    </div>
                    <div class="modal-body">
                       <div class="tile-body">

                               <form name="form2" role="form" id="form2" data-parsley-validate>
                                      <div class="row">
                                         <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">User Type</label>
                                            <div class="col-sm-8">
                                                  <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                  
                                        </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                          <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">Status</label>
                                            <div class="col-sm-8">
                                                 <select name="f2" class="form-control mb-10"
                                                        data-parsley-trigger="change"
                                                        required>
                                                    <option value="">Select option...</option>
                                                    <option value="foo">Active</option>
                                                    <option value="bar">In Active</option>
                                                
                                                </select>
                                            </div>
                  
                                        </div>
                                        </div>
                                        </div>
                    </div>
                    <div class="modal-footer">
                    <button class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c"><i class="fa fa-arrow-left"></i>Add</button>
                        <button class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"  data-dismiss="modal"><i class="fa fa-arrow-right"></i>Cancel</button>
                        
                    </div>
                </div>
            </div>
        </div>
		</form>
	   		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title custom-font">Add Class</h3>
                    </div>
                    <div class="modal-body">
                       <div class="tile-body">

                            <form name="form2" role="form" id="form2" data-parsley-validate>
                                      <div class="row">
                                         <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">Student-Id</label>
                                            <div class="col-sm-8">
                                                  <input type="text" name="fname" id="fname" class="form-control" required>
                                            </div>
                  
                                        </div>
                                        </div>
                                        <br>
                                       
                                        </div>
                    </div>
                    <div class="modal-footer">
                    <button class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c"><i class="fa fa-arrow-left"></i>Update</button>
                        <button class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"  data-dismiss="modal"><i class="fa fa-arrow-right"></i>Cancel</button>
                        
                    </div>
                </div>
            </div>
        </div>
		</form>

                                
                                
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong> Employee Settings </strong></h1>
									
                                </div>
                                <!-- /tile header -->
                                                      



                                <!--form-->
                <form name="form2" role="form" id="form2" data-parsley-validate>

               <div class="row" style="padding:10px;">
              
         <div class="form-group">
            <!--multiple dropdown functionality-->

<!--   
   <div class="ccms_form_element cfdiv_custom" id="style_container_div">
<label for="input01" class="col-sm-1 control-label">Search By</label>
<div class="col-sm-3">
     
    <select size="1" id="beerStyle" class=" validate['required'] form-control mb-6" title="" type="select" name="style">
<option value="">-Select-</option>
<option value="Ale">Class</option>
<!--<option value="Lager">Section</option>-->
<!--<option value="Hybrid">name</option>-->
<!--
</select><div class="clear"></div><div id="error-message-style"></div></div>
<div id="Ale"  class="style-sub-1"  style="display: none;" name="stylesub1" onchange="ChangeDropdowns(this.value)">
  <label for="input01" class="col-sm-1 control-label">Select</label>
  <div class="col-sm-3">
    <select id="Ale2" class="form-control mb-6">
      <option value="">-Select-</option> 
      <option value="First">1st Class</option>
      <option value="Second">2nd Class</option>
       <option value="Third">3rd Class</option>
    </select>
    </div>
</div>

<div class="clear"></div><div id="error-message-style-sub-1"></div></div>
 -->    
<!--multiple dropdown close-->
     
                                      
                                        <div style="clear:both;"></div>
                                       
                                        </div>
                                      
                                    </form>
                                <!--form end-->
                                <!--field ends-->
                                
                                 <div style="clear:both;"></div>
                                <div class="tile-body">
                                    <div class="table-responsive">
                                        <table class="table table-custom" id="editable-usage">
                                            <thead>
                                            <tr>
                                              <th>Photo</th>
                                              <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>User Type</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Qualification</th>
                                                <th>Years Of Experience</th>
                                                
                                                <th>Resume</th>
                                                <th>Edit</th>

                                               
                                                
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            
                                            @foreach ($data as $row)
                                            <tr class="odd gradeX">

                                              @if($row->upload_photo!="")
                                                <td><a href='{{ asset("uploads/$row->upload_photo") }}'><img src='{{ asset("uploads/$row->upload_photo") }}' width="50" height="50"/></a></td>
                                                @else
                                                <td>Not Uploaded</td>
                                                @endif
                                                <td><?php echo $row->employee_fname; ?></td>
                                               <td><?php echo $row->employee_lname; ?></td>
                                                <td><?php echo $row->user_type; ?></td>
                                               <td><?php echo $row->email; ?></td>
                                                <td><?php echo $row->phone; ?></td>
                                                <td><?php echo $row->qualification; ?></td>
                                                <td><?php echo $row->experience_in_years; ?></td>
                                                
                                                 @if($row->upload_resume!="")
                                                <td><a href='{{ asset("uploads/$row->upload_resume") }}'><?php echo $row->upload_resume;?></a></td>
                                                @else
                                                <td>Not uploaded</td>
                                                @endif

                                                 <td><a href="{{ URL::to('employeeupdateform') }}/{{$row->id}}">EDIT/<a id="delete" data-confirm="Are you sure to delete this item?" href="{{ URL::to('employeedelete')}}/{{$row->id}}" onclick = "myFunction()">DELETE</a></a></td>
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


<script>
var deleteLinks = document.querySelectorAll('#delete');

for (var i = 0; i < deleteLinks.length; i++) {
  deleteLinks[i].addEventListener('click', function(event) {
      event.preventDefault();

      var choice = confirm(this.getAttribute('data-confirm'));

      if (choice) {
        window.location.href = this.getAttribute('href');
      }
  });
}
</script>
              



        </div>
        <!--/ Application Content -->














        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!--<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>-->

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




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="ncm/js/main.js"></script>
        <!--/ custom javascripts -->

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









