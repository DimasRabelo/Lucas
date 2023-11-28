-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Nov-2023 às 12:09
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbvivabem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblalnos`
--

CREATE TABLE `tblalnos` (
  `idAluno` int(11) NOT NULL,
  `nomeAluno` varchar(50) NOT NULL,
  `dataNascAluno` date NOT NULL,
  `emailAlunos` varchar(80) NOT NULL,
  `senhaAlunos` varchar(20) NOT NULL,
  `dataCadAluno` date NOT NULL,
  `statusAluno` varchar(10) NOT NULL,
  `fotoAluno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblalnos`
--

INSERT INTO `tblalnos` (`idAluno`, `nomeAluno`, `dataNascAluno`, `emailAlunos`, `senhaAlunos`, `dataCadAluno`, `statusAluno`, `fotoAluno`) VALUES
(1, 'JOÃO SILVA', '1990-01-15', 'joao@email.cpm', 'senha123', '2023-10-06', 'ATIVO', 'aluno/joãosilva1.png'),
(2, 'MARIA SANTOS', '1995-05-20', 'maria@email.com', 'senha456', '2023-10-06', 'ATIVO', 'aluno/mariasantos2.png'),
(3, 'JOÃO SILVA', '1990-01-15', 'joao@email.com', 'senha123', '2023-10-06', 'ATIVO', 'aluno/joãosilva1.png'),
(4, 'CARLOS FERREIRA', '1988-08-10', 'carlos@email.com', 'senha789', '2023-10-06', 'INATIVO', 'aluno/carlosferreira3.png'),
(5, 'ANA OLIVEIRA', '1992-04-30', 'ana@email.com', 'senhaabc', '2023-10-06', 'ATIVO', 'aluno/anaoliveira4.png'),
(6, 'PEDRO RIBEIRO', '1985-11-26', 'pedro@email.com', 'senhaxyz', '2023-10-06', 'ATIVO', 'aluno/pedroribeiro5.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblbanner`
--

