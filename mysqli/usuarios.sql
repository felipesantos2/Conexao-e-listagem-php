

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";





CREATE TABLE `usuarios` (
  `id`int(11) NOT NULL AUTO_INCREMENT ,
  `nome` varchar(220) NOT NULL,
  `email` varchar(2020) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

