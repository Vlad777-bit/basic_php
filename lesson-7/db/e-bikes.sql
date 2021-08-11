-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Авг 11 2021 г., 14:38
-- Версия сервера: 8.0.26-0ubuntu0.20.04.2
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `e-bikes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `id_good` int NOT NULL,
  `count` int NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT 'Аноним',
  `photo` varchar(50) NOT NULL DEFAULT 'img/avatar.png',
  `email` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `good_id` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `name`, `photo`, `email`, `text`, `good_id`, `created_at`) VALUES
(1, 'Alex', 'img/avatar.png', 'alex@mail.ru', 'Test message', 1, '2021-08-04 14:45:04'),
(2, 'John', 'img/avatar.png', 'john@yandex.ru', 'Прекрасный велосипед, у меня вызвало большое удивление, что xiaomi выпускает ещё и электровелосипеды', 2, '2021-08-04 14:51:31'),
(3, 'Alisa', 'img/avatar.png', 'test@qb.com', 'Велосипед выглядит чудесно, в духе 60-x годов, но кол-во и цена меня сильно разочаровала(', 1, '2021-08-04 14:53:24'),
(4, 'Vasy', 'img/avatar.png', 'vasil@tr.com', 'Брал сыну, но в итоге передумал и взял себе, теперь есть на чём ездить на работу)', 2, '2021-08-04 14:56:03');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(50) NOT NULL DEFAULT 'img/plug.jpg',
  `price` decimal(11,2) NOT NULL,
  `desc_short` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `desc_long` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `count` int NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `specification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `photo`, `price`, `desc_short`, `desc_long`, `count`, `created_at`, `specification`) VALUES
