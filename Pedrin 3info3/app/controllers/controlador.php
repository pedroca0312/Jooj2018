<?php

require_once '../'

if(isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){
    case 'index':
        echo 'vc escolheu index';

        $crud = new CrudCategoria();
        $categorias = $crud->getCategorias();
        include '../views/categorias/index.php';
        break;
    case 'inserir':
        echo 'vc escolheu inserir';
        break;
    default:
        echo 'acao invalida';
}