<?php
  if(isset($_POST['text'])) {
    $text = $_POST['text'];
    if($text === 'hi' || $text === 'hello') {
      echo '<br>Hello! How are you today?';
    } 
    elseif($text === 'fine' || $text === 'nice') {
      echo '<br>Good To See That';
    } elseif($text === 'date') {
      echo '<br>Today is '.date("F j, Y");
    } 
    else{
      echo '<br>this bot is under developing stage';
    }
  }
?>
