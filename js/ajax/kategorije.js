$(document).ready(function(){
    $.ajax({
        type: "POST",
        data: {
           kategorije : "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: function(data) {
            $.each(data, function() {
                $("#kategorija").append(
                   $("<option></option>").val(this.ID_kategorija).html(this.Naziv_kategorije)
                )
            });
        }, error: function(er) {
            console.log(er);
        }
    });   
});