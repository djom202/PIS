-- phpMyAdmin SQL Dump
-- version 3.4.2-rc1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-06-2011 a las 23:09:31
-- Versión del servidor: 5.1.44
-- Versión de PHP: 5.2.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT=0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `admins`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--
-- Creación: 06-06-2011 a las 18:17:20
-- Última actualización: 06-06-2011 a las 18:18:00
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `comentario` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ced` (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Todos los mensajes de los usuarios desde el modulo de ''conta' AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `id_user`, `comentario`) VALUES
(1, 1, 'hey, me parece que la paguina esta super buena'),
(2, 1, 'Hey');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_ventas`
--
-- Creación: 06-06-2011 a las 15:13:15
-- Última actualización: 07-06-2011 a las 02:49:03
--

DROP TABLE IF EXISTS `est_ventas`;
CREATE TABLE IF NOT EXISTS `est_ventas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nombre` varchar(15) NOT NULL,
  `cant` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fecha` (`fecha`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='estadisticas de ventas' AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `est_ventas`
--

INSERT INTO `est_ventas` (`id`, `fecha`, `nombre`, `cant`) VALUES
(1, '2011-06-06 15:14:18', 'comedores', 101),
(2, '2011-06-06 15:15:20', 'salas', 3),
(3, '2011-06-06 15:15:35', 'alcobas', 1),
(4, '2011-06-06 15:15:51', 'sillones', 21),
(5, '2011-06-06 15:16:02', 'indep', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--
-- Creación: 08-06-2011 a las 00:19:30
-- Última actualización: 08-06-2011 a las 00:36:13
--

DROP TABLE IF EXISTS `facturas`;
CREATE TABLE IF NOT EXISTS `facturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_venta` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `valor_producto` int(11) NOT NULL COMMENT 'valor unitario que tiene el producto',
  `cantidad_producto` int(11) NOT NULL COMMENT 'cantidad de elementos vendidos',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id`, `id_venta`, `id_user`, `id_producto`, `valor_producto`, `cantidad_producto`) VALUES
