<?php

require_once('class/exercicios.php');
$exercicios = new ExerciciosClass();
$lista = $exercicios->Listar();

var_dump($lista)

    ?>

<div>
    <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);"
        href="index.php?p=exercicios&e=cadastrar">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat"
            viewBox="0 0 16 16">
            <path
                d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
        </svg>
        Novo Exercício
    </a>


</div>

<div class="table-responsive">
    <table class="table table-bordered border-primary">
        <caption> Lista de Exercicios</caption>
        <thead>
            <tr>
                <th>ID </th>
                <th>Nome </th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Status</th>
                <th>Foto</th>
                <th>link</th>
                <th>Atualizar</th>
                <th>desativar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $linha) : ?>
                <tr>
                    <td><?php echo $linha['idExercicios'] ?></td>
                    <td><?php echo $linha['nomeExercicios'] ?></td>
                    <td><?php echo $linha['descricaoExercicios'] ?></td>
                    <td><?php echo $linha['grupoExercicios'] ?></td>
                    <td><?php echo $linha['statusExercicios'] ?></td>
                    <td>
                        <img src="../img/<?php echo $linha['fotoExercicios'] ?>" alt="<?php echo $linha['nomeExercicios'] ?>">
                    </td>
                    <td>Foto</td>
                    <td>link</td>
                    <td>
                        <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=exercicios&e=atualizar&id=<?php echo $linha['idExercicios'] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                            </svg>
                            Atualizar
                        </a>
                    </td>
                    <td>
                        <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php?p=exercicios&e=desativar&id=<?php echo $linha['idExercicios'] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-repeat" viewBox="0 0 16 16">
                                <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192Zm3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 13H5v1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                            </svg>
                            Desativar
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
