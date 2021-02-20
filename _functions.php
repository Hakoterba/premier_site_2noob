<?php

    function startdb() {
        $link = mysqli_connect("localhost","hamza_formation","u37uCEugh4h8bn9h","site_manga"); 
        mysqli_query($link,"SET Names 'utf8'");
        return $link;
    }

    function secure($attribut) {
        if(isset($_REQUEST[$attribut])) {$retour=nl2br(htmlentities(htmlspecialchars($_REQUEST[$attribut]),ENT_QUOTES,"utf-8"));} else {$retour=NULL;}
        return $retour;
    }

    function securebdd($attribut) {
        if(isset($_REQUEST[$attribut])) {$retour=mysqli_real_escape_string(startdb(),$_REQUEST[$attribut]);} else {$retour=NULL;}
        return $retour;
    }

?>