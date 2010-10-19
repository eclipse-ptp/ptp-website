<html>
<head>
  <title> PHP hello test </title>
  </head>

<body>
<?php
$array = split(",", $_GET{parameter});
echo "first is ",$array[0]," and second is ",$array[1];

$date=$array[0];
$eclipseVer=$array[1];
$buildid=$array[2];
$rdtVer=$array[3];
echo "<p>";
echo "<p> date=",$date,"    <br>eclipseVer=",$eclipseVer," <br>buildid=",$buildid," <br>rdtVer=",$rdtVer;
echo "<p>";
?>

<?php echo '<p>Hello World </p>'; ?>

</body>


</html?
