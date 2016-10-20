<html>
<head>
<title>Quiz form</title>
</head>
<body>
<?php
if (isset($_GET['query'])) {
    $question = $_GET['query'];
    echo $question;
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
<form method="post" action="quiz.php?query=<?php
echo $question + 1;
?>">
<?php
$items = $questions[$question];
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
