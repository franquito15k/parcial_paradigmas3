SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `clave` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


CREATE TABLE puntajes (
  "id_puntaje" int(11) NOT NULL,
  "id" int(11) NOT NULL,
  puntaje int(11) NOT NULL,
  FOREIGN KEY (id) REFERENCES usuarios(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE "puntajes"
  ADD PRIMARY KEY (id_puntaje);

ALTER TABLE "puntajes"
  MODIFY "id_puntaje" int(11) NOT NULL AUTO_INCREMENT;

