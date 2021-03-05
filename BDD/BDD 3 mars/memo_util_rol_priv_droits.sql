CREATE USER 'dave_loper' IDENTIFIED BY '1Ksable';

CREATE USER 'nom_utilisateur'@'adresse_ip' IDENTIFIED BY 'mot_de_passe';


-- Lister --
SELECT * FROM mysql.user; 

-- Afficher utilisateur courant --
SHOW current_user(); 

-- Changer un mot de passe --
ALTER USER 'utilisateur'@'localhost' IDENTIFIED BY '2Ksable';

-- Renommer un utilisateur --
RENAME USER 'ancien'@'localhost' TO 'nouveau'@'localhost'; 

-- Suppression d'un utilisateur --
DROP USER 'utilisateur'@'localhost';

-- Ajouter un utilisateur ayant tous les droits sur une base de données % = tous--
GRANT ALL PRIVILEGES ON afpa_gescom.* 
TO 'dave_loper'@'%' 
IDENTIFIED BY '1Ksable'

-- Affecter des privileges --
GRANT privilege 
ON objet 
TO utilisateur;
        -- ex --
GRANT select 
ON afpa_gescom.suppliers 
TO dave_loper
IDENTIFIED BY '1Ksable'

-- Suppression de privilèges --
REVOKE privilege 
ON objet 
FROM utilisateur
        -- ex --
REVOKE INSERT, UPDATE, DELETE 
ON afpa_gescom.suppliers
FROM 'dave_loper'

-- Création du rôle --
CREATE ROLE nomdurole   //  CREATE ROLE r_gescom_visiteur

-- En terme de securité attribué le rôle sur un seul serveur est plus conseillé --
CREATE ROLE 'r_gescom_visiteur'@'localhost'

-- Definir des privileges --
GRANT privilege 
ON base.table 
TO 'r_base_nomrole'@'localhost'
--ex--
GRANT select 
ON gescom.suppliers 
TO 'r_gescom_visiteur'@'localhost'

-- Affectation du rôle à un utilisateur --
GRANT nom_role                  et /ou GRANT nom_role1, nom_role2
TO 'utilisateur'@'localhost'    et /ou TO 'utilisateur1'@'localhost', 'utilisateur2'@'localhost'   

-- Création de plusieurs rôles --
CREATE ROLE r_gescom_nom1, r_gescom_nom2, r_gescom_nom3

-- Vérification des rôles et privilèges --
SHOW GRANTS FOR utilisateur assi SHOW GRANTS FOR nom_role 

-- aucun rôle actif n'a encore été attribué à cet utilisateur --
SELECT current_role();
        indique :
| current_role() | +----------------+ | NONE |

-- Attribuer tous les rôles à un utilisateur : -- 
SET DEFAULT ROLE ALL TO utilisateur@localhost;

-- Attribuer un seul rôle à l'utilisateur  --
SET DEFAULT ROLE nom_role TO utilisateur@localhost;

-- un seul rôle à l'utilisateur de façon temporaire (session de connexion). --
SET ROLE r_nom TO utilisateur
SET DEFAULT ROLE -- par defaut

-- Suppression de privilèges --
REVOKE INSERT, UPDATE, DELETE 
ON gescom.suppliers 
FROM r_gescom_visiteur

-- Suppression de rôle --
DROP ROLE nom_du_role


-- Invit de cmd pour les bakups --
mysqldump --user=root --password= --databases gescom_afpa > C:\Backup\backup_gescom_afpa_bak2.sql