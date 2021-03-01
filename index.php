<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <form id="form">
        <input type="text" class="field" name="lastname" placeholder="Nom" /><br>
        <input type="text" class="field" name="firstname" placeholder="Prénom" /><br>
        <select name="civility" class="field selectField">
            <option value="M">M</option>
            <option value="Mme">Mme</option>
            <option value="Autre">Autre</option>
        </select><br>
        <input type="text" class="field" name="address" placeholder="Adresse" /><br>
        <input type="text" class="field" name="postalCode" placeholder="Code postal" /><br>
        <input type="text" class="field" name="city" placeholder="Ville" /><br>
        <input type="tel" class="field" name="phoneNumber" placeholder="Numéro de téléphone" /><br>
        <input type="text" class="field" name="email" placeholder="Adresse mail" /><br>
        <input type="text" class="field" name="login" placeholder="Login" /><br>
        <input type="password" class="field" name="password" id="password" placeholder="Mot de passe" /><br>
        <input type="password" class="field" name="confirmPassword" id="confirmPassword" placeholder="Confirmation du mot de passe" /><br>
        <input type="submit" id="submitButton" value="Valider">
    </form>
</body>

</html>