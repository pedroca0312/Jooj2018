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
        $listaCategorias[]= new Categoria($categorias['id_categoria'], $categorias['nome_categoria'], $categorias['descricao_categoria']);
        return $listaCategorias;}
    }

}

public function getCategoria(){

    //FAZ A CONEXAO
    $this->conexao = DBConnection::getConexao();

    //CRIANDO A CONSULTA
    $sql = "select * from categoria";

    //EXECUTA A CONSULTA, USANDO A CONEXÃO
    $result = $this->conexao->query(($sql));

    //TRANSFORMA O RESULTADO EM UM ARRAY
    $categorias = $result->fetch(PDO::FETCH_ASSOC);

    $listaCategorias = [];
    foreach ($categorias as $categoria ){
        $id = $categoria['id_categoria'];
        $nome = $categoria['nome_categoria'];
        $descricao = $categoria['descricao_categoria'];

        $objcat = new Categoria($id, $nome, $descricao);

        $listaCategorias[] = $objcat;
    }

    return $listaCategorias;
}

public function insertCategoria(Categoria $cat) {

}

public function updateCategoria(Categoria $cat){

}