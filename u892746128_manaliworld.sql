-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2023 at 09:23 AM
-- Server version: 10.5.15-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u892746128_manaliworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `cab_packages`
--

CREATE TABLE `cab_packages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `period` varchar(255) DEFAULT NULL,
  `sedan_rate` varchar(255) DEFAULT NULL,
  `suv_rate` varchar(255) DEFAULT NULL,
  `tempo_rate` varchar(255) DEFAULT NULL,
  `more_info` text NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cab_packages`
--

INSERT INTO `cab_packages` (`id`, `title`, `period`, `sedan_rate`, `suv_rate`, `tempo_rate`, `more_info`, `update_date`) VALUES
(15, 'Delhi To Manali Cab', '3 night / 4 Days', '16500', '22000', '0', 'No Hidden Charges | Pickup From Delhi | Delhi Drop | Manali Sightseeing | Solang Valley | Kullu Nagar', '2021-06-22 19:50:20'),
(16, 'Delhi To Spiti Valley Cab', '5 night / 6 days', '0', '0', '0', 'No Hidden Charges | Pickup From Delhi | Delhi Drop | Full Spiti Visit', '2021-06-22 19:59:28'),
(17, 'Chandigarh To Shimla / Manali Cab', '5 night / 6 days', '16000', '22000', '0', 'No Hidden Charges | Pickup From Chandigarh | Shimla Sightseeing | Kufri Sightseeing | Manali Sightseeing | Solang Valley | Kullu Nagar', '2021-06-22 19:59:28'),
(18, 'Manali To Leh Cab', '-', '0', '0', '0', 'No Hidden Charges | Pickup From Manali | Manali Drop', '2021-06-22 20:05:06'),
(19, 'Dehradun To Manali Cab', '4 night / 5 days', '16500', '24000', '0', 'No Hidden Charges | Pickup From Dehradun | Manali Sightseeing | Solang Valley | Kullu Nagar', '2021-06-22 20:05:06'),
(20, 'Punjab To Manali Cab', '4 night / 5 days', '16000', '22000', '0', 'No Hidden Charges | Pickup From Punjab | Punjab Drop | Manali Sightseeing | Solang Valley | Kullu Nagar', '2021-06-22 20:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `packages_for_couple`
--

CREATE TABLE `packages_for_couple` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `period` varchar(255) DEFAULT NULL,
  `sedan_rate` varchar(255) DEFAULT NULL,
  `suv_rate` varchar(255) DEFAULT NULL,
  `more_info` text NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages_for_couple`
--

INSERT INTO `packages_for_couple` (`id`, `title`, `period`, `sedan_rate`, `suv_rate`, `more_info`, `update_date`) VALUES
(2, 'Delhi - Manali - Delhi', '3 night / 4 days(For One Couple)', '24000', '0', 'No Hidden Charges | Pickup From Delhi | Delhi Drop | Manali Sightseeing | Solang Valley | Kullu Nagar | 3 Star Hotel | Breakfast and Dinner', '2021-06-22 20:11:48'),
(3, 'Chandigarh - Manali - Chandigarh', '3 night / 4 days (For One Couple)', '22000', '0', 'No Hidden Charges | Pickup From Chandigarh | Chandigarh Drop | Manali Sightseeing | Solang Valley | Kullu Nagar | 3 Star Hotel | Breakfast and Dinner', '2021-06-22 20:11:48'),
(4, 'Delhi - Shimla - Manali', '5 night / 6 days(For One Couple)', '29000', '0', 'No Hidden Charges | Pickup From Delhi | Delhi Drop | Kufri Sightseeing | Shimla Sightseeing | Manali Sightseeing | Solang Valley | Kullu Nagar | 3 Star Hotel | Breakfast and Dinner', '2021-06-22 20:23:01'),
(5, 'Chandigarh - Shimla - Manali', '5 night / 6 days(For One Couple)', '19000', '0', 'No Hidden Charges | Pickup From Delhi | Delhi Drop | Manali Sightseeing | Solang Valley | Kullu Nagar | 3 Star Hotel | Breakfast and Dinner', '2021-06-22 20:23:01'),
(6, 'Delhi To Shimla', '3 night / 4 days(For One Couple)', '19000', '0', 'No Hidden Charges | Pickup From Delhi | Delhi Drop | Kufri Sightseeing | Shimla Mall Road | Shimla Sightseeing | 3 Star Hotel | Breakfast and Dinner', '2021-06-22 20:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `single_packages`
--

CREATE TABLE `single_packages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `trip_img` varchar(255) NOT NULL,
  `period` varchar(255) DEFAULT NULL,
  `sedan_rate` varchar(255) DEFAULT NULL,
  `suv_rate` varchar(255) DEFAULT NULL,
  `tempo_rate` varchar(255) DEFAULT NULL,
  `discounted_sedan_rate` varchar(255) DEFAULT NULL,
  `discounted_suv_rate` varchar(255) DEFAULT NULL,
  `discounted_tempo_rate` varchar(255) DEFAULT NULL,
  `more_info` text NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `single_packages`
--

INSERT INTO `single_packages` (`id`, `title`, `trip_img`, `period`, `sedan_rate`, `suv_rate`, `tempo_rate`, `discounted_sedan_rate`, `discounted_suv_rate`, `discounted_tempo_rate`, `more_info`, `update_date`) VALUES
(1, 'Manali Full Tour', 'manali_full_tour.webp', '5 Hrs', '2200', '3000', '0', '2000', '2500', NULL, 'No Hidden Charges | Manali Sightseeing | Hadimba Temple | Mall Road Manali | Vashisht | Monastery | Manu Temple', '2021-06-22 20:47:43'),
(2, 'Rohtang Pass', 'rohtang_pass.webp', '1 days', 'Lowest Rate', 'Lowest Rate', 'Na', NULL, NULL, NULL, 'No Hidden Charges | Kothi | Gulaba | Madhi', '2021-06-22 20:53:22'),
(10, 'Solang Valley', 'solang_valley.webp\r\n', '1 days', '2700', '4500', '0', '2000', '3500', NULL, 'No Hidden Charges | Solang Valley Sightseeing | For Adventure Activity - Call Us', '2021-06-22 20:47:43'),
(11, 'Jana Water Fall', 'jana_waterfall.webp', '1 days', '3800', '4500', '0', '2800', '3500', NULL, 'No Hidden Charges | Nagar Only | Jana Water Fall', '2021-06-22 20:50:26'),
(12, 'Kullu Naggar', 'kullu_naggar.webp', '1 days', '3800', '4500', '0', '2800', '3500', NULL, 'No Hidden Charges | Nagar Only | Jana Water Fall', '2021-06-22 20:50:26'),
(16, 'Naggar', 'naggar.webp', '7 Hrs', '2500', '3500', '0', '1800', '2500', NULL, 'No Hidden Cost | Nagger Only', '2022-05-03 04:33:57'),
(18, 'Sissu (Rohtang Tunnel)', 'sissu.webp', '9 Hrs', '4500', '6000', '0', '3500', '5000', NULL, 'No Hidden Cost | Rohtang Tunnel Only', '2022-05-03 04:35:49'),
(19, 'Kasol Drop', 'kasol.webp', '9 Hrs', '3500', '4500', '0', '3000', '4000', NULL, 'No Hidden Cost | Kasol Drop Only', '2022-05-03 04:35:49'),
(20, 'Hamta Pass', 'hamta_pass.webp', '1 Day', '4500', '6000', NULL, '3000', '4500', NULL, 'No Hidden Cost | Hamta Only', '2022-05-03 04:40:33'),
(21, 'Manikaran Local', 'manikaran.webp', '1 Day', '5500', '6500', '0', '4500', '5000', NULL, 'No Hidden Cost', '2022-05-03 04:40:33'),
(22, 'Bhuntar Airport', 'bhunter_airport.webp', '1 Day', '3500', '4500', '0', '2800', '3800', NULL, 'No Hidden Cost | Airport Drop', '2022-05-03 04:42:10'),
(23, 'Bijli Mahadev', 'bijli_mahadev.webp', '1 Day', '5500', '6500', '0', '4800', '5500', NULL, 'No Hidden Cost | Bijli Mahadev Temple', '2022-05-03 04:42:10');

-- --------------------------------------------------------

--
-- Table structure for table `tour_packages`
--

CREATE TABLE `tour_packages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `period` varchar(255) DEFAULT NULL,
  `sedan_rate` varchar(255) DEFAULT NULL,
  `suv_rate` varchar(255) DEFAULT NULL,
  `tempo_rate` varchar(255) DEFAULT NULL,
  `more_info` text NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_packages`
--

INSERT INTO `tour_packages` (`id`, `title`, `period`, `sedan_rate`, `suv_rate`, `tempo_rate`, `more_info`, `update_date`) VALUES
(2, 'Delhi to Manali Tour', '3 night / 4 days', '24000', '0', '0', 'No Hidden Charges | Pickup From Delhi | Delhi Drop | Manali Sightseeing | Solang Valley | Kullu Nagar | 3 Star Hotel | Breakfast and Dinner', '2021-06-22 20:11:48'),
(3, 'Chandigarh To Manali Trip', '3 night / 4 days', '22000', '0', '0', 'No Hidden Charges | Pickup From Chandigarh | Chandigarh Drop | Manali Sightseeing | Solang Valley | Kullu Nagar | 3 Star Hotel | Breakfast and Dinner', '2021-06-22 20:11:48'),
(4, 'Delhi To Shimla/Manali', '5 night / 6 days', '29000', '0', '0', 'No Hidden Charges | Pickup From Delhi | Delhi Drop | Kufri Sightseeing | Shimla Sightseeing | Manali Sightseeing | Solang Valley | Kullu Nagar | 3 Star Hotel | Breakfast and Dinner', '2021-06-22 20:23:01'),
(5, 'Chandigarh To Shimla/Manali', '5 night / 6 days', '19000', '0', '0', 'No Hidden Charges | Pickup From Delhi | Delhi Drop | Manali Sightseeing | Solang Valley | Kullu Nagar | 3 Star Hotel | Breakfast and Dinner', '2021-06-22 20:23:01'),
(6, 'Delhi To Shimla', '3 night / 4 days', '19000', '0', '0', 'No Hidden Charges | Pickup From Delhi | Delhi Drop | Kufri Sightseeing | Shimla Mall Road | Shimla Sightseeing | 3 Star Hotel | Breakfast and Dinner', '2021-06-22 20:26:11'),
(9, 'Shimla Manali Dharamshala Dalhousie Tour', '8 Nights/9days', '43000', '0', '0', 'No Hidden Cost | Delhi -Shimla | Dalhousie – Khajjiar | Dharamshala – Dalhousie | Manali - Dharamshala | Manali – Rohtang pass | Manali Town Local Sightseeing | Shimla – Manali | Shimla Local-Sightseeing | Dalhousie -Delhi  Drop | Breakfast and dinner only', '2021-07-01 06:49:47'),
(10, '\r\n All Himachal tour', '09Nights / 10 days', NULL, NULL, NULL, 'No Hidden Cost | Delhi -Shimla | Shimla Local-Sightseeing | Shimla – Manali | Manali Town Local Sightseeing |Manali – Rohtang pass | Manali - Dharamshala | Dharamshala – Dalhousie |  Dalhousie – Khajjiar | 9 Dalhousie -Amritsar Sightseeing | Amritsar -Delhi Drop', '2021-07-01 06:58:36'),
(11, '\r\nLeh 10Night 11Days Tour', '10 Nights/11days', NULL, NULL, NULL, ' Delhi-Manali | Manali Town Sightseeing  | Manali – Jispa | Jispa – Leh |  Leh (Excursion to Monasteries) | Leh – Pangong Lake | Pangong Lake – Leh |  Leh - Khandrungla Top - Nubra Valley |  Nubra Valley –Khandungla Leh | Leh to Jispa |  Jispa to Manali | Manali to Delhi Drop\r\n ', '2021-07-01 06:58:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cab_packages`
--
ALTER TABLE `cab_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages_for_couple`
--
ALTER TABLE `packages_for_couple`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single_packages`
--
ALTER TABLE `single_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_packages`
--
ALTER TABLE `tour_packages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cab_packages`
--
ALTER TABLE `cab_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `packages_for_couple`
--
ALTER TABLE `packages_for_couple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `single_packages`
--
ALTER TABLE `single_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tour_packages`
--
ALTER TABLE `tour_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
