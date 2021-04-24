$(document).ready(function(){
    $.ajax({
        type: "POST",
        data: {
           statistika_problema : "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: function(data) {
            console.log(data);
            $('#problemi').DataTable ({
                "data" : data,
                "columns" : [
                    {"data" : "Naziv_kategorije"},
                    {"data" : "BrojProblema"}
                ]
            } );        
        }, error: function(er) {
            console.log(er);
        }
    });   
});