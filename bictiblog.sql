-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2020 a las 18:02:10
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bictiblog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `titulo` varchar(200) NOT NULL,
  `contenido` text NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `fecha_edicion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`titulo`, `contenido`, `categoria`, `fecha_edicion`) VALUES
('¡Alejandro Sanz volverá a El Salvador!', 'Alejandro Sanz volverá a El Salvador en pocos meses como parte de un serie de conciertos en varios países del mundo denominados “#LaGira”. Si bien la noticia no es precisamente algo nuevo, pues la productora Two Shows  lo anunció hace un tiempo, esta vez fue el propio artista quien lo confirmó a través de un afiche en sus redes sociales. En la publicación, el español, además, confirmó presentaciones en Guatemala, Honduras, Costa Rica, Panamá y Colombia, países que siempre han gustado de su música.', 'actualidad', '2020-08-12'),
('El nicaragüense Funes pide la expulsión del director de la PNC salvadoreña\r\n', 'El expresidente de la República Mauricio Funes, quien también goza de nacionalidad nicaragüense, dijo que el director de la Policía Nacional Civil (PNC), el comisionado Mauricio Arriaza Chicas, debe ser removido de su cargo.\r\n\r\nFunes sostuvo, por medio de su cuenta de Twitter, tal como acostumbra desde que está en Nicaragua, que debe ser removido “por mentiroso”.\r\n\r\n“Este señor debería ser removido de su cargo por mentiroso. La PNC no es deliberante y no tiene por qué expresar opiniones política” expresó Funes\r\n\r\nLuego, a pesar de que el director de la Policía aseveró que nadie ordenó que se le quitara a los diputados los agentes de Protección a Personalidades Importantes (PPI), Funes cuestionó las palabras de Chicas asegurando que “nadie cree” su versión, y que esa acción fue una medida para presionarlos.\r\n\r\n“Este señor debería ser removido de su cargo por mentiroso. La PNC no es deliberante y no tiene por qué expresar opiniones políticas. Nadie cree que la presencia de policías en el Salón Azul fue para proteger a los diputados y que el retiro de los PPI no pretendía presionarlos”, expuso Funes', 'noticas', '2020-08-15'),
('VIDEO: Justin Bieber acepta que lastimó a Selena Gómez por culpa de su actual pareja', 'Justin Bieber y Selena Gómez fueron una de las parejas más mediáticas a lo largo de ocho años, sin embargo, ninguno se había atrevido a hablar sobre su romance, hasta ahora.\r\n\r\nEl canadiense concedió una entrevista para Zane Lowe en donde se sinceró sobre su relación pasada con la intérprete de ‘Lose you to Love me’.\r\n\r\nDurante dicha entrevista, Justin aceptó haber herido a la ex-estrella de Disney, señalando que su relación con Hailey Baldwin la había afectado fuertemente.\r\n\r\n“Sentía que me respetaba y yo también le tenía mucho respeto”, continuó el canadiense, “Como sea, ella me amaba, y verme con alguien más la lastimaba. A eso agréguenle estar triste.\r\n\r\nElla salió e hizo cosas que me lastimaron, y así como me dolió, yo también hice cosas que la hirieron. Una vez que el tour terminó, nos dejamos de hablar por completo, me sorprendió demasiado”, señaló Bieber para Zane Lowe.', 'farandula', '2020-08-16'),
('VIDEO: Así reacciona este perro cuando un conductor le toca el pito porque no le dejaba avanzar', 'Un conductor compartió en TikTok un video que provocado las carcajadas de miles de personas en las redes sociales, ya que muestra el momento exacto en que un perro lo desafía por haberle tocado el claxon.\r\n\r\nEl sabueso caminaba en medio de la pista y como el chofer no quería atropellarlo decidió asustarlo, esto no fue del agrado del can que lo miró desafiante, lo que hizo reír a miles de personas en México, Estados Unidos, España, entre otros países.\r\n\r\nEl material audiovisual, que tiene miles de reproducciones, fue grabado en una calle de Estados Unidos por un joven que conducía su automóvil sin problemas hasta que se encontró con el simpático perro que no lo dejaba avanzar, así que decidió tocarle el cláxon para espantarlo.\r\n\r\nPara sorpresa del chofer, el perro no solo lo miró de mala forma, sino que también se paró en dos patas, como si estuviera buscándole pelea. Esto hizo reír al chofer que no dudó en subir el video a TikTok, donde no tardó en volverse tendencia en otras redes sociales.', 'internacionales', '2020-08-17'),
('Cárcel para tres peligrosos pandilleros que le quitaron la vida a un sujeto en Soyapango', 'El Tribunal Tercero de Sentencia de San Salvador, impuso la pena de 55 años de cárcel a tres peligrosos delincuentes que le arrebataron la vida a un joven en el municipio de Soyapango, al oriente de San Salvador.\r\n\r\nLos ahora condenados fueron identificados como: Edwin Oswaldo López Chávez, de 21 años de edad, Christian Javier Salazar Martínez, de 23 años y José Rigoberto Acevedo Alvarado, de 19 años; quienes ultimaron a la identificada como víctima Oscar Eligio Reyes Fuentes.\r\n\r\nLas pruebas comprobaron el cometimiento del delito por parte de los condenados, entre ellas la prueba testimonial de un testigo que presenció el asesinato.\r\n\r\nEl 6 de abril de 2018, en el pasaje Conacastes de la Urbanización Bosques de Prusia, del municipio de Soyapango, en el departamento de San Salvador, venía ingresando una persona que se venía forcejeando con pandilleros de la zona, luego uno de ellos lo agarró de la cintura y lo intentó botar, además lo golpeaba constantemente, llevando una arma blanca en las manos con la que también lo lesionaba en la espalda y cabeza, asimismo otro de los sujetos sacó un arma de fuego con la que le disparó en tres ocasiones.', 'noticias', '2020-08-18'),
('Efectivos capturan bien armado a “El Brujo”', 'Elementos de la Policía Nacional Civil (PNC) capturaron en las últimas horas a un peligroso delincuente que se conducía con un arma de fuego en su poder.\r\n\r\nEl sujeto responde al nombre de Wilber Vásquez Sánchez, alias “El Brujo” a quien los agentes le encontraron una pistola tipo revolver con su respectiva munición.\r\n\r\nDe acuerdo con el reporte, los efectivos realizaban un operativo preventivo, al intervenir al Brujo le descubrieron el arma y tras no presentar la documentación reglamentaria, la PNC procedió con la captura.', 'noticias', '2020-08-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cedula` int(20) DEFAULT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `sitio_wed` varchar(20) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `contrasena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cedula`, `nombre`, `apellido`, `direccion`, `sitio_wed`, `rol`, `contrasena`) VALUES
(1234567890, 'yuliano', 'quiñones', 'calle28 su r# 2b-39', 'el papa de los amore', '1', 12345678),
(12345678, 'camilo', 'londoño', 'calle 34 32-32', 'el papa de los amore', '2', 12345678);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
