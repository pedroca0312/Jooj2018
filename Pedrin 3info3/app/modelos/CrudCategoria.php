<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/03/18
 * Time: 16:33
 */


require_once 'DBConnection.php';
require_once 'Categoria.php';
class CrudCategoria
{

    private $conexao;


    public function getCategorias(){

        $this->conexao = DBConnection::getConexao();
        $sql = 'select * from categoria';
        $resultado = $this->conexao->query($sql);
        $categorias = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $listaCategorias = [];
        foreach ($categorias as $categoria){
        $listaCategorias[]= new Categoria($categorias['id_categoria', '']);
        return $listaCategorias;}
    }

}

$crud = new CrudCategoria();
$cats = $crud->getCategorias();

var_dump($cats);