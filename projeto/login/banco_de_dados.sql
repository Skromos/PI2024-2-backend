-- O CÓDIGO ABAIXO É REFERENTE AO NOSSO BANCO DE DADOS

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Banco de dados: `login`

-- Estrutura para tabela `users`
CREATE TABLE IF NOT EXISTS `users` (
  `idusuario` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `cpf_cnpj` varchar(80) NOT NULL UNIQUE,  -- CPF/CNPJ único para evitar duplicados
  `senha` varchar(64) NOT NULL,
  `situacao` int(1) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Inserindo um exemplo de usuário
INSERT INTO `users` (`idusuario`, `nome`, `cpf_cnpj`, `senha`, `situacao`) VALUES
(5, 'Luiz', '71133531180', MD5('123'), 1) ON DUPLICATE KEY UPDATE `idusuario`=`idusuario`;

COMMIT;
