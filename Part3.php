<!DOCTYPE html>
<html>
<head>
<title>Two-Digit Decimal Combinations</title>
</head>
<body>

<?php
for ($i = 0; $i < 100; $i++) {
echo str_pad($i, 2, "0", STR_PAD_LEFT);
if ($i < 99) {
echo ", ";
}
}
?>

</body>
</html>