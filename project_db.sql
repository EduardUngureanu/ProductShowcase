-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 11:55 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `role` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `role`, `email`, `phone`) VALUES
(1, 'Nume numescu', 'Lead Designer', 'nume.numescu@yahoo.com', '038173819'),
(2, 'iuahwd jgnosei', 'Rolul 3', 'iaefno@ceva.com', '871388809192'),
(3, 'Brai fjnawi', 'Rolul 2', 'email@ceva.com', '819390839'),
(4, 'Un Nume', 'Job Nou', 'alt_email@ceva.com', '981891932'),
(6, 'Akbar Good', 'Occupational therapist', 'imohamed.wageh.9l@typery.com', '202-555-0161'),
(7, 'Tea Wilkes', 'Marketing director', 'hsmod@enjoy-lifestyle.us', '202-555-0195'),
(8, 'Vienna Tyler', 'Receptionist', 'ytaki.algeriag@paikhuuok.com', '202-555-0162'),
(9, 'Lilianna Major', 'Care assistant', '2bla@gga30.com', '01632 960994'),
(10, 'Willow Callaghan', 'Councillor', 'rmohame@sumakay.com', '613-555-0153'),
(11, 'Alayna Ramos', 'Disc jockey', 'zchaimaabentorkif@bookserv.site', '613-555-0110'),
(12, 'Cloe Bowler', 'Surveyor', 'yqarwac@kustermail.com', '1900 654 321'),
(13, 'Fredrick Holcomb', 'Art critic', '5crtusa87u@opakenak.com', '202-555-0139'),
(14, 'Isadora Whitaker', 'Stockbroker', '1offical.dust18@bfdyn.com', '202-555-0174'),
(15, 'Zacharia Aguilar', 'Auctioneer', 'tkimou1008@xasgs.com', '202-555-0102'),
(16, 'Roshni Chester', 'Surveyor', '9786@codefree24.de', '202-555-0126'),
(17, 'Kuba Slater', 'Pawnbroker', 'klienlethi195@superhostformula.com', '+1-202-555-0126'),
(18, 'Johnathon Arnold', 'Physiotherapist', '5mm4419t@loviel.com', '+44 1632 960853'),
(19, 'Kaisha Piper', 'Publisher', 'varnaldoccamattaw@dtecet.com', '01632 960348'),
(20, 'Talha Odonnell', 'Chiropodist', 'oagus.azz@defvit.com', '01632 960095'),
(21, 'Asia Williams', 'Broadcaster', '8teren@sanghoonghi.com', '+44 1632 960452'),
(22, 'Junayd Redmond', 'Secretary', '5rahulson@dencxvo.com', '+36 55 024 563'),
(23, 'Talha Pearson', 'Computer programmer', 'vlee@omtoodi.com', '+36 55 281 978'),
(24, 'Ravi Glenn', 'Coroner', '2ch.fi@mymailcr.com', '06 55 195 451'),
(25, 'Sunil Mccarty', 'Interior designer', 'wsurender.bollau@dencxvo.com', '020 916 0275'),
(26, 'Reis Bennett', 'Conservationist', 'rishak@mainstreethost.company', '01632 960299'),
(27, 'Carlos Hodson', 'Software consultant', 'yyelin.htet.16d@kuontil.buzz', '+44 1632 960685'),
(28, 'Kelsi Fellows', 'Handyman', 'obokicaboki.ses@virginiaintel.com', '+1-613-555-0139'),
(29, 'Mylie Tate', 'Leaflet distributor', 'tthewhite.be@sell365.me', '+61 1900 654 32'),
(30, 'Emillie Knapp', 'Labourer', 'uayoub_hb2007d@bantaochi.com', '094 668 8370'),
(31, 'Kaydon Ferrell', 'Broadcaster', 'efakedofb16q@sberwick.com', '+374 094 710 76'),
(32, 'Iqra Ridley', 'Art critic', 'zmstoofeha2@integrately.net', '+964 72 135 739'),
(33, 'Mali Berg', 'Composer', '6ahmmedadnans@mygrmail.com', '+44 1632 960995'),
(34, 'Kaiden Mosley', 'Surveyor', '0saad2012saad8@dikitin.com', '01632 960524'),
(35, 'Rosemary Ingram', 'Shop assistant', 'glouadjilhe@livegolftv.com', '+44 1632 960179'),
(36, 'Sylvie Anthony', 'Publisher', 'wwejdioriginaln@helperv.com', '202-555-0132'),
(37, 'Adnan Mahoney', 'Artist', 'lanass.darwinx@miptvdz.com', '1900 654 321'),
(38, 'Kira Joseph', 'Physiotherapist', 'ya.aram2014q@facedook-com.ga', '+36 55 102 966'),
(39, 'Alton Padilla', 'Councillor', 'ekarimahmed.kapoh@k377.me', '+353 20 915 192'),
(40, 'Tommy-Lee Robins', 'Insurance consultant', 'vprincexs.jannatf@epubg.site', '+51 41 38831001'),
(41, 'Natalie Callahan', 'Marketing director', 'thusse@bedul.net', '+380 44 160 977'),
(42, 'Ifan Milner', 'Assembly line worker', 'oamrmamdouh486@lemonjowo.buzz', '+963 33 903 535'),
(43, 'Michael Figueroa', 'Receptionist', 'qassuncaogat@firemanscream.com', '+856 20 7406 99'),
(44, 'Fahmida Blackburn', 'Art critic', 'ykhaled-hafp@texasaol.com', '+596 596 043 56'),
(45, 'Jamel Lowry', 'Gamekeeper', 'ohayder@scamerahot.info', '+371 7753 1207'),
(46, 'Pearce Buxton', 'Managing director', 'raymenamdouni15@bschost.com', '+7 732 645067'),
(47, 'Kanye Moyer', 'Market trader', 'emartinshatil@emtsua.com', '+95 99 56257'),
(48, '+95 99 56257', 'Management consultant', '0lvl@dzgiftcards.com', '+52 888 742 974'),
(49, 'Tymoteusz Potter', 'Camera operator', 'oresit@dezedd.com', '+81 75 375 9914'),
(50, 'Keenan Diaz', 'Publisher', 'cabdellah@elhida.com', '+977 985 223 24'),
(51, 'Luisa Whitehead', 'Luisa Whitehead', 'psolayman.chokag@artgostore.com', '+378 0549 76958');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `admin`) VALUES
(1, 'Admin', '1234', 1),
(2, 'User', 'parola', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
