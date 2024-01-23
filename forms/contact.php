<?php
  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'andamantique@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email']; 
  $contact->subject = $_POST['subject'];
  $contact->occupation = $_POST['Occupation'];
  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials *//

  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);
  $contact->add_message( $_POST)['occupation'] ,'Occupation');
  $contact->add_message()

  echo $contact->send();
  echo $contact->socket_sendto('andamantique@gmail.com');
  echo $contact->reset();
  echo $contact->$receiving_email_address('any email address');
  echo $contact->date();
 
?>
