

<?php

require_once('class/aluno.php');
$aluno = new aluno();
$lista = $aluno->Listar();

//var_dump($lista);

?>

<div>
    <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=aluno&e=cadastrar">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
            <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
        </svg>
        Exercício do Aluno
    </a>


</div>

<table class="table">

    <thead class="thead-dark">
        <tr>
            <th scope="col">Foto Aluno</th>
            <th scope="col">Nome Aluno</th>
            <th scope="col">Data Nasc. Aluno</th>
            <th scope="col">E-mail Alunos</th>
            <th scope="col">Data Cad. Aluno</th>
            <th scope="col">Status Aluno</th>
        </tr>
    </thead>
    <?php foreach ($lista as $linha) : ?>
        <tbody>
            <tr>
                <td>
                    <img src="../img/<?php echo $linha['fotoAluno'] ?>" alt="<?php echo $linha['nomeAluno'] ?>">
                </td>
                <td><?php echo $linha['nomeAluno'] ?></td>
                <td><?php echo $linha['dataNascAluno'] ?></td>
                <td><?php echo $linha['emailAlunos'] ?></td>
                <td><?php echo $linha['dataCadAluno'] ?></td>
                <td><?php echo $linha['statusAluno'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
</table>