<?php
    //INCLUDE DATABASE FILE
    include('database.php');
    //SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
    session_start();
    

    //ROUTING
    if(isset($_POST['save']))        saveTask();
    if(isset($_POST['update']))      updateTask();
    if(isset($_POST['delete']))      deleteTask();
    

    function getTasks($status)
    {
        //CODE HERE
          //SQL SELECT
          include('database.php');

$requettasks = " SELECT tasks.id,tasks.title,tasks.task_datetime,tasks.description,tasks.status_id,tasks.priority_id,types.name as 'type' ,priorities.name as 'priority' FROM tasks,types,priorities where (status_id=$status and tasks.type_id=types.id and tasks.priority_id=priorities.id)ORDER BY id desc ";
$tasksRequet = mysqli_query($connexion, $requettasks);


        while ($tasks = mysqli_fetch_assoc($tasksRequet)) { 
           ( ($tasks['status_id']==1)? $typeIcon='fa-question ' : ($tasks['status_id']==2))?$typeIcon='fa-calendar':$typeIcon='fa-check'
            ?>
            <button data-bs-toggle="modal" data-bs-target="#modal-task" onclick="edit(<?php echo $tasks['id']?>)" id="<?php echo $tasks['id']?>"  class="d-flex button aligns-items-center w-100 border p-1 ">
                <div class=" col-md-1 ">
                    <i class="fa  <?php echo $typeIcon.' '.'text-success'?>"></i>
                </div>
                <div class=" col-md-8 text-start">
                    <div class=" fw-bold"><?php echo $tasks['title'];?></div>
                    <div class=" ">
                        <div class=" text-black-50">#<?php echo $tasks['id'] . 'created in ' . $tasks['task_datetime'] ;?></div>
                        <div class=" " title="<?php echo $tasks['description']; ?>"><?php echo substr($tasks['description'], 0, 20) . '...' ?></div>
                    </div>
                    <div class=" ">
                        <span class=" col-md-auto btn btn-primary rounded-bottom rounded-top "><?php echo $tasks['priority']; ?></span>
                        <span class="col-md-auto btn btn-gray "><?php echo $tasks['type'] ;?></span>
                    </div>
                </div>
            </button>

    <?php } ?>


      
    <?php                          
						
       // echo "Fetch all tasks";
        
    }


    function saveTask()
    {
        
        //CODE HERE
        //SQL INSERT
    //    global $connexion;
       include('database.php');
        $title = isset($_POST['title'])  ?  $_POST['title']   :   '';

        $type = isset($_POST['task-type'])   ?   $_POST['task-type']    :   0;

        $priority = isset($_POST['priority'])  ?  $_POST['priority']   :   '0';

        $status = isset($_POST['status'])  ?  $_POST['status']   :   '0';

        $date = isset($_POST['date'])  ?  $_POST['date']   :   '0';

        $description = isset($_POST['description'])  ?  $_POST['description']   :   '0000-00-00';
   //   echo $title.'<br>'.$type.'<br>'.$priority.'<br>'.$status.'<br>'.$date.'<br>'.$description;
// INSERT IN DATABASE
     $requet = "insert into tasks (title,task_datetime,description,type_id,priority_id,status_id) VALUES ('$title','$date','$description',$type,$priority,$status)";
     $ajouterTask=mysqli_query($connexion,$requet);
     if($ajouterTask){

        $_SESSION['message'] = "Task has been added successfully !";
		header('location: index.php');
     }else{
        echo 'error';
     }
      
    }

    function updateTask()
    {
        //CODE HERE
        //SQL UPDATE
        $_SESSION['message'] = "Task has been updated successfully !";
		header('location: index.php');
        
    }

    function deleteTask()
    {
        //CODE HERE
        //SQL DELETE
        $_SESSION['message'] = "Task has been deleted successfully !";
		header('location: index.php');
    }

?>