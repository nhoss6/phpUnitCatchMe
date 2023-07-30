# phpUnitCatchMe

![image](https://github.com/nhoss6/phpUnitCatchMe/assets/62094515/ac609461-3348-426e-aa95-5716ab0a4075)

## Description du jeu

Attrape-moi si tu peux est un jeu à deux joueurs. 
Les joueurs se déplacent sur une grille de taille 10 sur 10.
Les deux joueurs font une action chacun à leur tour. 
À son tour, un joueur peut faire une des actions suivantes :
- Pivoter à gauche de 90° (tourner à gauche)
- Pivoter à droite de 90° (tourner à droite)
- Avancer d’une ou deux cases
Si un joueur avance en dehors du plateau, son déplacement est annulé.
Une fois que les deux joueurs ont fait leur action, le jeu indique si un joueur voit un autre joueur et à quelle 
distance il se situe (le nombre de cases). Un joueur ne voit que ce qui se trouve sur la ligne ou la colonne sur 
laquelle il est orienté. 
Ensuite, une nouvelle phase de jeu commence et les joueurs peuvent à nouveau choisir une des trois actions.
Pour gagner, un joueur doit se déplacer sur la même case que l’autre joueur.
Essayez de réaliser ce jeu en TDD

## Installation

1.  Composer sur votre système.
2. Clonez ce dépôt dans votre environnement local.
3. Exécutez `composer install` pour installer les dépendances du projet.
4. Pour exécuter les tests, utilisez la commande " php '.\phpunit-10.2.2 (1).phar' .\test\GameTest.php  "
## Comment jouer

Pour jouer au jeu, vous devez créer deux joueurs et les passer à une nouvelle instance de la classe `Game`. Vous pouvez ensuite utiliser les méthodes `turnLeft`, `turnRight`, et `moveForward` sur chaque joueur pour effectuer des actions.

## Tests

Ce projet utilise PHPUnit pour les tests unitaires. Pour exécuter les tests, naviguez vers le répertoire du projet dans votre terminal et exécutez la commande suivante : e " php '.\phpunit-10.2.2 (1).phar' .\test\GameTest.php  "

 
