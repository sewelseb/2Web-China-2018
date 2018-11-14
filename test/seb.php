<!doctype html>
<html>
    <head>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
    <body>
        <input id="ageDeSeb" placeholder="age de seb">
        <button id="question">Seb est il vieux?</button>

        <script>
            $('#question').click(function () {
                var age=$('#ageDeSeb').val();
                var url = 'resp.php?ageDeSeb='+age;
                console.log(url);
                $.ajax({url: url}).done(function(data){
                    //alert('réponse recue');
                    console.log (data);
                    var json = JSON.parse(data);
                    console.log(json);
                    alert('seb a '+json.age+'ans, '+json.text);
                })
                    .fail(function () {
                        alert('error');
                    });
            });
        </script>

    </body>
</html>

