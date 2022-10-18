# TODO & CO 📅 - Openclassrooms Project

Amélioration et documentation d'un projet existant ToDo & Co.

## Prérequis

## Installation
Voici l'installation recommandée avec Docker qui inclut PHP, MySQL et phpMyAdmin pour obtenir une application fonctionnelle en un rien de temps.

1. Cloner le projet
```
 git clone https://github.com/Florimond-Jouffroy/Openclassrooms-Project-008.git
```

2. A la racine du projet :
```
docker compose up -d
```
". Créer la base de donnée :
```
docker compose exec -u www-data www php bin/console d:d:c
```
4. Metter la base donnée à jour :
```
docker compose exec -u www-data www php bin/console d:m:m
```

5. Charger les fixtures :
```
docker compose exec -u www-data www php bin/console d:f:l
```

8. Tests
```
docker compose exec -u www-data www php bin/phpunit
```
