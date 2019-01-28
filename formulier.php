<?php
    if(isset($_POST["submit"])) {
        $naam = $_POST["naam"];
        $kleur = $_POST["kleur"];
        
        echo '<h1 style="color:' . $kleur . ';">' . $naam . '</h1>';
    }
?>