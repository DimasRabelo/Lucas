
<?php

if (isset($_POST['nomeExercicios'])) {

  $idExercicios          = $_POST['idExercicios'];
  $nomeExercicios        = $_POST['nomeExercicios'];
  $altExercicio          = $_POST['altExercicio']; // Added missing semicolon
  $descricaoExercicios   = $_POST['descricaoExercicios'];
  $grupoExercicios       = $_POST['grupoExercicios'];
  $statusExercicios      = $_POST['statusExercicios'];
  $likExercicio          = $_POST['likExercicio'];
 
  // FOTO
  $arquivo = $_FILES['fotoExercicio'];
 
  if ($arquivo['error']) {
    throw new Exception('Error' . $arquivo['error']);
  }
 
  if (move_uploaded_file($arquivo['tmp_name'], '../img/exercicios/' . $arquivo['name'])) {
    $fotoExercicios = 'exercicios/' . $arquivo['name']; // exercicios/equipe02.png
  } else {
    throw new Exception('Erro: Não foi possível realizar o upload da imagem.');
  }

  require_once('class/exercicios.php');

  $exercicio = new ExerciciosClass(); // Fixed variable name

  $exercicio->idExercicios        = $idExercicios;
  $exercicio->nomeExercicios      = $nomeExercicios;
  $exercicio->altExercicio        = $altExercicio;
  $exercicio->descricaoExercicios = $descricaoExercicios;
  $exercicio->grupoExercicios     = $grupoExercicios;
  $exercicio->statusExercicios    = $statusExercicios;
  $exercicio->fotoExercicios      = $fotoExercicios;
  $exercicio->likExercicio        = $likExercicio;

  $exercicio->Cadastrar();
}

?>

<!-- Your HTML form code here -->









<div class="col-md-12">
 
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title"> Cadastro de Exercícios</h3>
    </div>
 
    <form class="form-horizontal" action="index.php?p=exercicios&e=cadastrar" method="POST" enctype="multipart/form-data">
      <div class="card-body">
 
        <div class="row">
          <div class="col-md-4">
            <div class="form-group row">
              <img src="img/sem imagem.png" alt="Imagem Sem Foto" id="imgFoto">
              <input type="file" class="form-control" id="fotoExercicios" name="fotoExercicios" style="display:none;">
            </div>
 
          </div>
 
          <div class="col-md-8 form-dash">
 
            <div class="form-group row">
              <label for="nomeExercicio" class="col-sm-2 col-form-label">Nome:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nomeExercicios" name="nomeExercicios" required="" placeholder="Informe seu nome:">
              </div>
            </div>
 
            <div class="form-group row">
              <label for="descricaoExercicios" class="col-sm-2 col-form-label">Descrição:</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="descricaoExercicios" id="descricaoExercicios" cols="30" rows="10" required="" placeholder="Informe a descrição do exercícios:"></textarea>
              </div>
            </div>
 
            <div class="row">
 
              <div class="form-group col-sm-6 offset-md-2">
                <select class="form-select col-sm-2" aria-label="Default select example" name="grupoExercicios" required>
 
                  <option selected="">Seleciona a opção de exercício</option>
                  <option value="Peito">Peito</option>
                  <option value="Pernas">Pernas</option>
                  <option value="Bracos">Braços</option>
                  <option value="Abdômen">Abdômen</option>
                  <option value="Cardio">Cardio</option>
                </select>
 
              </div>
 
              <div class="form-group col-sm-4">
 
                <select class="form-select col-sm-2" aria-label="Default select example" name="statusExercicio" required>
                  <option selected="">Seleciona o staus do exercicio</option>
                  <option value="Peito">ATIVO</option>
                  <option value="Pernas">DESATIVADO</option>
                  <option value="Bracos">INVALIDO</option>
 
                </select>
              </div>
 
            </div>
 
          </div>
 
          <div class="form-group row">
            <label for="linkExercicio" class="col-sm-2 col-form-label">Link:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="likExercicio" name="likExercicio" required="" placeholder="Informe o Lik Exercício:">
            </div>
          </div>
 
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary">Cadastrar Exercício</button>
          </div>
 
        </div>
      </div>
 
  </div>
  </form>
</div>
 
</div>

<script>
  document.getElementById('imgFoto').addEventListener('click', function() {
    //alert('Click na IMG');
    document.getElementById('fotoExercicios').click();
  });
 
  document.getElementById('fotoExercicios').addEventListener('change', function(e) {
 
    let imgFoto = document.getElementById('imgFoto');
    let arquivo = e.target.files[0];
 
    if (arquivo) {
      let carregar = new FileReader();
 
      carregar.onload = function(e) {
        imgFoto.src = e.target.result;
        console.log(imgFoto.src);
      }
 
      carregar.readAsDataURL(arquivo);
    }
 
  });
</script>