<?php
// -Inclusion du fichier contenant la classe Employer
require_once "./Class/Employer.php";

// -Création de trois objets de la classe Employer avec des valeurs spécifiques
$employer1 = new Employer("lele", "Wabo", 12);  // Employé 1
$employer2 = new Employer("Tagne", "Boris", 20); // Employé 2
$employer3 = new Employer("Myra", "Eva", 15);   // Employé 3

// -Appel de la méthode presentation() pour chaque employé
$employer1->presentation(); // -Affiche les informations de l'employé 1
$employer2->presentation(); // -Affiche les informations de l'employé 2
$employer3->presentation(); // -Affiche les informations de l'employé 3





// -Déclaration de variables pour un autre exemple de présentation
$nom1 = 'Owen';          // Nom de la personne 1
$prenom1 = "waffo";      // Prénom de la personne 1
$age1 = 10;              // Âge de la personne 1

$nom2 = 'Eva';           // Nom de la personne 2
$prenom2 = "lele Rostand"; // Prénom de la personne 2
$age2 = 40;              // Âge de la personne 2

// -Définition d'une fonction pour afficher une présentation (approche procédurale)
function presentation2($nom, $prenom, $age)
{
  // -Affichage formaté des informations
  echo "<pre>";
  print_r("Bonjour! je suis <b>$nom $prenom</b> et j'ai <b>$age</b> ans");
  echo "</pre>";
}

// Appel de la fonction presentation2 (commenté dans le code original)
// presentation2($nom1, $prenom1, $age1);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil POO-PHP-2025</title>
</head>
<body>
  <!-- Titre de la page (commenté dans le code original) -->
  <!-- <h1>Initiation à la programmation Orientée Objet en PHP -->
  </h1>
</body>
</html>
