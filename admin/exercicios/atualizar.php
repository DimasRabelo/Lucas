<?php

$id = $_GET["id"];
require_once("class/exercicios.php");
$exercicio = new ExerciciosClass($id);

if (isset($_POST['nomeExercicios'])) {

  $nomeExercicios = $_POST['nomeExercicios'];
  $altExercicio = $_POST['altExercicio'];
  $descricaoExercicios = $_POST['descricaoExercicios'];
  $grupoExercicios = $_POST['grupoExercicios'];
  $statusExercicios = $_POST['statusExercicios'];
  $likExercicio = $_POST['likExercicio'];

  if (!empty($_FILES['fotoExercicios']['name'])) {
    // Handle file upload
    $arquivo = $_FILES['fotoExercicios'];

    if ($arquivo['error']) {
      throw new Exception('Error uploading file: ' . $arquivo['error']);
    }

    if (move_uploaded_file($arquivo['tmp_name'], '../img/exercicio/' . $arquivo['name'])) {
      $fotoExercicios = 'exercicio/' . $arquivo['name'];
    } else {
      throw new Exception('Error: Failed to upload the image.');
    }
  } else {
    $fotoExercicios = $exercicio->fotoExercicios;
  }

  // Set properties and update
  $exercicio->nomeExercicios = $nomeExercicios;
  $exercicio->altExercicio = $altExercicio;
  $exercicio->descricaoExercicios = $descricaoExercicios;
  $exercicio->grupoExercicios = $grupoExercicios;
  $exercicio->statusExercicios = $statusExercicios;
  $exercicio->fotoExercicios = $fotoExercicios;
  $exercicio->likExercicio = $likExercicio;

  $exercicio->atualizar();
}
?>








<div class="col-md-12">
 
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title"> Cadastro de Atualizar</h3>
    </div>
 
    <form class="form-horizontal" action="index.php?p=exercicios&e=atualizar&id=<?php echo $exercicio->idExercicios ?>" method="POST" enctype="multipart/form-data">
      <div class="card-body">
 
        <div class="row">
          <div class="col-md-4">
            <div class="form-group row">
              <img src="img/<?php echo $exercicio->fotoExercicio?>" alt="Imagem Sem Foto" id="imgFoto">
              <input type="file" class="form-control" id="fotoExercicios" name="fotoExercicios" style="display:none;">
            </div>
 
          </div>
 
          <div class="col-md-8 form-dash">
 
            <div class="form-group row">
              <label for="nomeExercicios" class="col-sm-2 col-form-label">Nome:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nomeExercicios" name="nomeExercicios" required="" placeholder="Informe seu nome:" value="<?php echo $exercicio->nomeExercicios; ?>">
              </div>
            </div>
 
            <div class="form-group row">
              <label for="descricaoExercicios" class="col-sm-2 col-form-label">Descrição:</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="descricaoExercicios" id="descricaoExercicios" cols="30" rows="10" required="" placeholder="Informe a descrição do exercício:" value="<?php echo $exercicio->descricaoExercicios; ?>"></textarea>
              </div>
            </div>
 
            <div class="row">
 
              <div class="form-group col-sm-6 offset-md-2">
                <select class="form-select col-sm-2" aria-label="Default select example" name="grupoExercicios" required>
 
                <option value="<?php echo $exercicio->grupoExercicios?>"><?php echo $exercicio->grupoExercicios?></option>
                  <option value="Peito">Peito</option>
                  <option value="Pernas">Pernas</option>
                  <option value="Bracos">Braços</option>
                  <option value="Abdômen">Abdômen</option>
                  <option value="Cardio">Cardio</option>
                </select>
 
            </div>
 
              <div class="form-group col-sm-4">
              <select class="form-select col-sm-2" aria-label="Default select example" name="statusExercicios" required>
 
              <option value="<?php echo $exercicio->statusExercicios?>"><?php echo $exercicio->statusExercicios?></option>
                  <option value="Peito">ATIVO</option>
                  <option value="Pernas">DESATIVADO</option>
                  <option value="Bracos">INVALIDO</option>
 
                </select>
              </div>
 
            </div>
 
          
 
          <div class="form-group row">
            <label for="likExercicio" class="col-sm-2 col-form-label">Link:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="likExercicio" name="likExercicio" required="" placeholder="Informe o Lik Exercício:">
            </div>
          </div>
 
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary">Atualizar Exercício</button>
          </div>
 
        </div>
    
    
      </div>
  </form>
</div>
 
</div>

<script>
  document.getElementById('imgFoto').addEventListener('click', function() {
    //alert('Click na IMG');
    document.getElementById('fotoExercicio').click();
  });
 
  document.getElementById('fotoExercicio').addEventListener('change', function(e) {
 
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