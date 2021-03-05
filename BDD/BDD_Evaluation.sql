-- Q1. Afficher dans l'ordre alphabétique et sur une seule colonne les noms et prénoms des employés qui ont des enfants, présenter d'abord ceux qui en ont le plus --

SELECT CONCAT(emp_lastname, '', emp_firstname), emp_children 
FROM employees
WHERE emp_children > 1
ORDER BY  emp_lastname ASC, emp_children DESC

-- Q2. Y-a-t-il des clients étrangers ? Afficher leur nom, prénom et pays de résidence. --
SELECT CONCAT(cus_lastname, '', cus_firstname), cus_countries_id
FROM customers
WHERE cus_countries_id NOT LIKE 'FR'

-- Q3. Afficher par ordre alphabétique les villes de résidence des clients ainsi que le code (ou le nom) du pays. --
SELECT cus_city, cus_zipcode, cus_lastname
FROM customers
ORDER BY  cus_city ASC

-- Q4. Afficher le nom des clients dont les fiches ont été modifiées --
SELECT cus_lastname
FROM customers
WHERE cus_update_date IS NOT NULL

-- Q5. La commerciale Coco Merce veut consulter la fiche d'un client, mais la seule chose dont elle se souvienne est qu'il habite une ville genre 'divos'. Pouvez-vous l'aider ? --
SELECT cus_lastname
FROM customers
WHERE cus_city LIKE '%divos%'

-- Q6. Quel est le produit vendu le moins cher ? Afficher le prix, l'id et le nom du produit. --
SELECT MIN(pro_price), pro_id, pro_name
FROM products

-- Q7. Lister les produits qui n'ont jamais été vendus --
SELECT pro_name
FROM products
JOIN orders_details ON  orders_details.ode_pro_id = products.pro_id
WHERE ode_pro_id IS NOT TRUE

-- Q8. Afficher les produits commandés par Madame Pikatchien. --

SELECT pro_name
FROM products
JOIN orders_details ON  orders_details.ode_pro_id = products.pro_id
JOIN orders_details ON orders_details.ode_pro_id = products.pro_id
JOIN orders ON orders.ode_id = orders_details.ode_ord_id
JOIN customers ON customers.cus_id = order.ode_cus_id
WHERE cus_id IS 'Pikatchien'


-- Q9. Afficher le catalogue des produits par catégorie, le nom des produits et de la catégorie doivent être affichés. --
SELECT pro_name, pro_cat_id
FROM products


-- Q10. Afficher l'organigramme hiérarchique (nom et prénom et poste des employés) du magasin de Compiègne, classer par ordre alphabétique. Afficher le nom et prénom des employés, éventuellement le poste (si vous y parvenez). --
SELECT CONCAT(emp_lastname, '', emp_firstname), pos_libelle 
FROM employees
JOIN posts ON posts.pos_id = employees.emp_pos_id
ORDER BY  emp_lastname ASC

-- Q11. Quel produit a été vendu avec la remise la plus élevée ? Afficher le montant de la remise, le numéro et le nom du produit, le numéro de commande et de ligne de commande. --


SELECT MAX(ode_quantity), pro_name
FROM products
JOIN  orders_details ON orders_details.ode_pro_id = products.pro_id

-- Q13. Combien y-a-t-il de clients canadiens ? Afficher dans une colonne intitulée 'Nb clients Canada' --


-- Q16. Afficher le détail des commandes de 2020. --

-- Q17. Afficher les coordonnées des fournisseurs pour lesquels des commandes ont été passées. --

-- Q18. Quel est le chiffre d'affaires de 2020 ? -- 

 -- Q20. Lister le total de chaque commande par total décroissant (Afficher numéro de commande, date, total et nom du client). --

-- Q22. La version 2020 du produit barb004 s'appelle désormais Camper et, bonne nouvelle, son prix subit une baisse de 10%. --

-- Q23. L'inflation en France en 2019 a été de 1,1%, appliquer cette augmentation à la gamme de parasols. --


-- Q24. Supprimer les produits non vendus de la catégorie "Tondeuses électriques". Vous devez utilisez une sous-requête sans indiquer de valeurs de clés --
