CREATE DATABASE corrida_crud IF NOT EXISTS;
USE corrida_crud;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE DATABASE IF NOT EXISTS `corrida_crud` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `corrida_crud`;

CREATE TABLE `corrida_crud` (
  `numero` int NOT NULL,
  `foto` varchar(255),
  `nome` varchar(100) NOT NULL,
  `idade` int NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `equipe` varchar(100) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `telefone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `kit_retirado` tinyint(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci ,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO atletas (numero, nome, idade, categoria, equipe, telefone, email, kit_retirado, foto) 
VALUES (9, 'Júlio', 10, 'Infantil', 'Turma Cocoricó', '11111111111', 'julio@cocorico.com', 1, 'https://upload.wikimedia.org/wikipedia/pt/8/84/J%C3%BAlio_Cocoric%C3%B3.jpg');

INSERT INTO atletas (numero, nome, idade, categoria, equipe, telefone, email, kit_retirado, foto) 
VALUES (10, 'Zazá', 8, 'Infantil', 'Turma Cocoricó', '22222222222', 'zaza@cocorico.com', 0, 'https://vignette.wikia.nocookie.net/cocorico/images/e/e1/Zaz%C3%A1.jpg');

INSERT INTO atletas (numero, nome, idade, categoria, equipe, telefone, email, kit_retirado, foto) 
VALUES (11, 'Lilica', 9, 'Infantil', 'Turma Cocoricó', '33333333333', 'lilica@cocorico.com', 1, 'https://vignette.wikia.nocookie.net/cocorico/images/5/50/Lilica.jpg');

INSERT INTO atletas (numero, nome, idade, categoria, equipe, telefone, email, kit_retirado, foto) 
VALUES (12, 'Alípio', 12, 'Infantil', 'Turma Cocoricó', '44444444444', 'alipio@cocorico.com', 0, 'https://vignette.wikia.nocookie.net/cocorico/images/4/42/Al%C3%ADpio.jpg');

INSERT INTO atletas (numero, nome, idade, categoria, equipe, telefone, email, kit_retirado, foto) 
VALUES (13, 'Oriba', 15, 'Infantil', 'Turma Cocoricó', '55555555555', 'oriba@cocorico.com', 1, 'https://vignette.wikia.nocookie.net/cocorico/images/0/0b/Oriba.jpg');

INSERT INTO atletas (numero, nome, idade, categoria, equipe, telefone, email, kit_retirado, foto) 
VALUES (14, 'Astolfo', 7, 'Infantil', 'Turma Cocoricó', '66666666666', 'astolfo@cocorico.com', 0, 'https://vignette.wikia.nocookie.net/cocorico/images/b/b8/Astolfo.jpg');

INSERT INTO atletas (numero, nome, idade, categoria, equipe, telefone, email, kit_retirado, foto) 
VALUES (15, 'Patavina', 5, 'Infantil', 'Turma Cocoricó', '77777777777', 'patavina@cocorico.com', 1, 'https://vignette.wikia.nocookie.net/cocorico/images/9/92/Patavina.jpg');


ALTER TABLE `corrida_crud`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `corrida_crud`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;
