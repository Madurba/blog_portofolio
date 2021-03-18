# FlowDesign_Blog

CodacyAnalyzer 

[Codacy Badge](https://app.codacy.com/project/badge/Grade/0af6940fc6f9443e84ca37d302d6476f)](https://www.codacy.com/gh/Madurba/blog_portofolio/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Madurba/blog_portofolio&amp;utm_campaign=Badge_Grade)

Bienvenue sur mon blog portofolio, j'y présente mon parcours, mes humeurs et les trends autour de la programmation ;)
Cette application est issue d'un projet OpenClassrooms dans le cadre d'une soutenance notée liée au parcours diplomant Developpeur d'application web PHP/symfony 💪🥬.

## Tracklist

page d'accueil ;
page listant l’ensemble des blog posts ;
page affichant un blog post ;
page permettant d’ajouter un blog post ;
page permettant de modifier un blog post ;
pages permettant de modifier/supprimer un blog post ;
pages de connexion/enregistrement des utilisateurs.

Vous développerez une partie administration sécurisée qui devra être accessible uniquement aux utilisateurs inscrits et validés.

### Perequisites

    * PHP 7, MySQL, Apache, Composer, Twig, Sendmail.

#### Environnement

    * Installer Composer, copier/coller les liens ci-dessous à la racine du projet, dans votre termial :
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

```

    * Installer Twig avec Composer, à la racine de l'app : 

```

"php composer.phar install" où "composer require "twig/twig:^1.0"".

```

    * Pour la gestion des emails, dans le cadre d'une install sur un localhost (Wamp...), installer sendmail à la racine et configurer le fichier send.ini

```
smtp_server=smtp.gmail.com
smtp_port=587
error_logfile=error.log
debug_logfile=debug.log
auth_username=VotreGmailId@gmail.com
auth_password=Votre-MotDePasse-Gmail
force_sender=VotreGmailId@gmail.com(optionnel)

```

puis configurer le fichier php.ini

```
SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = VotreGmailId@gmail.com
sendmail_path = "\"C:\wamp64\sendmail\sendmail.exe\" -t"

```

    * Importer le jeu de données "/bdd.sql" ->(core/Service) vers votre gestionnaire de base de donnée (dbname:"blog").

    * Configurer la base de donnée dans le fichier "core/Service/Database.php", avec vos paramètres de connexion.

    * L'adresse du serveur doit pointer à la racine du dossier.

#####

ENJOY 🤸‍♂️🤸‍♂️🤸‍♂️
