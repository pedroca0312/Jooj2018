<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/03/18
 * Time: 09:01
 */

require_once '../app/modelos/Categoria.php';

$c1 = new Categoria();
$c1->setId(1);
$c1->setNome("aaa");

var_dump($c1);

$c2 = new Categoria(2,"aaaa","bem massa");
var_dump($c2);