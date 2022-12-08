function alphabet(ch) {
    ch = ch.toUpperCase();
    valide = true;
    for (i = 0; i < ch.length; i++) {
        if ((ch.charAt(i) < "A") || (ch.charAt(i) > "Z"))
            valide = false;
    }
    return valide;
}

function verif() {
    if (f.nom.value == '' || !alphabet(ch)) {
        alert("le champ nom est obligatoire");
    }

    if (f.prenom.value == '' || !alphabet(ch)) {
        alert("le champ prenom est obligatoire");
    }
    if (f.email.value == '') {
        alert("le champ email est obligatoire");
    }
    if (f.telephone.value == '') {
        alert("le champ numero est obligatoire");
    }
    if (f.msg.value == '') {
        alert("le champ message est obligatoire");
    }
}