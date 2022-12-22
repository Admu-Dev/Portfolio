<?php

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'Adrien.muzeaux@gmail.com';

  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  echo "<script>console.log('{$contact->to}' );</script>";
  echo "<script>console.log('{$contact->from_name}' );</script>";
  echo "<script>console.log('{$contact->from_email}' );</script>";
  echo "<script>console.log('{$contact->subject}' );</script>";
  echo "<script>console.log('-------------------------------------' );</script>";

  echo "<script>console.log('{$receiving_email_address}' );</script>";
  echo "<script>console.log('{$_POST['name']}' );</script>";
  echo "<script>console.log('{$_POST['email']}' );</script>";
  echo "<script>console.log('{$_POST['subject']}' );</script>";

  echo "<script>console.log('-------------------------------------' );</script>";
  echo "<script>console.log('-------------------------------------' );</script>";

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();


  /**<?php

  $receiving_email_address = 'Adrien.muzeaux@gmail.com';
  
  $to = $receiving_email_address;
  // Sujet
  $subject = $_POST['subject'];


  $from_name = $_POST['name'];
  $from_email = $_POST['email'];



  $add_message( $_POST['name'], 'From');
  $add_message( $_POST['email'], 'Email');
  $add_message( $_POST['message'], 'Message', 10);

      // message
      $message = $add_message;
 
      // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
      $headers[] = 'MIME-Version: 1.0';
      $headers[] = 'Content-type: text/html; charset=iso-8859-1';
 
      // En-têtes additionnels
      $headers[] = 'To: Adrien Muzeaux';
      $headers[] = 'From:' + $from_name + $from_email;

      if ( mail($to, $subject, $message, implode("\r\n", $headers))) {
        $info = "Nous avons envoyé un code de vérification à votre adresse e-mail - $mail";
        echo $info;
    } else {
      echo "Échec lors de l'envoi du code !";
    }
?>
 
?>

