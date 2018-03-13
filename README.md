# Challenge POO et PDO

## Avant de commencer

### Préparatifs

1. Créer une nouvelle base de données en Interclassement UTF-8
2. Dézipper l'archive `sources/movies.sql.zip`
3. Importer les données depuis le fichier `movies.sql` dans la base créée
4. Renseigner le fichier de connexion `inc/config.php`
5. Let's code :)

#### Aide

En cas de souci lors de l'import, vous pouvez importer votre fichier sql en ligne de commande  
`mysql -u monuser -p madatabase < monfichier.sql`

### Infos

L'ensemble des exercices se trouvent dans le fichier `classes/DBData.php`

Pour vérifier votre code, vous pouvez ouvrir les fichiers d'exo dans votre navigateur qui se trouvent dans `tests/exo-.php`.

Le challenge est organisé de la même façon que le challenge Mamie PHP : la fonction `displayExo` génère du HTML avec des tests sur votre classe. Si vous souhaitez tester tranquillement votre classe avant, n'hésitez pas à utiliser `die` pour arrêter PHP.

```php
// exo2.php
//...
//...


// Je fais des essais
// ...
// J'arrête PHP, pour ne pas que ça m'affiche le HTML
die();


/*
 * Tests
 * Do not touch.
 */
$movie = $DBData->...;
displayExo(1, $movie);
```

### Documentation

PDO::FETCH_* : http://php.net/manual/fr/pdostatement.fetch.php


---

Good Luck & Have Fun !
# challenge-PDO-POO
