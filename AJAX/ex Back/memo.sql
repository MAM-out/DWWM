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