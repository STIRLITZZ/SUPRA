
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
