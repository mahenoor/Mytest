<?php
?>
<html>
<head>
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
<form method="post" action="" >
<table>
<tr>
<td><label>Enter the start date:</label></td>
<td><input type="date" name="startDate" value="" min="2016-07-01">
</td>
</tr>
<tr>
<td><label>Enter the end date:</label></td>
<td><input type="date" name="endDate" value="" max="2016-11-30">
</td>
</tr>
<tr>
<td><label>Enter the number of days the student was on leave:</label></td>
<td><input type="number" name="studentLeave" value="" min="0" max="153">
</td>
</tr>
</table>
<input type="submit" name="submit" value="submit" class="button">
</form></body></html>
