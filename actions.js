const container = $('#container');
        var count = 0;
        let articles = [];


	$(document).ready(function(){
	    var maxLimit = 5;
	    var appendHTML = '<div><label for="firstName"></label><input type="text" id="Link" ><div class="error" id="LinkError"><span id="linkError" class="total">Link-ul este introdus gresit</span></div></div><br>'

	    var x = 1;

	    $('#start').click(function(e){
	    	e.preventDefault();
	        if(x < maxLimit){
	            jQuery('.sufds').append(appendHTML);
	            x++;


              console.log(articles);

              $.ajax({
                  url: 'http://localhost:3000/form-data',
                  method: 'POST',
                  datatype: 'json',
                  headers: {
                      'Content-Type': 'application/json',
                  },
                  data: JSON.stringify(articles),
                  success: function() {
                  },
                });
	           }
	       });
	    });



      function makeRequest(index) {
          container.append(`<div>Sending request ${index}</div>`);
          $('.sufds').each(function () {
            console.log(($(this)));
            //find selector poate gasi si dupa clasa si dupa atribute (de ex 'input[name=title-name]')


            $('.sufds').each(function() {
               articles.push($(this).val());
              });
          });
          $.ajax({
              url: 'http://localhost:3000/form-data',
              method: 'POST',
              datatype: 'json',
              headers: {
                  'Content-Type': 'application/json',
              },
              data: JSON.stringify({
                  nume: $('#firstName').val(),
                  prenume: $('#LastName').val(),
                  adresa: $('#Adresa').val(),
                  email: $('#Email').val(),
                  telefon: $('#Telefon').val(),
                  link:$('#link').val(),
                  institutia: $('#Institutia').val(),
                  data_inceputului: $('#DataIncE').val(),
                  data_sfirsitului: $('#DataSfrE').val(),
                  data_inceputuluiL: $('#DataIncL').val(),
                  data_sfirsituluiL: $('#DataSfrL').val(),
                  compania: $('#company').val(),
                  orasul: $('#city').val(),
                  postul: $('#jobName').val(),
                  profesia: $('#profession').val(),
                  educatia: $('#education').val(),
              }),
              success: function(response) {education
                  console.log('ture');
                  container.append(`<div>${JSON.stringify(response)}</div>`);
              },
          });
      }


        function validateValue(value) {
            return value.length >= 3 && value.length <=20;
        };

        function validateTelefon(value) {
          if(value[0] == '+' && value[1] == '3' && value[2] == '7' && value[3] == '3'){
            console.log("True");
            return true;

          }

          if(value[0] == '0'){
            console.log("True");
            return true;
          }
            console.log("false");
            return false;
        };

        function validateEmail(value) {
          if(value.indexOf("@") != -1 && value.indexOf(".") != -1) {
            if(value.indexOf(".") > value.indexOf("@")) {
            console.log("True");
            return true;
            }
          } else {

            console.log("False")
            return false;
                    }
        }

        function validatelink(value) {
          if(value[0] == 'h' && value[1] == 't' && value[2] == 't' && value[3] == 'p' && value[4] == 's'){
            console.log("true");
            return true;
          }
            console.log("false");
            return false;
        };

        function validatedata(value) {
          if(value == ""){
            console.log("true");
            return true;
          }
            console.log("false");
            return false;
        };

        $("#Email").change(function() {
          if(!validateEmail($(this).val())) {
            $("#emailError").removeClass("total");
            $("#emailError").addClass("untotal");
          } else {
            $("#emailError").removeClass("untotal");
            $("#emailError").addClass("total");
          }
        })

        $("#Link").change(function() {
          if(!validatelink($(this).val())) {
            $("#linkError").removeClass("total");
            $("#linkError").addClass("untotal");
          } else {
            $("#linkError").removeClass("untotal");
            $("#linkError").addClass("total");
          }
        })

        $("#Telefon").change(function() {
          if(!validateTelefon($(this).val())) {
            $("#telefonError").removeClass("total");
            $("#telefonError").addClass("untotal");
          } else {
            $("#telefonError").removeClass("untotal");
            $("#telefonError").addClass("total");
          }
        })

        $("#DataIncE").change(function() {
          if(validatedata($(this).val())) {
            $("#dataIncEError").removeClass("total");
            $("#dataIncEError").addClass("untotal");
          } else {
            $("#dataIncEError").removeClass("untotal");
            $("#dataIncEError").addClass("total");
          }
        })

        $("#DataSfrE").change(function() {
          if(validatedata($(this).val())) {
            $("#dataSfrEError").removeClass("total");
            $("#dataSfrEError").addClass("untotal");
          } else {
            $("#dataSfrEError").removeClass("untotal");
            $("#dataSfrEError").addClass("total");
          }
        })

        $("#DataIncL").change(function() {
          if(validatedata($(this).val())) {
            $("#dataIncLError").removeClass("total");
            $("#dataIncLError").addClass("untotal");
          } else {
            $("#dataIncLError").removeClass("untotal");
            $("#dataIncLError").addClass("total");
          }
        })

        $("#DataSfrL").change(function() {
          if(validatedata($(this).val())) {
            $("#dataSfrLError").removeClass("total");
            $("#dataSfrLError").addClass("untotal");
          } else {
            $("#dataSfrLError").removeClass("untotal");
            $("#dataSfrLError").addClass("total");
          }
        })

        $('#educA').on('click', () => {
          $("#dddd").removeClass("total");
          $("#dddd").addClass("untotal");
        });

        $('#lucrA').on('click', () => {
          $("#aaaa").removeClass("total");
          $("#aaaa").addClass("untotal");
        });

        $('#buton').on('click', () => {
            makeRequest(++count);
            navigate();


        });

        $('#buton').on('click', () => {
            $.ajax({
                url: 'http://localhost:3000/form-data',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    console.log('ture');
                    container.append(`<div>${JSON.stringify(response)}</div>`);
                },
            });
        });

        // Datele de pe server

        function build(element){
          return `<option>${element}</option>`;
        };

