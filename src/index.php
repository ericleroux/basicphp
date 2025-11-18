      <?php
      echo "<h1>2222 oulà oulà!</h1> Users in DB mydb :<br />";
      $secret_pass = getenv('USER_PASSWORD_TEST') ?: 'inconnu';
      $dbhost = getenv('DB_HOST') ?: 'inconnu';
      $pdo = new PDO(
          'mysql:host=' . $dbhost . ';dbname=mydb',
          'myuser',
          $secret_pass
      );
      $stmt = $pdo->query("SELECT * FROM demo");
      while ($row = $stmt->fetch()) {
          echo $row['nom']." ".$row['prenom']."<br />\n";
      }
