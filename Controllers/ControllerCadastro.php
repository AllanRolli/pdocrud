<?php
include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud = new ClassCrud();
$Crud->insertDB("cadastro","?,?,?,?",array($Id, $Nome, $Sexo, $Cidade));

echo "Cadastro Realizado com Sucesso";
