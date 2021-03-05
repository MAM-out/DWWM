-- Créez trois utilisateurs util1, util2, util3 --
CREATE USER IF NOT EXISTS 'util1'@'afpa_gescom' IDENTIFIED BY 'MdP1';
CREATE USER IF NOT EXISTS 'util2'@'afpa_gescom' IDENTIFIED BY 'MdP2';
CREATE USER IF NOT EXISTS 'util3'@'afpa_gescom' IDENTIFIED BY 'MdP3';



-- util1 doit pouvoir effectuer toutes les actions --
GRANT ALL PRIVILEGES 
ON afpa_gescom.* 
TO 'util1'@'%' 
IDENTIFIED BY 'MdP1'

-- util2 ne peut que sélectionner les informations dans la base --
GRANT select 
ON afpa_gescom
TO 'util2'
IDENTIFIED BY 'MdP2'

-- util3 n'a aucun droit sur la base de données, sauf d'afficher la table suppliers --
GRANT SELECT
ON afpa_gescom.suppliers
TO 'util3'
IDENTIFIED BY 'MdP3'



