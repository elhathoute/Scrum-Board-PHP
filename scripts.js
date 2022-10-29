function edit(id) {
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
   (type=='Feature') ? (document.getElementById("task-type-feature").checked=true) : (document.getElementById("task-type-bug").checked=true) ;
   //get the priority
     let priority = document.getElementById(id).children[1].children[2].children[0].innerHTML;

            if(priority=='Critical'){
                document.getElementById("priority-1").selected=true;
            }else if(priority=='Hight'){
                document.getElementById("priority-2").selected=true;
            }else if(priority=='Meduim'){
                document.getElementById("priority-3").selected=true;
            }else if(priority=='Low'){
                document.getElementById("priority-4").selected=true
            }else{
                alert('error');
            }
    //get the status
        document.getElementById('to-do-tasks').addEventListener("click",(e)=>{
            document.getElementById("todo").selected=true;
        });
        document.getElementById('in-progress-tasks').addEventListener("click",(e)=>{
            document.getElementById("inProgress").selected=true;
        });
        document.getElementById('done-tasks').addEventListener("click",(e)=>{
            document.getElementById("done").selected=true;
        });

document.getElementById('task-save-btn').style.display='none';


}
// document.getElementById('task-delete-btn').addEventListener("click",(e)=>{
    
//    if( confirm('Are you sure to remove this Tasks ?')){}
// })
