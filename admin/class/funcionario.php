<?php


require_once('conexao.php');

class FuncionarioClass {

    public $nomeFuncionario ;

    public $dataNascFuncionario;

    public $cargoFuncionario;
    public $especialidadeFuncionario;
    public $emailFuncionario;
    public $nivelFuncionario;
    public $telefoneFuncionario;
    public $dataAdmissaoFuncionario;
    public $statusFuncionario;
    public $fotoFuncionario;

    public function listarFuncionario(){
        $sql =  "SELECT * FROM tblfuncionarios ORDER BY idFuncionarios ASC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;



    }





}