<html>
<head>
<script>
function startDate()
{
    if(startDate == "" || !isNaN(startDate) {
        return false;
    } else {
        return true;
    }
}
function endDate()
{
    if(endDate == "" || !isNaN(endDate) {
        return false;
    } else {
        return true;
    }
}
function validate()
{
    var form = document.forms['form'];
    var startDate = form.startDate.value;
    var endDate = form.endDate.value;
    var value = true;
    if(!startDate($startDate)) {
        var startDateError = document.getElementById('startDateError').innerHTML = "plz enter the date in proper format";
        value = false;
    }
    if(!endDate($startDate)) {
        var endDateError = document.getElementById('endDateError').innerHTML = "plz enter the date in proper format";
        value = false;
    }
    if (value === true) {
        alert("Success..! You did it.");
    } else {
        alert("Error..! Enter the details again.");
    }
}
</script>
<h1 align="center">Attendance eligibility to appear for the exam</h1>
<title>Attendance eligibility to appear for the exam</title>
<style type = "text/css">
.button 
{
    text-align : center;
    color : purple;
    background : red;
    padding : 2px;
}
.error
{
    color : red;
    font : bold;
}
</style>
</head>
<body bgcolor="pink">
<form name="form" id="form" method="post" action="" >
Start Date: <input type="text" name="startDate" size="25"><span id="startDateError"></span><br/>
End Date: <input type="text" name="endDate" size="25"><span id="endDateError"></span>
<p align="center"><input type="submit" name="submit" value="Submit"></p>
</form></body></html>

