/********************EJERCICIO 1*********************/
-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-04-2020 a las 07:33:08
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cine01`
--
DROP DATABASE IF EXISTS `cine`;
CREATE DATABASE `cine`;
use `cine`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

CREATE TABLE `movies` (
  `ID` int(11) NOT NULL,
  `poster` longblob NOT NULL,
  `titulo` varchar(400) NOT NULL,
  `sinopsis` text NOT NULL,
  `director` varchar(200) NOT NULL,
  `genero` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `movies`
--
ALTER TABLE `movies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
/********************EJERCICIO 2*********************/

DROP DATABASE IF EXISTS `login`;
create DATABASE `login`;
use `login`;
--
-- Base de datos: `login_tuto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(123) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `clave` varchar(200) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MEMORY AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`correo`, `usuario`, `clave`) VALUES
('pedro@.gamil.com', 'pedro', '4dff4ea340f0a823f15d3f4f01ab62eae0e5da579ccb851f8db9dfe84c58b2b37b89903a740e1ee172da793a6e79d560e5f7f9bd058a12a280433ed6fa46510a'),
('cristian@gmail.com', 'cristian', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2');
COMMIT;


/********************EJERCICIO 3*********************/

DROP DATABASE IF EXISTS lenguajes;
CREATE DATABASE lenguajes CHARACTER SET utf8 COLLATE utf8_general_ci;
USE lenguajes;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'noticia'
--

CREATE TABLE IF NOT EXISTS lenguaje (
  idlengu int(11) NOT NULL,
  nombrelenguaje varchar(120) NOT NULL,
  descripcion text NOT NULL,
  imglenguaje varchar(200) NOT NULL,
  idlen int(11) NOT NULL,
  PRIMARY KEY (idlengu)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='El detalle de los lenguajes de programacion';

--
-- Volcado de datos para la tabla 'noticia'
--

INSERT INTO lenguaje (idlengu, nombrelenguaje, descripcion, imglenguaje, idlen) VALUES
(1, 'PHP: Hypertext Preprocessor (preprocesador de hipertexto)', '<p>PHP es un lenguaje de programación de propósito general de código del lado del servidor originalmente diseñado para el preprocesado de texto plano en UTF-8. Posteriormente se aplicó al desarrollo web de contenido dinámico, dando un paso evolutivo en el concepto de aplicación en línea, por su carácter de servicio.</p><p>Su implementación en los documentos HTML era aparentemente muy sencilla. Hay que decir, que, PHP no genera HTML, sino que ofrece una salida de texto con codificación UTF-8 compatible con los documentos HTML. El programador puede dotar a la salida de los tag`s propios del HTML y los exploradores más comunes para navegar por internet, reconocerán muy rápidamente el formato UTF-8 y lo adaptarán ofreciendo una salida entendible.</p><p>Fue uno de los primeros lenguajes de programación del lado del servidor que se podían incorporar directamente en un documento HTML en lugar de llamar a un archivo externo que procese los datos. El código es interpretado por un servidor web con un módulo de procesador de PHP que genera el texto plano en formato UTF-8, ampliamente reconocido por el estándar HTML, dando como resultado, en los exploradores, una salida al usuario perfectamente entendible.</p>', 'img/php_fondo.jpg', 1),
(2, 'JAVA', '<p>Java es un lenguaje de programación y una plataforma informática que fue comercializada por primera vez en 1995 por Sun Microsystems. Hay muchas aplicaciones y sitios web que,probablemente, no funcionarán a menos que tenga Java instalado y cada día se crean más. Java es rápido, seguro y fiable. Desde portátiles hasta centros de datos, desde consolas para juegos hasta super computadoras, desde teléfonos móviles hasta Internet, Java está en todas partes, que es ejecutado en una plataforma no tiene que ser recompilado para correr en otra. Java es, a partir de 2012, uno de los lenguajes de programación más populares en uso, particularmente para aplicaciones de cliente-servidor de web, con unos diez millones de usuarios reportados.</p><p>El lenguaje de programación Java fue originalmente desarrollado por James Gosling, de Sun Microsystems (constituida en 1983 y posteriormente adquirida el 27 de enero de 2010 por la compañía Oracle),4​ y publicado en 1995 como un componente fundamental de la plataforma Java de Sun Microsystems. Su sintaxis deriva en gran medida de C y C++, pero tiene menos utilidades de bajo nivel que cualquiera de ellos. Las aplicaciones de Java son compiladas a bytecode (clase Java), que puede ejecutarse en cualquier máquina virtual Java (JVM) sin importar la arquitectura de la computadora subyacente.</p><p>La compañía Sun desarrolló la implementación de referencia original para los compiladores de Java, máquinas virtuales y librerías de clases en 1991, y las publicó por primera vez en 1995. A partir de mayo de 2007, en cumplimiento de las especificaciones del Proceso de la Comunidad Java, Sun volvió a licenciar la mayoría de sus tecnologías de Java bajo la Licencia Pública General de GNU. Otros también han desarrollado implementaciones alternas a estas tecnologías de Sun, tales como el Compilador de Java de GNU y el GNU Classpath.</p>', 'img/Java_logo.png', 2),
(3, 'C#', '<p>C# (pronunciado si sharp en inglés) es un lenguaje de programación multiparadigma desarrollado y estandarizado por Microsoft como parte de su plataforma .NET, que después fue aprobado como un estándar por la ECMA (ECMA-334) e ISO (ISO/IEC 23270). C# es uno de los lenguajes de programación diseñados para la infraestructura de lenguaje común.</p><p>Su sintaxis básica deriva de C/C++ y utiliza el modelo de objetos de la plataforma .NET, similar al de Java, aunque incluye mejoras derivadas de otros lenguajes.</p><p>El nombre C Sharp fue inspirado por el signo ♯, el cual se lee como sharp en inglés para notación musical. Es un juego de palabras, pues "C#" significa, musicalmente hablando, "do sostenido", donde el símbolo # indica que una nota (en este caso do, representada por C) debe ser un semitono más alta. Esto es una metáfora de la superioridad de C# sobre su antecesor C++ y a su vez hace alusión a la misma metáfora que se ideó para dar nombre a C++.​ Además, el símbolo # puede ser imaginado como la unión de cuatro símbolos +, continuando así con el sentido de progresión de los lenguajes C.</p><p>Aunque C# forma parte de la plataforma .NET, esta es una API, mientras que C# es un lenguaje de programación independiente diseñado para generar programas sobre dicha plataforma. Ya existe un compilador implementado que provee el marco Mono - DotGNU, el cual genera programas para distintas plataformas como Windows Microsoft, Unix, Android, iOS, Windows Phone, Mac OS y GNU/Linux</p>', 'img/C_fondo.jpg', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla 'tipo'
--

CREATE TABLE IF NOT EXISTS tipo (
  id int(11) NOT NULL,
  tipolen varchar(30) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Almacena los tipos de lenguajes que se publicaran';

--
-- Volcado de datos para la tabla 'tipo'
--

INSERT INTO tipo (id, tipolen) VALUES
(1, 'PHP'),
(2, 'JAVA'),
(3, 'C#');


/********************EJERCICIO 4*********************/

DROP DATABASE IF EXISTS peliculas;
CREATE DATABASE peliculas;
use peliculas;
CREATE TABLE genero ( idgenero int NOT NULL AUTO_INCREMENT, generopelicula varchar(30) NOT NULL, PRIMARY KEY(idgenero) ) ENGINE=InnoDB;
CREATE TABLE director ( iddirector int NOT NULL AUTO_INCREMENT, nombre varchar(80) NOT NULL, nacionalidad varchar(30) NOT NULL, PRIMARY KEY (iddirector) ) ENGINE=InnoDB;
CREATE TABLE pelicula ( idpelicula int NOT NULL AUTO_INCREMENT, titulopelicula varchar(120) NOT NULL, descripcion text NOT NULL, imgpelicula varchar(200) NOT NULL, titulooriginal varchar(60) NOT NULL, duracion varchar(25) NOT NULL, idgenero int NOT NULL, iddirector int NOT NULL, PRIMARY KEY (idpelicula) ) ENGINE=InnoDB;
ALTER TABLE pelicula ADD CONSTRAINT fk_genero_pelicula FOREIGN KEY(idgenero) REFERENCES genero(idgenero) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE pelicula ADD CONSTRAINT fk_nombre_director FOREIGN KEY(iddirector) REFERENCES director(iddirector) ON DELETE RESTRICT ON UPDATE CASCADE;
INSERT INTO director (nombre, nacionalidad)  VALUES  
  ('Chris Columbus', 'Estadounidense'),
  ('Lee Daniels', 'Estadounidense'),
  ('Terry Gilliam', 'Estadounidense'),
  ('Richard LaGravenese', 'Estadounidense'),
  ('Eric Bress', 'Estadounidense'),
  ('Barry Sonnenfeld', 'Estadounidense'),
  ('Anne Fletcher', 'Estadounidense'),
  ('Frank Darabont', 'Franc'),
  ('Peter Jackson', 'Neozeland'),
  ('George Lucas', 'Estadounidense'),
  ('Manoj Nelliyattu Shyamalan', 'Indu'),
  ('Gabriele Muccino', 'Italiano'),
  ('Frank Coraci', 'Estadounidense');
INSERT INTO genero (generopelicula) VALUES 
  ('Accion'),
  ('Drama'),
  ('Aventuras'),
  ('Comedia Romantica'),
  ('Suspenso'),
  ('Musical'),
  ('Familiar'),
  ('Infantil');
INSERT INTO pelicula (titulopelicula, descripcion, imgpelicula, titulooriginal, duracion, idgenero, iddirector) VALUES 
  ('Percy Jackson y el Ladron del Rayo', 'La historia narra la vida de un estudiante que descubre ser hijo de Poseidon, a raiz de esto se ve envuelto en una carrera contra el tiempo para impedir que los dioses griegos inicien una guerra que tiene como campo de batalla el continente americano de hoy en d&iacute;a.', 'img/percy.jpg', 'Percy Jackson & the Olympians: The lightning thief', '119 min', 1,1),
  ('Precious', 'En Harlem, una adolescente analfabeta con sobre peso, quien ademas esta embarazada de su segundo hijo es invitada para inscribirse a una escuela alternativa. Este acontecimiento le da esperanzas de que su vida pueda girar en una nueva direccion.', 'img/precious.jpg', 'Precious: Based on the novel "Push" by Sapphire', '109 min', 2,2),
  ('El Imaginario Mundo Del Doctor Parnassus', 'El Doctor Parnassus tiene una inexplicable capacidad de poder guiar la imaginacion de los demas, pero a su vez el guarda un temible secreto. Adicto al juego, muchos a&ntilde;os atras, apostocon el demonio, Mr. Nick, juego que lo convirtioen inmortal. Pero siglos despues el doctor conoce a su amor verdadero, y vuelve a realizar otro pacto con el diablo, esta vez intercambiando su inmortalidad por su juventud, con la unica condicion que cuando su hija llegase a la edad de 16 a&ntilde;os, pasaria a ser propiedad del diablo.', 'img/doc.jpg', 'The Imaginarium Of Doctor Parnassus', '122 min', 3,3),
  ('PD. Te Amo', 'La vida de Holly (Hilary Swank) se ve truncada cuando su marido, Gerry (Gerard Butler),muere. Incapaz de salir adelante por simisma, su madre y sus amigos intentan animarla. Un dia, despues de su 30 cumplea&ntilde;os, Holly recibe una carta de Gerry animandola a salir, a divertirse, a seguir adelante. Cada mes recibirauna carta firmada con un "Posdata: Te amo", que le devolveran las ganas de vivir.', 'img/ps.jpg', 'P.S. I love you', '115 min', 4,4),
  ('Efecto Mariposa', 'Evan Treborn, un joven que se esta esforzando por superar unos dolorosos recuerdos de su infancia, descubre una tecnica que le permite viajar atras en el tiempo y ocupar su cuerpo de ni&ntilde;o para poder cambiar el curso de su dolorosa historia. Sin embargo tambien descubre que cualquier minimo cambio en el pasado altera enormemente su futuro.', 'img/efecto.jpg', 'The Butterfly Effect', '100 min', 5,5),
  ('Vacaciones en familia', 'Un ejecutivo preocupado por no perderse unas vacaciones con su familia decide llevarlos a vacacionar al mismo lugar donde tendr&aacute; una importante reuni&oacute;n de trabajo, pero sin dec&iacute;rselos', 'img/vacacionesenfamilia.jpg', 'RV', '98 min', 7,6),
  ('La propuesta', 'Una poderosa editora llamada Margaret (Sandra Bullock) al enfrentarse ante la posibilidad de ser deportada a su pa&iacute;s de origen, Canad&aacute;, decide comprometerse con su asistente Andrew (Ryan Reynolds) con el prop&oacute;sito de evitarlo', 'img/la-propuesta-poster.jpg', 'The proposal', '108 min', 4,7),
  ('Milagros inesperados', 'La pel&iacute;cula narra la vida de Paul Edgecomb (Tom Hanks), quien siendo un anciano de 108 a&ntilde;os, cuenta su historia como oficial de la Milla Verde, una penitenciar&iacute;a del estado de Luisiana, durante la d&eacute;cada de 1930. Edgecomb cuenta que entre sus presos tuvo un personaje con poderes sobrenaturales, capaz de sanar a personas.', 'img/greenmille.jpg', 'The Green Mile', '189 min', 2,8);
UPDATE pelicula SET titulopelicula='El efecto mariposa' WHERE idpelicula=5;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;