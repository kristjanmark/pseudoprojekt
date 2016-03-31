<script type="text/javascript" src="js/jquery.js"></script>
<input type="text" id="valEmail" placeholder="Sisestage e-posti aadress" style="width: 150px"/>
<input type="submit" onclick='Javascript:validateEmail();'/>
<div id="result"></div>

<script type="text/javascript">
    function validateEmail() {

        var email = document.getElementById('valEmail');
        var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

        if(!filter.test(email.value)) {
            alert('Meiliaadress ei ole korrektne');
            email.focus;
            return false;
        } else {
            //alert('Meiliaadress on korrektne');
            $.get('api.php', {emailValidation:email.value}, function(data){
               $('#result').text(data);
            });
            return true;
        }
    }
</script>