const professionType = $("#profession");
const educationType = $("#education");
const jobName = $("#jobName");
const companyName = $("#company");

    function loadProfession() {
    $.ajax({
        url: 'http://localhost:3000/professions/1',
        method: 'GET',
        datatype: 'json',
        headers: {
            'Content-Type': 'application/json',
        },
        success: function(response) {
            response.forEach(profession => {
                professionType.append(build(profession.label));
            });
            console.log(response);
        },
    });
}

  function loadEducation() {
  $.ajax({
  url: 'http://localhost:3000/education-type/1',
  method: 'GET',
  datatype: 'json',
  headers: {
      'Content-Type': 'application/json',
  },
  success: function(response) {
      response.forEach(education => {
          educationType.append(build(education.education));
      });
      console.log(response);
  },
  });
  }

  function loadJobName() {
  $.ajax({
  url: 'http://localhost:3000/job-name/1',
  method: 'GET',
  datatype: 'json',
  headers: {
      'Content-Type': 'application/json',
  },
  success: function(response) {
      response.forEach(job => {
          jobName.append(build(job.name));
      });
      console.log(response);
  },
  });
  }

  function loadCompany() {
    let city = $("#city").val();
  $.ajax({
  url: `http://localhost:3000/companies/1/city/${city}`,
  method: 'GET',
  datatype: 'json',
  headers: {
      'Content-Type': 'application/json',
  },
  success: function(response) {
      response.forEach(company => {
          companyName.append(build(company.label));
      });
      console.log(response);
  },
  });
  }

  $("#city").change(function() {
    loadCompany();
  })

$(document).ready(function() {
  loadProfession();
  loadEducation();
  loadJobName();
})

function navigate() {
    timer = setTimeout(() => {
        window.location.href = 'cv.html';
    }, 3000);
}
