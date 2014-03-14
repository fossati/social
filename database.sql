CREATE TABLE utenti(
	id BIGINT(20) UNSIGNED primary key NOT NULL AUTO_INCREMENT,
    username Varchar(20) NOT NULL,
    password Varchar(40) NOT NULL,
    display_name Varchar(20) NOT NULL

);
CREATE TABLE `post` (
  id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  autore bigint(20) unsigned NOT NULL,
  contenuto text NOT NULL,
  registration_date datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  FOREIGN KEY (utenti) REFERENCES utenti(id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
  KEY `autore` (`autore`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


);

CREATE TABLE amici(
	id BIGINT(40) UNSIGNED primary key NOT NULL AUTO_INCREMENT,
    amico1 BIGINT(20) UNSIGNED NOT NULL,
	amico2 BIGINT(20) UNSIGNED NOT NULL,
	
	FOREIGN KEY(amico1) references utenti(id),
	FOREIGN KEY(amico2) references utenti(id)

);