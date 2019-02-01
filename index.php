<?php error_reporting('NO'); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
    <div class="row" style="height : 100px;"></div>
    <div class="row">
      <div class="col-md-6">
        <center>
          <form action="" method="post">
            <h2>Encryption</h2><br><br>

            <input type="number" name="key" value="" placeholder="Enter a key" minlength="7" class="form-control"><br><br><br>
            <textarea class="form-control" name="text_to_encrypt" rows="8" cols="80" placeholder="Enter the text you want to encrypt"></textarea><br>
            <button class="btn btn-default" type="submit" name="encrypt">ENCRYPT</button>
          </form>
          <?php
          if (isset($_POST['text_to_encrypt'])) {
            $key = $_POST['key'];
            $text_to_encrypt = $_POST['text_to_encrypt'];
              $encrypted = openssl_encrypt($text_to_encrypt, 'aes-256-cbc', $key);
              if ($encrypted) {
                echo "Text encrypted: ". $encrypted;
              }
              else {
                echo "Veuillez entrer une clé correcte";
              }
          }
          ?>
        </center>
      </div>
      <div class="col-md-6">
        <center>
          <form action="" method="post">
            <h2>Decryption</h2><br><br>
            <input type="number" name="key" value="" placeholder="Enter a key" minlength="10" class="form-control"><br><br><br>
            <textarea class="form-control" name="text_to_decrypt" rows="8" cols="80" placeholder="Enter the text you want to decrypt"></textarea><br>
            <button class="btn btn-default" type="submit" name="decrypt">DECRYPT</button>
          </form>
          <br>
          <?php
          if (isset($_POST['text_to_decrypt'])) {
            $key = $_POST['key'];
            $text_to_decrypt = $_POST['text_to_decrypt'];

              $decrypted = openssl_decrypt($text_to_decrypt, 'aes-256-cbc', $key);

              if ($decrypted) {
                echo "Text decrypted: ". $decrypted;
              }
              else {
                echo "Veuillez entrer une clé correcte";
              }
          }
          ?>
        </center>
      </div>
    </div>

    <br><br>
  </div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
