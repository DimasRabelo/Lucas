<?php

require_once('conexao.php');

class ExerciciosClass {

    public $idExercicios;
    public $nomeExercicios;
    public $altExercicio;
    public $descricaoExercicios;
    public $grupoExercicios;
    public $statusExercicios;
    public $fotoExercicios;
    public $likExercicio;

    // Constructor
    public function __construct($id = false) {
        if ($id) {
            $this->idExercicios = $id;
            $this->carregar();
        }
    }

    // Listar method
    public function listar() {
        $sql = "SELECT * FROM tblexercicos WHERE statusExercicios = 'Ativo' ORDER by nomeExercicios ASC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    // Cadastrar method
    public function Cadastrar() {
        $query = "INSERT INTO tblexercicos (nomeExercicios, altExercicio, descricaoExercicios, grupoExercicios, statusExercicios, fotoExercicios, likExercicio)
                  VALUES ('". $this->nomeExercicios ."',
                          '". $this->altExercicio ."',
                          '". $this->descricaoExercicios ."',
                          '". $this->grupoExercicios ."',
                          '". $this->statusExercicios ."',
                          '". $this->fotoExercicios ."',
                          '". $this->likExercicio ."')";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=exercicios'</script>";
    }

    // Carregar method
    public function carregar() {
        $query = "SELECT * FROM tblexercicos WHERE idExercicios = " . $this->idExercicios;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->nomeExercicios = $linha['nomeExercicios'];
            $this->altExercicio = $linha['altExercicio'];
            $this->grupoExercicios = $linha['grupoExercicios'];
            $this->statusExercicios = $linha['statusExercicios'];
            $this->fotoExercicios = $linha['fotoExercicios'];
            $this->likExercicio = $linha['likExercicio'];
        }
    }

    // Atualizar method
    public function atualizar() {
        $query = "UPDATE tblexercicos SET 
                   nomeExercicios = '". $this->nomeExercicios ."',
                   altExercicio = '". $this->altExercicio ."',
                   descricaoExercicios = '". $this->descricaoExercicios ."',
                   grupoExercicios = '". $this->grupoExercicios ."',
                   statusExercicios = '". $this->statusExercicios ."',
                   fotoExercicios = '". $this->fotoExercicios ."',
                   likExercicio = '" . $this->likExercicio ."'
                   WHERE idExercicios = ". $this->idExercicios;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=exercicios'</script>";
    }

} // fim da class Exercicios
?>
