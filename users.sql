SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'alecburger', 'burger', 'alec@kpnmail.nl'),
(2, 'floris', 'burger', 'floris@f-j-a.nl'),
(3, 'teamviewer', '1234', 'teamviewer@gmail.com'),
(4, 'jan', 'janssen', 'janjanssen@gmail.com'),
(5, 'test', 'test', 'test@test.nl'),
(6, 'blabla', 'blabla', 'bla@bla.com'),
(7, 'jamilzolnet', 'wachtwoord', 'jzolnet@gmail.com'),
(8, 'testg', 'testg', 'testg.@'),
(9, 'net', 'net', 'net@.');
