$(document).ready(() => {
    $.getJSON("../../base/postavke.json", (json) => {
        var dokPoStranici = 0;

        paginacija = dohvatiVrijednostKolacica('paginacijaDokumenata');
        if (paginacija == "")
            dokPoStranici = parseInt(json.brojElPoStranici);
        else
            dokPoStranici = parseInt(paginacija);

        $('#po_stranici').val(dokPoStranici);

        const naslovi = ["Naslov", "Status", "Poveznica"];
        var stupci = {
            "Naslov": 0,
            "Status": 0,
            "Poveznica": '<a href={Poveznica}>{Poveznica}</a>',
        };

        const sve = $("#ajaxDokumenti").attr('sve');

        if(sve === "1") {
            stupci["Potvrdi"]  = '<a href=dokumenti.php?idDokumenta={ID_dokumenta}&status=1>Potvrdi</a>';
            stupci["Odbij"] = '<a href=dokumenti.php?idDokumenta={ID_dokumenta}&status=0>Odbij</a>';
        }

        const formatiranje = {
            "Status": {
                1: 'zeleniRed',
                2: 'crveniRed'
            }
        };
        const vidljivostCelija = {
            "Potvrdi": {
                1 : "Status",
                2 : "Status"
            },
            "Odbij": {
                1 : "Status",
                2 : "Status"
            },
        };
        const filteri = {
            'VrstaDokumenta': '',
            'Status': ''
        };
        const tablica = new Tablica('dokumenti', 'dokumenti', stupci, naslovi, filteri, dokPoStranici, formatiranje, vidljivostCelija);

        $('#vrsta_dokumenta').on('change', () => {
            tablica.postaviFilter('VrstaDokumenta', $('#vrsta_dokumenta').val());
        });

        $('#po_stranici').on('keyup change click', () => {
            tablica.postaviPaginaciju(parseInt($('#po_stranici').val()));
            postaviKolacic('paginacijaDokumenata', parseInt($('#po_stranici').val()), 365);
        });
    });

    $.ajax({
        type: "POST",
        data: {
            vrste_dokumenata: "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
            $.each(data, (index, item) => {
                $('#vrsta_dokumenta').append('<option value="' + item.ID_vrste + '">' + item.Naziv_vrste + '</option>');
            });
        }
    });


});