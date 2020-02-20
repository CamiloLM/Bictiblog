-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2020 a las 16:43:00
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
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `contenido` text NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `fecha_edicion` date NOT NULL,
  `imagen` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `titulo`, `contenido`, `categoria`, `fecha_edicion`, `imagen`) VALUES
(1, 'Thomas Kurian en su primer año como CEO de Google Cloud', 'Eso fue GoogleEl CEO de Cloud, Thomas Kurian respuesta simple cuando le pregunté si pensaba que había logrado lo que se propuso hacer en su primer año.\r\n\r\nHace un año, tomó el timón de las operaciones en la nube de Google, que incluye G Suite, y se propuso darle a la organización un enfoque más agudo al expandir una estrategia de su predecesora Diane Greene primer set durante su mandato.\r\n\r\nNo es ningún secreto que Kurian, con su experiencia en Oracle, Inmediatamente ponga toda la operación de Google Cloud en un curso para enfocarse en clientes empresariales, con énfasis en una serie de verticales clave.', 'tecnologia', '2020-02-20', 'https://lanetaneta.com/wp-content/uploads/2020/02/Thomas-Kurian-en-su-primer-a%C3%B1o-como-CEO-de-Google.jpg'),
(2, 'HTC presenta el concepto \'Project Proton\' Vive headset', 'Como prácticamente todos los demás en el mundo móvil, la cancelación de MWC en un plazo extremadamente corto dejó a HTC en la estacada. Si bien la compañía ha alejado gran parte de sus esfuerzos de los teléfonos inteligentes en general, el fabricante taiwanés ha comenzado a usar el programa para mostrar gran parte de sus esfuerzos de realidad virtual.\r\n\r\nJunto con la adición de un par de SKU clave a la línea Cosmos, HTC también está llenando el agujero en forma de MWC al mostrar un auricular conceptual. Project Proton está muy lejos de los voluminosos auriculares Vive actuales, más parecido a una versión simplificada de la tecnología AR de Magic Leap.', 'inovacion', '2020-02-20', 'https://upload.wikimedia.org/wikipedia/commons/d/d6/Boy_wearing_Oculus_Rift_HMD.jpg'),
(3, 'ChartHop obtiene $ 5M semilla liderada por a16z para automatizar el organigrama\r\nR', 'ChartHop , una startup que tiene como objetivo modernizar y automatizar el organigrama, anunció hoy una inversión inicial de $ 5 millones dirigida por Andreessen Horowitz.\r\n\r\nTambién participó una gran cantidad de otros inversores, incluidos Abstract Ventures, el Fondo de Liderazgo Cultural a16z, CoFound, Cowboy Ventures, Flybridge Capital, Shrug Capital, Work Life Ventures y una serie de inversores individuales no identificados.\r\n\r\nEl fundador, CEO y CTO, Ian White, dice que en trabajos anteriores, incluso como CTO y cofundador de Sailthru , se sintió frustrado por las herramientas disponibles para la planificación organizacional, algo que dice que toda empresa necesita controlar.', 'inovacion', '2020-02-20', 'https://nonperele.com/wp-content/uploads/2020/02/813766/1582211420-93.jpg'),
(4, 'Flywheel para detener las clases en línea y ofrecer el intercambio de bicicletas Peloton después de resolver la demanda', 'Después de resolver una demanda por infracción de patente presentada por Peloton en su contra , la startup de fitness Flywheel dejará de ofrecer sus clases en línea At Home el 27 de marzo. Los clientes actuales de Flywheel At Home recibieron por correo electrónico una oferta de intercambio de bicicletas Peloton.\r\n\r\nPelotón dijo que las bicicletas de reemplazo están renovadas, pero funcionarán como las nuevas. El formulario de intercambio debe completarse antes del 27 de marzo.\r\n\r\nEn un correo electrónico a los clientes, Flywheel dijo que sus centros de acondicionamiento físico seguirán funcionando . Los suscriptores de Flywheel At Home dejarán de facturarse de inmediato (aunque las suscripciones a través de Apple deben desactivarse por separado) y las suscripciones prepagas se reembolsarán a los clientes para las fechas posteriores al 27 de marzo o cuando activen sus bicicletas de reemplazo Peloton. Las clases en vivo de Flywheel continuarán hasta el 29 de febrero y las clases a pedido estarán disponibles hasta el 27 de marzo.', 'educacion', '2020-02-20', 'https://techcrunch.com/wp-content/uploads/2019/09/AP_19269535025323.jpg?w=1390&crop=1'),
(5, 'Codecademy ya ha sobrevivido a muchos rivales, ¿es eso suficiente?', 'Codecademy , la plataforma interactiva en línea con sede en Nueva York que ofrece clases de codificación en una amplia variedad de lenguajes de programación, es un poco como el ruido de fondo; ha estado funcionando de manera confiable desde que el fundador Zach Sims creó la compañía cuando aún era estudiante de la Universidad de Columbia en 2011. Es una marca que la gente conoce y que millones han usado, pero debido a que ha crecido de manera constante, sin rondas de financiación de titulares, o, por el contrario, Despidos de interés periodístico: la compañía de 90 personas no atrae habitualmente mucha atención de la prensa.\r\n\r\nEso está bien con Sims, con quien hablamos la semana pasada después del episodio más reciente de mala publicidad para Lambda School, un rival más joven que ha recaudado $ 48 millones de los inversores, en comparación con los $ 42.5 millones que Codecademy ha recaudado con el tiempo. Sims dice que su compañía eficiente en capital sigue funcionando muy bien.\r\n\r\nLa pregunta, cada vez más, es si eso es lo suficientemente  para los VC. De hecho, Codecademy, Como muchas nuevas empresas en este momento, se encuentra en la incómoda posición de ser un negocio inteligente, sólido, rápido pero no de crecimiento masivo. En el año 2020, eso plantea preguntas sobre los próximos pasos.', 'educacion', '2020-02-20', 'https://techcrunch.com/wp-content/uploads/2019/06/GettyImages-655146956.jpg?w=1390&crop=1'),
(6, 'Google engulle Fitbit es un importante riesgo de privacidad, advierte el asesor de protección de datos de la UE\r\nN', 'La Junta Europea de Protección de Datos (EDPB) ha intervenido para plantear inquietudes sobre Googleplanee recoger los datos de salud y actividad de millones de usuarios de Fitbit, en un momento en que la compañía está bajo un intenso escrutinio sobre cuán extensamente rastrea a las personas en línea y por preocupaciones antimonopolio .\r\n\r\nGoogle confirmó su plan para adquirir FitbitEn noviembre pasado , dijo que pagaría $ 7.35 por acción para el fabricante de dispositivos portátiles en un acuerdo en efectivo que valoró Fitbit y, por lo tanto, los datos de actividad, salud, sueño y ubicación que puede tener sobre sus más de 28 millones de usuarios activos, a ~ $ 2,1 mil millones .\r\n\r\nLos reguladores están en el proceso de considerar si se permite al gigante tecnológico engullir todos estos datos.\r\n\r\nMientras tanto, Google está en proceso de marcar sus diseños en el espacio de la salud .', 'tecnologia', '2020-02-20', 'https://techcrunch.com/wp-content/uploads/2016/08/p8222695.jpg?w=1390&crop=1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `direccion` varchar(20) DEFAULT NULL,
  `celular` int(20) DEFAULT NULL,
  `sitioWed` varchar(20) DEFAULT NULL,
  `profesion` varchar(20) DEFAULT NULL,
  `rol` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`, `correo`, `nombre`, `apellido`, `direccion`, `celular`, `sitioWed`, `profesion`, `rol`) VALUES
(1, 'admin', 'admin123', 'yulianosalvatore2001', 'yuliano', 'quiñones', 'call23', 324378868, 'www.abc.com', 'el administrador', 1),
(123456, 'yuliano', 'yuliano', 'yuliano@vmail.com', '123456', 'yuliano', 'yuliano', 0, '123456', 'yuliano', 0),
(123460, 'julian', '12345', 'juliano@gmial.com', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(123461, 'Nestor', 'nestor123', 'nestor.guzman@gmail.', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(123462, 'jairo', 'jairo123', 'jairo@fjwqgf', NULL, NULL, NULL, NULL, NULL, NULL, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123463;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
