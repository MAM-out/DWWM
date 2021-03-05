SELECT <NOMS DE COLONNES OU EXPRESSIONS>
FROM <NOMS DE TABLES>
WHERE <CONDITIONS DE RECHERCHE>
GROUP BY <NOMS DE COLONNE DU SELECT>
HAVING <CONDITION DE RECHERCHE>
ORDER BY <NOM OU POSITION DE COLONNE> 
-- -----------------------
SELECT * FROM employees
-- -----------------------
SELECT emp_lastname 
FROM employees
-- -----------------------
SELECT emp_lastname, emp_salary 
FROM employees
-- -----------------------
SELECT CONCAT(emp_lastname,' ', emp_firstname), 'salaire :', emp_salary * 100, ' euros'
FROM employees

SELECT DISTINCT emp_shop_id 
FROM employees

SELECT emp_lastname, emp_firstname
FROM employees
LIMIT 5

PRIX < 100.00 OR PRIX > 135.00
NOT (AUTEUR = 'DUMAS')

SELECT * 
FROM employees 
WHERE emp_gender = 'F' 
AND emp_shop_id = 1

SELECT * 
FROM employees 
WHERE emp_shop_id = 1 
OR emp_shop_id = 3

SELECT emp_lastname, emp_salary, emp_id 
FROM employees
WHERE emp_id > 19 
AND emp_salary = 15240

SELECT * 
FROM employees
WHERE (emp_salary = 22500 OR emp_salary = 23000) 
AND emp_id > 10

SELECT emp_firstname, emp_lastname, emp_salary 
FROM employees
WHERE emp_salary BETWEEN 20000 AND 30000
=
SELECT emp_firstname, emp_lastname, emp_salary 
FROM employees
WHERE emp_salary >= 20000 
AND emp_salary <= 30000

Lister les données de la table employees dont le nom commence par la lettre B :
SELECT * 
FROM employees
WHERE emp_lastname LIKE 'B%'

tous les noms qui ne contiennent pas les lettres BAL :
SELECT * 
FROM employees
WHERE emp_lastname NOT LIKE '%BAL%'

Lister le nom et le prénom des employés qui n ont pas de numéro de téléphone :

SELECT emp_lastname, emp_firstname 
FROM employees 
WHERE emp_phone IS NULL

Lister uniquement les groupes pour lesquels la moyenne est supérieure a 16 000 :

SELECT  wdept, AVG(salaire), MIN(salaire) 
FROM employes
WHERE noemp > 00010
GROUP BY wdept
HAVING AVG(salaire) >= 16000

Quelle est la moyenne des salaires, le salaire minimum des employés des départements ayant plus d un salarié ?

SELECT wdept, AVG(salaire), MIN(salaire) 
FROM employes
WHERE noemp > 00010
GROUP BY wdept
HAVING COUNT(*) > 1

employés qui gagnent moins que la moyenne (fonction AVG) des salaires de tous les employés réunis :

SELECT emp_lastname, emp_firstname, emp_salary 
FROM employees
WHERE emp_salary < ALL
               -- sous-requete ici : 
               (SELECT AVG(emp_salary) FROM employees) 
ORDER BY emp_salary DESC