$(document).ready(function(){
    $.ajax({
        type: "POST",
        data: {
           dionice : "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        async: false,
        success: function(data) {

            $('#dionice').DataTable ({
                "data" : data,
                "columns" : [
                    {"data" : "Oznaka"},
                    {"data" : "Polazište"},
                    {"data" : "Odredište"}
                ]
            } );        
        }
    });   
});