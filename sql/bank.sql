SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Shreya Langar', 'shreya123@gmail.com', 150000),
(2, 'Asma Nehal', 'asmapn345@yahoo.com', 670000),
(3, 'Ajay Bachate', 'ajay100@gmail.com', 48000),
(4, 'Shehzad Sheikh', 'sheikh@gmail.com', 50000),
(5, 'Yogita Wagh', 'yogirocks@gmail.com', 478000),
(6, 'Vishwa Lad', 'vish@gmail.com', 35000),
(7, 'Danish Koul', 'dk178@gmail.com', 59000),
(8, 'Gungun Koul, 'gunu@yahoo.com', 60000),
(9, 'Deepak Langar', 'deepu@gmail.com', 30000),
(10, 'Shivam Koul', 'shivam145@gmail.com', 54000);


ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;