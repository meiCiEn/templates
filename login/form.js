function validateForm() {
    let username = document.forms["login-form"]["username"].value;
    let password = document.forms["login-form"]["password"].value;
    if (username == null || username == "") {
        alert("Veuillez saisir votre nom");
        return false;
    } else if (password.length < 6) {
        alert("Le mot de passe doit comporter au moins 6 caractères.");
        return false;
    }
}