CREATE TABLE `tblbanner` (
  `idBanner` int(11) NOT NULL,
  `nomeBanner` varchar(50) NOT NULL,
  `altBanner` varchar(50) NOT NULL,
  `fotoBanner` varchar(100) NOT NULL,
  `statusBanner` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblbanner`
--

INSERT INTO `tblbanner` (`idBanner`, `nomeBanner`, `altBanner`, `fotoBanner`, `statusBanner`) VALUES
(1, 'BANNER 1', 'imagem Banner 1', 'banner/banner1.png', 'ATIVO'),
(2, 'BANNER 2', 'imagem Banner 2 ', 'banner/banner2.png', 'ATIVO'),
(3, 'BANNER 3', 'imagem Banner 3 ', 'banner/banner3.png', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblcontato`
--

CREATE TABLE `tblcontato` (
  `idContato` int(11) NOT NULL,
  `nomeContato` varchar(50) NOT NULL,
  `emailContato` varchar(80) NOT NULL,
  `telefoneContato` varchar(14) NOT NULL,
  `mensagemContato` text NOT NULL,
  `dataContato` date NOT NULL DEFAULT curdate(),
  `horaContato` date NOT NULL DEFAULT curdate(),
  `statusContato` varchar(10) NOT NULL DEFAULT 'ATIVO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblcontato`
--

INSERT INTO `tblcontato` (`idContato`, `nomeContato`, `emailContato`, `telefoneContato`, `mensagemContato`, `dataContato`, `horaContato`, `statusContato`) VALUES
(1, 'Lucas Aparecido Alves', 'Aprecidolucas771@gmail.com', '11972033164', 'OI', '2023-10-24', '2023-10-24', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbldestaque`
--

CREATE TABLE `tbldestaque` (
  `idDestaque` int(11) NOT NULL,
  `nomeDestaque` varchar(50) NOT NULL,
  `altDestaque` varchar(50) NOT NULL,
  `fotoDestaque` varchar(100) NOT NULL,
  `linkDestaque` varchar(150) NOT NULL,
  `statusDestaque` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblexercicos`
--

CREATE TABLE `tblexercicos` (
  `idExercicios` int(11) NOT NULL,
  `nomeExercicios` varchar(50) NOT NULL,
  `altExercicio` varchar(50) NOT NULL,
  `descricaoExercicios` varchar(150) NOT NULL,
  `grupoExercicios` varchar(30) NOT NULL,
  `statusExercicios` varchar(10) NOT NULL,
  `fotoExercicios` varchar(10) NOT NULL,
  `likExercicio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblexercicos`
--

INSERT INTO `tblexercicos` (`idExercicios`, `nomeExercicios`, `altExercicio`, `descricaoExercicios`, `grupoExercicios`, `statusExercicios`, `fotoExercicios`, `likExercicio`) VALUES
(1, 'Supino', 'foto do funcionario', 'o supino é um dos exercícios mais pop da academia, o levantamento de peso clássico. ', 'Peitoral', 'ATIVO', 'exercicio/', 'lik.exercicio'),
(2, 'Agachamento', 'foto dos funcionario', 'O agachamento é um exercício físico de força em que o praticante abaixa os quadris a partir de uma posição em pé e depois se levanta. ', 'Perna', 'INATIVO', 'exercicio/', 'lik.exercicio'),
(3, 'Rosca Direta', 'foto dos funcionario', 'A rosca direta é um dos exercícios mais conhecidos para fortalecer e hipertrofiar os bíceps e trabalha também outros músculos. ', 'Braços', 'ATIVO', 'exercicio/', 'lik.exercicio'),
(4, 'Prancha Abdominal', 'foto dos   funcionario', 'A prancha abdominal é o exercício queridinho de quem quer fortalecer a região do core — parte central do corpo que engloba 29 músculos', 'Abdômen', 'ATIVO', 'exercicio/', 'lik.exercicio'),
(5, 'Corrida', 'foto dos   funcionario', '\"A corrida é uma prática corporal que envolve os músculos dos membros inferiores para promover o deslocamento do corpo ao músculos', 'Cardio', 'ATIVO', 'exercicio/', 'lik.exercicio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblfuncionarios`
--

CREATE TABLE `tblfuncionarios` (
  `idFuncionario` int(11) NOT NULL,
  `nomeFuncionario` varchar(50) NOT NULL,
  `altFuncionario` varchar(50) NOT NULL,
  `dataFuncionario` date NOT NULL,
  `cargoFuncionario` varchar(20) NOT NULL,
  `especialidadeFuncionario` varchar(20) NOT NULL,
  `emailFuncionario` varchar(80) NOT NULL,
  `senhaFuncionario` varchar(20) NOT NULL,
  `telefoneFuncionario` varchar(14) NOT NULL,
  `dataAdFuncionario` date NOT NULL,
  `statusFuncionario` varchar(10) NOT NULL,
  `fotoFuncionario` varchar(100) NOT NULL,
  `linkFaceFuncionario` varchar(150) NOT NULL,
  `linkInstaFuncionario` varchar(150) NOT NULL,
  `linkLinkedinFuncionario` varchar(150) NOT NULL,
  `linkWhatsFuncionario` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblfuncionarios`
--

INSERT INTO `tblfuncionarios` (`idFuncionario`, `nomeFuncionario`, `altFuncionario`, `dataFuncionario`, `cargoFuncionario`, `especialidadeFuncionario`, `emailFuncionario`, `senhaFuncionario`, `telefoneFuncionario`, `dataAdFuncionario`, `statusFuncionario`, `fotoFuncionario`, `linkFaceFuncionario`, `linkInstaFuncionario`, `linkLinkedinFuncionario`, `linkWhatsFuncionario`) VALUES
(1, 'Fernanda Souza', 'img do Funcionario', '1998-10-21', 'Instrutor', 'Musculação', 'fernando@email.com', 'senha123', '(11)123456789', '2023-10-01', 'ATIVO', 'funcionario/fernandasouza1.png', 'fenarnda_face.com', 'fernanda@*Insta.com', 'fernanda@Linkdin.com', 'fernanda@whats'),
(2, 'Ricardo Santos', 'img do Ricardo', '1998-10-21', 'Nutricionista', 'Nutrição Esportiva', 'ricardo@email.com', 'senha456', '(22)987654313', '2023-09-15', 'ATIVO', 'funcionario/ricardosantos2.png', 'ricardo_face.com', 'ricardo@*Insta.com', 'ricardo@Linkdin.com', 'ricardo@whats'),
(3, 'Mariana Silva', 'img do Mariana', '1992-06-20', 'Recepcionista', 'Atendimento', 'mariana@email.com', 'senha789', '(33)555554555', '2023-08-03', 'ATIVO', 'funcionario/marianasilva3.png', 'mariana_face.com', 'mariana@*Insta.com', 'mariana@Linkdin.com', 'mariana@whats'),
(4, 'Paulo Oliveira', 'img do Paulo', '1992-06-20', 'Instrutor', 'Cardio', 'paulo@email.com', 'senhaabc', '(44)98999999', '2023-07-20', 'ATIVO', 'funcionario/paulooliveira4.png', 'paulo_face.com', 'paulo@*Insta.com', 'paulo@Linkdin.com', 'paulo@whats'),
(5, 'Luisa Mendes', 'img do Luisa', '1992-06-20', 'Fisioterapeuta', 'Fisioterapeuta Espor', 'luisa@email.com', 'senhaxyz', '(55)887888888', '2023-06-10', 'ATIVO', 'funcionario/luisamendes5.png', 'luisa_face.com', 'luisa@*Insta.com', 'luisa@Linkdin.com', 'luisa@whats');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblgaleria`
--

CREATE TABLE `tblgaleria` (
  `idGaleria` int(11) NOT NULL,
  `nomeGaleria` varchar(50) NOT NULL,
  `altGaleria` varchar(50) NOT NULL,
  `fotoGaleria` varchar(100) NOT NULL,
  `statusGaleria` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblgaleria`
--

INSERT INTO `tblgaleria` (`idGaleria`, `nomeGaleria`, `altGaleria`, `fotoGaleria`, `statusGaleria`) VALUES
(1, 'GALERIA 1', 'Imagem galeria 1', 'galeria/galeria1.png', 'ATIVO'),
(2, 'GALERIA 2', 'Imagem galeria 2', 'galeria/galeria2.png', 'ATIVO'),
(3, 'GALERIA 3', 'Imagem galeria 3', 'galeria/galeria3.png', 'ATIVO'),
(4, 'GALERIA 4', 'Imagem galeria 4', 'galeria/galeria4.png', 'ATIVO'),
(5, 'GALERIA 5', 'Imagem galeria 5', 'galeria/galeria5.png', 'ATIVO'),
(6, 'GALERIA 6', 'Imagem galeria 6', 'galeria/galeria6.png', 'ATIVO'),
(7, 'GALERIA 7', 'Imagem galeria 7', 'galeria/galeria7.png', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblmatriculas`
--

CREATE TABLE `tblmatriculas` (
  `idMatricula` int(11) NOT NULL,
  `dataInicioMatricula` date NOT NULL,
  `dataFimMatricula` date NOT NULL,
  `statusMatricula` varchar(10) NOT NULL,
  `idAluno` int(11) NOT NULL,
  `idPlano` int(11) NOT NULL,
  `valorPago` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblmatriculas`
--

INSERT INTO `tblmatriculas` (`idMatricula`, `dataInicioMatricula`, `dataFimMatricula`, `statusMatricula`, `idAluno`, `idPlano`, `valorPago`) VALUES
(1, '2023-10-26', '2024-10-25', 'ATIVO', 4, 5, 250.00),
(2, '2023-10-01', '2023-10-31', 'ATIVO', 1, 1, 250.00),
(3, '2023-10-01', '2023-10-31', 'ATIVO', 1, 1, 250.00),
(4, '2023-09-15', '2023-09-30', 'ATIVO', 2, 2, 250.00),
(5, '2023-08-03', '2023-08-31', 'ATIVO', 3, 3, 250.00),
(6, '2023-07-20', '2023-07-31', 'ATIVO', 4, 4, 250.00),
(7, '2023-06-10', '2023-06-30', 'ATIVO', 5, 5, 250.00);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblplanos`
--

CREATE TABLE `tblplanos` (
  `idPlano` int(11) NOT NULL,
  `nomePlano` varchar(20) NOT NULL,
  `descricaoPlano` varchar(150) NOT NULL,
  `valorPlano` double(10,2) NOT NULL,
  `statusPlano` varchar(10) NOT NULL,
  `fotoPlano` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblplanos`
--

INSERT INTO `tblplanos` (`idPlano`, `nomePlano`, `descricaoPlano`, `valorPlano`, `statusPlano`, `fotoPlano`) VALUES
(1, 'Plano Básico', 'Plano de treinamento básico', 50.00, 'Ativo', 'plano/planobasico.jpg'),
(2, 'Plano Premium', 'Plano de treinamento premium', 100.00, 'Ativo', 'plano/planopremium.jpg'),
(3, 'Plano Gold', 'Plano de treinamento gold', 150.00, 'Ativo', 'plano/planogold.jpg'),
(4, 'Plano VIP', 'Plano de treinamento VIP', 200.00, 'Ativo', 'plano/planovip.jpg'),
(5, 'Plano Personalizado', 'Plano de treinamento personalizado', 250.00, 'Ativo', 'plano/planopersonalizado.jpg'),
(6, 'Plano Personalizado', 'Plano de treinamento personalizado', 250.00, 'Ativo', 'plano/planopersonalizado.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblregistrotreino`
--

CREATE TABLE `tblregistrotreino` (
  `idRegistroTreino` int(11) NOT NULL,
  `cargaRegistroTreino` double(10,3) NOT NULL,
  `seriesRegistroTreino` int(11) NOT NULL,
  `repeticaoRegistroTreino` int(11) NOT NULL,
  `statusRegistroTreino` varchar(10) NOT NULL,
  `idTreino` int(11) NOT NULL,
  `idExercicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblregistrotreino`
--

INSERT INTO `tblregistrotreino` (`idRegistroTreino`, `cargaRegistroTreino`, `seriesRegistroTreino`, `repeticaoRegistroTreino`, `statusRegistroTreino`, `idTreino`, `idExercicio`) VALUES
(1, 50.000, 12, 3, 'ATIVO', 1, 1),
(2, 80.000, 10, 4, 'ATIVO', 1, 2),
(3, 20.000, 3, 15, 'ATIVO', 2, 1),
(4, 100.000, 4, 12, 'ATIVO', 2, 2),
(5, 100.000, 12, 4, 'ATIVO', 2, 2),
(6, 30.000, 12, 3, 'ATIVO', 3, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblsobre`
--

CREATE TABLE `tblsobre` (
  `idSobre` int(11) NOT NULL,
  `descricaoSobre` text NOT NULL,
  `altSobre` varchar(50) NOT NULL,
  `fotoSobre` varchar(100) NOT NULL,
  `linkSobre` varchar(150) NOT NULL,
  `statusSobre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbltelefonealunos`
--

CREATE TABLE `tbltelefonealunos` (
  `idTelefoneAluno` int(11) NOT NULL,
  `numeroTelefone` varchar(14) NOT NULL,
  `operadoraTelefone` varchar(10) NOT NULL,
  `tipoTelefone` varchar(15) NOT NULL,
  `idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbltelefonealunos`
--

INSERT INTO `tbltelefonealunos` (`idTelefoneAluno`, `numeroTelefone`, `operadoraTelefone`, `tipoTelefone`, `idAluno`) VALUES
(1, '(11)123456789', 'VIVO', 'CELULAR', 1),
(2, '(22)987654321', 'claro', 'Residencial', 2),
(3, '(33)555555555', 'TIM', 'Celular', 3),
(4, '(44)99999999', 'Oi', 'Celular', 4),
(5, '(55)888888888', 'VIVO', 'COMERCIAL', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbltreinos`
--

CREATE TABLE `tbltreinos` (
  `idTreino` int(11) NOT NULL,
  `dataInicioTreino` date NOT NULL,
  `dataFimTreino` date NOT NULL,
  `statusTreino` varchar(10) NOT NULL,
  `idAluno` int(11) NOT NULL,
  `idFuncionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbltreinos`
--

INSERT INTO `tbltreinos` (`idTreino`, `dataInicioTreino`, `dataFimTreino`, `statusTreino`, `idAluno`, `idFuncionario`) VALUES
(1, '2023-10-01', '2023-10-31', 'ATIVO', 1, 1),
(2, '2023-09-15', '2023-09-30', 'INATIVO', 2, 1),
(3, '2023-08-03', '2023-08-31', 'ATIVO', 3, 2),
(4, '2023-07-20', '2023-07-31', 'ATIVO', 4, 3),
(5, '2023-06-10', '2023-06-30', 'ATIVO', 5, 4);

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `vnumalunosativos`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `vnumalunosativos` (
`qtdeAlnos` bigint(21)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `vnumfuncespecativo`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `vnumfuncespecativo` (
`especialidadeFuncionario` varchar(20)
,`qtdeFuncionario` bigint(21)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `vnummatriculaativo`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `vnummatriculaativo` (
`COUNT(idMatricula)` bigint(21)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `vnumplanoativo`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `vnumplanoativo` (
`COUNT(idPlano)` bigint(21)
);

-- --------------------------------------------------------

--
-- Estrutura para vista `vnumalunosativos`
--
DROP TABLE IF EXISTS `vnumalunosativos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vnumalunosativos`  AS SELECT count(`tblalnos`.`idAluno`) AS `qtdeAlnos` FROM `tblalnos` WHERE `tblalnos`.`statusAluno` = 'ATIVO' ;

-- --------------------------------------------------------

--
-- Estrutura para vista `vnumfuncespecativo`
--
DROP TABLE IF EXISTS `vnumfuncespecativo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vnumfuncespecativo`  AS SELECT `tblfuncionarios`.`especialidadeFuncionario` AS `especialidadeFuncionario`, count(`tblfuncionarios`.`idFuncionario`) AS `qtdeFuncionario` FROM `tblfuncionarios` WHERE `tblfuncionarios`.`cargoFuncionario` <> 'RESCEPCIONISTA' AND `tblfuncionarios`.`statusFuncionario` = 'ATIVO' GROUP BY `tblfuncionarios`.`especialidadeFuncionario` ;

-- --------------------------------------------------------

--
-- Estrutura para vista `vnummatriculaativo`
--
DROP TABLE IF EXISTS `vnummatriculaativo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vnummatriculaativo`  AS SELECT count(`tblmatriculas`.`idMatricula`) AS `COUNT(idMatricula)` FROM `tblmatriculas` WHERE `tblmatriculas`.`statusMatricula` = 'ATIVO' ;

-- --------------------------------------------------------

--
-- Estrutura para vista `vnumplanoativo`
--
DROP TABLE IF EXISTS `vnumplanoativo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vnumplanoativo`  AS SELECT count(`tblplanos`.`idPlano`) AS `COUNT(idPlano)` FROM `tblplanos` WHERE `tblplanos`.`statusPlano` = 'ATIVO' ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tblalnos`
--
ALTER TABLE `tblalnos`
  ADD PRIMARY KEY (`idAluno`);

--
-- Índices para tabela `tblbanner`
--
ALTER TABLE `tblbanner`
  ADD PRIMARY KEY (`idBanner`);

--
-- Índices para tabela `tblcontato`
--
ALTER TABLE `tblcontato`
  ADD PRIMARY KEY (`idContato`);

--
-- Índices para tabela `tbldestaque`
--
ALTER TABLE `tbldestaque`
  ADD PRIMARY KEY (`idDestaque`);

--
-- Índices para tabela `tblexercicos`
--
ALTER TABLE `tblexercicos`
  ADD PRIMARY KEY (`idExercicios`);

--
-- Índices para tabela `tblfuncionarios`
--
ALTER TABLE `tblfuncionarios`
  ADD PRIMARY KEY (`idFuncionario`);

--
-- Índices para tabela `tblgaleria`
--
ALTER TABLE `tblgaleria`
  ADD PRIMARY KEY (`idGaleria`);

--
-- Índices para tabela `tblmatriculas`
--
ALTER TABLE `tblmatriculas`
  ADD PRIMARY KEY (`idMatricula`),
  ADD KEY `matriculaAluno` (`idAluno`),
  ADD KEY `matriculaPlano` (`idPlano`);

--
-- Índices para tabela `tblplanos`
--
ALTER TABLE `tblplanos`
  ADD PRIMARY KEY (`idPlano`);

--
-- Índices para tabela `tblregistrotreino`
--
ALTER TABLE `tblregistrotreino`
  ADD PRIMARY KEY (`idRegistroTreino`),
  ADD KEY `registrotreino` (`idTreino`),
  ADD KEY `registroExercicio` (`idExercicio`);

--
-- Índices para tabela `tblsobre`
--
ALTER TABLE `tblsobre`
  ADD PRIMARY KEY (`idSobre`);

--
-- Índices para tabela `tbltelefonealunos`
--
ALTER TABLE `tbltelefonealunos`
  ADD PRIMARY KEY (`idTelefoneAluno`),
  ADD KEY `telefoneAluno` (`idAluno`);

--
-- Índices para tabela `tbltreinos`
--
ALTER TABLE `tbltreinos`
  ADD PRIMARY KEY (`idTreino`),
  ADD KEY `treinoAluno` (`idAluno`),
  ADD KEY `treinoFuncionario` (`idFuncionario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblalnos`
--
ALTER TABLE `tblalnos`
  MODIFY `idAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tblbanner`
--
ALTER TABLE `tblbanner`
  MODIFY `idBanner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tblcontato`
--
ALTER TABLE `tblcontato`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbldestaque`
--
ALTER TABLE `tbldestaque`
  MODIFY `idDestaque` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblexercicos`
--
ALTER TABLE `tblexercicos`
  MODIFY `idExercicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tblfuncionarios`
--
ALTER TABLE `tblfuncionarios`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tblgaleria`
--
ALTER TABLE `tblgaleria`
  MODIFY `idGaleria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tblmatriculas`
--
ALTER TABLE `tblmatriculas`
  MODIFY `idMatricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tblplanos`
--
ALTER TABLE `tblplanos`
  MODIFY `idPlano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tblregistrotreino`
--
ALTER TABLE `tblregistrotreino`
  MODIFY `idRegistroTreino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tblsobre`
--
ALTER TABLE `tblsobre`
  MODIFY `idSobre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbltelefonealunos`
--
ALTER TABLE `tbltelefonealunos`
  MODIFY `idTelefoneAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbltreinos`
--
ALTER TABLE `tbltreinos`
  MODIFY `idTreino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tblmatriculas`
--
ALTER TABLE `tblmatriculas`
  ADD CONSTRAINT `matriculaAluno` FOREIGN KEY (`idAluno`) REFERENCES `tblalnos` (`idAluno`),
  ADD CONSTRAINT `matriculaPlano` FOREIGN KEY (`idPlano`) REFERENCES `tblplanos` (`idPlano`);

--
-- Limitadores para a tabela `tblregistrotreino`
--
ALTER TABLE `tblregistrotreino`
  ADD CONSTRAINT `registroExercicio` FOREIGN KEY (`idExercicio`) REFERENCES `tblexercicos` (`idExercicios`),
  ADD CONSTRAINT `registrotreino` FOREIGN KEY (`idTreino`) REFERENCES `tbltreinos` (`idTreino`);

--
-- Limitadores para a tabela `tbltelefonealunos`
--
ALTER TABLE `tbltelefonealunos`
  ADD CONSTRAINT `telefoneAluno` FOREIGN KEY (`idAluno`) REFERENCES `tblalnos` (`idAluno`);

--
-- Limitadores para a tabela `tbltreinos`
--
ALTER TABLE `tbltreinos`
  ADD CONSTRAINT `treinoAluno` FOREIGN KEY (`idAluno`) REFERENCES `tblalnos` (`idAluno`),
  ADD CONSTRAINT `treinoFuncionario` FOREIGN KEY (`idFuncionario`) REFERENCES `tblfuncionarios` (`idFuncionario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
