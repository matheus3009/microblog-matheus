-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/06/2024 às 22:19
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `microblog_matheus`
--
CREATE DATABASE IF NOT EXISTS `microblog_matheus` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `microblog_matheus`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `titulo` varchar(150) NOT NULL,
  `texto` text NOT NULL,
  `resumo` tinytext NOT NULL,
  `imagem` varchar(45) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `noticias`
--

INSERT INTO `noticias` (`id`, `data`, `titulo`, `texto`, `resumo`, `imagem`, `usuario_id`) VALUES
(10, '2019-05-10 19:49:58', 'Visual Studio Code 1.12 está disponível para download', 'O Visual Studio Code 1.12 já pode ser baixado. Nessa versão, a equipe de desenvolvimento mudou o foco habitual em novos recursos para melhorar os processos e a base de código. Todas as issues em aberto foram revisadas, bugs foram corrigidos e a dívida de engenharia foi reduzida. &#13;&#10;&#13;&#10;Nessa versão, a equipe corrigiu 2.199 bugs em todos os repositórios VS Code. E dos 3.775 issues que atualmente a equipe rastreia no github.com/Microsoft/vscode, 2.368 são solicitações de recursos.&#13;&#10;&#13;&#10;O Visual Studio Code 1.12 já pode ser baixado. Nessa versão, a equipe de desenvolvimento mudou o foco habitual em novos recursos para melhorar os processos e a base de código. Todas as issues em aberto foram revisadas, bugs foram corrigidos e a dívida de engenharia foi reduzida.&#13;&#10;&#13;&#10;Nessa versão, a equipe corrigiu 2.199 bugs em todos os repositórios VS Code. E dos 3.775 issues que atualmente a equipe rastreia no github.com/Microsoft/vscode, 2.368 são solicitações de recursos.&#13;&#10;&#13;&#10;O Visual Studio Code 1.12 já pode ser baixado. Nessa versão, a equipe de desenvolvimento mudou o foco habitual em novos recursos para melhorar os processos e a base de código. Todas as issues em aberto foram revisadas, bugs foram corrigidos e a dívida de engenharia foi reduzida. &#13;&#10;&#13;&#10;Nessa versão, a equipe corrigiu 2.199 bugs em todos os repositórios VS Code. E dos 3.775 issues que atualmente a equipe rastreia no github.com/Microsoft/vscode, 2.368 são solicitações de recursos.', 'Nessa versão, a equipe corrigiu 2.199 bugs em todos os repositórios VS Code. Todas as issues em aberto foram revisadas, bugs foram corrigidos e a dívida de engenharia foi reduzida.', 'dog.jpg', 7),
(11, '2019-05-10 19:53:31', 'Uso do Android cresce no Brasil', 'O Android é o sistema operacional mais popular do mundo. E isso também é realidade no Brasil. De acordo com a empresa de análise de dados Kantar, o sistema do Google já domina 93,2% do mercado nacional de dispositivos móveis. &#13;&#10;&#13;&#10;O número é referente à análise conduzida entre dezembro de 2016, janeiro e fevereiro de 2017 no país. No mesmo período, um ano atrás, o Android já dominava 90,4% do mercado. Ou seja, o software do Google continua crescendo, enquanto seus rivais continuam se distanciando. &#13;&#10;&#13;&#10;No ano passado, o iOS já aparecia em segundo lugar com 4,7% do mercado, numa pequena disputa com o Windows Phone, que representava 4,6% do bolo. Agora, o sistema da Apple tem 4,4% de market share no Brasil, enquanto o da Microsoft caiu para 2,1% nos três meses terminando em fevereiro. &#13;&#10;&#13;&#10;Embora os números do iOS tenham se mantido relativamente estáveis, a queda do Windows Phone foi certamente mais expressiva. Isso porque até janeiro de 2016, o sistema da Microsoft era mais popular no Brasil do que o da Apple: 4,1% contra 3,3%. Em um ano, o quadro virou de ponta-cabeça. &#13;&#10;&#13;&#10;Guardadas as devidas proporções, porém, o Windows Phone até que está numa “boa fase” no Brasil. Entre julho e setembro do ano passado, o sistema (já praticamente abandonado pela Microsoft) tinha 1,1% do mercado, chegando agora a pouco mais de 2%. Só quem manteve um ritmo estável de crescimento durante todo o ano (e deve continuar mantendo em 2017) foi mesmo o Android. &#13;&#10;O Android é o sistema operacional mais popular do mundo. E isso também é realidade no Brasil. De acordo com a empresa de análise de dados Kantar, o sistema do Google já domina 93,2% do mercado nacional de dispositivos móveis.&#13;&#10;&#13;&#10;O número é referente à análise conduzida entre dezembro de 2016, janeiro e fevereiro de 2017 no país. No mesmo período, um ano atrás, o Android já dominava 90,4% do mercado. Ou seja, o software do Google continua crescendo, enquanto seus rivais continuam se distanciando. &#13;&#10;&#13;&#10;No ano passado, o iOS já aparecia em segundo lugar com 4,7% do mercado, numa pequena disputa com o Windows Phone, que representava 4,6% do bolo. Agora, o sistema da Apple tem 4,4% de market share no Brasil, enquanto o da Microsoft caiu para 2,1% nos três meses terminando em fevereiro.&#13;&#10;&#13;&#10;Embora os números do iOS tenham se mantido relativamente estáveis, a queda do Windows Phone foi certamente mais expressiva. Isso porque até janeiro de 2016, o sistema da Microsoft era mais popular no Brasil do que o da Apple: 4,1% contra 3,3%. Em um ano, o quadro virou de ponta-cabeça.&#13;&#10;&#13;&#10;Guardadas as devidas proporções, porém, o Windows Phone até que está numa “boa fase” no Brasil. Entre julho e setembro do ano passado, o sistema (já praticamente abandonado pela Microsoft) tinha 1,1% do mercado, chegando agora a pouco mais de 2%. Só quem manteve um ritmo estável de crescimento durante todo o ano (e deve continuar mantendo em 2017) foi mesmo o Android.', 'O Android é o sistema operacional mais popular do mundo. E isso também é realidade no Brasil. De acordo com a empresa de análise de dados Kantar, o sistema do Google já domina 93,2% do mercado nacional de dispositivos móveis. ', 'abstrato.jpg', 7),
(12, '2017-11-30 22:28:57', 'Escola de Governança da Internet no Brasil abre inscrições para Curso Intensivo', 'Serão 50 horas dedicadas ao debate de assuntos que demandam atenção da sociedade brasileira e mundial, como proteção de dados pessoais, algoritmos, blockchain, criptografia e Internet das Coisas. Os interessados em aprofundar o conhecimento sobre esses e outros temas devem se inscrever até 25 de junho no portal da EGI. &#13;&#10;&#13;&#10;“Desde 2014, o CGI.br promove o Curso Intensivo da EGI, que é uma referência no País. A EGI criou um espaço de interlocução e construção de conhecimento sobre governança da Internet. É nossa responsabilidade manter esse espaço e ampliar a participação da sociedade no debate. Com um corpo docente formado por profissionais e acadêmicos reconhecidos em suas áreas de atuação, o curso prima pelo cuidado e qualidade dos temas abordados. A cada ano temos a oportunidade de aprimorar essa experiência e aprofundar o debate sobre temas emergentes relacionados ao uso da Internet em um ambiente multissetorial”, considera Hartmut Glaser, secretário executivo do CGI.br e diretor da EGI.&#13;&#10;&#13;&#10;As aulas acontecerão de 20 a 25 de agosto, em São Paulo. O curso, que é gratuito, tem o objetivo de capacitar gestores públicos, formuladores de políticas públicas, empresários, pesquisadores, acadêmicos, representantes da comunidade técnica, de organizações da sociedade civil e demais interessados sobre o funcionamento e a governança da Internet. &#13;&#10;&#13;&#10;Para participar do processo seletivo é necessário preencher o formulário, enviar currículo e produzir um texto sobre temas relacionados à Governança da Internet dentro da área de atuação do candidato. Veja o programa na íntegra em http://egi.nic.br/curso-intensivo-egi/.&#13;&#10;&#13;&#10;As aulas acontecerão de 20 a 25 de agosto, em São Paulo. O curso, que é gratuito, tem o objetivo de capacitar gestores públicos, formuladores de políticas públicas, empresários, pesquisadores, acadêmicos, representantes da comunidade técnica, de organizações da sociedade civil e demais interessados sobre o funcionamento e a governança da Internet. &#13;&#10;&#13;&#10;Para participar do processo seletivo é necessário preencher o formulário, enviar currículo e produzir um texto sobre temas relacionados à Governança da Internet dentro da área de atuação do candidato. Veja o programa na íntegra em http://egi.nic.br/curso-intensivo-egi/.', 'Primeira a debater temas cruciais para o desenvolvimento da Internet no país, a EGI (Escola de Governança da Internet), iniciativa do Comitê Gestor da Internet no Brasil (CGI.br), recebe inscrições para a 4ª turma do Curso Intensivo.', 'cores.jpg', 7),
(18, '2024-06-12 15:07:52', 'teste', 'test', 'testando', 'consultoria-treinamento.jpg', 18);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` enum('admin','editor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `tipo`) VALUES
(7, 'matheus', 'matheus@gmail.com', '$2y$10$sceLMwA4Ettg2WgCfbdqD.XyRboXaQaRZrUDhj79nKY33wntOBiCu', 'admin'),
(9, 'teste', 'teste@teste.com', '$2y$10$DOBQ13Yr8bUxWNQ3rHJ0WepLrmlefMBM8h63iTQV0IsDdFK5F4vRK', 'admin'),
(11, 'usuarioanonimo', 'shiu@gmail.com', '$2y$10$Q35x8ylkQT6BZujN8VABWOjMMztvrpb4Nf7gbIutLYq/ZfFQ791fS', 'editor'),
(12, 'tempo', 't@gmail.com', '$2y$10$63lLrrfJSrBpWgLs/zeJmOP6Zkg9Ed2sRtGrbu4cPh0taQq5HPxhi', 'editor'),
(13, 'jubscreudo2', 'jj@gmail.com', '$2y$10$DZybyAbfG1rRi8iWWedTNeVd1bpz68GNEBoY.bzjfUeRNcZfqcXty', 'admin'),
(14, 'zezo', 'zezo@gmail.com', '$2y$10$iQTLiDyS65KfX83/1BD4.ObwHKTZKQ11nTB8uwTl3JeHESLGZMI06', 'admin'),
(15, 'eumesmo', 'mat@gmail.com', '$2y$10$2ANoH.BAViW/biAdRFRbC.VQauOXMqpFQ5LdqcVEzMBCThUUbVkhS', 'admin'),
(16, 'eu', 'eu@gmail.com', '$2y$10$H9JJA4w9LGRamaVGbgK5NuvyQLFit3WlsbxnYgsy7oVC.5krnTDpS', 'editor'),
(17, 'tipo', 'tipo@hotmail.com', '$2y$10$xe6WbJ/DY1OzcxoviR7itecGrBkC.AzdcLJrUR4/JTj.YPUBPPTC2', 'editor'),
(18, '123', '123@gmail.com', '$2y$10$RVz41QYOC239G13qcr8KvuB2GYDjWDTqtFlTg8ICis/VGIeErNoKi', 'editor');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_noticias_usuarios` (`usuario_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `senha` (`senha`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `fk_noticias_usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
