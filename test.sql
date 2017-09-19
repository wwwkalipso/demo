-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 19 2017 г., 20:13
-- Версия сервера: 5.5.53
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `notes`
--

INSERT INTO `notes` (`id`, `title`, `summary`, `content`, `userId`) VALUES
(1, 'Poltava', 'Poltava (Ukrainian: Полтава, IPA-uk, translit. polˈtɑβɐ) is a city located on the Vorskla River in central Ukraine. It is the capital city of the Poltava Oblast (province) and of the surrounding Poltava Raion (district) of the oblast. Poltava)', 'The present name of the city is traditionally connected to the settlement Ltava which is mentioned in the Hypatian Chronicle in 1174.[2][3] According to the chronicle, on Saint Peter\'s Day (12 July) of 1182, Igor Sviatoslavich, chasing hordes of the Cuman khans Konchak and Kobiak, crossed the Vorskla River near Ltava and moved towards Pereyaslav (presumably the modern Pereiaslav-Khmelnytskyi), where Igor\'s army was victorious over the Cumans.[2] During the Mongol invasion of Rus\' in 1238–39 many cities of the middle Dnieper region were destroyed, possibly including Ltava.[2]\r\n\r\nIn the mid 14th century the region was part of the Duchy of Kiev, which was a vassal of the Algirdas\' Grand Duchy of Lithuania.[2] According to the Russian historian Aleksandr Shennikov, the region around modern Poltava was a Cuman Duchy belonging to Mansur, who was a son of Mamai.[4] Shennikov also claims that the Mansur Duchy joined the Grand Duchy of Lithuania as an associated state rather than a vassal state, and that the city of Poltava already existed at that time.[4] In 1399 the army of Mansur assisted the army of the Grand Duchy of Lithuania in the battle of the Vorskla River, while a legend says that after the battle, the Cossack Mamay helped Vytautas to escape his death.[4]\r\n\r\nThe city is mentioned for the first time under the name of Poltava no later than 1430.[2] Supposedly, in 1430 the Lithuanian duke Vytautas gave the city, along with Glinsk (today a village near the city of Romny) and Glinitsa, to Murza Olexa (Loxada Mansurxanovich), who moved to the Grand Duchy of Lithuania from the Golden Horde.[2] In 1430 Murza Olexa was baptized as Alexander Glinsky, who was a progenitor of the Glinsky family.[2] According to Shenninkov, Alexander Glinsky must have been baptized in 1390 by Cyprian, Metropolitan of Kiev, who had just regained his title of Metropolitan of Kiev and all Russia (rather than the Metropolitan of Russia Minor and Lithuania) and on 6 March 1390 permanently moved to Muscovy.[4]\r\n\r\nIn 1482 Poltava was razed by the Crimean Khan Mengli I Giray.[2]', 1),
(2, 'Lviv', 'Lviv (Ukrainian: Львів, pronounced [lʲʋiu̯] (About this sound listen), Polish: Lwów,[2] pronounced [lvuf] (About this sound listen), German Lemberg, Hellenic and Latin: Leopolis, see also other names) is the largest city in western ', 'Named in honor of the Leo, the eldest son of Rus\' King Daniel of Galicia, it was the capital of the Kingdom of Galicia–Volhynia (also called Kingdom of Rus\')[3] from 1272 to 1349, when it was conquered by King Casimir III the Great who then became known as the King of Poland and Rus\'. From 1434, it was the regional capital of the Ruthenian Voivodeship in the Kingdom of Poland. In 1772, after the First partition of Poland, the city became the capital of the Habsburg Kingdom of Galicia and Lodomeria. In 1918, for a short time, it was the capital of the West Ukrainian People\'s Republic. Between the wars, the city was known again as Lwów and was the centre of the Lwów Voivodeship in the Second Polish Republic. After World War II, it became part of the Soviet Union (by Stalin Djugashvili gift to Ukrainian SSR) with Ukrainian Peoples coming back to their Homeland and in 1991 of independent Ukraine. Administratively, Lviv serves as the administrative center of Lviv Oblast and has the status of city of oblast significance.\r\n\r\nLviv was the centre of the historical region of Galicia. The historical heart of the city, with its old buildings and cobblestone streets, survived Soviet and German occupations during World War II largely unscathed. The city has many industries and institutions of higher education such as Lviv University and Lviv Polytechnic. Lviv is also the home of many cultural institutions, including a philharmonic orchestra and the Lviv Theatre of Opera and Ballet. The historic city centre is on the UNESCO World Heritage List.', 2),
(3, 'Elisabeth Moss had a secret message \'to the patriarchy\' in her Emmys outfit', 'Elisabeth Moss\'s stylist has revealed there was a hidden message \"to the patriarchy\" in the actress\'s Emmy Awards outfit.', 'Moss won best actress in a drama series for The Handmaid\'s Tale on Sunday.But what no-one noticed was the message written on the bottom of her shoes.Stylist Karla Welch posted a photo of one shoe with \"Off\" written on the sole. \"You\'ll have to guess what the other shoe says.\" she wrote. \"Our note to the patriarchy teamresistance.\"', 3),
(4, 'North Korea says sanctions will ', 'North Korea says sanctions will accelerate nuclear programme', 'North Korea says sanctions will accelerate nuclear programmeNorth Korea says sanctions will accelerate nuclear programmeNorth Korea says sanctions will accelerate nuclear programmeNorth Korea says sanctions will accelerate nuclear programme', 5),
(5, 'Scotland\'s oldest snow patch expected to melt', 'Scotland\'s longest lasting patch of snow could melt away by the weekend.', 'Iain Cameron, who seeks out and records snow that survives on Scotland\'s highest mountains, believes the patch known as the Sphinx has days left.The patch at Garbh Choire Mor on Braeriach in the Cairngorms is believed to have disappeared only six times previously in the last 300 years.According to records, the snow previously melted in 1933, 1953, 1959, 1996, 2003 and 2006.Dr Adam Watson, a biologist dubbed Mr Cairngorms because of his years studying the mountains, has written of the snow at Garbh Choire Mor.His research of snow lying there for years drew on information handed down by generations of stalkers and families that had worked in that area.In a post on Twitter following a visit to Garbh Choire Mor, Stirling-based Mr Cameron wrote: \"Sphinx has a matter of days left. I\'m displeased.\"', 1),
(8, 'British war bride and Canada groom die within hours of each other', 'A British wartime bride and her Canadian veteran husband have died five hours apart - a month after celebrating their 75th wedding anniversary.', 'George and Jean Spear met in 1941 at a dance hall near London, while he was stationed in Britain during the Second World War.The couple passed away in an Ottawa hospital on Friday after Mrs Spear, 94, was admitted for pneumonia.She was made a Member of the Order of the British Empire in 2006.Mrs Spear and her 95-year-old husband met the Duke and Duchess of Cambridge during their 2011 Royal Tour.', 1),
(9, 'Senate Cancels Meeting With Trump Lawyer Michael Cohen', ' Michael Cohen, attorney for The Trump Organization, arrives at Trump Tower in New York City on Janua... Image: Michael Cohen, attorney for The Trump Organization, arrives at Trump Tower in New York City', 'WASHINGTON  Senate investigators probing Russian interference in the 2016 presidential election cancelled a Tuesday interview with longtime Trump lawyer Michael Cohen because they believe Cohen broke an agreement by speaking with the media.The committee will now subpoena Cohen, a source with direct knowledge of the matter told NBC News.By mutual agreement, according to the source, neither lawmakers nor Cohen\'s camp were to speak to reporters about the testimony, according to the source. Committee staffers were upset when Cohen circulated a statement prior to the meeting that included a blanket denial of collusion with Russia.', 1),
(10, 'Obamacare Is Suddenly in Grave Danger. Here\'s Why', ' Sen. John McCain looks on during a news conference to announce opposition to the so-called skinny re... Image: Senators McCain, Graham, Cassidy and Johnson Discuss Health Care Reform', 'WASHINGTON  A last-ditch Republican effort to repeal Obamacare picked up steam on Monday as a key senator opened the door to supporting the bill, which is popularly known as Graham-Cassidy.The GOP got a boost when Sen. John McCain, R-Ariz., who was one of three Republican \"no\" votes in July that derailed the last GOP health care effort, said he might \"reluctantly\" vote for the bill if his governor supported it.Arizona Gov. Doug Ducey, a Republican, backed the legislation later that day. McCain has yet to take a solid position on the measure and has said he prefers a longer bipartisan approach. The Senate Finance Committee announced it would hold a hearing next week on the bill, which could help address his complaints about the rushed process.Democrats and health care advocacy groups opposed to the legislation, which include AARP and the American Heart Association, are taking the latest Republican push very seriously.', 3),
(11, ' Hurricane Maria regains strength after battering Dominica', 'The latest major Atlantic hurricane of the season, Maria, has powered back to category five strength after pounding the Caribbean island of Dominica.', 'It weakened to a four after wreaking \"widespread damage\" on the island but is now packing maximum sustained winds of 260kmh (160mph) again.The storm is moving roughly along the same track as Irma, this season\'s other category five hurricane.Maria is now heading towards the Virgin Islands and Puerto Rico.The governor of Puerto Rico, a US territory, has told the island\'s 3.5 million people to seek shelter.Latest updates on Hurricane MariaPM\'s Facebook posts detail storm drama', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `options`
--

CREATE TABLE `options` (
  `optionsId` int(11) NOT NULL,
  `optionName` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `options`
--

INSERT INTO `options` (`optionsId`, `optionName`, `value`) VALUES
(1, 'countRows', '3');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`userId`, `userName`, `surname`, `password`, `phone`, `email`) VALUES
(1, 'user', 'User', '123456', '+380663215454', 'user@ukr.net'),
(2, 'admin', 'Admin', '123456', '+80957778899', 'admin@ukr.net'),
(3, 'Ivan', 'Ivanov', '123', '+830663332211', 'ivan@ukr.net'),
(4, 'Petro', 'ptr', '123', '+380958884422', 'ptr@ukr.net'),
(5, 'Olga', 'ol', '123', '+3800973336655', 'ol@ukr.net'),
(6, 'Cofiy', 'cof', '123', '+3800885554411', 'so@ukr.net'),
(8, 'wel', 'wel', '123456', '+3800887774455', 'wel@ukr.net');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`optionsId`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `options`
--
ALTER TABLE `options`
  MODIFY `optionsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
