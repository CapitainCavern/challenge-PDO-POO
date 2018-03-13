<?php

// je me connecte à la bse de données externe stockée sur mon NAS
// les identifiants de connexion sont sur le fichier config.php

require(__DIR__.'/inc/config.php');

class DBData
{
  // Stocker le gestionnaire de connexion
  private $db;


   *//je me connecte à ma base de données

   <?php
$dsn = 'mysql:dbname=movies ;host=root;charset=UTF8';
$user = 'root';
$password = 'root';
try {
    // $pdo = objet PDO représentant la connexion à la base de données
    $pdo = new PDO(
        $dsn,
        $user,
        $password,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
    );
}
// Si il y a la moindre "erreur", alors, on l'attrape et on exécute le code à l'intérieur des accolades suivantes
catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


public function __construct($config)
 {
   $dsn = 'mysql:dbname=moviestest;host=localhost;charset=UTF8';
       $username = 'root';
       $password = 'root';
       try {
           $this->pdo = new PDO(
               $dsn,
               $username,
               $password,
               array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
           );
       }
       catch (PDOException $e) {
           die('Connection failed');
       }
 }

  /**
   * Exo 2 : Get this movie
   *
   * Écrire la méthode getFilmById prennant en paramètre un id de film
   *
   * Cette méthode doit retourner 1 résultat sous forme d'objet
   *
   * Voir : fetch_style : https://secure.php.net/manual/en/pdostatement.fetch.php
   *
   * Indice : Pouvons-nous avoir confiance en cette donnée `id` ?
   *
   */
   $getFilmId = $DBData->$getTitle;

  public function getFilmById($id)
  {
    $sql = "SELECT *
     FROM movies
     WHERE id = 40963"
     ;
    $res_select = $db_connect->query($sql);
    return $pdoStatement->fetch(PDO::FETCH_OBJ);
  }

  /**
   * Exo 3 : Best Fr Movie
   *
   * Écrire la méthode bestFrMovie
   *
   * Cette méthode doit retourner, sous forme d'objet,
   * -> le film en langue fr le plus populaire, sorti en 2001
   *
   */
  public function bestFrMovie()
  {
    $sql = "SELECT *
     FROM movies
     WHERE original_language= fr ON moviestest
     SELECT release_date = 2001 FROM movies , COUNT(*) AS 1 FROM moviestest
     SELECT * FROM movies ORDER BY vite_count DESC"
    $res_select = $db_connect->query($sql);
    $resLine = $res_select->fetch();
  }

  /**
   * Tests, pas touche :)
   */
  public function getDB()
  {
      return $this->db;
  }
}
