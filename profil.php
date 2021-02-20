<?php
    session_start();
    include("header.php");

    if(!isset($_SESSION['email'])) {
        header('Location: index.php');
        return;
    }

    
?>
<body>
    <div id="welcome">
        <p><strong>Espace membre</strong></p>
        <p>Welcome <?php echo htmlentities(trim($_SESSION['pseudo'])); ?></p> 
    </div>
</body>
