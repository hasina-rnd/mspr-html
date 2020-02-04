<?php include_once 'includes/header.php'; ?>

<div class="container">

<div class="form-group">
    <span for="name">Nom</span>
    <input class="form-control" name="name" id="name" placeholder="Entrez Votre Nom">
</div>

<div class="form-group">
    <span for="email">Email</span>
    <input class="form-control" type="email" name="email" id="email" placeholder="Entrez votre email">
</div>

    <div class="form-group">
        <span for="siren">N° siren</span>
        <input class="form-control" type="text" name="Siren"  placeholder="Entrez votre numéro Siren">
    </div>

    <div class="form-group">
        <span for="téléphone">N° de téléphone</span>
        <input class="form-control" type="text" name="téléphone"  placeholder="Entrez votre numéro de téléphone">
    </div>

    <div class="form-group">
        <span for="message">Message</span>
        <input class="form-control" type="textarea" name="message"  placeholder="Entrez votre message">
    </div>

<button type="button" class="btn btn-outline-success">Envoyer</button>
</div>

<?php include_once 'includes/footer.php'; ?>

