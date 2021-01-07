<?php

// $L correspond à la taille de la figure.
$L = (int)readline("Tapez la taille de la figure : ");

if (is_string($L) == false && $L >= 0 ) {

$m =1;


for($i=1;$i<=$L;$i++){
    for($j=1;$j<=$L-$i;$j++){
        echo "  ";
    }
    for($j=1;$j<=(2*$i-1);$j++){
        if($i==$L || $j==1 || $j==(2*$i-1)){
            echo "* ";
        }else{
            echo "  ";
        }
    }
    echo "\n";
}

for($i=$L;$i>=1;$i--){
    for($j=1;$j<$m;$j++){
        echo "  ";
    }
    for($j=1;$j<=(2*$i-1);$j++){
        if($i==$L || $j==1 || $j==(2*$i-1)){
            echo "* ";
        }else{
            echo "  ";
        }
    }
    $m++;
    echo "\n";
}
}else {
    echo "Erreur saissisez une valeur entière supérieur ou égale à zéro";
}

//NB: Executer le code sur terminal tel que celui de l'éditeur VSCODE.