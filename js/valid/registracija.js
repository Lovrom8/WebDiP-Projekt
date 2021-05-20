// LOZINKA

$('#lozinkaPotvrda').on('blur', () => {
    var lozinka = $("#pwd").val();
    var lozinkaPotvrda = $("#pwdConfirm").val();

    if(lozinka === lozinkaPotvrda || lozinka.length < 8){
        $("#pwd").addClass("krivo");
        $("#conpass_err").html("Lozinka i potvrda lozinke se ne poklapaju!").addClass("greska");
    }else{
        $("#pwd").removeClass("krivo");
        $("#conpass_err").html("").removeClass("greska")
    }
 });

 function lozinkaValjana(lozinka) {
    var re = "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$";
    return re.test(lozinka);
 }

// KORISNIČKO IME
function usernameProvjera(greska) {
    
}

$('#username').on('blur', () => {
    const korIme = $('#username').val();
    var greska = "";

    if(korIme.length >= 3) {
        $.ajax({
            type: "POST",
            data: {
                korisnik : korIme
            },
            url: "base/dohvati.php",
            dataType: "json",
            success: function(data) {
                if(data.postoji == 1) {
                    greska = "Korisničko ime je zauzeto!";
                }
            }
        });
    }
    else 
        greska = "Korisničko ime mora biti duljine barem 3 znaka";

    usernameProvjera(greska);
});

// EMAIL

function emailProvjera(greska) {

}

function mailIspravan(email) {
    var re = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
    return re.test(email);
}

$('#email').on('blur', () => {
    const email = $('#email').val();
    var greska = "";

    if(mailIspravan(email)) {
        $.ajax({
            type: "POST",
            data: {
                email : email
            },
            url: "base/dohvati.php",
            dataType: "json",
            success: function(data) {
                if(data.postoji == 1) {
                    greska = "Email je već iskorišten!";
                }
            }
        });
    }
    else 
        greska = "Email nije u ispravnom obliku!";

    emailProvjera(greska);
});