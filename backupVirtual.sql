/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.7.2-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: hypestepdb
-- ------------------------------------------------------
-- Server version	11.7.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `bitacora`
--

DROP TABLE IF EXISTS `bitacora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `bitacora` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `sentencia` varchar(700) DEFAULT NULL,
  `contrasentencia` varchar(700) DEFAULT NULL,
  `fecha` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora`
--

LOCK TABLES `bitacora` WRITE;
/*!40000 ALTER TABLE `bitacora` DISABLE KEYS */;
INSERT INTO `bitacora` VALUES
(1,'pike','UPDATE productos SET marca = \"spike jordan\", modelo = \"jordan 1   \", talla = 27.00, colorway = \"chicago red\", precio = 1000.00, disponibilidad = 500, img = \"https://static.nike.com/a/images/f_auto/dpr_3.0,cs_srgb/w_363,c_limit/89c121fc-3d07-4de0-aef6-bcc9c2764a2c/air-jordan-1-2022-lost-and-found-chicago-la-inspiraci%C3%B3n-detr%C3%A1s-del-dise%C3%B1o.jpg\", descripcion = \"la prueba\" WHERE id = 5','UPDATE productos SET marca = \"espaik\", modelo = \"jordan 1  \", talla = 27.00, colorway = \"chicago red\", precio = 1000.00, disponibilidad = 500, img = \"https://static.nike.com/a/images/f_auto/dpr_3.0,cs_srgb/w_363,c_limit/89c121fc-3d07-4de0-aef6-bcc9c2764a2c/air-jordan-1-2022-lost-and-found-chicago-la-inspiraci%C3%B3n-detr%C3%A1s-del-dise%C3%B1o.jpg\", descripcion = \"la prueba\" WHERE id = 5','2025-05-13 23:33:27'),
(2,'pike','INSERT INTO productos (id, marca, modelo, talla, colorway, precio, disponibilidad, img, descripcion) VALUES (9, \"richard jordan\", \"pilingon1\", 23.00, \"negro\", 50.00, 2, \"https://images.stockx.com/images/Nike-Air-Force-1-Low-07-Premium-Chicago-Product.jpg?fit=fill&bg=FFFFFF&w=700&h=500&fm=webp&auto=compress&q=90&dpr=2&trim=color&updated_at=1738193358\", \"tenis con caca\")','DELETE FROM productos WHERE id = 9','2025-05-13 23:38:13'),
(3,'pike','DELETE FROM productos WHERE id = 8','INSERT INTO productos (id, marca, modelo, talla, colorway, precio, disponibilidad, img, descripcion) VALUES (8, \"nike\", \"air force 1\", 29.00, \"chicago red\", 1500.00, 10, \"https://images.stockx.com/images/Nike-Air-Force-1-Low-07-Premium-Chicago-Product.jpg?fit=fill&bg=FFFFFF&w=700&h=500&fm=webp&auto=compress&q=90&dpr=2&trim=color&updated_at=1738193358\", \"tenis chido\")','2025-05-13 23:41:49'),
(4,'pike','UPDATE usuarios SET email = \"asdf@pike.com\", username = \"pike\", passwd = \"$2y$10$gB8FSU3HZ0PheWw/RcW1HuI5VVaQluWA2vE.UnxOnbUvPoq3jeAN6\", phone = \"123789456\", addrss = \"casa de el abuelo\", privilegiado = 1 WHERE id_usuarios = 1','UPDATE usuarios SET email = \"asdf@pike.com\", username = \"michael\", passwd = \"$2y$10$gB8FSU3HZ0PheWw/RcW1HuI5VVaQluWA2vE.UnxOnbUvPoq3jeAN6\", phone = \"123789456\", addrss = \"casa de el abuelo\", privilegiado = 1 WHERE id_usuarios = 1','2025-05-13 23:55:12'),
(5,'pike','UPDATE usuarios SET email = \"asdf@pike.com\", username = \"pike\", passwd = \"$2y$10$gB8FSU3HZ0PheWw/RcW1HuI5VVaQluWA2vE.UnxOnbUvPoq3jeAN6\", phone = \"123789456\", addrss = \"casa de el abuelo\", privilegiado = 1 WHERE id_usuarios = 1','UPDATE usuarios SET email = \"asdf@pike.com\", username = \"pike\", passwd = \"$2y$10$gB8FSU3HZ0PheWw/RcW1HuI5VVaQluWA2vE.UnxOnbUvPoq3jeAN6\", phone = \"123789456\", addrss = \"casa de el abuelo\", privilegiado = 1 WHERE id_usuarios = 1','2025-05-13 23:55:27'),
(6,'pike','UPDATE usuarios SET email = \"asdf@pike.com\", username = \"pike\", passwd = \"$2y$10$gB8FSU3HZ0PheWw/RcW1HuI5VVaQluWA2vE.UnxOnbUvPoq3jeAN6\", phone = \"123789456\", addrss = \"casa de miguelito\", privilegiado = 1 WHERE id_usuarios = 1','UPDATE usuarios SET email = \"asdf@pike.com\", username = \"pike\", passwd = \"$2y$10$gB8FSU3HZ0PheWw/RcW1HuI5VVaQluWA2vE.UnxOnbUvPoq3jeAN6\", phone = \"123789456\", addrss = \"casa de el abuelo\", privilegiado = 1 WHERE id_usuarios = 1','2025-05-13 23:56:26'),
(7,'pike','UPDATE usuarios SET email = \"asdf@pike.com\", username = \"pike\", passwd = \"$2y$10$gB8FSU3HZ0PheWw/RcW1HuI5VVaQluWA2vE.UnxOnbUvPoq3jeAN6\", phone = \"123789456\", addrss = \"casa de miguelito\", privilegiado = 1 WHERE id_usuarios = 1','UPDATE usuarios SET email = \"asdf@pike.com\", username = \"pike\", passwd = \"$2y$10$gB8FSU3HZ0PheWw/RcW1HuI5VVaQluWA2vE.UnxOnbUvPoq3jeAN6\", phone = \"123789456\", addrss = \"casa de miguelito\", privilegiado = 1 WHERE id_usuarios = 1','2025-05-13 23:57:16'),
(8,'pike','UPDATE usuarios SET email = \"maria@gmail.com\", username = \"pike\", passwd = \"$2y$10$VEypjeJDHV9yZtYiDhk9a.XygyQZZSA5xfoQjX0kk30zm0tpoR46q\", phone = \"321654987\", addrss = \"casa2\", privilegiado = 0 WHERE id_usuarios = 4','UPDATE usuarios SET email = \"maria@gmail.com\", username = \"mary\", passwd = \"$2y$10$VEypjeJDHV9yZtYiDhk9a.XygyQZZSA5xfoQjX0kk30zm0tpoR46q\", phone = \"321654987\", addrss = \"casa2\", privilegiado = 0 WHERE id_usuarios = 4','2025-05-13 23:57:26'),
(9,'pike','UPDATE usuarios SET email = \"asdf@pike.com\", username = \"pike\", passwd = \"$2y$10$gB8FSU3HZ0PheWw/RcW1HuI5VVaQluWA2vE.UnxOnbUvPoq3jeAN6\", phone = \"123789456\", addrss = \"casa de miguelito\", privilegiado = 1 WHERE id_usuarios = 1','UPDATE usuarios SET email = \"asdf@pike.com\", username = \"pike\", passwd = \"$2y$10$gB8FSU3HZ0PheWw/RcW1HuI5VVaQluWA2vE.UnxOnbUvPoq3jeAN6\", phone = \"123789456\", addrss = \"casa de miguelito\", privilegiado = 1 WHERE id_usuarios = 1','2025-05-13 23:58:24'),
(10,'pike','UPDATE usuarios SET email = \"asdf@pike.com\", username = \"ricardito\", passwd = \"$2y$10$gB8FSU3HZ0PheWw/RcW1HuI5VVaQluWA2vE.UnxOnbUvPoq3jeAN6\", phone = \"123789456\", addrss = \"casa de miguelito\", privilegiado = 1 WHERE id_usuarios = 1','UPDATE usuarios SET email = \"asdf@pike.com\", username = \"pike\", passwd = \"$2y$10$gB8FSU3HZ0PheWw/RcW1HuI5VVaQluWA2vE.UnxOnbUvPoq3jeAN6\", phone = \"123789456\", addrss = \"casa de miguelito\", privilegiado = 1 WHERE id_usuarios = 1','2025-05-14 00:00:06'),
(11,'pike','UPDATE usuarios SET email = \"asdf@pike.com\", username = \"pike\", passwd = \"$2y$10$gB8FSU3HZ0PheWw/RcW1HuI5VVaQluWA2vE.UnxOnbUvPoq3jeAN6\", phone = \"123789456\", addrss = \"casa de miguelito\", privilegiado = 1 WHERE id_usuarios = 1','UPDATE usuarios SET email = \"asdf@pike.com\", username = \"ricardito\", passwd = \"$2y$10$gB8FSU3HZ0PheWw/RcW1HuI5VVaQluWA2vE.UnxOnbUvPoq3jeAN6\", phone = \"123789456\", addrss = \"casa de miguelito\", privilegiado = 1 WHERE id_usuarios = 1','2025-05-14 00:00:22'),
(12,'pike','UPDATE usuarios SET email = \"maria@gmail.com\", username = \"uriviri\", passwd = \"$2y$10$VEypjeJDHV9yZtYiDhk9a.XygyQZZSA5xfoQjX0kk30zm0tpoR46q\", phone = \"321654987\", addrss = \"casa2\", privilegiado = 0 WHERE id_usuarios = 4','UPDATE usuarios SET email = \"maria@gmail.com\", username = \"pike\", passwd = \"$2y$10$VEypjeJDHV9yZtYiDhk9a.XygyQZZSA5xfoQjX0kk30zm0tpoR46q\", phone = \"321654987\", addrss = \"casa2\", privilegiado = 0 WHERE id_usuarios = 4','2025-05-14 00:00:34'),
(13,'pike','DELETE FROM usuarios WHERE id_usuarios = 4','INSERT INTO usuarios (id_usuarios, email, username, passwd, phone, addrss, privilegiado) VALUES (4, \"maria@gmail.com\", \"uriviri\", \"$2y$10$VEypjeJDHV9yZtYiDhk9a.XygyQZZSA5xfoQjX0kk30zm0tpoR46q\", \"321654987\", \"casa2\", 0)','2025-05-14 00:04:04'),
(14,'pike','INSERT INTO usuarios (id_usuarios, email, username, passwd, phone, addrss, privilegiado) VALUES (6, \"uriel@ceti.mx\", \"uriel\", \"$2y$10$G2PcA/jL3UwHIPlI54MaBOX8i2/wblaefnE1M5v0X2lw0nlTxnmLu\", \"1122334455\", \"casa de uriel\", 0)','DELETE FROM usuarios WHERE id_usuarios = 6','2025-05-14 00:06:48'),
(15,'uriel','DELETE FROM usuarios WHERE id_usuarios = 5','INSERT INTO usuarios (id_usuarios, email, username, passwd, phone, addrss, privilegiado) VALUES (5, \"ivanchapulinesquito@hotmail.com\", \"pike\", \"$2y$10$4UCjtOh4CYNDS8lTEcjMv.LWErB/GMyvwW8RgONKlVZjkXpeKD04a\", \"123123123\", \"mi casa\", 0)','2025-05-14 00:44:20'),
(16,'','INSERT INTO usuarios (id_usuarios, email, username, passwd, phone, addrss, privilegiado) VALUES (7, \"maria@gmail.com\", \"invitado\", \"$2y$10$NjQypu2CqNGVHZK45gzJL.NlDWAScxxJDvv0WJ.ildtwTvsG2yure\", \"258456\", \"mi casa\", 0)','DELETE FROM usuarios WHERE id_usuarios = 7','2025-05-14 01:06:51'),
(17,'invitado','UPDATE usuarios SET email = \"maria@gmail.com\", username = \"invitado\", passwd = \"$2y$10$NjQypu2CqNGVHZK45gzJL.NlDWAScxxJDvv0WJ.ildtwTvsG2yure\", phone = \"258456\", addrss = \"mi casa\", privilegiado = 1 WHERE id_usuarios = 7','UPDATE usuarios SET email = \"maria@gmail.com\", username = \"invitado\", passwd = \"$2y$10$NjQypu2CqNGVHZK45gzJL.NlDWAScxxJDvv0WJ.ildtwTvsG2yure\", phone = \"258456\", addrss = \"mi casa\", privilegiado = 0 WHERE id_usuarios = 7','2025-05-14 01:11:21'),
(18,'invitado','UPDATE usuarios SET email = \"maria@gmail.com\", username = \"invitado\", passwd = \"$2y$10$NjQypu2CqNGVHZK45gzJL.NlDWAScxxJDvv0WJ.ildtwTvsG2yure\", phone = \"258456\", addrss = \"mi casa\", privilegiado = 1 WHERE id_usuarios = 7','UPDATE usuarios SET email = \"maria@gmail.com\", username = \"invitado\", passwd = \"$2y$10$NjQypu2CqNGVHZK45gzJL.NlDWAScxxJDvv0WJ.ildtwTvsG2yure\", phone = \"258456\", addrss = \"mi casa\", privilegiado = 1 WHERE id_usuarios = 7','2025-05-14 01:11:28'),
(19,'invitado','UPDATE productos SET marca = \"spike jordan \", modelo = \"jordan 1    \", talla = 27.00, colorway = \"chicago red\", precio = 1000.00, disponibilidad = 500, img = \"https://static.nike.com/a/images/f_auto/dpr_3.0,cs_srgb/w_363,c_limit/89c121fc-3d07-4de0-aef6-bcc9c2764a2c/air-jordan-1-2022-lost-and-found-chicago-la-inspiraci%C3%B3n-detr%C3%A1s-del-dise%C3%B1o.jpg\", descripcion = \"la prueba\" WHERE id = 5','UPDATE productos SET marca = \"spike jordan\", modelo = \"jordan 1   \", talla = 27.00, colorway = \"chicago red\", precio = 1000.00, disponibilidad = 500, img = \"https://static.nike.com/a/images/f_auto/dpr_3.0,cs_srgb/w_363,c_limit/89c121fc-3d07-4de0-aef6-bcc9c2764a2c/air-jordan-1-2022-lost-and-found-chicago-la-inspiraci%C3%B3n-detr%C3%A1s-del-dise%C3%B1o.jpg\", descripcion = \"la prueba\" WHERE id = 5','2025-05-14 10:53:59'),
(20,'uriel','DELETE FROM productos WHERE id = 9','INSERT INTO productos (id, marca, modelo, talla, colorway, precio, disponibilidad, img, descripcion) VALUES (9, \"richard jordan\", \"pilingon1\", 23.00, \"negro\", 50.00, 2, \"https://images.stockx.com/images/Nike-Air-Force-1-Low-07-Premium-Chicago-Product.jpg?fit=fill&bg=FFFFFF&w=700&h=500&fm=webp&auto=compress&q=90&dpr=2&trim=color&updated_at=1738193358\", \"tenis con caca\")','2025-05-14 15:53:02'),
(21,'invitado','INSERT INTO productos (id, marca, modelo, talla, colorway, precio, disponibilidad, img, descripcion) VALUES (10, \"adidas\", \"campus\", 25.00, \"grass green\", 1750.00, 50, \"https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/b0b6d4a107ad4e84b3baaf8700866f07_9366/Tenis_Campus_00s_Verde_H03472_01_standard.jpg\", \"tenis verde pasto chingon\")','DELETE FROM productos WHERE id = 10','2025-05-14 16:15:07'),
(22,'invitado','UPDATE productos SET marca = \"spike jordan  \", modelo = \"jordan 2 \", talla = 27.00, colorway = \"chicago red\", precio = 1000.00, disponibilidad = 500, img = \"https://static.nike.com/a/images/f_auto/dpr_3.0,cs_srgb/w_363,c_limit/89c121fc-3d07-4de0-aef6-bcc9c2764a2c/air-jordan-1-2022-lost-and-found-chicago-la-inspiraci%C3%B3n-detr%C3%A1s-del-dise%C3%B1o.jpg\", descripcion = \"la prueba\" WHERE id = 5','UPDATE productos SET marca = \"spike jordan \", modelo = \"jordan 1    \", talla = 27.00, colorway = \"chicago red\", precio = 1000.00, disponibilidad = 500, img = \"https://static.nike.com/a/images/f_auto/dpr_3.0,cs_srgb/w_363,c_limit/89c121fc-3d07-4de0-aef6-bcc9c2764a2c/air-jordan-1-2022-lost-and-found-chicago-la-inspiraci%C3%B3n-detr%C3%A1s-del-dise%C3%B1o.jpg\", descripcion = \"la prueba\" WHERE id = 5','2025-05-14 16:17:23'),
(23,'','INSERT INTO usuarios (id_usuarios, email, username, passwd, phone, addrss, privilegiado) VALUES (8, \"admin@gmail.com\", \"admin\", \"$2y$10$IanKIX1is.leoOCAiZMC0O51i5pcxODokXE5hfKXumvU9oEqgEFCu\", \"456456\", \"direccion\", 0)','DELETE FROM usuarios WHERE id_usuarios = 8','2025-06-16 22:55:20'),
(24,'root','UPDATE usuarios SET email = \"admin@gmail.com\", username = \"admin\", passwd = \"$2y$10$IanKIX1is.leoOCAiZMC0O51i5pcxODokXE5hfKXumvU9oEqgEFCu\", phone = \"456456\", addrss = \"direccion\", privilegiado = 1 WHERE id_usuarios = 8','UPDATE usuarios SET email = \"admin@gmail.com\", username = \"admin\", passwd = \"$2y$10$IanKIX1is.leoOCAiZMC0O51i5pcxODokXE5hfKXumvU9oEqgEFCu\", phone = \"456456\", addrss = \"direccion\", privilegiado = 0 WHERE id_usuarios = 8','2025-06-16 22:58:11'),
(25,'','INSERT INTO usuarios (id_usuarios, email, username, passwd, phone, addrss, privilegiado) VALUES (9, \"usuario@gmail.com\", \"usuario\", \"$2y$10$MfSRRrO8oo/39a3EpeQ5fOteTyvBCS2gZd6J8hhdfl/AOQusxeDHO\", \"678678\", \"casa de usuario\", 0)','DELETE FROM usuarios WHERE id_usuarios = 9','2025-06-16 23:01:13'),
(26,'invitado','INSERT INTO productos (id, marca, modelo, talla, colorway, precio, disponibilidad, img, descripcion) VALUES (11, \"nike \", \"air force 1\", 27.00, \"negro\", 80.00, 200, \"https://acdn-us.mitiendanube.com/stores/003/194/492/products/911-9b223c165d9e0f2e9d16897417753060-1024-1024.png\", \"el tenis pelionero\")','DELETE FROM productos WHERE id = 11','2025-06-17 21:40:26'),
(27,'','INSERT INTO usuarios (id_usuarios, email, username, passwd, phone, addrss, privilegiado) VALUES (10, \"amezcuaalejandro2003@gmail.com\", \"Ivan Lujan\", \"$2y$10$VAFCLd9bQyDvE2.HrYRbWObd/Kt.iqZcmVmDDJPo8uFxylAqmkC2.\", \"123454321\", \"casa de ivan\", 0)','DELETE FROM usuarios WHERE id_usuarios = 10','2025-06-17 22:09:54'),
(28,'root','UPDATE productos SET marca = \"nike \", modelo = \"air force 1\", talla = 27.00, colorway = \"negro\", precio = 80.00, disponibilidad = 199, img = \"https://acdn-us.mitiendanube.com/stores/003/194/492/products/911-9b223c165d9e0f2e9d16897417753060-1024-1024.png\", descripcion = \"el tenis pelionero\" WHERE id = 11','UPDATE productos SET marca = \"nike \", modelo = \"air force 1\", talla = 27.00, colorway = \"negro\", precio = 80.00, disponibilidad = 200, img = \"https://acdn-us.mitiendanube.com/stores/003/194/492/products/911-9b223c165d9e0f2e9d16897417753060-1024-1024.png\", descripcion = \"el tenis pelionero\" WHERE id = 11','2025-06-17 22:11:13'),
(29,'root','UPDATE productos SET marca = \"nike \", modelo = \"air force 1\", talla = 27.00, colorway = \"negro\", precio = 80.00, disponibilidad = 198, img = \"https://acdn-us.mitiendanube.com/stores/003/194/492/products/911-9b223c165d9e0f2e9d16897417753060-1024-1024.png\", descripcion = \"el tenis pelionero\" WHERE id = 11','UPDATE productos SET marca = \"nike \", modelo = \"air force 1\", talla = 27.00, colorway = \"negro\", precio = 80.00, disponibilidad = 199, img = \"https://acdn-us.mitiendanube.com/stores/003/194/492/products/911-9b223c165d9e0f2e9d16897417753060-1024-1024.png\", descripcion = \"el tenis pelionero\" WHERE id = 11','2025-06-17 22:19:12'),
(30,'root','UPDATE productos SET marca = \"nike \", modelo = \"air force 1\", talla = 27.00, colorway = \"negro\", precio = 80.00, disponibilidad = 197, img = \"https://acdn-us.mitiendanube.com/stores/003/194/492/products/911-9b223c165d9e0f2e9d16897417753060-1024-1024.png\", descripcion = \"el tenis pelionero\" WHERE id = 11','UPDATE productos SET marca = \"nike \", modelo = \"air force 1\", talla = 27.00, colorway = \"negro\", precio = 80.00, disponibilidad = 198, img = \"https://acdn-us.mitiendanube.com/stores/003/194/492/products/911-9b223c165d9e0f2e9d16897417753060-1024-1024.png\", descripcion = \"el tenis pelionero\" WHERE id = 11','2025-06-17 22:24:50'),
(31,'admin','DELETE FROM productos WHERE id = 11','INSERT INTO productos (id, marca, modelo, talla, colorway, precio, disponibilidad, img, descripcion) VALUES (11, \"nike \", \"air force 1\", 27.00, \"negro\", 80.00, 197, \"https://acdn-us.mitiendanube.com/stores/003/194/492/products/911-9b223c165d9e0f2e9d16897417753060-1024-1024.png\", \"el tenis pelionero\")','2025-06-18 18:54:05'),
(32,'admin','INSERT INTO productos (id, marca, modelo, talla, colorway, precio, disponibilidad, img, descripcion) VALUES (12, \"adidas\", \"forum\", 26.00, \"last forum bad bunny\", 80.00, 15, \"https://leplugmx.com/cdn/shop/products/image_b26c68a8-82f4-4285-8a6f-b46f9785e6e3.jpg?v=1672462526\", \"tenis adidas de bad bunny chido\")','DELETE FROM productos WHERE id = 12','2025-06-18 18:55:09'),
(33,'admin','DELETE FROM usuarios WHERE id_usuarios = 1','INSERT INTO usuarios (id_usuarios, email, username, passwd, phone, addrss, privilegiado) VALUES (1, \"asdf@pike.com\", \"pike\", \"$2y$10$gB8FSU3HZ0PheWw/RcW1HuI5VVaQluWA2vE.UnxOnbUvPoq3jeAN6\", \"123789456\", \"casa de miguelito\", 1)','2025-06-18 18:56:39'),
(34,'','INSERT INTO usuarios (id_usuarios, email, username, passwd, phone, addrss, privilegiado) VALUES (11, \"rsantana@ceti.mx\", \"ross\", \"$2y$10$BCreAybmxIf0XJP2pCtH9OqGDYUMjL6qSDaP3acjcR3xj8bOYuiri\", \"123123123\", \"casa de ross\", 0)','DELETE FROM usuarios WHERE id_usuarios = 11','2025-06-19 10:00:27');
/*!40000 ALTER TABLE `bitacora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carrito`
--

DROP TABLE IF EXISTS `carrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `carrito` (
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT 1,
  KEY `id_usuario` (`id_usuario`),
  KEY `id_producto` (`id_producto`),
  CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `registros` (`id_usuarios`) ON DELETE CASCADE,
  CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrito`
--

LOCK TABLES `carrito` WRITE;
/*!40000 ALTER TABLE `carrito` DISABLE KEYS */;
INSERT INTO `carrito` VALUES
(6,5,2),
(7,5,2),
(7,10,2),
(10,12,1),
(11,12,1);
/*!40000 ALTER TABLE `carrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `talla` decimal(10,2) NOT NULL,
  `colorway` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `disponibilidad` int(100) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `descripcion` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES
(5,'spike jordan  ','jordan 2 ',27.00,'chicago red',1000.00,500,'https://static.nike.com/a/images/f_auto/dpr_3.0,cs_srgb/w_363,c_limit/89c121fc-3d07-4de0-aef6-bcc9c2764a2c/air-jordan-1-2022-lost-and-found-chicago-la-inspiraci%C3%B3n-detr%C3%A1s-del-dise%C3%B1o.jpg','la prueba'),
(10,'adidas','campus',25.00,'grass green',1750.00,50,'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/b0b6d4a107ad4e84b3baaf8700866f07_9366/Tenis_Campus_00s_Verde_H03472_01_standard.jpg','tenis verde pasto chingon'),
(12,'adidas','forum',26.00,'last forum bad bunny',80.00,15,'https://leplugmx.com/cdn/shop/products/image_b26c68a8-82f4-4285-8a6f-b46f9785e6e3.jpg?v=1672462526','tenis adidas de bad bunny chido');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_uca1400_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `productos_after_insert` AFTER INSERT ON `productos` FOR EACH ROW BEGIN
DECLARE usuario VARCHAR(100);
    DECLARE sentencia_sql VARCHAR(700);
    DECLARE contrasentencia_sql VARCHAR(700);

    -- Obtener el nombre del usuario (variable de sesión o usuario de MySQL)
    SET usuario = IFNULL(@username, SUBSTRING_INDEX(USER(), '@', 1));

    -- Sentencia que se ejecutó (INSERT)
    SET sentencia_sql = CONCAT(
        'INSERT INTO productos (id, marca, modelo, talla, colorway, precio, disponibilidad, img, descripcion) VALUES (',
        NEW.id, ', "', NEW.marca, '", "', NEW.modelo, '", ', NEW.talla, ', "', NEW.colorway, '", ',
        NEW.precio, ', ', NEW.disponibilidad, ', "', NEW.img, '", "', NEW.descripcion, '")'
    );

    -- Contrasentencia para revertir el INSERT (DELETE)
    SET contrasentencia_sql = CONCAT(
        'DELETE FROM productos WHERE id = ', NEW.id
    );

    -- Insertar en la bitácora
    INSERT INTO bitacora (username, sentencia, contrasentencia)
    VALUES (usuario, sentencia_sql, contrasentencia_sql);
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_uca1400_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `productos_after_update` AFTER UPDATE ON `productos` FOR EACH ROW BEGIN
DECLARE usuario VARCHAR(100);
    DECLARE sentencia_sql VARCHAR(700);
    DECLARE contrasentencia_sql VARCHAR(700);

    -- Obtener el usuario actual (si se usa una variable de sesión @username, la toma; si no, toma el user de MySQL)
    SET usuario = IFNULL(@username, SUBSTRING_INDEX(USER(), '@', 1));

    -- Construcción de la sentencia que se ejecutó (lo nuevo)
    SET sentencia_sql = CONCAT(
        'UPDATE productos SET ',
        'marca = "', NEW.marca, '", ',
        'modelo = "', NEW.modelo, '", ',
        'talla = ', NEW.talla, ', ',
        'colorway = "', NEW.colorway, '", ',
        'precio = ', NEW.precio, ', ',
        'disponibilidad = ', NEW.disponibilidad, ', ',
        'img = "', NEW.img, '", ',
        'descripcion = "', NEW.descripcion, '" ',
        'WHERE id = ', OLD.id
    );
    SET contrasentencia_sql = CONCAT(
        'UPDATE productos SET ',
        'marca = "', OLD.marca, '", ',
        'modelo = "', OLD.modelo, '", ',
        'talla = ', OLD.talla, ', ',
        'colorway = "', OLD.colorway, '", ',
        'precio = ', OLD.precio, ', ',
        'disponibilidad = ', OLD.disponibilidad, ', ',
        'img = "', OLD.img, '", ',
        'descripcion = "', OLD.descripcion, '" ',
        'WHERE id = ', NEW.id
    );
    INSERT INTO bitacora (username, sentencia, contrasentencia)
    VALUES (usuario, sentencia_sql, contrasentencia_sql);
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_uca1400_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `productos_after_delete` AFTER DELETE ON `productos` FOR EACH ROW BEGIN
DECLARE usuario VARCHAR(100);
    DECLARE sentencia_sql VARCHAR(700);
    DECLARE contrasentencia_sql VARCHAR(700);

    -- Obtener el nombre del usuario (variable de sesión o usuario de MySQL)
    SET usuario = IFNULL(@username, SUBSTRING_INDEX(USER(), '@', 1));

    -- Sentencia ejecutada (DELETE)
    SET sentencia_sql = CONCAT(
        'DELETE FROM productos WHERE id = ', OLD.id
    );

    -- Contrasentencia para revertir el DELETE (INSERT)
    SET contrasentencia_sql = CONCAT(
        'INSERT INTO productos (id, marca, modelo, talla, colorway, precio, disponibilidad, img, descripcion) VALUES (',
        OLD.id, ', "', OLD.marca, '", "', OLD.modelo, '", ', OLD.talla, ', "', OLD.colorway, '", ',
        OLD.precio, ', ', OLD.disponibilidad, ', "', OLD.img, '", "', OLD.descripcion, '")'
    );

    -- Insertar en la bitácora
    INSERT INTO bitacora (username, sentencia, contrasentencia)
    VALUES (usuario, sentencia_sql, contrasentencia_sql);
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `registros`
--

DROP TABLE IF EXISTS `registros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `registros` (
  `id_usuarios` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `addrss` varchar(100) NOT NULL,
  `privilegiado` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_usuarios`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registros`
--

LOCK TABLES `registros` WRITE;
/*!40000 ALTER TABLE `registros` DISABLE KEYS */;
INSERT INTO `registros` VALUES
(2,'rosa@hotmail.com','rosa','$2y$10$hA8GhKJpqI07izf92c63Ze87qfTI2cILZpfYwVKAd6JYTnHQ7fyQG','123123123','casa de rosita',0),
(3,'elcoco@hotmail.com','chita','$2y$10$4s0xwVBRNwGLeR51NVaabuBBSqg2INkSsiFcznhOnn8a4dCn/UIDC','123456789','casa1',0),
(6,'uriel@ceti.mx','uriel','$2y$10$G2PcA/jL3UwHIPlI54MaBOX8i2/wblaefnE1M5v0X2lw0nlTxnmLu','1122334455','casa de uriel',0),
(7,'maria@gmail.com','invitado','$2y$10$NjQypu2CqNGVHZK45gzJL.NlDWAScxxJDvv0WJ.ildtwTvsG2yure','258456','mi casa',1),
(8,'admin@gmail.com','admin','$2y$10$IanKIX1is.leoOCAiZMC0O51i5pcxODokXE5hfKXumvU9oEqgEFCu','456456','direccion',1),
(9,'usuario@gmail.com','usuario','$2y$10$MfSRRrO8oo/39a3EpeQ5fOteTyvBCS2gZd6J8hhdfl/AOQusxeDHO','678678','casa de usuario',0),
(10,'amezcuaalejandro2003@gmail.com','Ivan Lujan','$2y$10$VAFCLd9bQyDvE2.HrYRbWObd/Kt.iqZcmVmDDJPo8uFxylAqmkC2.','123454321','casa de ivan',0),
(11,'rsantana@ceti.mx','ross','$2y$10$BCreAybmxIf0XJP2pCtH9OqGDYUMjL6qSDaP3acjcR3xj8bOYuiri','123123123','casa de ross',0);
/*!40000 ALTER TABLE `registros` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_uca1400_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `registros_after_insert` AFTER INSERT ON `registros` FOR EACH ROW BEGIN
DECLARE usuario VARCHAR(100);
    DECLARE sentencia_sql VARCHAR(700);
    DECLARE contrasentencia_sql VARCHAR(700);

    SET usuario = IFNULL(@username, SUBSTRING_INDEX(USER(), '@', 1));

    SET sentencia_sql = CONCAT(
        'INSERT INTO usuarios (id_usuarios, email, username, passwd, phone, addrss, privilegiado) VALUES (',
        NEW.id_usuarios, ', "', NEW.email, '", "', NEW.username, '", "', NEW.passwd, '", "', 
        NEW.phone, '", "', NEW.addrss, '", ', NEW.privilegiado, ')'
    );

    SET contrasentencia_sql = CONCAT(
        'DELETE FROM usuarios WHERE id_usuarios = ', NEW.id_usuarios
    );

    INSERT INTO bitacora (username, sentencia, contrasentencia)
    VALUES (usuario, sentencia_sql, contrasentencia_sql);
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_uca1400_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `registros_after_update` AFTER UPDATE ON `registros` FOR EACH ROW BEGIN
 DECLARE usuario VARCHAR(100);
    DECLARE sentencia_sql VARCHAR(700);
    DECLARE contrasentencia_sql VARCHAR(700);

    SET usuario = IFNULL(@username, SUBSTRING_INDEX(USER(), '@', 1));

    SET sentencia_sql = CONCAT(
        'UPDATE usuarios SET email = "', NEW.email, '", username = "', NEW.username,
        '", passwd = "', NEW.passwd, '", phone = "', NEW.phone, '", addrss = "', NEW.addrss,
        '", privilegiado = ', NEW.privilegiado,
        ' WHERE id_usuarios = ', OLD.id_usuarios
    );

    SET contrasentencia_sql = CONCAT(
        'UPDATE usuarios SET email = "', OLD.email, '", username = "', OLD.username,
        '", passwd = "', OLD.passwd, '", phone = "', OLD.phone, '", addrss = "', OLD.addrss,
        '", privilegiado = ', OLD.privilegiado,
        ' WHERE id_usuarios = ', OLD.id_usuarios
    );

    INSERT INTO bitacora (username, sentencia, contrasentencia)
    VALUES (usuario, sentencia_sql, contrasentencia_sql);
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_uca1400_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `registros_after_delete` AFTER DELETE ON `registros` FOR EACH ROW BEGIN
DECLARE usuario VARCHAR(100);
    DECLARE sentencia_sql VARCHAR(700);
    DECLARE contrasentencia_sql VARCHAR(700);

    SET usuario = IFNULL(@username, SUBSTRING_INDEX(USER(), '@', 1));

    SET sentencia_sql = CONCAT(
        'DELETE FROM usuarios WHERE id_usuarios = ', OLD.id_usuarios
    );

    SET contrasentencia_sql = CONCAT(
        'INSERT INTO usuarios (id_usuarios, email, username, passwd, phone, addrss, privilegiado) VALUES (',
        OLD.id_usuarios, ', "', OLD.email, '", "', OLD.username, '", "', OLD.passwd, '", "', 
        OLD.phone, '", "', OLD.addrss, '", ', OLD.privilegiado, ')'
    );

    INSERT INTO bitacora (username, sentencia, contrasentencia)
    VALUES (usuario, sentencia_sql, contrasentencia_sql);
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2025-07-16  8:42:09
