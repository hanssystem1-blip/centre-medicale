<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
    <title>view</title>
</head>
<body>
    <center>
    <div class="action">
        <div class="ajouter">
            <button class="btn primary"><a href="index.php#consultation"> consultation</a></button>
        </div><br>
        <div class="retour">
            <button class="btn primary"><a href="afficher.php"> Retour</a></button>
        </div>
    </div>
    </center>
    <div>
        <?php
            include "bases.php";
            $id = $_GET['id'];
            $sql = "SELECT * FROM patient WHERE id = $id";
            $result = mysqli_query($connect, $sql);
            $row = mysqli_fetch_assoc($result); 
        ?>
        <div class="blog">
            <div class="img">
                <div class="name">
                    <?=$row['nom']?>
                </div>
            </div>
            <div class="message">
                <ul class="liste">
                    <span>ID :<?=$row['id']?> </span>
                    <span> Nom :<?=$row['nom']?> </span>
                    <span> telephone : <?=$row['phone']?> </span>
                    <span> date : <?=$row['date']?> </span>
                    <span> diagnostique : <?=$row['diagnostic']?> </span>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
<style>
    body{
        background-image:url('slider2.jpg');
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .blog{
        display: flex;
        justify-content: center;
        border: 1px solid solid black;
        border-radius: 10px;
        width: 60%;
        height: 70%;
        padding: 10px;
        background-color: rgba(80, 78, 78, 0.1);
        margin-top: 7em;
        margin-left: 20em; 
    }
        .img{
        padding: 25px;
    }
    .message ul{
        display: grid;
    }
    .message ul span{
        padding: 20px;
        letter-spacing: 2px;
        border: 1px solid green;
        margin: 5px;
        border-radius: 10px;
    }
    .name{
        font-size:70px;
        color:green;
        text-shadow:2px 5px black;
    }
    .action{
        display:inline-flex;
        /* padding-right: 10px; */
        space-between:20px;

    }
</style>