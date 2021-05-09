$(document).ready(() => {
    $.ajax({
        type: "POST",
        data: {
           obilasci : "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
            console.log(data);
            $('#obilasci').DataTable ({
                "data" : data,
                "columns" : [
                    {"data" : "Oznaka"},
                    {"data" : "Datum"}
                ]
            } );        
        }, error: (er) => {
            console.log(er);
        }
    });   
});