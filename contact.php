<?php include_once 'includes/header.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Pratum - Contact</title>
    <link rel="stylesheet" href="public/css/app.css">
</head>

<body>


<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
    <span class="label-input100">Nom</span>
    <input class="input100" type="text" name="name" placeholder="Entrez Votre Nom">
</div>


<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Enter Your Email (e@a.x)">
    <span class="label-input100">Email </span>
    <input class="input100" type="text" name="email" placeholder="Entrez Votre Maill ">
</div>


<div class="wrap-input100 validate-input bg1" data-validate="Votre numéro Siren">
    <span class="label-input100">N° siren</span>
    <input class="input100" type="text" name="Siren" placeholder="Entrez votre numéro Siren">
</div>



<div class="wrap-input100 bg1 rs1-wrap-input100">
    <span class="label-input100">Téléphone</span>
    <input class="input100" type="text" name="phone" placeholder="Entrez votre numéro de téléphone">
</div>


<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate="Please Type Your Message">
    <span class="label-input100"> Message </span>
    <textarea class="input100" name="message" placeholder="Entrez votre message..."></textarea>
</div>

<button type="button" class="btn btn-outline-primary">Primary</button>

</body>
</html>



