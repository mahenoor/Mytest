<html>
<head>
<h1>Validating Radiobutton,checkbox,select tag</h1>
<style type = "text/css">
.button 
{
    text-align : center;
    color : red;
    background : yellow;
    padding : 2px;
}
.error
{
    color : red;
    font : bold;
}
</style>
<script type="text/javascript">
function validateRadio()
{
    if ( ( form.gender[0].checked == false ) && ( form.gender[1].checked == false ) && 
    ( form.gender[2].checked == false ) ) {
       return false;
    } else if(form.gender[0].checked == true) {
        return true;
    } else if(form.gender[1].checked == true) {
        return true;
    } else {
        return true;
    }
}
function validateCheckbox()
{ 
    var vehicle = document.getElementsByName('vehicle');
    var checkCount = 0;
    var i;
    for (i = 0; i < vehicle.length; i++)
    {
        if (vehicle[i].checked)
        {
            checkCount++;
        }
    }
    if (checkCount < 1)
    {
        return false;
    } else {
        return true;
    }
}
function validateSelect()
{
    var city= document.getElementById("mySelect");
    var city1 = city.options[city.selectedIndex].value;
    if(city1==0) 
    {
       return false;
    } else {
       return true;
    }
}
function validate()
{
    var gender = form.gender.value;
    var vehicle = form.vehicle.value;
    var tourist = form.tourist.value;
    var value = true;
    if (!validateRadio()) {
        var genderError = document.getElementById('genderError').innerHTML = '*Please select the gender';
        value = false;
    }
    if (!validateCheckbox()) {
        var vehicleError = document.getElementById('vehicleError').innerHTML = "*Please select the vehicle";
        value = false;
    }
    if (!validateSelect()) {
        var touristError = document.getElementById('touristError').innerHTML = "*Please select the city";
        value = false;
    }
    if (value) {
        alert("Success...");
    } else {
        alert("Error!...please reselect the values");
        return false;
    }
}
</script>
</head>
<body>
<form method="post" action="" name="form" >
<p>Select your gender</p>
<input type="radio" name="gender" value="male" id="myRadio"/>Male<br />
<input type="radio" name="gender" value="female" id="myRadio"/>Female<br />
<input type="radio" name="gender" value="transgender" id="myRadio"/>Transgender<br />
<p id="genderError" class="error"></p><br/>
<br />
<p>Select your favourite vehicle</p>
<input type="checkbox" name="vehicle" value="cycle" id="myCheckbox" />Cycle<br />
<input type="checkbox" name="vehicle" value="bike" id="myCheckbox"/>Bike<br />
<input type="checkbox" name="vehicle" value="car" id="myCheckbox"/>Car<br />
<input type="checkbox" name="vehicle" value="bus" id="myCheckbox"/>Bus<br />
<p id="vehicleError" class="error"></p><br/>
<br/>
<p>Select your favourite tourist city</p>
<select name="tourist" id ="mySelect">
<option value="0">select</option>
<option value="1">Bangalore</option>
<option value="2">Hyderabad</option>
<option value="3">Kerala</option>
<option value="4">Tamil Nadu</option>
<option value="5">Chennai</option>
</select>
<p id="touristError" class="error"></p><br/>
<input type="submit" name="submit" value="submit" class="button" onclick="validate()">
</form>
</body>
</html>