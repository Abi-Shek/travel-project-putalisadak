-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 31, 2019 at 01:07 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gbridge`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax`
--

CREATE TABLE `ajax` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ajax`
--

INSERT INTO `ajax` (`id`, `test`) VALUES
(1, 'aa'),
(2, 'aa'),
(3, 'aa'),
(4, 'hello man'),
(5, 'what is this?'),
(6, 'what is this?'),
(7, 'trying again'),
(8, 'trying again'),
(9, 'button'),
(10, 'button'),
(11, 'button'),
(12, 'what is this?'),
(13, 'what is this?'),
(14, 'trying again'),
(15, 'trying again'),
(16, 'trying again'),
(17, 'trying again'),
(18, 'hello man');

-- --------------------------------------------------------

--
-- Table structure for table `bookedings`
--

CREATE TABLE `bookedings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bookedby` varchar(75) NOT NULL,
  `destination` varchar(70) NOT NULL,
  `adventure` varchar(50) NOT NULL,
  `postid` int(11) NOT NULL,
  `feat` varchar(222) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `pax` int(11) NOT NULL,
  `arrival` date NOT NULL,
  `cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookedings`
--

INSERT INTO `bookedings` (`id`, `bookedby`, `destination`, `adventure`, `postid`, `feat`, `duration`, `pax`, `arrival`, `cost`) VALUES
(64, 'bpjuli22@gmail.com', 'EVEREST REGION', 'Jungle Safari', 2, 'gokyo-4048058_1280.jpg', '18', 0, '0000-00-00', 1),
(65, 'bpjuli22@gmail.com', 'ANNAPURNA REGION', 'Paragliding', 7, 'annapurna5.jpg', '18', 0, '0000-00-00', 1),
(66, 'bpjuli22@gmail.com', 'ANNAPURNA REGION', 'Heli Tour', 7, 'annapurna5.jpg', '7', 2, '0000-00-00', 1),
(67, 'bpjuli22@gmail.com', 'CHITWAN NATIONAL PARK', 'Heli Tour', 1, 'chitwan3.jpg', '7', 13, '0000-00-00', 1),
(68, 'bpjuli22@gmail.com', 'TENGBOCHE MONASTERY', 'Paragliding', 6, 'tengboche-sbc-adventure.jpeg', '12', 2, '0000-00-00', 1),
(69, 'bpjuli22@gmail.com', 'TENGBOCHE MONASTERY', 'Paragliding', 6, 'tengboche-sbc-adventure.jpeg', '12', 2, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `checkbox`
--

CREATE TABLE `checkbox` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `types` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkbox`
--

INSERT INTO `checkbox` (`id`, `types`, `created_at`, `updated_at`) VALUES
(1, 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'cd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'ac', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'b c d', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `head` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feat` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dtype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altitude` double(8,2) NOT NULL,
  `long` double(8,2) NOT NULL,
  `latt` double(8,2) NOT NULL,
  `distance` double(8,2) NOT NULL,
  `startfrom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attraction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nearby` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cando` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iteranary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` int(11) NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `costperday` float NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `head`, `feat`, `dtype`, `description`, `location`, `altitude`, `long`, `latt`, `distance`, `startfrom`, `attraction`, `local`, `nearby`, `cando`, `iteranary`, `duration`, `tags`, `costperday`, `status`, `created_at`, `updated_at`) VALUES
