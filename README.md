# Octavia

## BackOffice Laravel
## Installation Windows

### Soft
Grâce à laragon on va pouvoir monter le projet super vite.
Il faut commencer par installer Laragon.

[Laragon](https://laragon.org/download/ "Laragon")

Il faut prendre la version PHP en 1 Laragon Wamp et l'install

Une fois installé ça ouvre une fenêtre avec un éléphanten icone. Faire un 

clic droit > Préférences. Vérifier qu'il y a bien le auto host qui est coché et bien remplir en dessous l'input. Par exemple le mien est à {name}.local.heffiros.net

Ensuite il va falloir autoriser le SSL. Clic droit > Apache > SSL > enabled

Une fois que c'est bon on va devoir rajouter les règles CROS pour que le front puisse faire ses requêtes.

Clic droit > Apache > site_enable > Choisissez celui d'Octavia.

Et dans le vhost

`<VirtualHost *:443>`

Rajouter ces 3 lignes 

`Header always set Access-Control-Allow-Origin "*"`

`Header always set Access-Control-Allow-Methods "POST, PUT, GET, DELETE"`

`Header always set Access-Control-Allow-Headers "*"`

On reload apache et ça sera ok 
 
De base Il n'y a pas PostgreSQL dans cette version de Laragon. Mais l'avantage de ce soft c'est qu'on peut rajouter tout ce qu'on veut facilement.

Du coup aller sur le drive dans le dossier install et prendre les deux dossiers postgresql et pgadmin3 et les mettre dans laragon/bin

On relance ensuite le serveur et boom c'est bon.

Il faut ensuite activer les extensions php pour ça clic droit > php > extensions et cliquer sur

- pgsql
- pdo_pgsql

Bon là on fait la partie DB j'ai eu un peu de chance c'est passé du premier coup et j'ai pas tout tout retenu.

On refait un clic droit sur Laragon y a un onglet PostgreSQL > PgAdmin

Y a une fenêtre qui s'ouvre .

Il faut commencer par créer le serveur pour ça on clic sur la prise.

Name => octavia
Host => localhost

et le reste laissez tout comme ça.

Normalement ça crée le serveur.

Ensuite on crée la DB Clic droit sur database Create Database appellez là octavia et dans la liste des owner prenez postgres.

Et boom on est bon pour la DB.

### Projet

On va créer un fake projet avec Laravel pour que laragon génère les url. Pour ça clic droit sur laragon encore une fois, puis QuickApp > Laravel. Dans le nom du projet mettez Octavia.

Quand c'est bon appuyez sur le bouton terminal sur laragon et allez dans le dossier octavia qui vient d'être créer .

On vide tout : `rm -rf *`
et on checkout le projet dedans. Attention on doit pas avoir un sous dossier octavia dans octavia il faut direct le laravel dedans avec app etc.

Dernier point de conf prendre le fichier .env sur le drive et remplacer celui existant.

Il faut dans le .env modifier le APP_URL et mettre l'url que vous avez mis dans laragon

On arrive au bout reste plus qu'à lancer les migrations pour remplir la DB.

On installe le module auth : `php artisan make:auth`

Et on lance les migrations : `php artisan migrate`

Normalement y a du vert et jaune qui dit que c'est ok.

Voilà le back est prêt. Pour valider il faut aller sur votre url moi 

http://octavia.local.heffiros.net/

Et y a une page avec Laravel en gros et un sous menu.

## Installation MacOS
A venir

## Front Quasar
A venir

