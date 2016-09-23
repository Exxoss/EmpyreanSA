/**
 * Created by Arthur on 29/02/2016.
 */
function envoyer() {
    var nom = document.getElementById('nom');
    var prenom = document.getElementById('prenom');
    var email = document.getElementById('email');
    var tel = document.getElementById('tel');
    var message = document.getElementById('message');
    var verif = document.getElementById('verif');
    var fail = document.getElementById('fail');
    var wrong = document.getElementById('wrong');

    var checkNom = false;
    var checkPrenom = false;
    var checkEmail = false;
    var checkTel = false;
    var checkMessage = false;

    var regexTel = /^[0-9]+$/;
    var regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var regexNom = /^\D+$/;


    if (nom.value.length > 0){
        if (regexNom.exec(nom.value)) {
            checkNom = true;
        } else {
            checkNom = false;
        }
    } else {
        checkNom = false;
    }
    if (prenom.value.length > 0) {
        if (regexNom.exec(prenom.value)) {
            checkPrenom = true;
        } else {
            checkPrenom = false;
        }
    } else  {
        checkPrenom = false;
    }
    if (email.value.length > 0) {
        if (regexEmail.exec(email.value)) {
            checkEmail = true;
        } else {
            checkEmail = false;
        }
    } else {
        checkEmail = false;
    }
    if (tel.value.length > 0) {
        if (regexTel.exec(tel.value)) {
            checkTel = true;
            console.log("tel OK");
        } else {
            checkTel = false;
        }
    } else {
        checkTel = false;
        console.log("tel NOP");
        console.log(tel.value.length);
    }

    if (message.value.length > 0) {
        checkMessage = true;
    } else {
        checkMessage = false;
    }

    if ((checkNom)&&(checkPrenom)&&(checkEmail)&&(checkTel)&&(checkMessage)) {
        $.ajax({
            url: 'mail/mail.php',
            type: 'POST',
            data: {
                "nom": nom.value,
                "prenom": prenom.value,
                "email": email.value,
                "tel": tel.value,
                "message": message.value
            },
            dataType: 'text',
            success: function (response) {
                if (response == "Success") {
                    // succés envoie de mail
                    nom.value = "";
                    prenom.value = "";
                    email.value = "";
                    tel.value = "";
                    message.value = "";
                    fail.className = "failoff";
                    wrong.className = "wrongoff";
                    verif.className = "verifon";
                } else {
                    // echec envoie de mail
                    fail.className = "failon";
                    wrong.className = "wrongoff";
                    verif.className = "verifoff";
                }
            }
        });
    } else {
        //champs non rempli
        fail.className = "failoff";
        wrong.className = "wrongon";
        verif.className = "verifoff";
    }

    if (checkNom) {
        //nom correcte
        nom.className = "area";
    } else {
        //nom incorrecte
        nom.className = "areawrong";
    }

    if (checkPrenom) {
        //prenom correcte
        prenom.className = "area";
    } else {
        //prenom incorrecte
        prenom.className = "areawrong";
    }

    if (checkEmail) {
        //email correcte
        email.className = "area";
    } else {
        //email incorrecte
        email.className = "areawrong";
    }

    if (checkTel) {
        //tel correcte
        tel.className = "area";
    } else {
        //tel incorrecte
        tel.className = "areawrong";
    }

    if (checkMessage) {
        //message correcte
        message.className = "areaB";
    } else {
        //message incorrecte
        message.className = "areaBwrong";
    }
}