function edit(id) {
    //get the id from the button
    document.getElementById("task-id").value = id;
    //get the title 
    document.getElementById("task-title").value = document.getElementById(id).children[1].children[0].innerHTML;
    //get the date
    //error in datetime task
    document.getElementById("task-date").value = document.getElementById(id).children[1].children[1].children[0].children[1].innerHTM;
}
