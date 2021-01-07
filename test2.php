<?php

// $L correspond à la taille du figure.
$L = (int)readline("Tapez la taille de la figure : ");

if (is_string($L) == false && $L >= 0) {
    for($i=1; $i<=$L; $i++){
        for($j=1;$j<$i;$j++){
            echo"  ";
        }
    for($j=1;$j<=$L;$j++){
        if($i==1 || $i==$L || $j== 1 || $j==$L){
         echo "* ";
        }else{
        echo "  ";
        }
    }
        echo "\n";
    }
}else {
    echo "Erreur saissisez une valeur entière supérieur ou égale à zéro";
}


//NB: Executer le code sur terminal tel que celui de l'éditeur VSCODE.