<?php
    require 'app.php';

    function includeTemplate(string $vista, bool $inicio = false){
        include(TEMPLATES_URL . "/" . $vista .".php");
    }