(1, 1, 1, 1, 200, 1),
(2, 2, 1, 1, 200, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--
-- Creación: 06-06-2011 a las 03:08:34
-- Última actualización: 07-06-2011 a las 02:49:03
--

DROP TABLE IF EXISTS `inventario`;
CREATE TABLE IF NOT EXISTS `inventario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL COMMENT 'cantidad del producto en existencia',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_producto` (`id_producto`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `id_producto`, `cantidad`) VALUES
(1, 1, 7),
(2, 2, 24),
(3, 3, 17),
(4, 4, 3),
(5, 5, 200),
(6, 6, 30),
(7, 7, 7),
(8, 8, 15),
(9, 9, 19),
(10, 10, 2),
(11, 11, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--
-- Creación: 07-06-2011 a las 00:08:15
-- Última actualización: 08-06-2011 a las 03:02:33
--

DROP TABLE IF EXISTS `personas`;
CREATE TABLE IF NOT EXISTS `personas` (
  `ced` varchar(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `nom2` varchar(20) DEFAULT NULL,
  `ape` varchar(20) NOT NULL,
  `ape2` varchar(20) DEFAULT NULL,
  `correo` varchar(30) NOT NULL,
  PRIMARY KEY (`ced`),
  UNIQUE KEY `correo` (`correo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`ced`, `nom`, `nom2`, `ape`, `ape2`, `correo`) VALUES
('1140820188', 'Jonathan', NULL, 'Olier', 'Miranda', 'djpcsilvernetjom20@hotmail.com'),
('God', 'God', NULL, 'Of War', NULL, 'god_of_war@hotmail.com'),
('1140854153', 'Yaledys', NULL, 'Machacon', 'Garces', 'zayaley-venuz@hotmail.com'),
('1140854160', 'Lola', NULL, 'Machacon', 'Garces', 'lolaz@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--
-- Creación: 06-06-2011 a las 22:32:33
-- Última actualización: 06-06-2011 a las 22:32:33
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` int(20) NOT NULL,
  `imaurl` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `urlimagen` (`imaurl`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_tipo`, `nombre`, `descripcion`, `precio`, `imaurl`) VALUES
(1, 1, 'Comedor de Madera', 'Tiene 4 sillas, acolchado y de colores.', 200, 'jpg/muebles/muebles-rusticos2.jpg'),
(2, 3, 'Alcoba Naranja', 'Doble gabinete, mueble para el computador con silla propia y cama sensilla.', 20000, 'jpg/muebles/Muebles-Diseno.jpg'),
(3, 3, 'Alcoba Verde', 'Camarote doble, meson para PC y closed.', 50000, 'jpg/muebles/Sofas-colchones-salones-dormitorios-salvany.jpg'),
(4, 2, 'Sala Blanca', 'Sala de Color blanca con madera refinada en caoba.', 80000, 'jpg/muebles/charles-outdoor-furniture-bb-italia-5.jpg'),
(5, 2, 'Sala de colores', 'Cuatro sillones que cambian de color en la oscuridad.', 50000, 'jpg/muebles/muebles-que-cambian-de-color.jpg'),
(6, 4, 'Sillon  en Cuero caf', 'Es un sillon tapizado en cuero 100% original.', 70, 'jpg/muebles/images.jpeg'),
(7, 4, 'Sillon de colores', 'Sillon elegante de color azul, rojo, blanco de tamaño familiar.', 800, 'jpg/muebles/charles-outdoor-furniture-bb-italia-7.jpg'),
(8, 4, 'Sillon psicologico', 'Sillon de colores psicologicos para locos.', 350, 'jpg/muebles/charles-outdoor-furniture-bb-italia-2.jpg'),
(9, 4, 'Sillon cama', 'Sillon de tamaño doble para una pareja de recien casados.', 820, 'jpg/muebles/muebles-de-jardin.jpg'),
(10, 5, 'Mueble Ecologico', 'Mueble ecologico, hecho de madera natural.', 205, 'jpg/muebles/muebles ecologicos.jpg'),
(11, 5, 'Mueble Barroco', 'Mueble viejo, muy raro.', 750, 'jpg/muebles/mueble-barroco-3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--
-- Creación: 05-06-2011 a las 20:06:43
-- Última actualización: 06-06-2011 a las 01:56:08
--

DROP TABLE IF EXISTS `secciones`;
CREATE TABLE IF NOT EXISTS `secciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `desp` varchar(800) NOT NULL COMMENT 'descripciones',
  `imaurl` varchar(100) NOT NULL COMMENT 'url de la imagen',
  `link` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='secciones de ventas' AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`id`, `nombre`, `desp`, `imaurl`, `link`) VALUES
(1, 'Comedores', 'En todos nuestros comedores usted tendra la confianza que se lleva un mueble de 100% madera. Todos estan disponibles en los dos colores de vanguardia actuales (chocolate). Debido a la situacion de las casas actuales de medidas realmente pequeñas y a nuestro compromiso por satisfacer al 100% las necesidades de nuestros clientes ofrecemos nuestros comedores por piezas sueltas y en la mayoria de los casos los hay para 4 y 6 personas.', 'jpg/muebles/secciones/conjunto_carrick_y_4_sillas_de_forja.jpg', 'productos.php?seccion=1'),
(2, 'Salas', 'En todas nuestras salas usted tendra la confianza que se lleva un mueble de 100% madera. Todos estan disponibles en los dos colores de vanguardia actuales (chocolate). Debido a la situacion de las casas actuales de medidas realmente pequeñas y a nuestro compromiso por satisfacer al 100% las necesidades de nuestros clientes ofrecemos nuestros comedores por piezas sueltas y en la mayoria de los casos los hay para 4 y 6 personas.', 'jpg/muebles/secciones/muebles.jpg', 'productos.php?seccion=2'),
(3, 'Alcobas', 'En todas nuestras alcobas usted tendra la confianza que se lleva un mueble de 100% madera. Todos estan disponibles en los dos colores de vanguardia actuales (chocolate). Debido a la situacion de las casas actuales de medidas realmente pequeñas y a nuestro compromiso por satisfacer al 100% las necesidades de nuestros clientes ofrecemos nuestros comedores por piezas sueltas y en la mayoria de los casos los hay para 4 y 6 personas.', 'jpg/muebles/secciones/mueble1-grande.jpg', 'productos.php?seccion=3'),
(4, 'Sillones', 'En todos nuestros sillones usted tendra la confianza que se lleva un mueble de 100% madera. Todos estan disponibles en los dos colores de vanguardia actuales (chocolate). Debido a la situacion de las casas actuales de medidas realmente pequeñas y a nuestro compromiso por satisfacer al 100% las necesidades de nuestros clientes ofrecemos nuestros comedores por piezas sueltas y en la mayoria de los casos los hay para 4 y 6 personas.', 'jpg/muebles/secciones/charles-outdoor-furniture-bb-italia-1.jpg', 'productos.php?seccion=4'),
(5, 'Independiente', 'En todos nuestros muebles independientes usted tendra la confianza que se lleva un mueble de 100% madera. Todos estan disponibles en los dos colores de vanguardia actuales (chocolate). Debido a la situacion de las casas actuales de medidas realmente pequeñas y a nuestro compromiso por satisfacer al 100% las necesidades de nuestros clientes ofrecemos nuestros comedores por piezas sueltas y en la mayoria de los casos los hay para 4 y 6 personas.', 'jpg/muebles/secciones/muebles-carton.jpg', 'productos.php?seccion=5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
-- Creación: 07-06-2011 a las 23:06:42
-- Última actualización: 08-06-2011 a las 03:07:43
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(10) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `pass_b` varchar(20) NOT NULL,
  `imaurl` varchar(50) NOT NULL DEFAULT 'jpg/perfiles/dp64.gif',
  `photo` blob NOT NULL,
  `priv` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:usuario,1:administrador',
  `est` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1:activo,0:inactivo',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`),
  UNIQUE KEY `imaurl` (`imaurl`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `pass`, `pass_b`, `imaurl`, `photo`, `priv`, `est`) VALUES
(1, '1140820188', 'efbe7a36e3b2076518cd380615be2a66', 'teamomiyale', 'jpg/perfiles/avatar97153_2.gif', 0x2e2e2e2f6a70672f70657266696c65732f6470313030352e6a70672e, 0, 1),
(2, 'God', '6db23eee40d34e8290441bd8ff5bd924', 'usbw', 'jpg/perfiles/ani_27.gif', '', 1, 1),
(3, '1140854153', 'a2db97b850241abf965d54521327d7a3', 'yale1205', 'dp64.gif', '', 0, 1),
(4, '1140854160', '1daeed76359bebf35719ca872161ec68', 'lola16', '', '', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--
-- Creación: 06-06-2011 a las 03:55:47
-- Última actualización: 06-06-2011 a las 03:55:47
--

DROP TABLE IF EXISTS `ventas`;
CREATE TABLE IF NOT EXISTS `ventas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL COMMENT 'A quien se vendio',
  `fecha` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `id_user`, `fecha`, `total`) VALUES
(1, 1, '2011-06-05 22:02:00', 500000);
COMMIT;
