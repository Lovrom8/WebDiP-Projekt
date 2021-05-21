// LOZINKA

const greskaNepodudaranje = "Lozinka i potvrda lozinke se ne poklapaju!";
const greskaPrekratkaLozinka = "Lozinka mora biti najmanje 8 znakova";
const greskaZauzetoKorIme = "Korisničko ime je zazueto";
const greskaPrekratkoKorIme = "Korisničko ime mora biti duljine najmanje 3 znaka";
const greskaMailNeispravan = "Email je neispravnog formata";
const greksaMailZauzet = "Email je već iskorišten";

function prikaziGresku(greska) {
    var trenutniTekst = $("#greske").text();
    console.log(trenutniTekst);
    if (trenutniTekst.indexOf(greska) === -1) {
        $("#greske").text(trenutniTekst.concat(greska));
    }
}

function makniGresku(greska) {
    var trenutniTekst = $("#greske").text();
    $("#greske").text(trenutniTekst.replace(greska, ""));
}

$('#potvrdaLozinke').on('blur', () => {
    var lozinka = $("#lozinka").val();
    var lozinkaPotvrda = $("#potvrdaLozinke").val();

    if (lozinka !== lozinkaPotvrda) {
        $("#lozinka").addClass("krivo");
        prikaziGresku(greskaNepodudaranje);
    } else
        makniGresku(greskaNepodudaranje);

    if (lozinka.length < 8)
        prikaziGresku(greskaPrekratkaLozinka);
    else
        makniGresku(greskaPrekratkaLozinka);
});

function lozinkaValjana(lozinka) {
    var re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
    return re.test(lozinka);
}

$('#korIme').on('blur', () => {
    const korIme = $('#korIme').val();

    if (korIme.length >= 3) {
        makniGresku(greskaPrekratkoKorIme);

        $.ajax({
            type: "POST",
            data: {
                korisnik: korIme
            },
            url: "base/dohvati.php",
            dataType: "json",
            success: function (data) {
                if (data.postoji == 1)
                    prikaziGresku(greskaZauzetoKorIme);
                else
                    makniGresku(greskaZauzetoKorIme);
            }
        });
    } else
        prikaziGresku(greskaPrekratkoKorIme);
});

// EMAIL

function mailIspravan(email) {
    var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    return re.test(email);
}

$('#email').on('blur', () => {
    const email = $('#email').val();

    if (mailIspravan(email)) {
        prikaziGresku(greskaMailNeispravan);

        $.ajax({
            type: "POST",
            data: {
                email: email
            },
            url: "base/dohvati.php",
            dataType: "json",
            success: function (data) {
                if (data.postoji == 1) 
                   prikaziGresku(greksaMailZauzet);
                else
                   makniGresku(greksaMailZauzet);
            }
        });
    } else
       makniGresku(greskaMailNeispravan);   
});