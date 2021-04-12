<?php

function autoload($className){
    // $className est le nom COMPLET de la class (ex: App\Cat) que PHP tente de charger
    $className = str_replace(
        "\\",
        DIRECTORY_SEPARATOR,
        $className,
    );
    require $className. '.php';
}
//enregistrer notre fonction autoload en tant que chargeur automatique
spl_autoload_register('autoload');