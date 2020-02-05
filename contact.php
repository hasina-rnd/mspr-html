<?php include_once 'includes/header.php'; ?>

<section class="jumbotron text-light" style="background-image: url(/mspr-html/images/pelouse.JPG)" >
    <h1 class="display-4">Contact</h1>
    <p class="lead"> Que vous soyez jardinier ou responsable d'un club de foot vous pouvez remplir ce formulaire pour etre mis en relation avec l'autre partie que vous rechercher</p>
    <a href="telecharger.php"><button type="button" class="btn btn-success">Télécharger l'application</button></a>
</section>
<div class="container">
<h2>Formulaire de contact</h2>
<div class="form-group"style="max-width: 500px">
    <span for="name">Votre Nom</span>
    <input class="form-control" name="name" id="name" placeholder="Entrez votre nom">
</div>

<div class="form-group"style="max-width: 500px">
    <span for="email">E-mail</span>
    <input class="form-control" type="email" name="email" id="email" placeholder="Entrez votre e-mail">
</div>

    <div class="form-group"style="max-width: 500px">
        <span for="siren">Numéro SIRET</span>
        <input class="form-control" type="text" name="Siren"  placeholder="Entrez votre numéro SIRET">
    </div>

    <div class="form-group"style="max-width: 500px">
        <span for="téléphone">Numéro de téléphone</span>
        <input class="form-control" type="text" name="téléphone"  placeholder="Entrez votre numéro de téléphone">
    </div>

    <div class="form-group"style="max-width: 500px">
        <span for="message">Votre message</span>
        <input class="form-control" type="textarea" name="message"  placeholder="Entrez votre message">
    </div>

<button style="margin-bottom: 25px;" type="button" class="btn btn-outline-success">Envoyer</button>
</div>

<?php include_once 'includes/footer.php'; ?>

