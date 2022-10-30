<?php
    //INCLUDE DATABASE FILE
    include('database.php');
    //SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
    session_start();
    

    //ROUTING
    if(isset($_POST['save']))        saveTask();
    if(isset($_POST['update']))      updateTask();
    if(isset($_POST['delete']))      deleteTask();
    

    function getTasks($status,$size,$page)
    {
        //CODE HERE
          //SQL SELECT
          include('database.php');
        //   $size=isset($_GET['size'] ) ?$_GET['size']: 3;    
        //   $page=isset($_GET['page'] ) ?$_GET['page']: 1;
        $debut= ($page-1)*$size ; 
$requettasks = " SELECT tasks.id,tasks.title,tasks.task_datetime,tasks.description,tasks.status_id,tasks.priority_id,types.name as 'type' ,priorities.name as 'priority',statues.name as'status' FROM tasks,types,priorities,statues where (status_id=$status and tasks.type_id=types.id and tasks.priority_id=priorities.id and tasks.status_id=statues.id )ORDER BY id desc limit $debut,$size ";
$tasksRequet = mysqli_query($connexion, $requettasks);


        while ($tasks = mysqli_fetch_assoc($tasksRequet)) { 
           if($tasks['status_id']==1) {($typeIcon='fa-question ' );}
            else if ($tasks['status_id']==2) {($typeIcon='fa-calendar');} 
             else if($tasks['status_id']==3){( $typeIcon='fa-check');}
            ?>
            <button data-bs-toggle="modal" data-bs-target="#modal-task" onclick="edit(<?php echo $tasks['id']?>)" id="<?php echo $tasks['id']?>"  class="d-flex button aligns-items-center w-100 border p-1 ">
                <div class=" col-md-1 ">
                    <i class="fa  <?php echo $typeIcon.' '.'text-success'?>"></i>
                </div>
                <div class=" col-md-8 text-start">
                    <div class=" fw-bold"><?php echo $tasks['title'];?></div>
                    <div class=" ">
                        <div class=" text-black-50"># <span><?php echo $tasks['id'];?></span> created in <span><?php echo $tasks['task_datetime'] ;?></span></div>
                        <div class=" " title="<?php echo $tasks['description']; ?>"><?php echo substr($tasks['description'], 0, 20) . '...' ?></div>
                    </div>
                    <div class=" ">
                        <span class=" col-md-auto btn btn-primary rounded-bottom rounded-top "><?php echo $tasks['priority']; ?></span>
                        <span class="col-md-auto btn btn-gray"><?php echo $tasks['type'] ;?></span>
                        
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
        $date = isset($_POST['date'])  ?  $_POST['date']   :'';
       if($date==''){
        //date and time now if user is not entrer a date exact
        $date=date("y-m-d h:i:s");
       }
           
    

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
        include('database.php');
        $id=isset($_POST['id'])  ?  $_POST['id']   :   '';

        $title = isset($_POST['title'])  ?  $_POST['title']   :   '';

        $type = isset($_POST['task-type'])   ?   $_POST['task-type']    :   0;

        $priority = isset($_POST['priority'])  ?  $_POST['priority']   :   '0';

        $status = isset($_POST['status'])  ?  $_POST['status']   :   '0';

        $date = isset($_POST['date'])  ?  $_POST['date']   :   '0000-00-00';

        $description = isset($_POST['description'])  ?  $_POST['description']   :   '';  

        $requet = "update tasks set title='$title',task_datetime='$date',description='$description',type_id=$type,priority_id=$priority,status_id=$status where id=$id ";
        $updateTask=mysqli_query($connexion,$requet);

        if($updateTask){
            $_SESSION['message'] = "Task has been updated successfully !";
            header('location: index.php');
        }
      
        
    }

    function deleteTask()
    {
        //CODE HERE
        //SQL DELETE
        include('database.php');
        $id=isset($_POST['id'])  ?  $_POST['id']   :   '';
        $requet = "delete from tasks where id=$id ";
        $deleteTask=mysqli_query($connexion,$requet);
        if($deleteTask){
            $_SESSION['message'] = "Task has been deleted successfully !";
            header('location: index.php');
        }
       
    }

?>
