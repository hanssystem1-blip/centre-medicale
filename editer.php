<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>faire une modification</title>
    <link rel="icon" href="img/favicon.png">
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/icofont.css">
		<link rel="stylesheet" href="css/slicknav.min.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
		<link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <center>
    <div class="action">
        <div style="margin-right:50px;">
            <button class="btn"><a href="afficher.php"> Annuler</a></button>
        </div>
        <div class="retour">
            <button class="btn"><a href="index.php"> HOME</a></button>
        </div>
    </div><br>
    </center>
    <center>
        <?php
            include "bases.php";
            $id = $_GET["id"];
            $sql = "SELECT * FROM patient WHERE id = $id";
            $result = mysqli_query($connect, $sql);
            $row = mysqli_fetch_assoc($result);
            if (isset($_POST['button'])) {
            $nom = $_POST['nom'];
            $prenom = $_POST['phone'];
            $age = $_POST['date'];
            $contact = $_POST['diagnostic'];
            extract($_POST);
                if (isset($nom) && isset($phone) && isset($date) && isset($diagnostic)) {
                    $sql = "UPDATE patient SET `nom` = '$nom', phone= '$phone', `date` = '$date', `diagnostic` = '$diagnostic' WHERE id = $id";
                    $result = mysqli_query($connect, $sql);
                    if ($result) {
                        header("location: afficher.php");
                    }else{
                        $message = "consultation non modifiable !!";
                    }
                }
            }
        ?>
        <div >
            <div>
                <form action="" method="POST">
                   <div class="titre">
                   <h2> <strong>Modifier La Consultation de: </strong>  <span style="color: black; text-shadow: 1px 1px black;"><?=$row['nom']?></span></h2>
                   </div>
                  <div class="info">
                  <p style=" padding-top:10px;">
                        <input type="text" placeholder="Nouveau Nom" name="nom" value="<?=$row['nom']?>">
                    </p>
                    <p>
                        <input type="text" placeholder="Nouveau conctact" name="phone" value="<?=$row['phone']?>">
                    </p>
                    <p>
                        <input type="date" placeholder=" Nouveau date de naissance" name="date" value="<?=$row['date']?>">
                    </p>
                    <p>
                        <input type="text" placeholder="Nouveau probleme" name="diagnostic" value="<?=$row['diagnostic']?>">
                    </p>
                  </div><br>
                    <button name="button" class="btn">Modifier</button>
                </form>
            </div>
    </center>
    <style>
        .action{
            margin-top:4em;
            margin-bottom:2em;
            display: inline-flex;
        }
        h2{
            margin:1em;
            background-color:rgba(236, 223, 71,0.8);
            height:2em;
            text-align:center;
            padding-top:10px;
            width: 50%;
        }
        input{
            margin-bottom:30px;
            width:50%;
            height:3em;
            border-radius: 5px;
            letter-spacing: 2px;
            color:black;
            background-color:skyblue;
        }
        body{
            background-image:url('testi-bg.jpg');
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            letter-spacing: 2px;
            font-family: candara;
            
        }
        .info{
            width: 50%;
            background-color:rgba(167, 161, 96, 0.5);
            height:20em;
            border-radius: 30px;
            margin-top:5px;
        }
    </style>
</body>
</html>