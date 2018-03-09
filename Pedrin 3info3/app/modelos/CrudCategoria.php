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

public function getCategoria(int $id){

    //FAZ A CONEXAO
    $this->conexao = DBConnection::getConexao();

    //CRIANDO A CONSULTA
    $sql = "select * from categoria WHERE id_categoria".$id;

    //EXECUTA A CONSULTA, USANDO A CONEXÃO
    $result = $this->conexao->query(($sql);

    //TRANSFORMA O RESULTADO EM UM ARRAY
    $categoria = $result->fetch(PDO::FETCH_ASSOC);

    //INSTANCIA UM OBJETO DO TIPO CATEGORIA COM OS VALORES RECEBIDOS
    $objcat = new Categoria($categoria['id_categoria'],$categoria['nome_categoria'], $categoria['descricao_categoria'];

    //RETORNA O OBJETO CRIADO
    return $objcat;
}

public function insertCategoria(Categoria $cat) {

    $this->conexao = DBConnection::getConexao();
    $sql = "insert into categoria (nome_categoria,descricao_categoria)";

    try{
        $this->conexao->exec($sql);
    }catch (PDOException $e){
        return$e->getMessage();
    }
}

public function updateCategoria(Categoria $cat){
    $this->conexao = DBConnection::getConexao()

        $sql = "UPDATE categoria SET id_categoria=$cat->getId,nome_categoria=$cat->getNome,descricao_categoria=['descricao_categoria']  WHERE id_categoria".$id;


}

public function deleteCategoria(int $id){

}