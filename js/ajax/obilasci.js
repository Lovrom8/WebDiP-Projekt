$(document).ready(function(){
    $.ajax({
        type: "POST",
        data: {
           obilasci : "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        async: false,
        success: function(data) {
            console.log(data);
            $('#obilasci').DataTable ({
                "data" : data,
                "columns" : [
                    {"data" : "Oznaka"},
                    {"data" : "Datum"}
                ]
            } );        
        }, error: function(er) {
            console.log(er);
        }
    });   
});