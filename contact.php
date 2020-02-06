<?php include_once 'includes/header.php'; ?>

<section class="jumbotron text-light" style="background-image: url(/mspr-html/images/pelouse.png)" >
    <h1 class="display-4">Contact</h1>
    <p class="lead">Une question sur le projet, une idée d'amélioration ? Contactez-nous via le formulaire de contact ci-dessous.</p>
    <a href="telecharger.php"><button type="button" class="btn btn-primary">Télécharger l'application</button></a>
</section>
<section class="container">
    <div class="row">
        <div class="col">
            <h2>Formulaire de contact</h2>

            <div class="form-group">
                <span for="name">Votre Nom</span>
                <input class="form-control" name="name" id="name" placeholder="Entrez votre nom">
            </div>

            <div class="form-group">
                <span for="email">E-mail</span>
                <input class="form-control" type="email" name="email" id="email" placeholder="Entrez votre e-mail">
            </div>

            <div class="form-group">
                <span for="siren">Numéro SIRET</span>
                <input class="form-control" type="text" name="Siren"  placeholder="Entrez votre numéro SIRET">
            </div>

            <div class="form-group">
                <span for="téléphone">Numéro de téléphone</span>
                <input class="form-control" type="text" name="téléphone"  placeholder="Entrez votre numéro de téléphone">
            </div>

            <div class="form-group">
                <span for="message">Votre message</span>
                <input class="form-control" type="textarea" name="message"  placeholder="Entrez votre message">
            </div>
            <button style="margin-bottom: 2em;" type="button" class="btn btn-outline-success">Envoyer</button>
        </div>
    </div>
</section>





<?php include_once 'includes/footer.php'; ?>



