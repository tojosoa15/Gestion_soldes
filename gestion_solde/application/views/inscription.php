<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>

<h2>Inscription</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('inscription/inscription_utilisateur'); ?>

<label for="nom">Nom</label>
<input type="text" name="nom" value="<?php echo set_value('nom'); ?>">

<label for="email">Email</label>
<input type="text" name="email" value="<?php echo set_value('email'); ?>">

<label for="mot_de_passe">Mot de passe</label>
<input type="password" name="mot_de_passe">

<button type="submit">S'inscrire</button>

</form>

</body>
</html>
