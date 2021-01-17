SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+01:00";

 
/* Création de la table User avec sa structure */

CREATE TABLE `Users` (                                     
  `id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `ContactNumber` char(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `InscriptionDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/* Insertion d'un premier user dans la base de donnée */

INSERT INTO `Users` (`id`, `FirstName`, `LastName`, `EmailId`, `ContactNumber`, `Address`, `InscriptionDate`) VALUES
(1, 'Damien', 'Bourdon', 'bourdon-d@gmail.com', '0657128545', 'Route de la Jonelière, 44300 Nantes', '2018-11-28 05:41:26');

/* Définir "id" comme clé primaire dans la table User */

ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

/* Ajouter l'auto incrémentation de 3 par 3 pour l'id */

ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;