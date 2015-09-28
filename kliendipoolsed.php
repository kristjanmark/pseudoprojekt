<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Kliendipoolsed</title>
</head>
<body>
<button onclick="myFunction()">Tere, maailm!</button>
<hr>
<a href="http://khk.ee" onClick="checkbox()"> Tere, maailm! </a>
<script>
    function buttonAlert() {
        alert("Tere, maailm!");
    }
    function checkbox() {
        var confirmmessage = "Tere, maailm!";
        var go = "http://khk.ee";
        if (confirm(confirmmessage)) {
            window.location = go;
        } else {
            alert(message);
        }
    }
</script>
</body>
</html>