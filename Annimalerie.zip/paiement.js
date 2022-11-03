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
    if (f.n.value == '' || !alphabet(ch)) {
        alert("le champ nom est obligatoire");

    }

    if (f.p.value == '') {
        alert("le champ prenom est obligatoire");

    }

    if (f.adr.value == '') {
        alert("le champ adresse est obligatoire");

    }

    if (f.cp.value == '') {
        alert("le champ code postal est obligatoire");

    }

    if (f.v.value == '') {
        alert("le champ ville est obligatoire");

    }

    if (f.tel.value == '') {
        alert("le champ telephone mobile est obligatoire");

    }

    if (f.r1.value == '') {
        alert("le champ paiement est obligatoire");

    }
}