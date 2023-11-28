<?php


require_once('conexao.php');

class TreinoClass{

    //ATRIBUTOS
    public $idTreino ;
    public $dataInicioTreino;
    public $dataFimTreino;
    public $statusTreino;
    public $idAluno;
    public $idFuncionario;
    


    //MÉTODOS
    public function ListarTreino(){
        $sql = "SELECT * FROM  tbltreinos WHERE statusTreino = 'Ativo' ORDER by idTreino ASC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    } // FIM listar



} //FIM DA CLASS ALUNO