function loginSubmit(){
    var user = $("#user").val();
    var password = $("#password").val();
    
    if(user == "" || password == ""){
            $(".textfield").css("border", "1px solid #a80000");
        return;
    }
    
    $.post("../server/conexao.php", {user: user, password: password}, function(data){
        if(data == "true"){
            window.location.href = "../painel/";
        }
    })
}