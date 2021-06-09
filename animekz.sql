-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 06:07 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animekz`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE `anime` (
  `anime_id` bigint(20) UNSIGNED NOT NULL,
  `anime_title` varchar(200) NOT NULL,
  `anime_description` text NOT NULL,
  `anime_image` text NOT NULL,
  `anime_episodes` int(11) NOT NULL,
  `anime_categories` text NOT NULL,
  `anime_views` int(11) NOT NULL,
  `anime_rating` varchar(10) NOT NULL,
  `ongoin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`anime_id`, `anime_title`, `anime_description`, `anime_image`, `anime_episodes`, `anime_categories`, `anime_views`, `anime_rating`, `ongoin`) VALUES
(1, 'Mushoku Tensei', 'When a 34-year-old underachiever gets run over by a bus, his story doesn’t end there. Reincarnated in a new world as an infant, Rudy will seize every opportunity to live the life he’s always wanted. Armed with new friends, some freshly acquired magical abilities, and the courage to do the things he’s always dreamed of, he’s embarking on an epic adventure—with all of his past experience intact!', 'https://4anime.to/image/Mushoku-Tensei-Isekai-Ittara-Honki-Dasu.jpg', 11, 'Drama Fantasy Magic', 214, '8.4', 0),
(2, 'Jujutsu Kaisen', 'A boy fights... for \"the right death.\"\r\n\r\nHardship, regret, shame: the negative feelings that humans feel become Curses that lurk in our everyday lives. The Curses run rampant throughout the world, capable of leading people to terrible misfortune and even death. What\'s more, the Curses can only be exorcised by another Curse.\r\n\r\nItadori Yuji is a boy with tremendous physical strength, though he lives a completely ordinary high school life. One day, to save a friend who has been attacked by Curses, he eats the finger of the Double-Faced Specter, taking the Curse into his own soul. From then on, he shares one body with the Double-Faced Specter. Guided by the most powerful of sorcerers, Gojou Satoru, Itadori is admitted to the Tokyo Metropolitan Technical High School of Sorcery, an organization that fights the Curses... and thus begins the heroic tale of a boy who became a Curse to exorcise a Curse, a life from which he could never turn back.', 'https://4anime.to/image/Jujutsu-Kaisen.jpg', 24, 'Action Demons Horror School Shounen Supernatural', 138, '8.8', 0),
(3, 'Horimiya', 'Although admired at school for her amiability and academic prowess, high school student Kyouko Hori has been hiding another side of her. With her parents often away from home due to work, Hori has to look after her younger brother and do the housework, leaving no chance to socialize away from school.\r\n\r\nMeanwhile, Izumi Miyamura is seen as a brooding, glasses-wearing otaku. However, in reality, he is a gentle person inept at studying. Furthermore, he has nine piercings hidden behind his long hair and a tattoo along his back and left shoulder.\r\n\r\nBy sheer chance, Hori and Miyamura cross paths outside of school—neither looking as the other expects. These seemingly polar opposites become friends, sharing with each other a side they have never shown to anyone else.\r\n\r\n', 'https://4anime.to/image/Horimiya.jpg', 13, 'Comedy Romance School Shounen', 348, '8.3', 1),
(4, 'Boku no Hero Academia 5th Season', 'The fifth season of Boku no Hero Academia.\r\n\r\nThe rivalry between Class 1-A and Class 1-B heats up in a joint training battle. Eager to be a part of the hero course, brainwashing buff Shinso is tasked with competing on both sides.\r\nBut as each team faces their own weaknesses and discovers new strengths, this showdown might just become a toss-up.\r\n\r\n', 'https://4anime.to/image/Boku-no-Hero-Academia-5th-Season.jpg', 6, 'Action Comedy School Shounen', 15, '8.0', 1),
(5, 'Wonder Egg Priority', 'A story of troubled girls, spun by screenwriter Shinji Nojima in the world of anime.\r\n\r\nLed by a mysterious voice while on a midnight stroll, 14-year-old girl Ai Ooto picks up an egg. The voice coaxes her: \"If you want to change the future, you only need to choose now. Now, believe in yourself and break the egg.\"\r\n\r\nWhat awaits Ai after the breaking of the egg ...\r\n\r\n', 'https://4anime.to/image/Wonder-Egg-Priority.jpg', 12, 'Drama Fantasy Psychological', 59, '8.1', 0),
(6, 'Kimetsu no Yaiba', 'Since ancient times, rumors have abounded of man-eating demons lurking in the woods. Because of this, the local townsfolk never venture outside at night. Legend has it that a demon slayer also roams the night, hunting down these bloodthirsty demons. For young Tanjirou, these rumors will soon to become his harsh reality...\r\n\r\nEver since the death of his father, Tanjirou has taken it upon himself to support his family. Although their lives may be hardened by tragedy, they\'ve found happiness. But that ephemeral warmth is shattered one day when Tanjirou finds his family slaughtered and the lone survivor, his sister Nezuko, turned into a demon. To his surprise, however, Nezuko still shows signs of human emotion and thought...\r\n\r\nThus begins Tanjirou\'s quest to fight demons and turn his sister human again.\r\n\r\n', 'https://4anime.to/image/Kimetsu-no-Yaiba.jpg', 26, 'Action Demons Historical Shounen Supernatural', 24, '8.6', 0),
(7, 'Mob Psycho 100 II', 'Second Season of ONE\'s Mob Psycho 100.', 'https://4anime.to/image/Mob-Psycho-100-II.jpg', 13, 'Action Comedy Supernatural', 7, '8.8', 0),
(8, 'Kakushigoto ', 'Single father Kakushi Gotou has a secret. He’s a top-selling artist of popular erotic manga, but his impressionable young daughter, Hime, can never find out! Now he’s having to bend over backwards just to keep her inquisitive little mind from discovering what he does for a living. A father-daughter tale of love and laughter.\r\n\r\n', 'https://4anime.to/image/Kakushigoto.jpg', 12, 'Comedy Shounen', 19, '8.0', 1),
(9, 'Ijiranaide, Nagatoro-san', 'High schooler Hayase Nagatoro loves to spend her free time doing one thing, and that is to bully her Senpai! After Nagatoro and her friends stumble upon the aspiring artist\'s drawings, they find enjoyment in mercilessly bullying the timid Senpai. Nagatoro resolves to continue her cruel game and visits him daily so that she can force Senpai into doing whatever interests her at the time, especially if it makes him uncomfortable.\r\n\r\nSlightly aroused by and somewhat fearful of Nagatoro, Senpai is constantly roped into her antics as his interests, hobbies, appearance, and even personality are used against him as she entertains herself at his expense. As time goes on, Senpai realizes that he doesn\'t dislike Nagatoro\'s presence, and the two of them develop an uneasy friendship as one patiently puts up with the antics of the other.', 'https://4anime.to/image/Ijiranaide-Nagatoro-san.jpg', 4, 'Comedy Romance', 44, '7.2', 1),
(10, 'Yakusoku no Neverland', 'At Grace Field House, life couldn\'t be better for the orphans! Though they have no parents, together with the other kids and a kind \"Mama\" who cares for them, they form one big, happy family. No child is ever overlooked, especially since they are all adopted by the age of 12. Their daily lives involve rigorous tests, but afterwards, they are allowed to play outside.\r\n\r\nThere is only one rule they must obey: do not leave the orphanage. But one day, two top-scoring orphans, Emma and Norman, venture past the gate and unearth the harrowing secret behind their entire existence. Utilizing their quick-wittedness, the children must work together to somehow change their predetermined fate.', 'https://4anime.to/image/Yakusoku-no-Neverland.jpg', 12, 'Horror Mystery Sci-Fi Shounen', 8, '8.6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Comedy'),
(2, 'Romance'),
(3, 'Drama'),
(4, 'Fantasy'),
(5, 'Magic'),
(6, 'Action'),
(7, 'Demons'),
(8, 'Horror'),
(9, 'School'),
(10, 'Shounen'),
(11, 'Supernatural'),
(12, 'Psychological'),
(13, 'Historical'),
(14, 'Mystery'),
(15, 'Sci-fi');

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

