<!DOCTYPE html>
    <html>
    <head>
    <title>Ajax</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
        <select id="select1"></select>
        <select id="select2"></select>
        <div id="div1"></div>

    </body>
    </html>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js" ></script>
 
    <script>

       
        $(document).ready(function() 
        {

        $("#select1").load("listeoptions1.php");

        $("#select1").change(function() 
            {

                $("#select2").load("listeoptions2.php?id_region=xxx");
            });
        });

    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js" ></script>

     
      

  </body>
  </html>