<?php
    //INCLUDE DATABASE FILE
    include('database.php');
    $search=isset($_POST['inputSearch'])  ?  $_POST['inputSearch']   :'';
  
    $requetSearch = " SELECT tasks.*,types.name as 'type' ,priorities.name as 'priority' FROM tasks,types,priorities 
    where( status_id=1 and tasks.type_id=types.id and tasks.priority_id=priorities.id )and ((title like '%$search%') or tasks.id like '%$search%'  ) ";
    $tasksSearch = mysqli_query($connexion,$requetSearch);
  if(mysqli_num_rows($tasksSearch)){
            while($search=mysqli_fetch_assoc($tasksSearch)) { 
                if($search['status_id']==1) {($typeIcon='fa-question ' );}
            else if ($search['status_id']==2) {($typeIcon='fa-calendar');} 
             else if($search['status_id']==3){( $typeIcon='fa-check');}
                
                ?>
         	<div class="list-group list-group-flush rounded-bottom overflow-hidden panel-body p-0 " id="to-do-search">
          
             <button data-bs-toggle="modal" data-bs-target="#modal-task" onclick="edit(<?php echo $search['id']?>)" id="<?php echo $search['id']?>"  class="d-flex button aligns-items-center w-100 border p-1 ">
                <div class=" col-md-1 ">
                    <i class="fa  <?php echo $typeIcon.' '.'text-success'?>"></i>
                </div>
                <div class=" col-md-8 text-start">
                    <div class=" fw-bold"><?php echo $search['title'];?></div>
                    <div class=" ">
                        <div class=" text-black-50"># <span><?php echo $search['id'];?></span> created in <span><?php echo $search['task_datetime'] ;?></span></div>
                        <div class=" " title="<?php echo $search['description']; ?>"><?php echo substr($search['description'], 0, 20) . '...' ?></div>
                    </div>
                    <div class=" ">
                        <span class=" col-md-auto btn btn-primary rounded-bottom rounded-top "><?php echo $search['priority']; ?></span>
                        <span class="col-md-auto btn btn-gray"><?php echo $search['type'] ;?></span>
                        
                    </div>
                </div>
             </button>
        </div>
        <?php
    }
}else {
    ?>
    <div class="d-flex flex-column justify-content-center align-items-center">
         <h5 class="text-danger">Aucune Task Trouver !</h5>
        <img class="w-25" src="charg9.gif" ">
    </div>
       
        <?php
}

    ?>