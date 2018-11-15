<?php
   /*Dashboard function*/
   function dashboard()
   {
    ?>

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Student Portal</small>
        </h1>
      </section>
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <p>My</p>
						<h3>Results</h3>
                        </div>
                        <div class="icon">
                        <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
						<p>Academic</p>
                        <h3>Registration</h3>
                        </div>
                        <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
						<p>Finance</p>
                        <h3>Statements</h3>
                        </div>
                        <div class="icon">

                        <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
						<p>My</p>
                        <h3>Bio Data</h3>
                        </div>
                        <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    
                    <div class="box box-primary">
                        <div class="box-header">
                        <i class="ion ion-clipboard"></i>
                        <h3 class="box-title">Institute Communications:</h3>
                            <div class="box-tools pull-right">
                                <ul class="pagination pagination-sm inline">
                                    <li><a href="#">&laquo;</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                            <ul class="todo-list">
                                <li>
                                    <span class="handle">
                                        <i class="fa fa-ellipsis-v"></i>
                                        <i class="fa fa-ellipsis-v"></i>
                                    </span>
                            
                                    <span class="text">Staff Meeting</span>
                                    
                                   
                                </li>
                                <li>
                                    <span class="handle">
                                        <i class="fa fa-ellipsis-v"></i>
                                        <i class="fa fa-ellipsis-v"></i>
                                    </span>
                                
                                    <span class="text">Begining of semester two</span>
                             
                                </li>
                                <li>
                                    <span class="handle">
                                        <i class="fa fa-ellipsis-v"></i>
                                        <i class="fa fa-ellipsis-v"></i>
                                    </span>
                                    
                                    <span class="text">End of Semester Exams date set</span>
                                  
                                </li>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix no-border">
                        <button type="button" class="btn btn-default pull-right"><i class="fa fa-eye"></i>&nbsp;View all</button>
                        </div>
                    </div>
                    
                </section>
                <!-- /.Left col -->
            </div>
            <!-- /.row (main row) -->
        </section>
      <!-- /.content -->

<?php
 }
 
 
 /*function for page not found*/
function pagenotfound()
   {
    ?>
        <section class="content-header">
            <h1>
                404 Error Page
            </h1>

        </section>
        <!-- Main content -->
        <section class="content">
            <div class="error-page">
                <h2 class="headline text-yellow"> 404</h2>
                <div class="error-content">
                    <h3><i class="fa fa-warning text-yellow"></i>Oops! Page not found.</h3>
                    <p>
                        We could not find the page you were looking for.
                        Meanwhile, you may <a href="dash.php?token=ZGFzaGJvYXJk">return to dashboard</a> or try using the search form.
                    </p>
                    <form class="search-form">
                        <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                            <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                            </button>
                        </div>
                        </div>
                        <!-- /.input-group -->
                    </form>
                </div>
                <!-- /.error-content -->
            </div>
            <!-- /.error-page -->
        </section>
        <!-- /.content -->
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
        <!--</section>-->
	<?php
   }
   