CREATE TABLE `episodes` (
  `episode_id` bigint(20) UNSIGNED NOT NULL,
  `episode_anime_id` int(11) NOT NULL,
  `episode_link` text NOT NULL,
  `episode_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`episode_id`, `episode_anime_id`, `episode_link`, `episode_number`) VALUES
(1, 1, 'https://video.sibnet.ru/shell.php?videoid=4211196', 1),
(2, 1, 'https://video.sibnet.ru/shell.php?videoid=4214110', 2),
(3, 1, 'https://video.sibnet.ru/shell.php?videoid=4224309', 3),
(4, 1, 'https://video.sibnet.ru/shell.php?videoid=4229149', 4),
(5, 1, 'https://video.sibnet.ru/shell.php?videoid=4240798', 5),
(6, 1, 'https://video.sibnet.ru/shell.php?videoid=4250420', 6),
(7, 1, 'https://video.sibnet.ru/shell.php?videoid=4259966', 7),
(8, 5, 'https://video.sibnet.ru/shell.php?videoid=4217741', 3),
(9, 2, 'https://video.sibnet.ru/shell.php?videoid=4305805', 1),
(10, 3, 'https://video.sibnet.ru/shell.php?videoid=4225319', 1),
(11, 9, 'https://video.sibnet.ru/shell.php?videoid=4303094', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_bookmarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_email`, `user_bookmarks`) VALUES
(1, 'Alikhan', '1', 'ali@ali.com', '9 8 1'),
(3, 'Usylli', 'bakaa', 'usyllix@gmail.com', '3 5 6 1 2 10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD UNIQUE KEY `anime_id` (`anime_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD UNIQUE KEY `category_id` (`category_id`);

--
-- Indexes for table `episodes`
--
ALTER TABLE `episodes`
  ADD UNIQUE KEY `episode_id` (`episode_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `anime_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `episode_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
