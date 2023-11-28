<?php


require_once('conexao.php');

class Aluno{

    //ATRIBUTOS
    public $idAluno;
    public $nomeAluno;
    public $dataNascAluno;
    public $emailAlunos;
    public $senhaAlunos;
    public $dataCadAluno;
    public $statusAluno;
    public $fotoAluno;


    //MÉTODOS
    public function Listar(){
        $sql = "SELECT * FROM tblalnos WHERE statusAluno = 'Ativo' ORDER BY nomeAluno ASC;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    } 



} //FIM DA CLASS ALUNO