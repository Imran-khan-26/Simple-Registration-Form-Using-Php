-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 11:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Eugenia Gibson', 'nizocat', '', '11'),
(2, 'Imran', 'imran', 'ibaloch06@gmail.com', '12'),
(3, 'amir', 'amir', 'amir@gmai.com', '12'),
(4, 'Connor Bolton', 'lufydyquly', 'pevadycy@mailinator.com', 'Pa$$w0rd!'),
(5, 'Anastasia Greene', 'vazifuc', 'favyha@mailinator.com', 'Pa$$w0rd!'),
(6, 'Dale Cruz', 'xusidera', 'zyfinu@mailinator.com', 'Pa$$w0rd!'),
(7, 'Lee Cash', 'gucede', 'lezafozo@mailinator.com', 'Pa$$w0rd!'),
(8, 'Vivien Conley', 'hitazet', 'tiqot@mailinator.com', 'Pa$$w0rd!'),
(9, 'Bell Cash', 'lenuxo', 'rebesyv@mailinator.com', 'Pa$$w0rd!'),
(10, 'Dai Bright', 'fufot', 'radagoja@mailinator.com', 'Pa$$w0rd!'),
(11, 'Zachary West', 'zafegykuh', 'dufahe@mailinator.com', 'Pa$$w0rd!'),
(12, 'Lila Knox', 'ciquvygem', 'luzobiry@mailinator.com', 'Pa$$w0rd!'),
(13, 'Unity Cherry', 'kudikyr', 'qetymibe@mailinator.com', 'Pa$$w0rd!'),
(14, 'Mechelle Dillard', 'tazonawuca', 'jyhok@mailinator.com', 'Pa$$w0rd!'),
(15, 'Meredith Dickson', 'lewazizo@mailinator.com', 'watinep@mailinator.com', 'Pa$$w0rd!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
