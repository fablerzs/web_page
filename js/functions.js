
function toggle(menu_expanded){
    const toggleMenu = document.getElementById(menu_expanded);
    if(toggleMenu.style.display === "none"){
        toggleMenu.style.display = "block";
    }else{
        toggleMenu.style.display = "none";
    }
}