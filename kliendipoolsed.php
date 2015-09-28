<!doctype html>
<html lang="ee">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
        function muuda(){
            $("#pic").attr("src","http://weknowyourdreams.com/images/dog/dog-04.jpg");
        }
    </script>
</head>
<body>
<button onclick="alert('Tere Maailm!')">Tere Maailm</button><br>
<a href="http://www.khk.ee" onclick="alert('Tere Maailm');">Tere Maailm</a><br>
<a href="" onclick="alert('J‰‰me siia!');">J‰‰me Siia</a><br>

<img id="pic" onclick="muuda()" width="200" height="235" src="http://exmoorpet.com/wp-content/uploads/2012/08/cat.png">

<br>

<button value="red">RED</button><br>
<button value="green">GREEN</button><br>
<button value="blue">BLUE</button><br>
<button id="klick">Luba parem klick</button><br>

<script>
    var pklick=false;
    $("#klick").bind("click",function(){
        return pklick=true;
    });
    $(document).ready(function(){
        $(document).on("contextmenu",function(){
            return pklick;
        });
    })
    $("button").click(function(){
        $("body").css("background-color",$(this).val());
    })
</script>
</body>
</html>