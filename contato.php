<?php

//Importe classes PHPMailer para o namespace global
//Eles devem estar no topo do seu script, não dentro de uma função
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$ok = 0;

if (isset($_POST['email'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $mens = $_POST['mens'];
    $assunto = 'site Academia Viva Bem';
    require_once('admin/class/contato.php');

    $contato = new contatoClass();
    
    $contato->nomeContato = $nome;
    $contato->emailContato = $email;
    $contato->telefoneContato = $fone;
    $contato->mensagemContato = $mens;

    $contato->Inserir();



    require_once('mailer/Exception.php');
    require_once('mailer/PHPMailer.php');
    require_once('mailer/SMTP.php');

    //Crie uma instância; passar `true (verdadeiro)`
    $mail = new PHPMailer(true);


    try {
        //Configurações do servidor
        /* $mail->SMTPDebug = SMTP::DEBUG_SERVER;    */                  //Habilita saída de depuração detalhada
        $mail->isSMTP();                                            //Enviar usando SMTP
        $mail->Host       = 'smtp.hostinger.com';                   //Defina o servidor SMTP para enviar
        $mail->SMTPAuth   = true;                                   //Habilitar autenticação SMTP
        $mail->Username   = 'vivabem@ti21.smpsistema.com.br';       //SMTP nome de usuário
        $mail->Password   = 'Senac@ti21';                           //SMTP senha
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Habilitar criptografia TLS implícita
        $mail->Port       = 465;                                    //Porta TCP para conexão

        //Destinatários
        $mail->setFrom('vivabem@ti21.smpsistema.com.br', $assunto);            // Quem dispara o email
        $mail->addAddress('aprecidolucas771@gmail.com');                 //Adicionar um destinatário


        //Conteúdo do email
        $mail->isHTML(true);                                          //Defina o formato do e-mail para HTML
        $mail->Subject = $assunto;

        //Conteúdo HTML
        $mail->Body    = "        
           <strong>Nome: </strong> $nome <br>
           <strong>Email:</strong> $email <br>
           <strong>Telefone:</strong> $fone <br>
           <strong>Mensagem:</strong> $mens
       ";
        //Sem formatação HTML
        $mail->AltBody = "
           <strong>Nome: </strong> $nome <br>
           <strong>Email:</strong> $email <br>
           <strong>Telefone:</strong> $fone <br>
           <strong>Mensagem:</strong> $mens
       ";

        $mail->send();
        //echo 'Email enviado com Sucesso!';
        $ok = 1;
    } catch (Exception $e) {
        //echo "Error: {$mail->ErrorInfo}";
        $ok = 2;
    }
}

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

        <!-- MAPA -->
        <section class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.242436581942!2d-46.41957292387837!3d-23.487775658894464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63bec53a2c11%3A0x56ffff14d3ef75da!2sR.%20Erva%20de%20Santa%20Luzia%2C%20548%20-%20Vila%20Helena%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2008081-310!5e0!3m2!1spt-BR!2sbr!4v1695814045956!5m2!1spt-BR!2sbr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
        </section>

        <section class="contato">
            <div class="site">
                <h2> contato </h2>
                <h4>
                    <?php
                     if ($ok == 1) {
                     echo $nome . ", sua mensagem foi enviada com sucesso!";
                      } else if ($ok == 2) {
                        echo $nome . ", não foi possovel enviar sua mensagem. tente mais tarde!";
                    }


                    ?>
                </h4>
                <div>
                    <form action="#" method="POST">
                        <div>
                            <div>
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" id="nome" placeholder="*informe seu nome: " required>
                            </div>

                            <div>
                                <label for="email">E-mail:</label>
                                <input type="email" name="email" id="nome" placeholder="*informe seu email: " required>
                            </div>

                            <div>
                                <label for="fone">Telefone:</label>
                                <input type="fone" name="fone" id="nome" placeholder="informe seu telefone:">
                            </div>

                        </div>
                        <div>
                            <div>
                                <label for="mens">Mensagem</label>
                                <textarea name="mens" id="mens" cols="30" rows="10"></textarea>
                            </div>
                            <div class="btncontato">
                                <input type="submit" value="Enviar por e-mail">
                                <input type="button" value="Enviar por whatsApp" onclick="enviarWhats()">
                            </div>
                        </div>
                    </form>
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







    </main>




    <!-- RODAPÉ -->
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
                        <h3>0 - SP</h8010-090< /h3>
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

    <script src="js/lity.min.js"></script>

    <script src="js/wow.min.js"></script>

    <script src="js/animacoes"></script>
</body>

</html>