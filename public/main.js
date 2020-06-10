function drop(id){
    element = document.getElementById(id).classList.toggle("show");  
  }
$(".dosenwali").click(function() {
    var change = document.getElementById("namaDosenWali");  
    change.innerHTML = $(this).val();  
    drop('selectDosenWali');
});  