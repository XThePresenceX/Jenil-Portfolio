  <?php
  echo '<pre>';
  print_r($_POST);

  $name = $_POST['name'];
  $email= $_POST['email'];
  $message= $_POST['message'];
  $to = "yagaso6474@labebx.com";
  $subject = "Mail From website";
  $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
  $headers = "From: noreply@yoursite.com" . "\r\n" .
  "CC: somebodyelse@example.com";
  if($email!=NULL){
      mail($to,$subject,$txt,$headers);
  }
  echo '</pre>';
  
  ?>