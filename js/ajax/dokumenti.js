$(document).ready(() => {
    $.getJSON("../../base/postavke.json", (json) => {
        const poStranici = parseInt(json.brojElPoStranici);

        $('#po_stranici').val(poStranici);

        const stupci = { "Naslov" : 0, "Status" : 0, "Poveznica" : 0, "Potvrdi" : '<a href=dokumenti.php?idDokumenta={ID_dokumenta}&status=1>Potvrdi</a>', "Odbij" : '<a href=dokumenti.php?idDokumenta={ID_dokumenta}&status=0>Odbij</a>'  };
        const formatiranje = { "Status" : { 1 : 'zeleniRed', 2 : 'crveniRed'} };
        const tablica = new Tablica('dokumenti', 'dokumenti', stupci, poStranici, formatiranje);
        
        $('#vrsta_dokumenta').on('change', () => {
            tablica.postaviPodatke(data.filter(podatak => podatak.ID_vrste === $('#vrsta_dokumenta').val() || $('#vrsta_dokumenta').val() == '0' ));
        } );

        $('#po_stranici').on('keyup change click', () => {
            tablica.postaviPaginaciju(parseInt( $('#po_stranici').val()));
        } );
    });

    $.ajax({
        type: "POST",
        data: {
            vrste_dokumenata : "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
            $.each(data, (index, item) =>
            {
                $('#vrsta_dokumenta').append('<option value="'+item.ID_vrste+'">' + item.Naziv_vrste + '</option>');
            });
        }
    });     
});