function singleResult()
	{
	?>	
      <section class="content-header">
        <h1>
          My Academic Results
          <small>Student Portal</small>
        </h1>
      </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12">

									<?php 
									$user_id = $_SESSION['user_id'];
									?>
									
									 <input type='hidden' name="allstudents" class="form-control allstudents" value='<?php echo $user_id; ?>' />
									 

									
										<div class="col-lg-2">
										<label>Academic Year</label>
											<select class="form-control year">
												<option value = "">--Select--</option>
												<option value = "1">Year 1</option>
												<option value = "2">Year 2</option>
												<option value = "3">Year 3</option>
												<option value = "4">Year 4</option>
												<option value = "5">Year 5</option>
												<option value = "allyrs">All Years</option>
											</select>
										</div>
											
                                            <div class="col-lg-2">
                                            <label>Semester</label>
                                                    <select class="form-control semester">
                                                        <option value = "">--Select--</option>
                                                        <option value = "1">Semester 1</option>
                                                        <option value = "2">Semester 2</option>
                                                     
                                            </select>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="checkbox" >
                                                    <label  style="margin-top:20px">
                                                    <input type="checkbox" class="allResults">
                                                    View All Results
                                                    </label>
                                                </div>
                                            </div>
                                            
                                            
                                    <div class="col-lg-2">
                                    <label></label><br>
                                        <button class="btn btn-success btn-flat load-result"><i class="show-fa"></i>&nbsp;Load Result</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content results-wrapper" style="margin-top:-132px;">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                   
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12 details-student">
                              
                                </div>
                                <div class="col-lg-12">
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</section>
	<?php	
	}
	
	
   function studentbiodata($std_id){
       $query = "SELECT * FROM student, programme WHERE student.id = '" . $std_id . "' AND programme.programmeID = student.program";
       include '../config/authModule/real-config.php';
       $query_run = mysqli_query($mysqli, $query);
       $row = mysqli_fetch_array($query_run);
	   $pic_url = '../dist/img/user-avatar.png';
    ?>
        <section class="content-header">
            <h1>
                Bio Data
                <small>Student Portal</small>
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                        <h3 class="box-title"> </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post">
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Student Names:</label>
                                        <input type="text" class="form-control" name = "student_name" value ="<?php echo $row['surname']; ?> <?php echo $row['firstName']; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Registration Number:</label>
                                        <input type="text" class="form-control" name = "regNo" value ="<?php echo $row['regNo']; ?> " disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Gender:</label>
                                        <input type="text" class="form-control" name = "gender" value ="<?php echo $row['gender']; ?> " disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Date of Birth:</label>
                                        <input type="text" class="form-control" name = "dob" value ="<?php echo $row['dob']; ?> " disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nationality:</label>
                                        <input type="text" class="form-control" name = "nationality" value ="<?php echo $row['nationality']; ?> " disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hall of Residence:</label>
                                        <input type="text" class="form-control" name = "nationality" value ="<?php echo $row['hallOfResidence']; ?> " disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Religion:</label>
                                        <input type="text" class="form-control" name = "religion" value ="<?php echo $row['religion']; ?> " disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Contact:</label>
                                        <input type="text" class="form-control" name = "religion" value ="<?php echo $row['telNo']; ?> " disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email Address:</label>
                                        <input type="text" class="form-control" name = "email" value ="<?php echo $row['email']; ?> " disabled>
                                    </div>

                            </div>
							<div class="col-md-6">
								<div class="form-group">
									<br>
								
									<div class='col-lg-12 text-left'>
										<div class='center-div'>
											<img src='<?php echo $pic_url; ?>' class='img-thumbnail' width='200px'/>
										</div>
										<br/>
										<h5><b>Full Names:</b> <?php echo $row['surname']; ?> <?php echo $row['firstName']; ?></h5>
										<h5><b>Registration No:</b> <?php echo $row['regNo']; ?> </h4>
										<h5><b>Program:</b> <?php echo $row['name']; ?> (<?php echo $row['code']; ?>)</h5>
									</div> 
								
								
								</div>
							</div>
                            <!--</div>-->
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
<?php
   }
   
   
   
 function studentfinancerecords($std_id){
    ?>
        <section class="content-header">
            <h1>
                My Financial Statements:
                <small>Student Portal</small>
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                        <h3 class="box-title"> </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
						</b>
						Students Financial statements available here<br><br>
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
<?php
   }
   
   
   
 function registration($std_id){
       $query = "SELECT * FROM student, programme WHERE student.id = '" . $std_id . "' AND programme.programmeID = student.program";
       include '../config/authModule/real-config.php';
       $query_run = mysqli_query($mysqli, $query);
       $row = mysqli_fetch_array($query_run);
    ?>
        <section class="content-header">
            <h1>
                Student Registration:
                <small>Student Portal</small>
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $row['name']; ?> (<?php echo $row['code']; ?>) - Year 1, Semister Two </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
						</b>
						
						
						<div class='panel panel-primary'>
							<div class='panel-heading'>
								<h5><b>Undertaken Courses</b></h5>
							</div>
							<div class='panel-body table-scrollable'>
							<table class='table table-striped margin-negative-10' style="width: 70%";>
								<tr>
									<th style="width: 20%";> COURSE CODE </th>
									<th style="width: 60%";> COURSE NAME </th>
									<th style="width: 20%";> CREDIT UNITS </th>
								</tr>
								
							<?php
							   $query = "SELECT * FROM 
							   student, programme, academic_session
							   WHERE student.id = '" . $std_id . "' 
							   AND programme.programmeID = student.program
							   AND academic_session.academicSessionID = student.academicSessionID
							   AND academic_session.status = 'Active'
							   ";
							   include '../config/authModule/real-config.php';
							   $query_run = mysqli_query($mysqli, $query);
							   $row = mysqli_fetch_array($query_run);
							   
								   if($row > 0){
								   //Check for courseunits of the year of study and program, get programID, semister and year of study
								   $programID = $row['programmeID'];
								   $departmentID = $row['department_departmentid'];
								   $currentSem = $row['semister'];
								   $studentYear = $row['yearOfStudy'];
								   $student_status = $row['student_status'];
								   $firstName = $row['firstName'];
								   
									   $query = "SELECT * FROM courseunit WHERE semesterOffered='$currentSem' AND yearOffered='$studentYear' AND programme_programmeID='$programID'";
									   include '../config/authModule/real-config.php';
									   $query_run = mysqli_query($mysqli, $query);

											 while ($courseuit = mysqli_fetch_array($query_run)){
												$coursecode = $courseuit['courseunitCode'];
												$courseName = $courseuit['name'];
												$courseCU = $courseuit['creditUnits'];
												?>
													<tr>
														<th style="width: 20%";> <?php echo $coursecode; ?></th>
														<th style="width: 60%";><a href=""> <?php echo $courseName; ?> </a></th>
														<th style="width: 20%";> <?php echo $courseCU; ?></th>
													</tr>
											<?php
											  }
										
												//Registration button here
												if($student_status == 'Inactive'){
												?>
													<tr>
														<th colspan='3'> <br><br><button class="btn btn-success btn-flat student-registration"><i class="show-fa"></i>Register Now</button></th>
													</tr>												
												<?php									
												}else if($student_status == 'Active'){ 
												?>
													<tr>
														<th colspan='3'> <br><br> <h4><b>Notice:</b> Hello <?php echo $firstName; ?>, You are Registered for this Academic Session</h4>  </th>
													</tr>												
												<?php
												}

								   }else {
								   //Student can not authorized register!
										?>
											<tr>
												<th colspan='3'> <br><br> <h4><b>Notice:</b> Hello <?php echo $firstName; ?>, You are not Authorised to register for this academic s</h4>  </th>
											</tr>												
										<?php								 
								   
								   }
							?>
								

								</table>
							</div>
						</div>
						
					</div>
					</div>	
						
						<h3>Registration Guidelines:</h3>
						
						1. You must have cleared atleast 70% of your tution<br><br>
						2. Should you have registration difficulties upon clearing 70% of your tution, please contact your faculty head<br><br>
						3. Only students with 100% of tution fees will be granted access to the final examinations<br><br>
						4. Registration deadline for this semister slated to a week before the final exams<br><br>
						5. Always clear on time to avoid any Inconvenience						
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
<?php
   }
   
 
 
 function retake($std_id){
       $query = "SELECT * FROM student, programme WHERE student.id = '" . $std_id . "' AND programme.programmeID = student.program";
       include '../config/authModule/real-config.php';
       $query_run = mysqli_query($mysqli, $query);
       $row = mysqli_fetch_array($query_run);
    ?>
        <section class="content-header">
            <h1>
                Retakes & Carry Overs:
                <small>Student Portal</small>
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $row['name']; ?> (<?php echo $row['code']; ?>) </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
						</b>
						
						
						<div class='panel panel-primary'>
							<div class='panel-heading'>
								<h5><b>You have the following retakes / Carryovers</b></h5>
							</div>
							<div class='panel-body table-scrollable'>
							<table class='table table-striped margin-negative-10' style="width: 70%";>
								<tr>
									<th style="width: 20%";> COURSE CODE </th>
									<th style="width: 40%";> COURSE UNIT </th>
									<th style="width: 20%";> SESSION OFFERED </th>
									<th style="width: 20%";> RETAKE REGISTER </th>
								</tr>
								
									<?php

									getCourseunits($prog,$semester,$year);
									

									?>
								</table>
								<BR><b>RETAKE COURSES REGISTERED FOR (ACADEMIC YEAR: 2015/16):</b><br><br>
								
								
								<ol>
								<li><a href="">Introduction to Computer Programming</a></li>
								<li><a href="">Bussiness Ethics</a></li>
								<li><a href="">Communication Skills and Essentials</a></li>
								<li><a href="">Java Programming</a></li>
								</ol>
							</div>
						</div>
						
					</div>
					</div>					
                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
<?php
   }