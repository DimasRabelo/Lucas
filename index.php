<?php

     require_once('admin/class/exercicios.php');

     $exercicios = new exerciciosclass();
     $lista      = $exercicios->Listar();
     

     //var_dump($lista);




?>










<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.::Projeto ti21::.</title>
    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/slick.css">

    <link rel="stylesheet" href="css/slick-theme.css">

    <link rel="stylesheet" href="css/lity.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />"

    <!-- Nosso estilo é sempre o último-->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/responsivo.css">



</head>



<body>
    <!-- CABEÇALHO -->
    <?php require_once('conteudo/topo.php'); ?>


    <!-- CORPO -->
    <main>



        <!-- BANNER -->
        <?php require_once('conteudo/banner.php'); ?>



        <!-- SOBRE -->
        <section class="contSobre wow animate__animated animate__fadeInUp">
            <div class="site">
                <h2>Sobre</h2>
                <div>
                    <div>
                        <img src="img/sobre02.png" alt="Img sobre na cor azul clara">
                    </div>
                    <div>
                        <p>A Academia Viva Bem é mais do que um simples centro de condicionamento físico; somos uma
                            comunidade
                            comprometida com a promoção da saúde e do bem-estar em todos os aspectos da vida. Fundada em
                            2023, nossa academia tem se
                            empenhado em oferecer um ambiente acolhedor e motivador, onde pessoas de todas as idades e
                            níveis de condicionamento
                            físico podem alcançar seus objetivos pessoais de forma sustentável e gratificante. Se você
                            está pronto para começar sua jornada
                            em direção a uma vida mais saudável e plena, a Academia Viva Bem está aqui para apoiá-lo a
                            cada passo do caminho. Junte-se a
                            nossa comunidade e descubra como é viver com vitalidade, energia e alegria. Viva bem, viva
                            com vitalidade na Academia Viva Bem!
                        </p>
                        <button>leia mais</button>
                    </div>
                </div>
            </div>



        </section>



        <!-- SERVIÇO -->
        <?php require_once('conteudo/treino.php'); ?>



        <!-- GALERIA -->
        <section class="galeria wow animate__animated animate__fadeInUp">
            <img src="img/Galeria1.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria2.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria 3.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria4.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria5.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria 6.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria 7.png" alt="Img Galeria na cor azul clara">
            <img src="img/Galeria1.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria2.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria 3.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria4.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria5.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria 6.png" alt="Img Galeria na cor azul clara">
            <img src="img/galeria 7.png" alt="Img Galeria na cor azul clara">
        </section>


        <!-- EQUIPE -->
        <?php require_once('conteudo/equipe.php'); ?>




        <!-- DESTAQUE -->
        <?php require_once('conteudo/destaque.php'); ?>



    </main>


       <!-- RODAPE -->
       <footer class="rodape wow animate__animated animate__fadeInUp">
        <section>
            <div class="site">



                <div class="infoAcademia">
                    <img src="img/icones/logoVivaBem.svg" alt="Logo da Academia Viva Bem">
                    <ul>
                        <li>
                            <a href="#" data-lity>
                                <img src="img/icones/iconeFacebook.svg" alt="Rede Socil da Academia">
                            </a>
                        </li>
                        <li><a href="#"><img src="img/icones/iconeInstagram.svg" alt="Rede Socil da Academia"></a></li>
                        <li><a href="#"><img src="img/icones/iconeWhatsVerde.svg" alt="Rede Socil da Academia"></a></li>
                    </ul>
                    <a href="mailto:vivabem@ti21.smpsistema.com.br">vivabem@ti21.smpsistema.com.br</a>
                    <a href="tel:+5511999999999">(11) 999 999 999</a>



                    <table>
                        <tbody>
                            <tr>
                                <td rowspan="2">Horário de Funcionamento</td>
                                <td> Seg-Sex 11h às 16h</td>
                            </tr>
                            <tr>
                                <td>Sáb e Fer 11h às 12h</td>
                            </tr>
                        </tbody>
                    </table>



                </div>
                <div class="politicas">
                    <h2>Políticas e Privacidade</h2>
                    <p>Coletamos informações pessoais de forma voluntária para responder a consultas e fornecer
                        informações sobre nossos serviços. Utilizamos cookies para melhorar a experiência do usuário.
                        Suas informações são protegidas por medidas de segurança, mas a transmissão online não é
                        totalmente segura. Não compartilhamos seus dados sem consentimento, exceto em obrigações legais.
                        Links para terceiros não estão sob nossa responsabilidade. Podemos atualizar essa política
                        periodicamente.
                    </p>
                    <h3>Av. Marechal Tito, 1500</h3>
                    <h3>São Paulo3>
                    <h3>0 - SP</h8010-090</h3>
                </div>



            </div>
        </section>



        <section>
            <h2>Direitos reservados ao TI21 - Senac SMP</h2>
        </section>



        <section>
            <h2>Desenvolvido por Alessandro e Ricardo</h2>
        </section>



    </footer>

   







    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <script src="js/slick.min.js"></script>

    <script src="js/lity.min.js"></script>

    <script src="js/wow.min.js"></script>

    <script src="js/animacoes"></script>
</body>

</html>