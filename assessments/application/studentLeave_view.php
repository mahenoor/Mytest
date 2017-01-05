<html>
<head>
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
<script type="text/javascript">
function startDate(startDate)
{
    if (empty(startDate)) {
        return false;
    } else {
        return true;
    }
}
function endDate(endDate)
{
    if (empty(endDate)) {
        return false;
    } else {
        return true;
    }
}
function validate()
{
    var startDate = document.getElementById('startDate').value;
    var endDate = document.getElementById('endDate').value;
    var value = true;
    if (startDate == '') {
        var startDateError = document.getElementById('startDateError').innerHTML = "plz enter start date";
        value = false;
    } 
    if (endDate == '') {
        var endDateError = document.getElementById('endDateError').innerHTML = "plz enter end date";
        value = false;
    }
    if (value) {
    document.getElementById('form').submit();
    }
}
function days()
{
    var form = document.forms['form'];
    var startDate = form.startDate.value;
    var endDate = form.endDate.value; 
    var firstDate = new Date(startDate);
    var lastDate = new Date(endDate);
    var timeDiff = Math.abs(lastDate.getTime() - firstDate.getTime());
    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24) + 1);
    document.getElementById('studentLeave').value = diffDays; 
}
</script>
<h2 align="center">Apply for leave</h2>
</head>
<body bgcolor="pink">
<form method="post" name="form" id="form" action="studentRecordController.php?action=studentLeave">
<input type="hidden" name="id" value="<?php echo $id ?>"/>
<table border=3 width=60%>
<tr>
<th>Enter the Start date of leave</th>
<td>
<input type="text" id="startDate" name="startDate"/><p id="startDateError"></p>
</td>
</tr>
<tr>
<th>Enter the End date of leave</th>
<td>
<input type="text" id="endDate" name="endDate" onblur="days()" /><p id="endDateError"></p>
</td>
</tr>
<th>Numbers of days the student will be on leave</th>
<td>
<input type="text" name="studentLeave" id="studentLeave"/>
</td>
</table>
<input type="button" name="submit" value="validate" onClick="return validate()" class="button">
<input type="submit" name="submit" value="submit" class="button">
</form>
</body>
<a href="studentRecordController.php?action=viewRecords">Go to index page</a>
</html>