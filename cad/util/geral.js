function logout(){
    $.post("../server/logout.php").done(
        function(data){
            console.log(data);
            window.location.href = "../";
        }
    );
}