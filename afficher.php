<?php
                include "bases.php";
                $sql = "SELECT * FROM patient ";
                $result = mysqli_query($connect,$sql);
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="retour">
        <div>
            <a href="index.php"><center><button class="btn primary">ACCUEIL</button></center> </a>
        </div>
    </div>
    <center>
    <table border="0">
        <thead>
            <tr >
                <th>ID</th>
                <th>Nom</th>
                <th>phone</th>
                <th>Date</th>
                <th >Diagnostic</th>
                <th colspan="3">Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if (mysqli_num_rows($result) == 0) {
                    echo '<b><h4><span>'."aucun enregistrement effectuer !".'</span></h4></b>';
                }else {
                    while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr class="unique">
                <td style="height:10px;"><?=$row['id']?></td>
                <td style="height:10px;"><?=$row['nom']?></td>
                <td style="height:10px;"><?=$row['phone']?></td>
                <td><?=$row['date']?></td>
                <td style=" width: 20em; padding-left:5px;"><?=$row['diagnostic']?></td>
                <td style=" width: 100px; list-style-type:none;color:red;"><a href="analyser.php?id=<?=$row['id']?>"><li ></li> analyser</a></td>
                <td style=" width: 100px;list-style-type:none;color:green;"><a href="editer.php?id=<?=$row['id']?>"><li ></li> Editer</a></td>
                <td style=" width: 100px;list-style-type:none;color:blue;"><a href="supprimer.php?id=<?=$row['id']?>"><li></li> supprimer</a></td>
            </tr>
           <?php
           }
        }
           ?>
        </tbody>
    </table>
    </center>
    <style>
        table{
            border-collapse: collapse;
            align-items:center;
            display: table;
            text-align:center;
            width:80%;
        }
        thead{
	        background-color: rgba(50, 50, 54, 0.5);
            height:3.5em;
        }
        tr{
	        color: black;
            margin-right: 0px;
            margin-left:5px
            width:20%;
        }
        .retour{
            margin-bottom:5em;
        }
        body{
            background-image: url('signup-bg.jpg');
            backdrop-filter: contrast(0.8);
        }
        .unique{
            background-color: rgb(248, 248, 252);
            opacity:0.9;
        }
        span{
            color: red;
        }
    </style>
    </body>
    </html>