<?php
include('scripts.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>YouCode | Scrum Board</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
	<link href="assets/css/scrum.css" rel="stylesheet" />

	<!-- ================== END core-css ================== -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> 
	

	<!-- ================== END core-JQUery ================== -->
</head>

<body>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->

	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed">
		<!-- BEGIN #header -->
		<div id="header" class="app-header">
			<!-- BEGIN navbar-header -->
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b class="me-1">YouCode</b> Projects</a>
				<button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- END navbar-header -->
			<!-- BEGIN header-nav -->
						
			<div class="navbar-nav">
				<div class="navbar-item navbar-form">
					<form action="searchTask.php" method="POST" name="">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter keyword" id="" name=""/>
							<button  name="search" type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					</form>
					
				</div>
				<div class="navbar-item dropdown">
					<a href="#" data-bs-toggle="dropdown" class="navbar-link dropdown-toggle icon">
						<i class="fa fa-bell"></i>
						<span class="badge">5</span>
					</a>
					<div class="dropdown-menu media-list dropdown-menu-end">
						<div class="dropdown-header">NOTIFICATIONS (5)</div>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-bug media-object bg-gray-500"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
								<div class="text-muted fs-10px">3 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<img src="assets/img/user/user-1.jpg" class="media-object" alt="" />
								<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">John Smith</h6>
								<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
								<div class="text-muted fs-10px">25 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<img src="assets/img/user/user-2.jpg" class="media-object" alt="" />
								<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">Olivia</h6>
								<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
								<div class="text-muted fs-10px">35 minutes ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-plus media-object bg-gray-500"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading"> New User Registered</h6>
								<div class="text-muted fs-10px">1 hour ago</div>
							</div>
						</a>
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-envelope media-object bg-gray-500"></i>
								<i class="fab fa-google text-warning media-object-icon fs-14px"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading"> New Email From John</h6>
								<div class="text-muted fs-10px">2 hour ago</div>
							</div>
						</a>
						<div class="dropdown-footer text-center">
							<a href="javascript:;" class="text-decoration-none">View more</a>
						</div>
					</div>
				</div>

				<div class="navbar-item navbar-user dropdown">
					<a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
						<img src="assets/img/user/user-13.jpg" alt="" />
						<span>
							<span class="d-none d-md-inline">Jilali Smith</span>
							<b class="caret"></b>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-end me-1">
						<a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<a href="javascript:;" class="dropdown-item d-flex align-items-center">
							Inbox
							<span class="badge bg-danger rounded-pill ms-auto pb-4px">2</span>
						</a>
						<a href="javascript:;" class="dropdown-item">Calendar</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
						<a href="javascript:;" class="dropdown-item">Log Out</a>
					</div>
				</div>
			</div>
			<!-- END header-nav -->
		</div>
		<!-- END #header -->

		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
					<div class="menu-profile">
						<a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
							<div class="menu-profile-cover with-shadow"></div>
							<div class="menu-profile-image">
								<img src="assets/img/user/user-13.jpg" alt="" />
							</div>
							<div class="menu-profile-info">
								<div class="d-flex align-items-center">
									<div class="flex-grow-1">
										Jilali Smith
									</div>
									<div class="menu-caret ms-auto"></div>
								</div>
								<small>Front end developer</small>
							</div>
						</a>
					</div>
					<div id="appSidebarProfileMenu" class="collapse">
						<div class="menu-item pt-5px">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-cog"></i></div>
								<div class="menu-text">Settings</div>
							</a>
						</div>
						<div class="menu-item">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
								<div class="menu-text"> Send Feedback</div>
							</a>
						</div>
						<div class="menu-item pb-5px">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-question-circle"></i></div>
								<div class="menu-text"> Helps</div>
							</a>
						</div>
						<div class="menu-divider m-0"></div>
					</div>
					<div class="menu-header">Navigation</div>

					<div class="menu-item">
						<a href="index.html" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-list-check"></i>
							</div>
							<div class="menu-text">Scrum Board</div>
						</a>
					</div>

					<!-- BEGIN minify-button -->
					<div class="menu-item d-flex">
						<a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
					</div>
					<!-- END minify-button -->
				</div>
				<!-- END menu -->
			</div>
			<!-- END scrollbar -->
		</div>
		<div class="app-sidebar-bg"></div>
		<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
		<!-- END #sidebar -->

		<!-- BEGIN #content -->
		<div id="content" class="app-content" style="min-height: 100vh; background: url(assets/img/cover/cover-scrum-board.png) no-repeat fixed; background-size1: 360px; background-position: right bottom;">
			<div class="d-flex align-items-center mb-3">
				<div>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
						<li class="breadcrumb-item active">Scrum Board </li>
					</ol>
					<!-- BEGIN page-header -->
					<h1 class="page-header mb-0">
						Scrum Board
					</h1>
					<!-- END page-header -->
				</div>

				<div class="ms-auto">
					<a id="addTaskBtn" href="#modal-task" data-bs-toggle="modal" class="btn btn-success btn-rounded px-4 rounded-pill"><i class="fa fa-plus fa-lg me-2 ms-n2 text-success-900"></i> Add Task</a>
				</div>
			</div>

			<div class="mb-3 d-md-flex fw-bold">
				<div class="dropdown-toggle">
					<a href="#" data-bs-toggle="dropdown" class="text-decoration-none text-dark"><i class="far fa-folder fa-fw text-dark text-opacity-50 me-1"></i> project/sprint-2 <b class="caret"></b></a>
					<div class="dropdown-menu dropdown-menu-start">
						<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw fa-lg text-gray-500 me-1"></i> project/mobile-app-dev</a>
						<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw fa-lg text-gray-500 me-1"></i> project/bootstrap-5</a>
						<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw fa-lg text-gray-500 me-1"></i> project/mvc-version</a>
						<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw fa-lg text-gray-500 me-1"></i> project/ruby-version</a>
					</div>
				</div>
				<div class="ms-md-4 mt-md-0 mt-2"><i class="fa fa-code-branch fa-fw me-1 text-dark text-opacity-50"></i> 1,392 pull request</div>
				<div class="ms-md-4 mt-md-0 mt-2"><i class="fa fa-users-cog fa-fw me-1 text-dark text-opacity-50"></i> 52 participant</div>
				<div class="ms-md-4 mt-md-0 mt-2"><i class="far fa-clock fa-fw me-1 text-dark text-opacity-50"></i> 14 day(s)</div>
			</div>

			<?php if (isset($_SESSION['message'])) : ?>
				<div class="alert alert-green alert-dismissible fade show">
					<strong>Success!</strong>
					<?php
					echo $_SESSION['message'];
					unset($_SESSION['message']);
					?>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
				</div>
			<?php endif ?>
			<?php if (isset($_SESSION['message1'])) : ?>
				<div class="alert alert-warning alert-dismissible fade show">
					<strong>Success!</strong>
					<?php
					echo $_SESSION['message1'];
					unset($_SESSION['message1']);
					?>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
				</div>
			<?php endif ?>
			<?php if (isset($_SESSION['message2'])) : ?>
				<div class="alert alert-danger alert-dismissible fade show">
					<strong>Success!</strong>
					<?php
					echo $_SESSION['message2'];
					unset($_SESSION['message2']);
					?>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
				</div>
			<?php endif ?>
			<div class="row">

				<div class="col-xl-4 col-lg-6 ">
					<div class="panel panel-inverse">
						<div class="panel-heading ">
							<?php 
							include('database.php');
							$size=isset($_GET['size'] ) ? $_GET['size']: 4;    
                            $page=isset($_GET['page'] ) ? $_GET['page']: 1;
                                 $todo = "SELECT count(tasks.id) as 'id',statues.id as 'id_statu' ,statues.name as 'status' FROM tasks,statues  WHERE (tasks.status_id=statues.id and status_id=1 ) ";
								 $resultTodo = mysqli_query($connexion, $todo);
								 $todo = mysqli_fetch_assoc($resultTodo);
								 $nbrOfTodo= $todo['id'];
                                 $restOfDevision= $nbrOfTodo%$size;
								 ($restOfDevision==0) ? ($nbrOfPage=$nbrOfTodo/$size ) : ($nbrOfPage = floor($nbrOfTodo/$size)+1);
								 $previous=$page-1;
								 $next=$page+1;
							?>
							<h4 class="panel-title"><?php echo $todo['status'] ;?> (<span id="to-do-tasks-count"><?php echo  $nbrOfTodo;?></span>)</h4>
							<!-- search task of todo -->
							<?php if( $nbrOfTodo>0){ ?>
							<div class="d-flex  w-20 form-group bg-white rounded-pill w-50 me-2 ">
							<input type="text" class="search form-control rounded-pill " placeholder="search" id="inputSearch" name="inputSearch" autocomplete="none"/>
							</div>
							<?php } ?>
						
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="list-group list-group-flush rounded-bottom overflow-hidden panel-body p-0 " id="to-do-tasks">
							<!-- TO DO TASKS HERE -->
							
							<?php
							//PHP CODE HERE
							//DATA FROM getTasks() FUNCTION
							getTasks($todo['id_statu'],$size,$page);
							?>
						</div>
						 <?php if($nbrOfTodo>4) { ?> 
						<div class="rounded-bottom panel-footer p-0 bg-dark">
						<nav aria-label="Page navigation example">
							<ul class="pagination justify-content-center mt-3">
								<li class="page-item">
								<a class="page-link bg-success" href="index.php?page=<?php if($previous!=0) {echo $previous;}else{echo 1;}?>" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
								</li>
								<?php for($i=1;$i<=$nbrOfPage;$i++) {?>
								<li class="<?php if($i == $page) echo'active'?> page-item"><a class="page-link" href="index.php?page=<?php echo $i;?>" ><?php echo $i;?></a></li>
								<?php } ?>
								<li class="page-item">
								<a class="page-link bg-warning" href="index.php?page=<?php if($next<$i) {echo $next;}else{echo 1;}?>" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
								</li>
							</ul>
						</nav>
						</div>

					<?php  } ?>
					
								
					</div>
					
				</div>
				<div class="col-xl-4 col-lg-6">
					<div class="panel panel-inverse">
						<div class="panel-heading">
						<?php 
							include('database.php');
							$size1=isset($_GET['size1'] ) ?$_GET['size1']: 4;    
                            $page1=isset($_GET['page1'] ) ?$_GET['page1']: 1;
                                 $inProg = "SELECT count(tasks.id)as 'id',statues.id as 'id_statu' ,statues.name as 'status' FROM tasks,statues  WHERE (tasks.status_id=statues.id and status_id=2)";
								 $resultInprog = mysqli_query($connexion,  $inProg);
								 $inProgr = mysqli_fetch_assoc($resultInprog);
								 $nbrOfInProgress= $inProgr['id'];
                                 $restOfDevision= $nbrOfInProgress%$size1;
								 ($restOfDevision==0) ? ($nbrOfPage=$nbrOfInProgress/$size1 ) : ($nbrOfPage = floor($nbrOfInProgress/$size1)+1);
								 $previous=$page1-1;
								 $next=$page1+1;
							?>
							<h4 class="panel-title"><?php echo $inProgr['status'] ;?>  (<span id="in-progress-tasks-count"><?php echo $inProgr['id']; ?></span>)</h4>
							<!-- search in progress -->
							<div class="d-flex  w-20 form-group bg-white rounded-pill w-50 me-2 ">
							<input type="text" class=" search form-control rounded-pill " placeholder="search" id="inputSearch1" name="inputSearch1"/>
							</div>
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="list-group list-group-flush rounded-bottom overflow-hidden panel-body p-0" id="in-progress-tasks">
							<!-- IN PROGRESS TASKS HERE -->
							<?php
							//PHP CODE HERE
							//DATA FROM getTasks() FUNCTION
							getTasks($inProgr['id_statu'],$size1,$page1);
							?>
						</div>
						<!-- si il ya 5 tasks  -->
						<?php if($nbrOfInProgress>4) { ?> 
						<div class="rounded-bottom panel-footer p-0 bg-dark">
						<nav aria-label="Page navigation example">
							<ul class="pagination justify-content-center mt-3">
								<li class="page-item">
								<a class="page-link bg-success" href="index.php?page1=<?php if($previous!=0) {echo $previous;}else{echo 1;}?>" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
								</li>
								<?php for($i=1;$i<=$nbrOfPage;$i++) {?>
								<li class="<?php if($i == $page1) echo'active'?> page-item"><a class="page-link" href="index.php?page1=<?php echo $i;?>" ><?php echo $i;?></a></li>
								<?php } ?>
								<li class="page-item">
								<a class="page-link bg-warning" href="index.php?page1=<?php if($next<$i) {echo $next;}else{echo 1;}?>" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
								</li>
							</ul>
						</nav>
						</div>

					<?php  } ?>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6">
					<div class="panel panel-inverse">
						<div class="panel-heading">
						<?php 
							include('database.php');
							$size2=isset($_GET['size2'] ) ?$_GET['size2']: 4;    
                            $page2=isset($_GET['page2'] ) ?$_GET['page2']: 1;
							$done = "SELECT count(tasks.id) as 'id',statues.id as 'id_statu' ,statues.name as 'status' FROM tasks,statues WHERE (tasks.status_id=statues.id and status_id=3 )";
							$resultDone = mysqli_query($connexion, $done);
							$done = mysqli_fetch_assoc($resultDone);
							     $nbrOfDone=$done['id'];
                                 $restOfDevision= $nbrOfDone%$size2;
								 ($restOfDevision==0) ? ($nbrOfPage=$nbrOfDone/$size2 ) : ($nbrOfPage = floor($nbrOfDone/$size2)+1);
								 $previous=$page2-1;
								 $next=$page2+1;
							?>
							<h4 class="panel-title"><?php echo $done['status'] ;?>(<span id="done-tasks-count"><?php echo $done['id'];?></span>)</h4>
							<!-- search task of done -->
							<div class="d-flex  w-20 form-group bg-white rounded-pill w-50 me-2 ">
							<input type="text" class="search form-control rounded-pill " placeholder="search" id="inputSearch" name="inputSearch" autocomplete="none"/>
							</div>
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="list-group list-group-flush rounded-bottom overflow-hidden panel-body p-0" id="done-tasks">
							<!-- DONE TASKS HERE -->
							<?php
							//PHP CODE HERE
							//DATA FROM getTasks() FUNCTION
							getTasks($done['id_statu'],$size2,$page2);
							?>
						</div>
						<?php if($nbrOfDone>4) { ?> 
						<div class="rounded-bottom panel-footer p-0 bg-dark">
						<nav aria-label="Page navigation example">
							<ul class="pagination justify-content-center mt-3">
								<li class="page-item">
								<a class="page-link bg-success" href="index.php?page2=<?php if($previous!=0) {echo $previous;}else{echo 1;}?>" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
								</li>
								<?php for($i=1;$i<=$nbrOfPage;$i++) {?>
								<li class="<?php if($i == $page2) echo'active'?> page-item"><a class="page-link" href="index.php?page2=<?php echo $i;?>" ><?php echo $i;?></a></li>
								<?php } ?>
								<li class="page-item">
								<a class="page-link bg-warning" href="index.php?page2=<?php if($next<$i) {echo $next;}else{echo 1;}?>" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
								</li>
							</ul>
						</nav>
						</div>

					<?php  } ?>
					</div>
				</div>
			</div>
		</div>
		<!-- END #content -->


		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->

	<!-- TASK MODAL -->
	<div class="modal fade" id="modal-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="scripts.php" method="POST" id="form-task" >
					<div class="modal-header">
						<h5 id="header-task" class="modal-title">Add Task</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
						<!-- This Input Allows Storing Task Index  -->
						<div class="mb-3">
							<input type="hidden" class="form-control" id="task-id" value="" name="id" >
						</div>
						
						<div class="mb-3 ">
							<label class="form-label">Title</label>
							<input type="text" class="form-control" id="task-title" name="title" autocomplete="off"  placeholder="Exemple:task12"/>
							<div class="alert alert-danger error-message">
								<i class="fa fa-warning"></i>
                               title must be larger than <strong>4</strong> characters
							</div>
						</div>
						<div class="mb-3">
							<label class="form-label">Type</label>
							<div class="ms-3">
								<div class="form-check mb-1">
									<input class="form-check-input" name="task-type" type="radio" value=1 id="task-type-feature"  checked/>
									<label class="form-check-label" for="task-type-feature">Feature</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" name="task-type" type="radio" value=2 id="task-type-bug" />
									<label class="form-check-label" for="task-type-bug">Bug</label>
								</div>
								
								
							</div>
						</div>
						<div class="mb-3 ">
							<label class="form-label">Priority</label>
							<select class="form-select" id="task-priority" name="priority" >
								<option  value="" >Please select</option>
								<option id="priority-1" value=1>Critical</option>
								<option id="priority-2"value=2>High</option>
								<option id="priority-3" value=3>Medium</option>
								<option id="priority-4"value=4>Low</option>
							</select>
							<div class="alert alert-danger error-message">
							<i class="fa fa-warning"></i>
                               please select <strong>priority</strong> 
							</div>
						</div>
						<div class="mb-3">
							<label class="form-label">Status</label>
							<select class="form-select" id="task-status" name="status" >
								<option value="">Please select</option>
								<option id="todo" value=1>To Do</option>
								<option id="inProgress" value=2>In Progress</option>
								<option id="done" value=3>Done</option>
							</select>
							<div class="alert alert-danger error-message">
							<i class="fa fa-warning"></i>
							please select <strong>status</strong> 
							
							</div>
							
						</div>
						<div class="mb-3">
							<label class="form-label">Date</label>
							<input type="date" class="form-control" id="task-date" name="date" />
						</div>
						<div class="mb-0 ">
							<label class="form-label">Description</label>
							<textarea class="form-control" rows="10" id="task-description" name="description" ></textarea>
							
						</div>

					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="delete" class="btn btn-danger task-action-btn" id="task-delete-btn" onclick="return confirm('sure to delete this task!'); ">Delete</a>
							<button type="submit" name="update" class="btn btn-warning task-action-btn" id="task-update-btn">Update</a>
								<button type="submit" name="save" class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- ================== BEGIN core-js ================== -->
	<script src="assets/js/vendor.min.js"></script>
	<script src="assets/js/app.min.js"></script>

	<script src="assets/js/scripts.js"></script>
	
	<!-- ================== END core-js ================== -->
	


	<script>
		//reloadTasks();
	</script>
</body>

</html>
