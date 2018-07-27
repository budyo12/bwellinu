<link rel="stylesheet" href="assets/css/main.css" />
<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "info@bwellinyoga.co.uk";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<section class=main items><article class=item> <h1><p>Your message has been submitted. Clieck here to
<a href='index.html'> Return Home</a></p></h1>.
<footer id=footer>
<div class=inner>
  <ul class=icons>
    <li><a href=https://twitter.com/bwellinyoga target=_blank class=icon fa-twitter><span class=label>Twitter</span></a></li>
    <li><a href=https://www.facebook.com/Bwellinyoga-1300550636702448/?ref=bookmarks target=_blank class=icon fa-facebook><span class=label>Facebook</span></a></li>
    <li><a href=https://www.instagram.com/b.wellinyoga/ target=_blank class=icon fa-instagram><span class=label>Instagram</span></a></li>
  </ul>
  <p class=copyright> Design: <a href=https://templated.co target=_blank>TEMPLATED</a>.</p>
  </div>"
?>
