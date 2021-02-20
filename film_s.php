<?php
session_start();
require_once("_functions.php");
$q=mysqli_query(startdb(),"SELECT * FROM films;");
$i=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("asset/meta.php"); ?>
    <title>Document</title>
</head>
<body>
    <?php include("header.php"); ?>
    <div class="container">
    <div class='row'>
    <?php while($num=mysqli_fetch_array($q)) { if($i + 1 % 3 == 0) {echo "<div class='row'>\n";}?>
    <div class="card col-md-3 mx-auto">
    <img src="<?php echo $num["couverture"]; ?>" class="card-img-top" alt="<?php echo $num["couverture"]; ?>" height=200>
        <div class="card-body">
            <a href="film_detail.php?id=<?php echo $num["id_film"]; ?>"><h5 class="card-title text-center"><?php echo $num["titre"]; ?></h5></a>
            <p class="card-text text-center"><?php echo $num["auteur"]; ?></p>
        </div>
    </div>
    <?php if($i % 3 == 0) {echo "</div>\n";} $i++;} ?>
    </div>
    </div>
    <?php include("asset/script.php") ?>
</body>
</html>