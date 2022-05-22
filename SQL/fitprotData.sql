USE fitprot;

INSERT INTO `produit` (`categorie`, `image`, `ref`, `description`, `prix`, `stock`) VALUES
('vetement', 'Image/joggingF.jpeg', 1, 'Jogging pour Femme', 40, 20),
('nutrition', 'Image/clearWheyIso.jpg', 2, 'Une dose rafraichissante et fruitée de protéines pour l\'après entrainement.', 20, 30),
('nutrition', 'Image/ImpactWhey.jpg', 3, 'La protéine en poudre numéro 1 pour vos apports nutritionnels quotidiens.', 15, 30),
('nutrition', 'Image/peanut.jpg', 4, 'Notre pâte à tartiner délicieusement gourmande.', 5, 4),
('nutrition', 'Image/creatine.png', 5, 'Destinée à ceux qui souhaitent améliorer leurs performances physiques.', 15, 20),
('nutrition', 'Image/Bcaa.jpg', 6, 'Un supplément d\'acides aminés essentiels sous forme de poudre.', 15, 2),
('accessoire', 'Image/shaker.jpg', 7, 'Personnalisez votre gourde', 20, 3),
('accessoire', 'Image/sac.jpg', 8, 'Sac en bandouillière, pour transporter vos affaires de sport !', 15, 8),
('accessoire', 'Image/wheel.jpg', 9, 'Roue pour travailler les abdominaux', 20, 12),
('accessoire', 'Image/sangles.jpg', 1005, 'Ces sangles sont en taille unique.', 7, 13),
('vetement', 'Image/joggingH.jpeg', 50450, 'Jogging pour Homme', 40, 8),
('vetement', 'Image/tshirtH.jpeg', 511509, 'T-shirt d\'entraînement pour Homme', 30, 3),
('vetement', 'Image/hautSurvetH.jpeg', 59198185, 'Sweat à capuche pour Homme', 40, 8),
('vetement', 'Image/hautSurvetF.jpeg', 59198186, 'Sweat à capuche pour Femme', 40, 14);
COMMIT;