# AGENTS.md

## Projet

- Ce projet est une application PHP sans framework.
- Son architecture est une architecture MVC légère maison, orientée pages et composants.

## Règles de travail

- Respecter le routeur, le bootstrap et les helpers existants.
- Ne pas introduire Laravel, Symfony ou une nouvelle architecture sans demande explicite.
- Analyser les conventions existantes avant toute modification.
- Garder les modifications ciblées et cohérentes avec le projet.

## Publication

- Après une modification demandée, créer un commit ciblé, le pousser puis le déployer par défaut.
- Interrompre le déploiement et demander confirmation avant toute opération susceptible d’écraser des fichiers d’environnement, des secrets, des données ou des fichiers distants non liés à la tâche.
- Ne jamais transmettre de fichier `.env`, de clé, de mot de passe ou de configuration locale contenant des identifiants.
