function myFunctionEntrar() {
    window.location.href = "/wp-login.php";
}

function myFunctionBusca() {
    var termo = document.getElementById("main-searchbox").value;
    //console.log(termo)
    window.location.href = "/?s=" + termo;
}



