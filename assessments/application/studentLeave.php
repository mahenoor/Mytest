<html>
<head>
<script type="text/javascript">
function days()
{
    var form = document.forms['form'];
    var startDate = form.startDate.value;
    var endDate = form.endDate.value;
    var startDate = new Date(startDate);
    var endDate = new Date(endDate);
    var timeDiff = Math.abs(endDate.getTime() - startDate.getTime());
    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24) + 1);
    document.getElementById('leave').value = diffDays; 
}
</script>
<h2 align="center">Apply for leave</h2>
</head>
<body bgcolor="pink">
<form method="post" name="form" id="form" action="">
<table border=3 width=40%>
<tr>
<th>Enter the Start date of leave</th>
<td><input type="text" name="startDate"/>
</td>
</tr>
<tr>
<th>Enter the End date of leave</th>
<td><input type="text" name="endDate" onblur="days()" />
</td>
</tr>
<th>Numbers of days the student will be on leave</th>
<td><input type="text" id="leave"/>
</td>
</table>
</form>
</body>
<a href="index.php">Go to index page</a>
</html>