function callSideBar(){
    var sidebar = $("#sidebar");
    if(sidebar.css("display") == "none"){
        sidebar.css("display", "block");
        // sidebar.slideToggle(500);
    } else {
        sidebar.css("display", "none");
    }
}