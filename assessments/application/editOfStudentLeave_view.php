<html>
<head>
<script>
function days()
{
    var form = document.forms['form'];
    var startDate = form.startDate.value;
    var endDate = form.endDate.value;
    var firstDate = new Date(startDate);
    var lastDate = new Date(endDate);
    var timeDiff = Math.abs(lastDate.getTime() - firstDate.getTime());
    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24) + 1);
    document.getElementById('leave').value = diffDays; 
}
</script>
</head>
<h1 align="center">Update Student Leave Information</h1>
<title>Student Information</title>
<style>
.button
{
    color :yellow;
    background : red;
}
</style>
</head>
<body bgcolor="pink">
<form method="post" name="form" id="form" action="">
<table border=3 width=40%>
<tr>
<th>Enter the Start date of leave</th>
<td><input type="text" name="startDate" value="<?php echo $input['startDate']; ?>"/>
</td>
</tr>
<tr>
<th>Enter the End date of leave</th>
<td><input type="text" name="endDate" onblur="days()" value="<?php echo $input['endDate']; ?>" />
</td>
</tr>
<th>Numbers of days the student will be on leave</th>
<td><input type="text" name="studentLeave" id="leave" value="<?php echo $input['studentLeave']; ?>"/>
</td>
</table>
<input type="submit" name="submit" value="submit" class="button">
</form>
</body>
<a href="index.php">Go to index page</a>
</html>
