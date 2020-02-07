<?php include_once 'includes/header.php'; ?>

<section class="jumbotron text-light" style="background-image: url(/mspr-html/images/pelouse.png)">
    <div class="container">
        <h1 class="display-4">Contact</h1>
        <p class="lead">Une question sur le projet, une idée d'amélioration ? Contactez-nous via le formulaire de
            contact ci-dessous.</p>
        <a href="telecharger.php" class="btn btn-primary">Télécharger l'application</a>
    </div>
</section>

<section id="contact-form" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">

                <h2>Formulaire de contact</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Votre Nom</label>
                        <input class="form-control" name="name" id="name" placeholder="Entrez votre nom">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input class="form-control" type="email" name="email" id="email"
                               placeholder="Entrez votre e-mail">
                    </div>

                    <div class="form-group">
                        <label for="siren">Numéro SIRET</label>
                        <input class="form-control" type="text" name="Siren" placeholder="Entrez votre numéro SIRET">
                    </div>

                    <div class="form-group">
                        <label for="téléphone">Numéro de téléphone</label>
                        <input class="form-control" type="text" name="téléphone"
                               placeholder="Entrez votre numéro de téléphone">
                    </div>

                    <div class="form-group">
                        <label for="message">Votre message</label>
                        <input class="form-control" type="textarea" name="message" placeholder="Entrez votre message">
                    </div>
                    <button type="button" class="btn btn-outline-success">Envoyer</button>
                </form>

            </div>
            <div class="col">
                <img src="https://placeholder.img/500x700" class="d-block w-100" alt="">
            </div>
        </div>
    </div>
</section>


<?php include_once 'includes/footer.php'; ?>



