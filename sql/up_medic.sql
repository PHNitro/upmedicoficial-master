-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Maio-2022 às 16:10
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `upmedic`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade`
--

CREATE TABLE `especialidade` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `PRONTUARIOS_ID` int(11) NOT NULL,
  `MEDICOS_ID` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `peso` float NOT NULL,
  `temperatura` float NOT NULL,
  `pressao` float NOT NULL,
  `altura` float NOT NULL,
  `descricao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `internacao`
--

CREATE TABLE `internacao` (
  `id` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `historico_id` int(11) NOT NULL,
  `PRONTUARIOS_has_MEDICOS_PRONTUARIOS_ID` int(11) NOT NULL,
  `PRONTUARIOS_has_MEDICOS_MEDICOS_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicacao`
--

CREATE TABLE `medicacao` (
  `id` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `historico_id` int(11) NOT NULL,
  `PRONTUARIOS_has_MEDICOS_PRONTUARIOS_ID` int(11) NOT NULL,
  `PRONTUARIOS_has_MEDICOS_MEDICOS_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `ID` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `datanascimento` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `crm` varchar(45) NOT NULL,
  `celular` varchar(14) NOT NULL,
  `especialidade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos_especialidades`
--

CREATE TABLE `medicos_especialidades` (
  `medicos_id` int(11) NOT NULL,
  `especialidade_id` int(11) NOT NULL,
  `clinico geral` varchar(45) NOT NULL,
  `cirurgiao geral` varchar(45) NOT NULL


) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `situacao` char(1) NOT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prontuario`
--

CREATE TABLE `prontuario` (
  `id` int(11) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `data_criacao` datetime NOT NULL,
  `ATIVO` tinyint(4) NOT NULL,
  `paciente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `especialidade`
--
ALTER TABLE `especialidade`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `historico prontuario_has_medico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`PRONTUARIOS_ID`,`MEDICOS_ID`),
  ADD KEY `fk_PRONTUARIOS_has_MEDICOS_MEDICOS1_idx` (`MEDICOS_ID`),
  ADD KEY `fk_PRONTUARIOS_has_MEDICOS_PRONTUARIOS1_idx` (`PRONTUARIOS_ID`);

--
-- Índices para tabela `internacao`
--
ALTER TABLE `internacao`
  ADD PRIMARY KEY (`id`,`PRONTUARIOS_has_MEDICOS_PRONTUARIOS_ID`,`PRONTUARIOS_has_MEDICOS_MEDICOS_ID`),
  ADD KEY `fk_internacao_PRONTUARIOS_has_MEDICOS1_idx` (`PRONTUARIOS_has_MEDICOS_PRONTUARIOS_ID`,`PRONTUARIOS_has_MEDICOS_MEDICOS_ID`);

--
-- Índices para tabela `medicacao`
--
ALTER TABLE `medicacao`
  ADD PRIMARY KEY (`id`,`PRONTUARIOS_has_MEDICOS_PRONTUARIOS_ID`,`PRONTUARIOS_has_MEDICOS_MEDICOS_ID`),
  ADD KEY `fk_medicao_PRONTUARIOS_has_MEDICOS1_idx` (`PRONTUARIOS_has_MEDICOS_PRONTUARIOS_ID`,`PRONTUARIOS_has_MEDICOS_MEDICOS_ID`);

--
-- Índices para tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CPF_UNIQUE` (`cpf`),
  ADD UNIQUE KEY `CRM_UNIQUE` (`crm`),
  ADD UNIQUE KEY `EMAIL_UNIQUE` (`email`);

--
-- Índices para tabela `medicos_especialidades`
--
ALTER TABLE `medicos_especialidades`
  ADD PRIMARY KEY (`medicos_id`,`especialidade_id`),
  ADD KEY `fk_MEDICOS_has_ESPECIALIDADES_ESPECIALIDADES1_idx` (`especialidade_id`),
  ADD KEY `fk_MEDICOS_has_ESPECIALIDADES_MEDICOS_idx` (`medicos_id`);

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `prontuario`
--
ALTER TABLE `prontuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_PRONTUARIOS_PACIENTES1_idx` (`paciente_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `especialidade`
--
ALTER TABLE `especialidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `internacao`
--
ALTER TABLE `internacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `medico`
--
ALTER TABLE `medico`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `prontuario`
--
ALTER TABLE `prontuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `historico prontuario_has_medico`
--
ALTER TABLE `historico`
  ADD CONSTRAINT `fk_PRONTUARIOS_has_MEDICOS_MEDICOS1` FOREIGN KEY (`MEDICOS_ID`) REFERENCES `medico` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PRONTUARIOS_has_MEDICOS_PRONTUARIOS1` FOREIGN KEY (`PRONTUARIOS_ID`) REFERENCES `prontuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `internacao`
--
ALTER TABLE `internacao`
  ADD CONSTRAINT `fk_internacao_PRONTUARIOS_has_MEDICOS1` FOREIGN KEY (`PRONTUARIOS_has_MEDICOS_PRONTUARIOS_ID`,`PRONTUARIOS_has_MEDICOS_MEDICOS_ID`) REFERENCES `historico prontuario_has_medico` (`PRONTUARIOS_ID`, `MEDICOS_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
