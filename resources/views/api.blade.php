
<!DOCTYPE html>
<html>
    <head>




        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/style.css">




    </head>
         <body >

            <header>
                <div class="wrap">
                        <button class="button"  type="submit" id="botao">
                            Carregar
                        </button>
                 </div>



                 <div id="ajax">Carregando</div>


            <script>
                $("#botao").click(function(){
            $.get("http://127.0.0.1:8000/search", function(html){


                $('#ajax').html(html);


            });
            });

            $("#documentacao").click(function(){
            $.get("http://127.0.0.1:8000/search", function(html){


                $('#ajax').html(html);


            });
            });
            </script>


            </header>

            <footer>

                <p>

                </p>
            </footer>
            <!--Fontes para icons-->

        </body>
</html>
