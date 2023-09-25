sessionStorage["lembrar"] = "true";

var checkbox = $("#remember").on("click", function(){
    if(sessionStorage["lembrar"] == "true"){
        sessionStorage["lembrar"] = "false";
    } else {
        sessionStorage["lembrar"] = "true";
    }
});

function loginSubmit(){
    var user = $("#user").val();
    var password = $("#password").val();
    
    
    if(user == "" || password == ""){
        $(".textfield").css("border", "1px solid #a80000");
        return;
    }
    
    $.post("../server/conexao.php", {user: user, password: password}, function(data){
        if(data == "true"){
            localStorage['user_connected'] = "true";
            window.location.href = "../painel/";
            if(sessionStorage["lembrar"] == "true"){
                localStorage["user_connected"] = "true";
            }
        }
    })
}

var passwordInput = document.getElementById("password");
passwordInput.addEventListener("keypress", function(event){
    if(event.key == "Enter") {
        $("#btn-login").click();
    }
})