<?php
  if (isset($_POST["submit"])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $human = intval($_POST['human']);
      $from = 'OLCSOWEBOLDALKESZITES.XYZ';
      $to = 'info@villamwebdesign.xyz';
      $subject = 'Egyedi ajánlat kérése ';
      $headers = "Content-Type: text/html; charset=UTF-8";

      $body = "Küldő: $name\n E-Mail: $email\n Üzenet:\n $message";

      // Check if name has been entered
      if (!$_POST['name']) {
          $errName = 'Írja be kérem a nevét / Write in your name';
      }

      // Check if email has been entered and is valid
      if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
          $errEmail = 'Adjon meg egy érvényes e-mailt / Provide valid email';
      }

      //Check if message has been entered
      if (!$_POST['message']) {
          $errMessage = 'Írja ide az üzenetét / Write in your message';
      }
      //Check if simple anti-bot test is correct
      if ($human !== 4) {
          $errHuman = 'Rossz megfejtés. Az almák száma nem jó! Egyen meg vagy vegyen még. / Bad solution.';

      }

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
  if (mail ($to, $subject, $body, $from)) {
      $result=$lang['OKAY_ENQ'];
  } else {
      $result= $lang['ERROR_ENQ'];
  }
}
  }
?>
