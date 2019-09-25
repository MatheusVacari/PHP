<?php

$Alunos = array ("Matheus","Abnher","Arthur","Julia","Milene","Camila");

echo count($Alunos);

echo "<br>Nomes<br><br>";

for($i = 0; $i < count($Alunos) ; $i++){
    echo $Alunos[$i] . "<br>";
}
