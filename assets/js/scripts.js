 $(document).ready(function() {
   
     $("#inputSearch").keyup(function() {
         var search = $("#inputSearch").val();
         $.ajax({
            "url":"searchTask.php",
            "method":"POST",
            "data":{
                inputSearch:search
            },
            success:function(result){
                $('#to-do-tasks').html(result);
             
            },
            error:function(error){
              console.log("error message is :"+error);
            },
            beforeSend:function(){
              $("#to-do-tasks").html('<img src="charg9.gif" style="height:160px;width:160px;margin-left:30%;">');
            }

         });
   
        
     });
    //validtion form with jquery
    //validate title
    $('#task-title').css('border','1px dashed red');
    $('#task-title').css('border','1px dashed red');
    $('#task-title').blur(function(){
        
        if($(this).val().length<4){

            $(this).css('border','1px dashed red');
           $(this).parent().find('.error-message').fadeIn(200);
        }else{
           $(this).parent().find('.error-message').fadeOut(200);
           $(this).css('border','1px solid green');
    
        }
    });
     //validate priority
     $('#task-priority').css('border','1px dashed red');
     $('#task-priority').parent().find('.error-message').fadeIn(200);
      $('#task-priority').change(function(){
       
        if($(this).val()=='')
        {
            $(this).css('border','1px dashed red');
           $(this).parent().find('.error-message').fadeIn(200);
        }else{
           $(this).parent().find('.error-message').fadeOut(200);
           $(this).css('border','1px solid green'); 
        }
      
    });
  
       //validate STATUS
       $('#task-status').css('border','1px dashed red');
       $('#task-status').parent().find('.error-message').fadeIn(200);
       $('#task-status').change(function(){
       
        if($(this).val()=='')
        {
            $(this).css('border','1px dashed red');
           $(this).parent().find('.error-message').fadeIn(200);
        }else{
           $(this).parent().find('.error-message').fadeOut(200);
           $(this).css('border','1px solid green');

        }
    });
    
  
   

});

function edit(id) {
    //change the title of modal
    document.getElementById("header-task").innerHTML = '<h5>UPDATE TASK</h5>';
    //get the id from the button
    document.getElementById("task-id").value = id;
    //get the title 
    document.getElementById("task-title").value = document.getElementById(id).children[1].children[0].innerHTML;
    //get the dateTime
    document.getElementById("task-date").value = document.getElementById(id).children[1].children[1].children[0].children[1].innerHTML;
    //get the description 
    document.getElementById("task-description").value = document.getElementById(id).children[1].children[1].children[1].innerHTML;
    //get the type
    let type = document.getElementById(id).children[1].children[2].children[1].innerHTML;
    (type == 'Feature') ? (document.getElementById("task-type-feature").checked = true) : (document.getElementById("task-type-bug").checked = true);
    //get the priority
    let priority = document.getElementById(id).children[1].children[2].children[0].innerHTML;
    if (priority == 'Critical') {
        document.getElementById("priority-1").selected = true;
    } else if (priority == 'Hight') {
        document.getElementById("priority-2").selected = true;
    } else if (priority == 'Meduim') {
        document.getElementById("priority-3").selected = true;
    } else if (priority == 'Low') {
        document.getElementById("priority-4").selected = true
    } else {
        alert('error');
    }
    //get the status
    document.getElementById('to-do-tasks').addEventListener("click", (e) => {
        document.getElementById("todo").selected = true;
    });
    document.getElementById('in-progress-tasks').addEventListener("click", (e) => {
        document.getElementById("inProgress").selected = true;
    });
    document.getElementById('done-tasks').addEventListener("click", (e) => {
        document.getElementById("done").selected = true;
    });
    //disabled btn of save
    document.getElementById('task-save-btn').style.display = 'none';
    document.getElementById("task-update-btn").style.display = 'block';
    document.getElementById("task-delete-btn").style.display = 'block';
}
//disabled btn of update and delete
document.getElementById("addTaskBtn").addEventListener("click", () => {
  
    //reset formulaire
    resetForm();
    document.getElementById("task-update-btn").style.display = 'none';
    document.getElementById("task-delete-btn").style.display = 'none';
    // document.getElementById('task-save-btn').style.display = 'block';
    // $('#task-save-btn').hide();
    $('#task-save-btn').prop( "disabled", true );
   
    
})
function resetForm() {
    document.getElementById("task-title").value = '';
    document.getElementById("task-type-feature").checked = true;
    document.getElementById("task-type-bug").checked = false;
    document.getElementById("task-description").value = '';
    document.getElementById("task-date").value = '';
    document.getElementById("task-priority").value = '';
    document.getElementById("task-status").value = '';

}

