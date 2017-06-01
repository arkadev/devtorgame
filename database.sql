CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(45) NOT NULL,
  `user_name` varchar(12) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`email`)torneo
)

CREATE TABLE IF NOT EXISTS `tournament` (
  `id_tournament` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(45) NOT NULL,
  `name` varchar(21) NOT NULL,
  `description` varchar(45) NOT NULL,
  `image_url` varchar(45) NOT NULL,
  `color` varchar(8) NOT NULL,
  PRIMARY KEY (`id_tournament`,`user_email`),
  UNIQUE KEY `name_UNIQUE` (`name`)
)

CREATE TABLE IF NOT EXISTS `team` (
  `id_team` int(11) NOT NULL AUTO_INCREMENT,
  `id_tournament` int(11) NOT NULL,
  `name` varchar(25) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_team`,`id_tournament`),
  UNIQUE KEY `name_UNIQUE` (`name`)
)

CREATE TABLE IF NOT EXISTS `phase` (
  `id_phase` int(11) NOT NULL AUTO_INCREMENT,
  `id_tournament` int(11) NOT NULL,
  `name` varchar(21) NOT NULL,
  PRIMARY KEY (`id_phase`,`id_tournament`)
)

CREATE TABLE IF NOT EXISTS `match` (
  `id_match` int(11) NOT NULL,
  `id_tournament` int(11) NOT NULL,
  `id_phase` int(11) NOT NULL,
  `team_id_a` int(11) NOT NULL,
  `score_a` int(2) NOT NULL,
  `team_id_b` int(11) NOT NULL,
  `score_b` int(2) NOT NULL,
  PRIMARY KEY (`id_match`, 'id_tournament')
)
