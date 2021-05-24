const stranicePomoci = 
[
    "Na početnoj stranici možete pronaći statistku problema grupiranu po kategoriji ceste. Sortirati ga možete klikom na naslov stupca, a također možete filtrirati po kategoriji i pronaći kategorije koje imaju više problema od broja kojeg ste unjeli.",
    ""
];

$(document).ready(() => {
    $('#pomocSadrzaj').text(stranicePomoci[0]);

    $('#ugasiPomoc').click(() => {
        $('#pomoc').css("visibility", "hidden");
    });

    var trenutnaStranica = 0;

    $('#prethodnaStranicaPomoc').click(() => {
        trenutnaStranica--;

        $('#pomocSadrzaj').text(stranicePomoci[trenutnaStranica]);
    });

    $('#sljedecaStranicaPomoc').click(() => {
        trenutnaStranica++;

        $('#pomocSadrzaj').text(stranicePomoci[trenutnaStranica]);
    });

});