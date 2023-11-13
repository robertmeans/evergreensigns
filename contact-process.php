<?php

require_once 'config/initialize.php';
require_once 'controllers/emailController.php';

$signal = '';
$msg = '';
$li = '';
$class = '';
$msg_txt = '';

if (is_post_request() && isset($_POST['contactes'])) {
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $tel = trim($_POST['tel']);
  $message = trim($_POST['comments']);

 local_pause();

  // validation
  if (empty($name)) {
    $signal = 'bad';
    $msg = '<span class="login-txt"><img src="_images/try-again.png"></span>';
    $li .= '<span class="no-count">● &nbsp;What\'s your name?</span>';
    $class = 'red';
  }

  if (empty($email)) {
    $signal = 'bad';
    $msg = '<span class="login-txt"><img src="_images/try-again.png"></span>';
    $li .= '<span class="no-count">● &nbsp;Email required</span>';
    $class = 'red';
  } 

  if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $signal = 'bad';
    $msg = '<span class="login-txt"><img src="_images/try-again.png"></span>';
    $li .= '<span class="no-count">● &nbsp;Email is invalid.</span>';
    $class = 'red';
  }

  if (empty($message)) {
    $signal = 'bad';
    $msg = '<span class="login-txt"><img src="_images/try-again.png"></span>';
    $li .= '<span class="no-count">● &nbsp;Say something. :)</span>';
    $class = 'red';
  }

  if ($li === '') {

    // local_pause();

    if (WWW_ROOT != 'dev') {
      emailEvergreenSigns($name, $email, $tel, $message);
    }

    $signal = 'ok';

  } 

}
  $data = array(
    'signal' => $signal,
    'msg' => $msg, 
    'li' => $li,
    'class' => $class
  );
  echo json_encode($data);

// stop

?>