<?php
// -Déclaration de la classe Employer
class Employer
{
  // Déclaration des propriétés publiques de la classe
  public string $nom;    // Nom de l'employé
  public string $prenom; // Prénom de l'employé
  public int $age;       // Âge de l'employé

  // -Constructeur de la classe, appelé lors de l'instanciation d'un objet Employer
  public function __construct(string $nom, string $prenom, int $age)
  {
    // -Initialisation des propriétés avec les valeurs passées en paramètres
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->age = $age;
  }

  // -Méthode pour afficher une présentation de l'employé
  public function presentation()
  {
    // -Affichage formaté des informations de l'employé
    echo '<pre>'; 
    print_r(" Bonjour ! je suis <b> {$this->nom}</b> <b> {$this->prenom}  </b> et j'ai <b> {$this->age}</b> ans");
    echo '</pre>'; 
  }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ClassEmployer POO-PHP-2025</title>
</head>
<body>
  
<br>
<br>
<!-- Lien vers la page index.php -->
<a href="../index.php"></a>
</body>
</html>
