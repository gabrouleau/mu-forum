TP4 

1. Nom du projet

Forum Manchester United

2. Description de l'application

    Application simple et rapide qui permet de créer ou supprimer des articles sur le club de Football Manchester United.

3. Lien GitHub

    https://github.com/gabrouleau/mu-forum

4. Lien N0C

    https://edw2-h26-tp4.e2596196.webdevmaisonneuve.ca

5. Structure du projet

    mu-blog/
        app/
            db.php
        database/
            export.sql
        public/
            ajouter.php
            index.php
            style.css
            supprimer.php
    .env
    .env-exemple
    .gitignore
    READMED.md

6. Base de données

    Base de donnée simple avec 2 tables soit 'utilisateur' et 'articles'. nommé 'mu_forum' sur mon disque local et 'phrenypxcg_mu-forum' sur N0C.

utilisateur
- id (INT, AUTO_INCREMENT, PRIMARY KEY)
- nom (VARCHAR 45)
- nom_utilisateur (VARCHAR 50, UNIQUE)
- mot_de_passe (VARCHAR 255)
- date_naissance (DATE)

articles
- id (INT, AUTO_INCREMENT, PRIMARY KEY)
- titre (VARCHAR 200)
- contenu (TEXT)
- date_publication (DATE)
- utilisateur_id (INT, clé étrangère vers utilisateur)

7. Variables d'environnement

    Pour les variables , un fichier .env avec les informations de connexion. Pas disponible sur GitHub car informations confidentielles. Remplacé par un .env-exempl avec le modèle.

8. Configuration du sous-domaine N0C

    Sous domaine utilisé comme indiqué dans les directives : edw2-h26-tp4.e2596196.webdevmaisonneuve.ca.

9. Étapes de déploiement

    Le projet est cloné dans N0C et affiche seulement le dossier public pour proteger les données confidentielles.

9.1 Préparation locale dans WSL

    Situé dans /var/www/mu-blog WSL. Mon appli fonctionne bien sur localhost. 

9.2 Mise sur GitHub

    Dépot fait avec git init , git add , fait un commit. Ensuite, j'ai crée un repo 'mu-forum' et fait un .gitpush. .Env toujours pas disponible a cause du .gitingore.

9.3 Préparation de la base sur N0C

    La récupération de la base de donnée n'a pas fonctionné avec le import donc j'ai crée manuellement la base dans phpmyAdmin.

9.4 Connexion SSH

    Connecté au serveur avec ssh phrenypxcg@node41-ca.n0c.com -p 5022.

9.5 Récupération du projet sur N0C

    Projet cloné depuis GitHub avec la commande git clone 'le lien github'.

9.6 Configuration du .env sur N0C

    J'ai aussi recréer le fichier .env dans N0C avec les infos de la base de données.

9.7 Configuration du sous-domaine

    Sous-domaine fait avec le document root et en le nommant 'mu-forum/public'.

9.8 Tests finaux

    J'ai essayer plusieurs fois mon lien N0C dans mon navigateur et ca fonctionnait. J'ai aussi testé des actions CRUDE pour voir si la base de donnée fonctionnait et oui elle fonctionne.

10. Problèmes rencontrés

    J'avais perdu ma base de donnée au redémarage et j'ai appris a démarrer mon MySQL avec sudo service mysql start.

    Comme mentionnait plus haut , ma base de donnée ne se récuperait pas avec le import dans N0C phpmyAdmin donc je l'ai créer manuellement.

11. Validation finale

    Mon lien fonctionne. Mes boutons ajouter et supprimer fonctionne. Le but de l'application est fonctionnel.