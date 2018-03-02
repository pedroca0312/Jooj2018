<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/03/18
 * Time: 15:52
 */

require_once "../app/modelos/Produto.php";

$p1 = new Produto(1, "agua", "molhada", 1.90);
 var_dump($p1);