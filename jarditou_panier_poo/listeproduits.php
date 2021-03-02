<?php
$titre = "Retrouvez tous nos produits ici";
$description = "Du barbecue à la pelle en passant par le taille-haie ou encore le parasol, trouvez vore bonheur chez Jarditou ";
?>
<?php include("cc/header.php"); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js" ></script>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">PRODUITS</h1>
    <button id="btn1">Cliquez pour affichez les produits</button>
</div>
<div id="div1" class="row "></div>


<script>

$(document).ready(function() {
    $("#btn1").click(function() 
    {
        $("#div1").load("produits.php");
    });

   
});

</script>


    

       
       

<?php include("cc/footer.php");?>