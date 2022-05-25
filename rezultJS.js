
function fromServer() {
    $.ajax({
        url: 'http://localhost:3000/form-data',
        method: 'GET',
        datatype: 'json',
        headers: {
            'Content-Type': 'application/json',
        },
        success: function(response) {
            $("#name").html(response.nume);
            $("#lastname").html(response.prenume);
            $("#email").html(response.email);
            $("#telefon").html(response.telefon);
            $("#adresa").html(response.adresa);
            $("#link").html(response.link);
            $("#institutia").html(response.institutia);
            $("#data_inceputului").html(response.data_inceputului);
            $("#data_sfirsitului").html(response.data_sfirsitului);
            $("#data_inceputuluiL").html(response.data_inceputuluiL);
            $("#data_sfirsituluiL").html(response.data_sfirsituluiL);
            $("#compania").html(response.compania);
            $("#orasul").html(response.orasul);
            $("#postul").html(response.postul);
            $("#profesia").html(response.profesia);
            $("#educatia").html(response.educatia);
            console.log(response);
        },
    });
}

$(document).ready(function() {

  fromServer();
})
