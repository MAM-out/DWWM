
var check = document.getElementById('Envoyer');


// -----------Régles à établir pour le fomrulaire
    // regex emails
    var email = /[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$/;
   // regex code postal
    var codepost = /^((0[1-9])|([1-8][0-9])|(9[0-8])|(2A)|(2B))[0-9]{3}$/;
    // regex adresse
    var vtext = /(^[0-9]+[a-zA-Z-\s]+$)|^$/;
    // regex ville
    var ville = /(^[A-Z]+[a-zA-ZÃ©Ã¨ÃªÃ«Ã´Å“Ã®Ã¯Ã»Ã¼Ã Ã¡Ã¢Ã¦Ã§-\s]+$)|^$/;



// -----------Variables
    var nom = document.getElementById("Nom").value;
    var prenom = document.getElementById("Prenom").value;
    var sexe = document.getElementById("inlineRadio1").checked;
    var sexe2 = document.getElementById("inlineRadio2").checked;
    var codepost = document.getElementById("codepostal").value;
    var adresse = document.getElementById("adresse").value;
    var ville = document.getElementById("ville").value;
    var email = document.getElementById("mail").value;
    var accept = document.getElementById("accept").checked;
    var question = document.getElementById("question").value;

// -----------Verif du nom
    // Verif des parametres des variables
    if (!vtext.test(nom))
    {
        // Erreur nom
        document.getElementById("errName").textContent = "Erreur tapez votre nom";
        event.preventDefault();
    }
    else {
        // Si non, pas d'erreur
        document.getElementById("errName").textContent = "";
    }

// -----------Verif du prénom
    if (!vtext.test(prenom)) {
        document.getElementById("errPrenom").textContent = "Erreur entrez une adresse mail valide";
        event.preventDefault();
    }
    else {
        document.getElementById("errPrenom").textContent = "";
    }

// -----------Verif du genre
    if (sexe == false && sexe2 == false)
    // Si les deux booleans retourne false, affiche un message d'erreur
    {
        document.getElementById("errSexe").textContent = "Erreur quel est votre genre ?";
    }
    else
    {
        document.getElementById("errSexe").textContent = "";
    }
 
// -----------Verif code postal
    if (!cp.test(codepost)) {
        document.getElementById("errCP").textContent = "Code postal non conforme";
        event.preventDefault();
    }
    else {
        document.getElementById("errCP").textContent = "";
    }

// -----------Verif de l'adresse
    if (!adr.test(adresse)) {
        document.getElementById("errAdr").textContent = "Adresse non conforme";
        event.preventDefault();
    }
    else {
        document.getElementById("errAdr").textContent = "";
    }

// -----------Verif ville
    if (!city.test(ville)) {
        document.getElementById("errVille").textContent = "Utilisez uniquement des caractères alphanumériques";
        event.preventDefault();
    }
    else {
        document.getElementById("errVille").textContent = "";
    }

// -----------Verif email
    if (!mail.test(email)) {
        document.getElementById("errMail").textContent = "Adresse mail non conforme";
        event.preventDefault();
    }
    else {
        document.getElementById("errMail").textContent = "";
    }


    // -----------Verif rgpd
    if (accept != true) {
        document.getElementById("errAccept").textContent = "Veuillez cocher cette case";
        event.preventDefault();
    }
    else {
        document.getElementById("errAccept").textContent = "";
    }

// -----------Verif question
    // Si rien, on affiche le message d'erreur
    if (question == "") {
        document.getElementById("errQuest").textContent = "choisissez votre question";
        event.preventDefault();
    }
    else {
        document.getElementById("errQuest").textContent = "";
    }
