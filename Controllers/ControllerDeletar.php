<?php
include("../Class/ClassCrud.php");

$Crud = new ClassCrud();
$IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

$Crud->deleteDB(
    "cadastro",
    "Id=?",
    array(
        $IdUser
    )
);
header('Location: /PDO/deletar.php');
