var buscaCX = document.getElementById("main-searchbox");
buscaCX.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        var termo = document.getElementById("main-searchbox").value;
        //console.log(termo)
        window.location.href = "/?s=" + termo;
    }
});