<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">

</head>
<body>
    <div class="container-fluid mx-auto ">
    <?php
                  require_once("connexion.php");

                if(isset($_GET["page"])){

                    switch($_GET["page"]){
                        case "delete":
                            $id=$_GET["id"];
                            $sql="DELETE FROM crud where id=$id";
                            mysqli_query($connexion,$sql);
                            header("location:index.php");
                            break;
                        case "ajouter":
                            require_once("ajoutProduit.php");
                            break;
                        case "modifier":
                            $id=$_GET["id"];
                            $sql="SELECT * FROM crud where id=$id";
                            $result=mysqli_query($connexion,$sql);
                            $ligne=mysqli_fetch_row($result);
                            var_dump($ligne);
                            require_once("modifierProduit.php");
                            break;

                        case "listeProduit":
                            require_once("listeProduit.php");


    
                    }
                }else{
                    require_once("listeProduit.php");
                }
               
                

        ?>
    </div>


       

</body>
</html>