
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `category` varchar(50) NOT NULL,
  `qtyavail` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `category`, `qtyavail`) VALUES
(1, '12 in. hammer', 'hand tools', '5'),
(2, 'hand sanitizer' 'sanitation', '100');

