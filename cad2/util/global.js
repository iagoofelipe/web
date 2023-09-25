// setInterval(checkConnection, 5000);

export function checkConnection(){
    console.log("verificando");
    if(localStorage["user_connected"] != "true"){
        window.location.href = "../login/";
    }
}

export function logout(){
    window.location.href = "../login/";
    localStorage["user_connected"] = "false";
}