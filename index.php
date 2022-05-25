<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./basic.css" type="text/css">
</head>

<body>

<form action="phpdata.php" id="formsme" method="POST">
    <div id="articles">
      <div class="row">

        <div class="" id="container">
          <h1>Introdu Date</h1><br>
          <div>
              <label for="firstName">First name: </label>
              <input type="text" id="firstName" name="firstName">
              <div class="error" id="firstNameError"><span id="nameError" class="total">Numele este introdus gresit</span></div>
          </div><br>

          <div>
              <label for="firstName">Last name: </label>
              <input type="text" id="LastName" name="LastName">
              <div class="error" id="LastNameError"></div>
          </div><br>

          <div>
              <label for="firstName">Email: </label>
              <input type="text" id="Email" name="Email">
              <div class="error" id="EmailError"><span id="emailError" class="total">Email-ul este introdus gresit</span></div>
          </div><br>

          <div>
              <label for="firstName">Telefon: </label>
              <input type="text" id="Telefon" name="phone">
              <div class="error" id="TelefonError"><span id="telefonError" class="total">Telefonul este introdus gresit</span></div>
          </div><br>

          <div>
              <label for="firstName">Adresa: </label>
              <input type="text" id="Adresa" name="Adresa">
          </div><br>
          <div>
            <p>Profesia</p>
            <select name="profession" id="profession">
            <option value="accountant">accountant</option>
            <option value="actor">actor</option>
            <option value="actress">actress</option>
            <option value="air traffic controller">air traffic controller</option>
            <option value="architect">architect</option>
            <option value="artist">artist</option>
            <option value="attorney">attorney</option>
            <option value="banker">banker</option>
            <option value="bartender">bartender</option>
            <option value="barber">barber</option>
            <option value="bookkeeper">bookkeeper</option>
            <option value="builder">builder</option>
            <option value="businessman">businessman</option>
            <option value="businesswoman">businesswoman</option>
            <option value="businessperson">businessperson</option>
            <option value="butcher">butcher</option>
            <option value="carpenter">carpenter</option>
            <option value="cashier">cashier</option>
            <option value="chef">chef</option>
            <option value="coach">coach</option>
            <option value="dental hygienist">dental hygienist</option>
            <option value="dentist">dentist</option>
            <option value="designer">designer</option>
            </select>
        </div><br>

          <h2>Link Social</h2><br>
            <div>
                <label for="firstName"></label>
                <input type="text" id="link" name="link">
                <div class="error" id="LinkError"><span id="linkError" class="total">Link-ul este introdus gresit</span></div>
            </div><br>

          <button type="button" name="button" id= "educA" class="frm">+Educatie</button>
          <div class="total" id="dddd">


            <h2>Educatie</h2><br>

            <div>
                <label for="firstName">Institutia: </label>
                <input type="text" id="Institutia" name="Institutia">
            </div><br>

            <div>
                <label for="firstName">Data inceputului: </label>
                <input type="date" id="DataIncE" name="DataIncE">
                <div class="error" id="DataIncEError"> <span id="dataIncEError" class="total">Introdu data</span> </div>
            </div>
            <br>
            <br>

            <div>
                <label for="firstName">Data sfirsitului: </label>
                <input type="date" id="DataSfrE" name="DataSfrE">
                <div class="error" id="DataSfrEError"><span id="dataSfrEError" class="total">Introdu data</span></div>
            </div><br>



            <div>
                <label for="firstName">Tipul: </label>
                <select class="" id="education" name="education">
                <option value="Lower secondary education">Lower secondary education</option>
                <option value="Post-secondary non-tertiary education">Post-secondary non-tertiary education</option>
                <option value="Doctorate or equivalent">Doctorate or equivalent</option>
                <option value="Primary education">Primary education</option>
                <option value="Lower secondary education">Lower secondary education</option>
                <option value="Upper secondary education">Upper secondary education</option>
                <option value="Post-secondary non-tertiary education">Post-secondary non-tertiary education</option>
                <option value="Short-cycle tertiary education">Short-cycle tertiary education</option>
                <option value="Bachelor or equivalent">Bachelor's or equivalent</option>
                </select>


            </div><br>
          </div>
          <br><br><br>
          <button type="button" name="button" id= "lucrA" class="frm">+Lucru</button>
          <div class="total" id="aaaa">
          <h2>Lucru</h2><br>

          <div>


              <label for="firstName">Postul: </label>
              <select class="" id ="jobName" name="postul">
              <option value="teacher">teacher</option>
              <option value="doctor">doctor</option>
              <option value="police officer">police officer</option>
              <option value="chef / cook">chef / cook</option>
              <option value="firefighter">firefighter</option>
              <option value="bus driver">bus driver</option>
              </select>
          </div><br>

          <div>
              <label for="firstName">Data inceputului: </label>
              <input type="date" id="DataIncL" name="DataIncL">
              <div class="error" id="DataIncLError"><span id="dataIncLError" class="total">Introdu data</span></div>
          </div>
          <br>
          <br>
          <div>
              <label for="firstName">Data sfirsitului: </label>
              <input type="date" id="DataSfrL" name="DataSfrL" >
              <div class="error" id="DataSfrLError"><span id="dataSfrLError" class="total">Introdu data</span></div>
          </div><br>

          <div>
              <label for="firstName">Orasul: </label>
              <select class="" id ="city" name="oras">
                <option value="0" selected></option>
                <option value="Chisinau">Chisinau</option>
                <option value="Orhei">Orhei</option>
                <option value="Bender">Bender</option>
                <option value="Soroca">Soroca</option>
                <option value="Tiraspol">Tiraspol</option>
                <option value="Balti">Bălți</option>
                <option value="Nisporeni">Nisporeni</option>
              </select>
          </div><br>

          <div>
              <label for="firstName">Compania: </label>
              <select class="" id ="company" name="company">
              <option value="SANGALIMED">SANGALIMED</option>
              <option value=">Supramed Ltd.">Supramed Ltd.</option>
              <option value="Altcom-Group">Altcom-Group</option>
              <option value="Arigona Grup S.R.L.">Arigona Grup S.R.L.</option>
              <option value="DGG International SRL">DGG International SRL</option>
              <option value="Adm-demetra">Adm-demetra</option>
              <option value="MoldElektronicsSRL">MoldElektronicsSRL</option>
              <option value="Calateea Prod">Calateea Prod</option>
              <option value="The Center Of Advanced Biological Technologies">The Center Of Advanced Biological Technologies</option>
              <option value="Zernoff">Zernoff</option>
              <option value="Gold Line - International">Gold Line - International</option>
              <option value="SC Transnordsud SRL">SC "Transnordsud" SRL</option>
              </select>

          </div><br>
          </div>
        <div><br><br>
            <button type="submit" id="buton" class="frm">
                Submit
            </button>
        </div>
      </div>
    </div>

    </div>
</form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="actions.js"></script>
</body>

</html>
