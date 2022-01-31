<?php get_header(); ?>

<?php 
    /*
        Template name: Contact page 
    */
?>


<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/temasito.css">
</head>
<body>
  <!--<div class="row">
    <div class="col-xs-12 col-md-8 mt-3">
      <div id="mapid"></div>
    </div>
  </div>-->


   <div class="row my-5 mx-5 bg-white p-5">
    <div class="col-sm-12">
    <!-- <div class="row">
        <div class="col-6"> -->

          
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$nome = $email = $messaggio = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nome"])) {
    $nomeErr = "Name is required";
  } else {
    $nome = test_input($_POST["nome"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    

  if (empty($_POST["messaggio"])) {
    $messaggio = "";
  } else {
    $messaggio = test_input($_POST["messagggio"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="text-align: center; max-width:100%; margin-left: auto; margin-right: auto;">
	<h2 style=" font-size: 36px; text-align:center;">Per saperne di più contattaci:</h2>
	<br><br>
	 
	  <input type="text" name="name" placeholder="Nome" required>
	  
	  <br>
	  <input type="text" name="email" placeholder="E-mail" required>
	  
	  <br>
	  <textarea name="messaggio" placeholder="Scrivi qui il tuo messaggio"></textarea>
	  
	  <br><br>
	  <input class= "submit" type="submit" name="Invia" value="Invia">
	</form>

      </div>
    </div>
  </div>
</div>
</body>
<?php get_footer(); ?>
