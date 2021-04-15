$(document).ready(function(){
    $.ajax({
        type: "POST",
        data: {
           dokumenti : "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        async: false,
        success: function(data) {

            $('#dokumenti').DataTable ({
                "data" : data,
                "columns" : [
                    {"data" : "Naslov"},
                    {"data" : "Status"},
                    {"data" : "Poveznica"}
                ]
            } );        
        }
    });   
});