-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 28 2020 г., 16:04
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `geek`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `likes`) VALUES
(1, '01.jpg', 1),
(2, '02.jpg', 20),
(3, '03.jpg', 5),
(4, '04.jpg', 26),
(5, '05.jpg', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `good_gallery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `description`, `price`, `main_image`, `good_gallery`) VALUES
(1, 'Ibanez SR305EB-WK 5', 'IBANEZ SR305EB-WK – 5-струнная бас-гитара из популярной линейки SR от знаменитого японского производителя. Модель отличается гладким, изящным, удобным грифом, легковесным компактным корпусом и идеально подобранной высококачественной электроникой. Корпус бас-гитары сделан из красного дерева. Гриф SR5 выполнен из сочетания клён/палисандр, 5 кусков. Накладка – палисандровая, радиус – 30,5 см. На грифе 24 лада medium. Гриф инкрустирован классическими белыми точками. Мензура – 34 дюйма (864 миллиметра). На бас-гитаре установлены пассивные звукосниматели PowerSpan Dual Coil. Настройка звука производится с помощью регуляторов громкости, баланса, трёхполосного эквалайзера и трёхпозиционного переключателя Power Tap. Бридж - Accu-cast B125 с расширенными отверстиями для закрепления струн, позволяющими легко установить самые толстые струны. Модель SR305EВ выпускается в стильном чёрно-сером цвете с чёрной фурнитурой и головой грифа в цвет корпуса. На инструменте установлены струны толщиной .045/.065/.085/.105/.130.', 40000, 'sr305m.jpg', 'good1/'),
(2, 'IBANEZ K5-BKF', 'IBANEZ K5-BKF пятиструнная бас-гитара, цвет черный, модель Fieldy (KORN), цвет черный, корпус махогани, гриф на болтах, клен/бубинга, накладка палисандр, 24 лада, мензура 34`, звукосниматели H-H ADX5, активная электроника, литой бридж EB-7, расстояние между струнами 16.5мм', 85000, 'k5m.jpg', 'good2/'),
(3, 'WARWICK CORVETTE 5', 'Если вся линейка басов Warwick - это семья, то Corvette - это наглый новоприбывший родственник. Он сьел все сьестное, выпил все, что пьется, и теперь примеряет на себя чужую одежду. В общем все понятно: невежа, который прислушивается только к мнению одного человека: ... да, Corvette настолько дик!\r\n\r\nПускай Вас не обманывает косметическое сходство с другими моделями Corvette. Double черпает силы от своей уникальной электроники. Два пассивных звукоснимателя MEC размещены ближе к центру корпуса, находясь в оптимальной точке расположения, которую упускают многие басы. У этого монстра есть также и другая, противоположная сторона. При помощи 2-х 3-позиционных мини переключателей изменяются режимы работы хамбакеров (шумоподавление параллельно/последовательно, сингловый режим). 2-х полосная активная электроника MEC позволяет еще больше раскрыть тональный характер инструмента.\r\nЕсли посмотреть на инструмент без учета электроники, Вы увидите, что Double оснащенн одними из наиболее ценными атрибутами Warwick. Корпус из отборного болотного ясеня для теплоты и живости звучания, ованколовый гриф для рычания и мощного звука, медные лады для резонанса и долговечности. Все эти элементы идеально сочетаются для создания непревзойденной звуковой палитры.', 100000, 'wc5m.jpg', 'good3/');

-- --------------------------------------------------------

--
-- Структура таблицы `good_feedback`
--

CREATE TABLE `good_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `good_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `good_feedback`
--

INSERT INTO `good_feedback` (`id`, `name`, `message`, `good_id`) VALUES
(1, 'Марко', 'Замечательный бассец!', 3),
(2, 'Филди', 'Берем басы, берем высокий, середину выбрасываем и огонь!', 2),
(3, 'Курт', 'Ибанез - хорошие гитары.', 1),
(4, 'Vlad', 'У меня был такой, хороший бас.', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `sitefeedback`
--

CREATE TABLE `sitefeedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sitefeedback`
--

INSERT INTO `sitefeedback` (`id`, `name`, `message`) VALUES
(5, 'Гость', 'Отличный сайт!'),
(6, 'Система', 'Отзывы работают в норме');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `good_feedback`
--
ALTER TABLE `good_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sitefeedback`
--
ALTER TABLE `sitefeedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `good_feedback`
--
ALTER TABLE `good_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `sitefeedback`
--
ALTER TABLE `sitefeedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
