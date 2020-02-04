<?php include_once 'includes/header.php'; ?>

<section class="jumbotron text-light" style="background-image: url(/mspr-html/images/pelouse.JPG)" >
    <h1 class="display-4">Contact</h1>
    <p class="lead"> Que vous soyez jardinier ou responsable d'un club de foot vous pouvez remplir ce formulaire pour etre mis en relation avec l'autre partie que vous rechercher</p>
    <a href="telecharger.php"><button type="button" class="btn btn-success">Télécharger l'application</button></a>
</section>
<div class="container">

<div class="form-group"style="max-width: 300px">
    <span for="name">Nom</span>
    <input class="form-control" name="name" id="name" placeholder="Entrez Votre Nom">
</div>

<div class="form-group"style="max-width: 300px">
    <span for="email">Email</span>
    <input class="form-control" type="email" name="email" id="email" placeholder="Entrez votre email">
</div>

    <div class="form-group"style="max-width: 300px">
        <span for="siren">N° siren</span>
        <input class="form-control" type="text" name="Siren"  placeholder="Entrez votre numéro Siren">
    </div>

    <div class="form-group"style="max-width: 300px">
        <span for="téléphone">N° de téléphone</span>
        <input class="form-control" type="text" name="téléphone"  placeholder="Entrez votre numéro de téléphone">
    </div>

    <div class="form-group"style="max-width: 300px">
        <span for="message">Message</span>
        <input class="form-control" type="textarea" name="message"  placeholder="Entrez votre message">
    </div>

<button type="button" class="btn btn-outline-success">Envoyer</button>
</div>

<?php include_once 'includes/footer.php'; ?>

