function verif(){
    num=document.getElementById("num").value;
    des=document.getElementById("des").value;
    statut=document.getElementById("statut").selectedIndex;
    epoque=document.getElementById("epoque").value;
    if((isNaN(num))||(num=="")){
        alert("le champs numero de vol est invalide!");
        return false;
    }
    else if((des=="")){
        alert("le champs destination est obligatoire!");
        return false;
    }
    else if(statut==0){
        alert("Veuillez selectionner une statut !");
        return false;
    }
    else if(epoque==""){
        alert("epoque invalide!");
        return false;
    }
    else{
        alert("Les champs sont Verifiées!");
    }
}