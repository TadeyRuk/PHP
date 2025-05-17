<!DOCTYPE html>
<html>
<head>
<title>Grade Evaluator</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: #f4f4f4;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
height: 100vh;
margin: 0;
}

form {
padding: 20px;
background-color: #fff;
border: 2px solid #ccc;
border-radius: 10px;
margin-bottom: 30px;
}

input[type="text"] {
padding: 5px;
margin: 5px 0;
}

input[type="submit"] {
padding: 8px 16px;
margin-top: 10px;
cursor: pointer;
}

.allCards {
display: flex;
gap: 20px;
}

.card, .card2, .card3 {
background-color: #fff;
border: 1px solid #ccc;
border-radius: 10px;
padding: 15px 25px;
box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.container h4 {
margin: 0;
font-weight: normal;
}
</style>
</head>
<body>

<?php
function test_input($data){
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

$name = "";
$grade = "";
$gradeLetter = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = test_input($_POST["name"]);
$grade = test_input($_POST["grade"]);

if (is_numeric($grade)) {
$grade = (float)$grade;

if ($grade >= 93 && $grade <= 100) {
$gradeLetter = "A+";
} elseif ($grade >= 90) {
$gradeLetter = "A";
} elseif ($grade >= 87) {
$gradeLetter = "A-";
} elseif ($grade >= 83) {
$gradeLetter = "B+";
} elseif ($grade >= 80) {
$gradeLetter = "B";
} elseif ($grade >= 77) {
$gradeLetter = "B-";
} elseif ($grade >= 73) {
$gradeLetter = "C+";
} elseif ($grade >= 70) {
$gradeLetter = "C";
} elseif ($grade >= 67) {
$gradeLetter = "C-";
} elseif ($grade >= 63) {
$gradeLetter = "D+";
} elseif ($grade >= 60) {
$gradeLetter = "D";
} elseif ($grade >= 0) {
$gradeLetter = "F";
} else {
$gradeLetter = "Invalid grade.";
}
} else {
$gradeLetter = "Invalid input (not numeric)";
}
}
?>

<form action="" method="POST">
<label for="name">Name:</label><br>
<input type="text" name="name" id="name" required><br><br>

<label for="grade">Grade:</label><br>
<input type="text" name="grade" id="grade" required><br><br>

<input type="submit" value="Submit">
</form>

<img src= data:image/jpeg;base64,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

<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && is_numeric($grade)): ?>
<div class="allCards">
    <div class="card">
    <div class="container">
    <h4><strong>Name:</strong> <?php echo $name; ?></h4>
    </div>
</div>
<div class="card2">
<div class="container">
<h4><strong>Rank:</strong> <?php echo $gradeLetter; ?></h4>
</div>
</div>
<div class="card3">
<div class="container">
<h4><strong>Grade:</strong> <?php echo $grade; ?></h4>
</div>
</div>
</div>
<?php endif; ?>

</body>
</html>