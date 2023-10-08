
document.getElementById("affiche").addEventListener("click",get_comm);
function get_comm(){
 
    fetch("../php/api.php").then(rep=> rep.text()).then(data=> {
    let com=document.getElementById("commentaires");
    com.innerHTML=data;
    });
    
}