(1, 'CHITWAN NATIONAL PARK', 'chitwan3.jpg', 'nat wild cult', 'In the southern region of Nepal, the jungles of Chitwan National Park await you with wildlife experiences like no other. Track wild royal Bengal tigers and watch one-horned rhinos bathe in rivers alongside the great Asiatic elephants. If you want to quenc', 'chitwan sauraha', 111.00, 222.00, 27.62, 84.36, 'sauraha', 'one horned rhino, bengal tiger, tharu dance, elephant saffari', 'ghogi (snails)', 'lumbini, vedetar', 'elephant safari, jeep safari', 'ktm-hetauda-sauraha', 2, 'one horned rhino, bengal tiger, tharu dance, elephant saffari', 12, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'EVEREST REGION', 'gokyo-4048058_1280.jpg', 'nat adv', 'In the southern region of Nepal, the jungles of Chitwan National Park await you with wildlife experiences like no other. Track wild royal Bengal tigers and watch one-horned rhinos bathe in rivers alongside the great Asiatic elephants. If you want to quenc', 'Solukhumbu', 8000.00, 86.86, 28.00, 800.00, 'ebc', 'vast glaciers, icefalls, the highest mountains, deep valleys, precarious settlements', 'yak curd', 'jiri ', 'mountaineering, heli tour', 'ktm-solu', 21, 'vast glaciers, icefalls, the highest mountains, deep valleys, precarious settlements', 17, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'DOLPO REGION', 'Dolpa-5.jpg', 'nat wild cult', 'Another, exciting adventure is to go canoeing in the marshy Terai river amongst dozens of marsh mugger crocodiles basking in the sun, waiting for their prey to fall in their mouths.\r\n\r\nYou can also spend some calming animal time visiting the elephant and ', 'dolpa', 22.00, 545.00, 111.00, 800.00, 'khaptad', ' pristine waters of  Phoksundo Lake, encountering yak caravans that cross the high-Himalayan passes and mountain ', 'fish of karnali', 'khaptad np,', 'fishing', 'ktm-bajura', 7, ' pristine waters of  Phoksundo Lake, encountering yak caravans that cross the high-Himalayan passes and mountain ', 18, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'POKHARA', 'pkr-ss-leisure.jpeg', 'nat adv', 'Be a part of the local tribal life and visit a Tharu village, where you are welcomed inside their traditional mud houses and treated with utmost care and respect.\r\n\r\nAt the end of the day add to the essence of the ultimate jungle experience and unwind nex', 'kaski', 2222.00, 83.99, 28.21, 200.00, 'pokhara', 'lakes, mountains, davis falls, mahendra cave', 'marpha (local alcohol)', 'ghandruk, poon hill, mardi himal', 'para gliding, boating, bunjee jumping,sky diving,', 'ktm-pokhara', 2, 'lakes, mountains, davis falls, mahendra cave', 25, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'LUMBINI BIRTHPLACE OF BUDDHA', 'lumbini3.jpg', 'cult rel', 'Sal grove, which is now the focal point of the Lumbini Garden. Mayadevi, the Queen of Shakya King Suddhodhana of Kapilvastu, while passing ', 'kapilvastu', 12.00, 545.00, 345.00, 400.00, 'bhairahawa', 'Sal grove, which is now the focal point of the Lumbini Garden. Mayadevi, the Queen of Shakya King Suddhodhana of Kapilvastu, while passing ', 'paani puri', 'palpa pokhara chitwan', 'meditation', 'ktm-bhairahaw-lumbini', 3, 'Sal grove, which is now the focal point of the Lumbini Garden. Mayadevi, the Queen of Shakya King Suddhodhana of Kapilvastu, while passing ', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'TENGBOCHE MONASTERY', 'tengboche-sbc-adventure.jpeg', 'nat adv rel', 'Tengboche Monastery is one of the most famous monasteries of Nepal, probably because of its unrivalled backdrop of Mount Ama Dablam. The monastery is the leading Buddhist centre in the Khumbu with a residing Rinpoche who blesses pilgrims, mountaineers and', 'Solukhumbu', 11.00, 111.00, 555.00, 800.00, '', 'gompa (monastery), with a stunning panoramic view of Everest, Lhotse and Ama Dablam.  ', 'yak curd', 'From Tengboche you can continue on to Pheriche, Kala Pattar and the hamlet of Gorakshep.  From here, the Everest Base Camp is easily accessible, as is the summit of Kala Pattar (5,545 m), from where one gets outstanding views of Mt. Everest.', 'mountaineering trekking', 'ktm-solu', 21, 'From Tengboche you can continue on to Pheriche, Kala Pattar and the hamlet of Gorakshep.  From here, the Everest Base Camp is easily accessible, as is the summit of Kala Pattar (5,545 m), from where one gets outstanding views of Mt. Everest.', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'ANNAPURNA REGION', 'annapurna5.jpg', 'nat adv', 'As the name suggests, the centre piece of this part of Nepal is the range of mountains that includes Annapurna I, the first of the 8,000 m peaks to be climbed. Also included in this region is yet another 8,000 m giant, Dhaulagiri, which is located west of', 'Mustang region', 3333.00, 83.88, 28.53, 800.00, 'pokhara', 'As the name suggests, the centre piece of this part of Nepal is the range of mountains that includes Annapurna I, the first of the 8,000 m peaks to be climbed. Also included in this region is yet another 8,000 m giant, Dhaulagiri, which is located west of', 'marpha (local alcohol)', 'ghandruk, poon hill, mardi himal', 'mountaineering, heli tour', 'ktm-solu', 7, 'As the name suggests, the centre piece of this part of Nepal is the range of mountains that includes Annapurna I, the first of the 8,000 m peaks to be climbed. Also included in this region is yet another 8,000 m giant, Dhaulagiri, which is located west of', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'PASHUPATINATH TOUR', 'Pashupatinath_tk_pilgrims.jpg', 'cult rel', 'Pashupatinath is more than just a religious destination. It is a combination of religion, art, and culture. It offers peace and devotion. The temple, spread across 246 hectors of land abounds in temples and monuments. Hundreds of rituals are performed her', 'kathmandu', 2222.00, 231.00, 345.00, 0.00, 'ktm', 'Shleshmantak, home to animals like deer and monkeys. ', 'momo', 'bhaktapur patan chitlang nagarkot', 'meditation', 'ktm', 2, 'Shleshmantak, home to animals like deer and monkeys. ', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'KHAPTAD NATIONAL PARK', 'Khaptad_taan_trekking.jpg', 'wild adv', 'Trek through the rolling hills of the Khaptad National Park (about 3,000 m) through subtropical forest of Chir pine at lower altitude, and sub alpine forests of fir, hemlock, oak and rhododendron in the higher regions. The national park is described as th', 'dolpa', 22.00, 121.00, 123.00, 800.00, 'bajura', 'national park is described as the living garden of herbs and a museum of natural history for its 224 species of medicinal herbs. It is reported that 567 species, 11 percent of flowering plants of Nepal, are found in Khaptad.', 'fish of karnali', 'lumbini, vedetar', 'trekking', 'ktm-bajura', 21, 'one horned rhino, bengal tiger, tharu dance, elephant saffari', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'UPPER MUSTANG', 'mustang-tk-adventure.jpeg', 'nat adv', 'To trek in Upper Mustang is a rare privilege. Here you will experience a way of life of true mountain people, who for hundreds of years, had very little contact with the rest of Nepal  and retained their rich cultural heritage. Until recent times their ki', 'mustang', 4000.00, 234.00, 567.00, 400.00, 'pokhara', '', 'apple marpha', 'There are few accommodation facilities available above Kagbeni, so groups must be fully self-sufficient, especially in fuel. While porters are available in Jomsom it is preferable to use mules to carry the loads up to Mustang. These pack animals are avail', 'trekking bike ride ', 'ktm-pokhara', 7, 'There are few accommodation facilities available above Kagbeni, so groups must be fully self-sufficient, especially in fuel. While porters are available in Jomsom it is preferable to use mules to carry the loads up to Mustang. These pack animals are avail', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'My Test Destination', 'DeepinScreenshot_20191219014452.png', 'nat cult', NULL, 'Somewhere', 777.00, 27.00, 83.00, 10.00, 'here', 'that, this', 'haha', 'thereone, theretwo', 'wow,wow', NULL, 7, 'nice,taghim', 1, 0, '2019-12-28 18:03:49', '2019-12-28 18:03:49'),
(12, 'My Test Destination', 'Grassland_Scenery_by_Shi_Yuejun.jpg', 'nat cult', 'when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Somewhere', 777.00, 27.00, 83.00, 10.00, 'here', 'that, this', 'haha', 'thereone, theretwo', 'wow,wow', NULL, 7, 'nice,taghim', 1, 0, '2019-12-28 18:06:34', '2019-12-28 18:06:34'),
(13, 'Annapurna Panaroma Trek', 'annapurnaone.png', 'nat cult adv', NULL, 'Lamjung, Kaski, Manang', 3450.00, 83.82, 28.59, 168.00, 'Dhampus', 'Gurung culture, sunrise, sunset, rhodorendron jungle, annapurna and dhaulagiri mount view', 'apple pie', 'Jomsom, Muktinath, Ghandruk, Poon hill', 'heli, trekking, camping', NULL, 5, 'Dhampus, Thorangla Pass, Annapurna, Dhaulagiri', 28, 0, '2019-12-29 10:21:31', '2019-12-29 10:21:31'),
(14, 'Balthali Village Trek', 'balthalione.png', 'nat cult', 'This Balthali Village Trek is a short drive from Kathmandu, on the edge of the Kathmandu Valley rim. It passes through small farming villages, where you can experience the lifestyle of local people, along with lush green forests, ancient temples, and terraced farmland. Add to this the stunning snowy peaks visible in the distance, and this is the perfect introduction to trekking in the Himalayas!\r\nHighlights\r\nStay in some of the finest hotels and lodges in the Kathmandu area\r\nExplore well-preserved Newari architecture in the village of Panauti\r\nRelax amid traditional farming villages with spectacular Himalayan views\r\nExperience the sacred atmosphere of Namo Buddha, one of Tibetan Buddhism’s holiest sites\r\nPlanning Your Trek\r\nRated one of the best short treks in Nepal, this itinerary has been specifically designed for the traveler looking to experience some of the best accommodation in Nepal. While much of this could be done on a smaller budget — by substituting Dwarika for cheaper options — this would, in a way, detract from one of the main highlights of this trip. That being said, Namo Buddha Resort and Balthali Village Resort are fairly affordable, so this trek is a great way to experience some top-notch accommodation at a moderate price (excluding Dwarika\'s!).', 'Kavrepalanchowk', 1730.00, 27.54, 85.54, 39.00, 'Panauti', 'Ancient Temples, Traditional Farming Village, Namo Buddha', 'Organic Vegetables', 'Kathmandu, Patan, Bhaktapur', 'Jeep Safari, Yoga, Hike', NULL, 5, 'Namo buddha, Jeep Safari', 22, 0, '2019-12-29 10:31:27', '2019-12-29 10:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` blob NOT NULL,
  `alt` varchar(255) NOT NULL,
  `feat` varchar(10) NOT NULL,
  `upload_on` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`, `alt`, `feat`, `upload_on`) VALUES
(8, 'CHITWAN NATIONAL PARK ', 0x6368697477616e2d6e6174696f6e616c2d7061726b2e6a7067, '', 'no', 0),
(9, 'CHITWAN NATIONAL PARK ', 0x6368697477616e332e6a7067, '', 'yes', 0),
(10, 'EVEREST REGION ', 0x6d6f756e7461696e2d313234363239375f313238302e6a7067, '', 'no', 0),
(11, 'EVEREST REGION ', 0x676f6b796f2d343034383035385f313238302e6a7067, '', 'yes', 0),
(12, 'DOLPO REGION ', 0x646f6c70612d69772d616476656e747572652e6a706567, '', 'no', 0),
(13, 'DOLPO REGION ', 0x446f6c70612d352e6a7067, '', 'yes', 0),
(14, 'POKHARA ', 0x706f6b68617261332e6a7067, '', 'no', 0),
(15, 'POKHARA ', 0x706b722d73732d6c6569737572652e6a706567, '', 'yes', 0),
(16, 'LUMBINI BIRTHPLACE OF BUDDHA ', 0x6c756d62696e692d746b2d6275646468616a6179616e74695f312e6a706567, '', 'no', 0),
(17, 'LUMBINI BIRTHPLACE OF BUDDHA ', 0x6c756d62696e69332e6a7067, '', 'yes', 0),
(18, 'TENGBOCHE MONASTERY ', 0x74656e67626f6368652d7362632d616476656e747572652e6a706567, '', 'yes', 0),
(19, 'ANNAPURNA REGION ', 0x616e6e617075726e613130312e6a7067, '', 'no', 0),
(20, 'ANNAPURNA REGION ', 0x616e6e617075726e61352e6a7067, '', 'yes', 0),
(21, 'PASHUPATINATH TOUR ', 0x5061736875706174696e6174685f746b5f70696c6772696d732e6a7067, '', 'no', 0),
(22, 'PASHUPATINATH TOUR ', 0x7061736875706174696e6174682d736d2d70696c6772696d732e6a706567, '', 'yes', 0),
(23, 'KHAPTAD NATIONAL PARK ', 0x6b6861707461642d6262742d7472656b6b696e672e6a706567, '', 'no', 0),
(24, 'KHAPTAD NATIONAL PARK ', 0x4b6861707461645f7461616e5f7472656b6b696e672e6a7067, '', 'yes', 0),
(25, 'UPPER MUSTANG ', 0x6d757374616e672d746b2d616476656e747572652e6a706567, '', 'no', 0),
(26, 'UPPER MUSTANG ', 0x706f6f6e68696c6c2d70672d616476656e747572652e6a706567, '', 'yes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gbusers`
--

CREATE TABLE `gbusers` (
  `gid` bigint(20) UNSIGNED NOT NULL,
  `gemail` varchar(50) NOT NULL,
  `gpass` varchar(25) NOT NULL,
  `gstatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gbusers`
--

INSERT INTO `gbusers` (`gid`, `gemail`, `gpass`, `gstatus`) VALUES
(1, 'admin@admin.admin', 'break', 1);

-- --------------------------------------------------------

--
-- Table structure for table `itinerary`
--

CREATE TABLE `itinerary` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `day` int(11) NOT NULL,
  `highlight` text NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itinerary`
--

INSERT INTO `itinerary` (`id`, `title`, `day`, `highlight`, `description`) VALUES
(1, 'Annapurna Panaroma Trek', 1, 'abc', 'x'),
(2, 'Annapurna Panaroma Trek', 2, 'abc', 'x'),
(3, 'Annapurna Panaroma Trek', 3, 'abc', 'x'),
(4, 'Annapurna Panaroma Trek', 4, 'abc', 'x'),
(5, 'Annapurna Panaroma Trek', 1, 'abc', 'x'),
(6, 'Annapurna Panaroma Trek', 2, 'abc', 'x'),
(7, 'Annapurna Panaroma Trek', 3, 'abc', 'x'),
(8, 'Annapurna Panaroma Trek', 4, 'abc', 'x'),
(9, 'Balthali Village Trek', 1, 'abc', 'x'),
(10, 'Balthali Village Trek', 2, 'xyz', 'x'),
(11, 'Balthali Village Trek', 3, 'def', 'x'),
(12, 'Balthali Village Trek', 4, 'hi', 'x'),
(13, 'Balthali Village Trek', 5, 'hello', 'x'),
(14, 'Balthali Village Trek', 6, 'world', 'x'),
(15, 'ANNAPURNA REGION', 1, 'one', 'x'),
(16, 'ANNAPURNA REGION', 2, 'abc', 'x'),
(17, 'ANNAPURNA REGION', 3, 'abc', 'x'),
(18, 'ANNAPURNA REGION', 4, 'ppp', 'x'),
(19, 'TENGBOCHE MONASTERY', 1, 'one', 'x'),
(20, 'TENGBOCHE MONASTERY', 2, 'pkr', 'x'),
(21, 'TENGBOCHE MONASTERY', 3, 'one', 'x'),
(22, 'TENGBOCHE MONASTERY', 4, 'abc', 'x'),
(23, 'TENGBOCHE MONASTERY', 5, 'oo', 'x'),
(24, 'TENGBOCHE MONASTERY', 6, 'cc', 'x'),
(25, 'TENGBOCHE MONASTERY', 7, 'vv', 'x'),
(26, 'TENGBOCHE MONASTERY', 8, 'nn', 'x');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_07_23_073006_destination', 1),
(12, '2019_07_23_073629_create_destinations_table', 1),
(13, '2019_07_23_114544_checkbox_table', 2),
(14, '2019_07_23_114658_create_checkbox_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `sn` bigint(20) UNSIGNED NOT NULL,
  `pid` int(11) NOT NULL,
  `pdays` int(11) NOT NULL,
  `pincludes` text NOT NULL,
  `prices` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`sn`, `pid`, `pdays`, `pincludes`, `prices`) VALUES
(1, 1, 3, 'accomodation travel breakfast lunch dinner guide', 1200),
(2, 2, 24, 'accomodation travel breakfast lunch dinner guide porter heli-view', 2500),
(3, 3, 7, 'accomodation travel breakfast lunch dinner guide porter', 600),
(4, 4, 4, 'accomodation travel breakfast lunch dinner guide porter', 400),
(5, 5, 5, 'accomodation travel breakfast lunch dinner guide', 800),
(6, 6, 8, 'accomodation travel breakfast lunch dinner guide porter', 1200),
(7, 7, 14, 'accomodation travel breakfast lunch dinner guide porter', 1500),
(8, 8, 2, 'accomodation travel breakfast lunch dinner guide', 300),
(9, 9, 14, 'accomodation travel breakfast lunch dinner guide', 650),
(10, 10, 10, 'accomodation travel breakfast lunch dinner guide porter', 1350);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regusers`
--

CREATE TABLE `regusers` (
  `uid` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `userfrom` varchar(20) NOT NULL,
  `country` varchar(25) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regusers`
--

INSERT INTO `regusers` (`uid`, `fullname`, `email`, `password`, `userfrom`, `country`, `gender`, `age`) VALUES
(7, 'Hello Nepal', 'abc@pqr.com', 'dfgfgshhgfgiuk', 'MongKy', '2', 'male', '2019-12-09'),
(9, '', 'bpjuli22@gmail.com', NULL, 'google', NULL, NULL, NULL),
(10, '', 'parajulisagar44441@gmail.com', NULL, 'google', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testingjs`
--

CREATE TABLE `testingjs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bookedby` varchar(100) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `duration` int(11) NOT NULL,
  `cost` float NOT NULL,
  `adventure` varchar(75) NOT NULL,
  `pax` int(11) NOT NULL,
  `lat` float NOT NULL,
  `totalcost` float NOT NULL,
  `status` int(11) NOT NULL,
  `long` float NOT NULL,
  `seladv` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testingjs`
--

INSERT INTO `testingjs` (`id`, `bookedby`, `destination`, `duration`, `cost`, `adventure`, `pax`, `lat`, `totalcost`, `status`, `long`, `seladv`) VALUES
(42, 'parajulisagar44441@gmail.com ', 'POKHARA', 2, 25, 'para gliding, boating, bunjee jumping,sky diving,', 1, 28.21, 50, 0, 83.99, 'x'),
(43, 'parajulisagar44441@gmail.com ', 'TENGBOCHE MONASTERY', 21, 0, 'mountaineering trekking', 1, 555, 0, 0, 111, ''),
(53, 'admin@admin.admin ', 'Annapurna Panaroma Trek', 14, 28, 'heli, trekking, camping', 1, 28.59, 392, 0, 83.82, ''),
(54, 'bpjuli22@gmail.com ', 'Balthali Village Trek', 5, 22, 'Jeep Safari, Yoga, Hike', 1, 85.54, 110, 0, 27.54, 'Jeep Safari, Yoga, Hike');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax`
--
ALTER TABLE `ajax`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `bookedings`
--
ALTER TABLE `bookedings`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `checkbox`
--
ALTER TABLE `checkbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `gbusers`
--
ALTER TABLE `gbusers`
  ADD UNIQUE KEY `gid` (`gid`);

--
-- Indexes for table `itinerary`
--
ALTER TABLE `itinerary`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD UNIQUE KEY `sn` (`sn`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `regusers`
--
ALTER TABLE `regusers`
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `testingjs`
--
ALTER TABLE `testingjs`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajax`
--
ALTER TABLE `ajax`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `bookedings`
--
ALTER TABLE `bookedings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `checkbox`
--
ALTER TABLE `checkbox`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `gbusers`
--
ALTER TABLE `gbusers`
  MODIFY `gid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `itinerary`
--
ALTER TABLE `itinerary`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `sn` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `regusers`
--
ALTER TABLE `regusers`
  MODIFY `uid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testingjs`
--
ALTER TABLE `testingjs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
