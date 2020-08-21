<?php

    require '../connect.php';
  $question_number = $_POST['number'];

$sql="SELECT * FROM questions WHERE test='1' AND question_number='$question_number' LIMIT 1";
$result=mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($result)) {
$question = $row['question'];
$chA = $row['choiceA'];
$chB = $row['choiceB'];
$chC = $row['choiceC'];
$chD = $row['choiceD'];
$chE = $row['choiceE'];
$qid = $row['qid'];
$correct = $row['correct'];
}



echo "<div id='question'>" . $question . "</div>";
echo "<input type='radio' name='a' value=" . $chA ."> " . $chA . "<br>";
echo "<input type='radio' name='b' value=" . $chB ."> " . $chB . "<br>";
echo "<input type='radio' name='c' value=" . $chC ."> " . $chC . "<br>";
echo "<input type='radio' name='d' value=" . $chD ."> " . $chD . "<br>";
echo "<input type='radio' name='e' value=" . $chE ."> " . $chE . "<br>";
?>
