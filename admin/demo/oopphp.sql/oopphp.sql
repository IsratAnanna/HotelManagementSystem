-- Database: `411`
--

-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
`address` text(50) NOT NULL,
`phone` int(50) NOT NULL,
`salary` int(50) NOT NULL,
`join_date` varchar(50) NOT NULL,
`penalty` text(250) NOT NULL,

  PRIMARY KEY (`user_id`)
);
