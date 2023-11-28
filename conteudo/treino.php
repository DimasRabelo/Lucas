<section class="contServico wow animate__animated animate__fadeInUp">
            <div class="site">
                <h2>Treinos</h2>
                <div>
                    <?php 
                    $listaRand = array_rand($lista, min(3, count($lista)));

                    foreach($listaRand as  $key) : {$linha = $lista[$key]; }
                    
                    
                    ?>
                    <div>
                        <h3><?php echo $linha['nomeExercicios']?></h3>
                        <img src="<?php echo 'img/' . $linha['fotoExercicios'] ?>" alt="<?php echo $linha['nomeExercicios']?> ">      
                         <p><?php echo $linha['descricaoExercicios'] ?></p>
                         a< href="<?php echo $linha['likExercicio']?>"> conheça</a>
                       
                   <?php endforeach; ?>
                </div>
            </div>
        </section>