(1, 'Electra Café Moto Go! (2020)', 'img/bike1.jpg', '340.47', 'Новинка 2020 года — Cafe Moto Go! Велосипед олицетворяет будущее с историей. Вдохновленный скоростными каферейсерами, он сохранил в себе любовь к гонкам и дерзкий дизайн 60-х годов. Современные компоненты от мировых производителей, скорость и бесшумность. Лимитированная коллекция, всего 10 штук в России.', '<b>Электровелосипед</b> <i>Café Moto Go!</i> (2020) — стильная модель для ценителей\r\n            отличной\r\n            электровелотехники.\r\n            Колеса с покрышками 26″ — достаточно прочные и динамичные, идеальны для\r\n            увлекательного\r\n            катания в городе и за\r\n            городом. Комфорт передвижения обеспечивает рама Алюминиевый сплав 6061-T6, выполненная из алюминиевого\r\n            сплава.\r\n            Дисковые гидравлические тормоза h.disc Вас не подведут, это проверенная и надёжная технология.\r\n            Мощная\r\n            жёсткая\r\n            вилка rigid создаёт надёжную устойчивость.\r\n            <br>\r\n            <br>\r\n            <b>Технологии</b> <br>\r\n            <p>\r\n                Премиальные шины Vee Rubber Speedster с диагональю 26 дюймов на 2,8 дюйма от ведущего\r\n                производителя,\r\n                передние и дисковые гидравлические тормоза Hayes Prime Sport с двухпальцевыми тормозными\r\n                рычагами\r\n                для\r\n                достаточной тормозной мощности, педали Crank Brothers. Все кабели электрического велосипеда проложены\r\n                внутри\r\n                конструкции, для защиты и улучшения внешнего вида.\r\n                <br>\r\n                Дисплей компьютера Bosch Purion отображает скорость, режим езды, дальность, расстояние поездки, общее\r\n                расстояние и состояние зарядки. Отдельного внимания заслуживает новая престижная трансмиссия —\r\n                Gates\r\n                Carbon\r\n                Drive.\r\n                <br>\r\n                Ременной привод, вместо классической цепи, почти не требует обслуживания. Он не растягивается,\r\n                не требует\r\n                смазки, работает бесшумно. Система позволяет не возиться с переключателем или грязной\r\n                засаленной\r\n                цепью, а\r\n                посвятить всё время полному наслаждению ездой.\r\n                <br>\r\n                Комбинация мощной батареи, мотора, бесшумного ремня, заменившего цепь, и ступицы переменной\r\n                передачи\r\n                дает\r\n                Café Moto Go возможность достигать скорости до 25 км в час. Технически\r\n                рассчитанный на 350 Вт\r\n                непрерывной\r\n                мощности, ведущий в своём классе двигатель можно будет расчиповать и увеличить скорость с максимума\r\n                25 км/ч\r\n                до 70 км/ч. После расчиповки в РФ гарантия сохраняется.\r\n            </p>', 5, '2021-08-04 14:18:42', '<ul class=\"specifications\">\r\n           <li><img src=\"../public/img/logo.jpg\" alt=\"logo\" class=\"logo\"> Тип: Электровелосипеды</li>\r\n           <li><img src=\"../public/img/logo.jpg\" alt=\"logo\" class=\"logo\"> Рама: Алюминиевый сплав 6061-T6</li>\r\n           <li><img src=\"../public/img/logo.jpg\" alt=\"logo\" class=\"logo\"> Вилка: rigid</li>\r\n           <li><img src=\"../public/img/logo.jpg\" alt=\"logo\" class=\"logo\"> Диаметр: 26.0</li>\r\n           <li><img src=\"../public/img/logo.jpg\" alt=\"logo\" class=\"logo\"> Покрышка: 26″</li>\r\n           <li><img src=\"../public/img/logo.jpg\" alt=\"logo\" class=\"logo\"> Передний тормоз: h.disc</li>\r\n           <li><img src=\"../public/img/logo.jpg\" alt=\"logo\" class=\"logo\"> Задний тормоз: h.disc</li>\r\n           <li><img src=\"../public/img/logo.jpg\" alt=\"logo\" class=\"logo\"> Двигатель Bosch: 250 Вт</li>\r\n        </ul>'),
(2, 'Xiaomi Himo C20', 'img/bike2.jpg', '135.67', 'Основой корпуса модели является алюминий, который может быть окрашен в двух вариантах — в белом и\r\n            темно-сером цветах. Для оформления колес, руля и сиденья используется только черный цвет. Преимущество\r\n            изделия заключается в складной конструкции, благодаря которой можно буквально за несколько секунд сложить\r\n            велосипед Xiaomi.', 'Современные технологии приводят к тому, что в быту человека появляются устройства, которые еще не так\r\n            давно\r\n            казались фантастикой. Электровелосипед Xiaomi Himo C20 Electric Bicycle — простое транспортное\r\n            средство,\r\n            имеющее\r\n            складную конструкцию, продуманный и стильный дизайн, а так же огромный ресурс эксплуатации.\r\n            Эта\r\n            модель очень\r\n            удачно совместила в себе все самое лучшее от городского велосипеда и электровелосипеда с самыми\r\n            последними\r\n            разработками в этой отрасли. Himo C20 оснащен надежной 6-ступенчататой коробкой передач Shimano, Мощным\r\n            японским\r\n            электро двигателем 250W и крайне надежной аккумуляторной батареей емкостью 10000 Mah на Корейских\r\n            ячейках\r\n            18650.\r\n            Вы получите огромное удовольствие управляя этим Электровелосипедом. Система следит за тем, как\r\n            велосипедист\r\n            крутит педали и обеспечивает содействие за счет электрического двигателя.\r\n            <br>\r\n            <br>\r\n            <b>Функциональное оснащение HIMO C20</b> <br>\r\n            <p class=\"two_paragraph\">\r\n                Электровелосипед Himo имеет оптимизированную конструкцию: все детали средства выполнены с особой\r\n                точностью,\r\n                поэтому даже при длительной поездке не должно возникать никакого дискомфорта. Для безопасности\r\n                водителя\r\n                велосипеда, заднее крыло имеет тормозную дисковую систему. На сухом дорожном покрытии тормозной\r\n                путь будет\r\n                всего 4 метра, на мокрой поверхности — до 6 метров.\r\n                <br>\r\n                Ощущение удобства в процессе езды познается благодаря сиденью удобной формы, покрытому натуральной\r\n                кожи и\r\n                оснащенному новейшими моделями амортизаторов. К преимуществам электровелосипеда можно отнести\r\n                наличие сумки\r\n                для инструментов и электроконтроль состояние транспортного средства.\r\n                <br>\r\n                Насос спрятан в основание сиденья, для подкачки колес необходимо снять сиденье и выдвинуть\r\n                спрятанный\r\n                в\r\n                основание насос , им очень удобно подкачивать спущенные колеса. Не надо брать с собой\r\n                ручной\r\n                насос в поездки\r\n                , Himo C20 откроет для вас много интересных разработок , которые помогут сделать эксплуатацию\r\n                Электровелосипеда очень приятной.\r\n            </p>', 14, '2021-08-04 14:18:45', '<ul class=\"specifications\">\r\n           <li><img src=\"../public/img/logo.jpg\" alt=\"logo\" class=\"logo\"> Тип: электровелосипед</li>\r\n           <li><img src=\"../public/img/logo.jpg\" alt=\"logo\" class=\"logo\"> Возраст: для взрослых</li>\r\n           <li><img src=\"../public/img/logo.jpg\" alt=\"logo\" class=\"logo\"> Максимальный вес велосипедиста: 100 кг</li>\r\n           <li><img src=\"../public/img/logo.jpg\" alt=\"logo\" class=\"logo\"> Тип привода: цепной</li>\r\n           <li><img src=\"../public/img/logo.jpg\" alt=\"logo\" class=\"logo\"> Вес велосипеда: 21 кг</li>\r\n           <li><img src=\"../public/img/logo.jpg\" alt=\"logo\" class=\"logo\"> Максимальная скорость: 25 км/ч</li>\r\n           <li><img src=\"../public/img/logo.jpg\" alt=\"logo\" class=\"logo\"> Пробег на одном заряде: 80 км</li>\r\n           <li><img src=\"../public/img/logo.jpg\" alt=\"logo\" class=\"logo\"> Время зарядки: 6 ч</li>\r\n           <li><img src=\"../public/img/logo.jpg\" alt=\"logo\" class=\"logo\"> Материал рамы: алюминиевый сплав</li>\r\n        </ul>');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_action` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_admin` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `is_admin`) VALUES
(1, 'admin', 'qwerasdzxca5a30bc4c47888cd59c4e9df68d80242qwerasdzxc', 1),
(2, 'user', 'qwerasdzxc03aa1a0b0375b0461c1b8f35b234e67aqwerasdzxc', 0),
(20, 'user1', 'qwerasdzxc76d80224611fc919a5d54f0ff9fba446qwerasdzxc', 0),
(22, 'test', 'qwerasdzxc76d80224611fc919a5d54f0ff9fba446qwerasdzxc', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `good_id` (`good_id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`good_id`) REFERENCES `goods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
