$to = $_POST['email_2'];
              $subject = 'AGC';

              $default_password = default_password();
              $lien = "https://guesspromo.ga/login";
              $message = "Voici votre mot de passe pour se connecter à AGC : ".'<br/>'."MDP : ".$default_password.'<br/>'."Adresse email : ".$_POST['email_2'].'<br/>'." Vous pouvez utiliser le lien suivant : ".$lien;

              $headers = 'From: GUESSPROMO '.$_SESSION['email'] . "\r\n" ;
              $headers .='Reply-To: '. $to . "\r\n" ;
              $headers .='X-Mailer: PHP/' . phpversion();
              $headers .= "MIME-Version: 1.0\r\n";
              $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

              $req = $bdd->prepare('INSERT INTO Commerciaux (Email, Password) VALUES(?, ?)');
              $req->execute(array($_POST['email_2'], md5($default_password)));
