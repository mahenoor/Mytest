<html>
<head>
<title>Quiz form</title>
</head>
<body>
<?php
if (isset($_GET['query'])) {
    $quest = $_GET['query'];
    echo $quest;
} else {
    $quest = 0;
}
error_reporting(1);
$questions = array(
    array(
        'q' => 'what is ur name?',
        'a' => 'rita',
        'b' => 'mansi'
    ),
    array(
        'q' => 'what is ur job?',
        'a' => 'intern',
        'b' => 'developer'
    ),
    array(
        'q' => 'what is ur dob?',
        'a' => '19july',
        'b' => '20sep'
    )
);
?>
<form method="post" action="quiz81.php?query=<?php
echo $quest + 1;
?>">
<?php
$items = $questions[$quest];
$m     = $items['q'];
$n     = $items['a'];
$q     = $items['b'];
?>
<br />
<?php
echo $m;
?>
<br />
<input type="radio" name="q2">
<?php
echo $n;
?>
<br />
<input type="radio" name="q2">
<?php
echo $q;
?>
<br />
<input type="submit" name="submit" value="submit">
</body>
</form>
</html> 