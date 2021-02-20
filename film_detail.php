<?php
session_start();
require_once("_functions.php");
$q=mysqli_query(startdb(),"SELECT * FROM films;");
$num=mysqli_fetch_array($q);
?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("asset/meta.php"); ?>
    <title><?php echo $num['titre']; ?></title>
</head>
<body class="fiche">
    <?php include("header.php"); ?>
    <div class="container">
        <h1 class="text-center m-5"><?php echo $num['titre']; ?></h1>
        <div class="row">
            <div class="col-4">
                <img src="<?php echo $num['couverture']; ?>" alt="<?php echo $num['titre']; ?>" class="couverture">
            </div>
            <div class="col-6">
            </div>
        </div>
    </div>
    <?php include("asset/script.php") ?>
</body>
</html>