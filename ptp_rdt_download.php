<html>
<head>
  <title> PTP RDT Download</title>
  </head>

<body>
<?php
// Beth Tibbitts  tibbitts@us.ibm.com   19 Oct 2010
// Construct tables and links for the ptp and rdt downloads for a single build
// sample usage: http://eclipse.org/ptp/ptp_rdt_download.php?parameter=15%20Oct,indigo,I201010160851,5.0.0
$array = split(",", $_GET{parameter});
//echo "first is ",$array[0]," and second is ",$array[1];

$date=$array[0];
$eclipseVer=$array[1];
$buildid=$array[2];
$ptpVer=$array[3];
//echo "<p>";
//echo "<p> date=",$date,"    <br>eclipseVer=",$eclipseVer," <br>buildid=",$buildid," <br>ptpVer=",$ptpVer;
//echo "<p>";
?>

<h2>PTP Master archive for build <?php echo "I.",$buildid;?> </h2>

</table><table border="1" cellpadding="5">
<tr>
<th> Date
</th><th> Build
</th><th> Download Link
</th>
</tr>
<tr>

<?php
// spit out the name for a ptp-master zip file
function zipfile($name,$eclipseVer,$buildid,$ptpVer,$suffix=".zip"){
  $zipname=$name."-".$ptpVer."-".$buildid.$suffix;
  echo "<a href=\"http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/";
  echo $eclipseVer,"/I.",$buildid,"/",$zipname,"\"";
  echo " class=\"external text\" title=\"http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/",$eclipseVer,"/I.",$buildid,"/",$zipname,"\" rel=\"nofollow\">";
  echo $zipname,"</a>";
}

echo "<td>",$date,"</td>";
echo "<td>","I.",$buildid,"</td>";
echo "<td>";
zipfile("ptp-master",$eclipseVer,$buildid,$ptpVer);
echo "</td></tr></table>";
?>

<h2>PTP RDT Server archives for build <?php echo "I.",$buildid;?> </h2>
<?php
// spit out the url info for an rdt server archive.  name is e.g. "rdt-server-aix"
function server($name,$eclipseVer,$buildid,$ptpVer,$suffix=".tar"){
echo "</td><td> <a href=\"http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/";
echo $eclipseVer,"/I.",$buildid,"/",$name,"-",$ptpVer,$suffix,"\"";
echo " class=\"external text\" title=\"http://www.eclipse.org/downloads/download.php?file=/tools/ptp/builds/",$eclipseVer,"/I.",$buildid,"/",$name,"-",$ptpVer,$suffix,"\" rel=\"nofollow\">";
echo $name,"</a>";
}
?>
<p>
</table><table border="1" cellpadding="5">
<tr>
<th> Date
</th><th> Build
</th><th> AIX
</th><th> Linux
</th><th> Linux PPC
</th><th> Linux x86
</th><th> MacOS X
</th><th> Unix
</th><th> Windows
</th>
</tr>
<tr>
<?php
echo "<td>",$date,"</td>";
echo "<td> I.",$buildid;

server("rdt-server-aix",$eclipseVer,$buildid,$ptpVer);
server("rdt-server-linux",$eclipseVer,$buildid,$ptpVer);
server("rdt-server-linux.ppc",$eclipseVer,$buildid,$ptpVer);
server("rdt-server-linux.x86",$eclipseVer,$buildid,$ptpVer);
server("rdt-server-macosx",$eclipseVer,$buildid,$ptpVer);
server("rdt-server-unix",$eclipseVer,$buildid,$ptpVer);
server("rdt-server-windows",$eclipseVer,$buildid,$ptpVer,".zip");

echo "</td></tr></table>";

echo "<p>&nbsp;";
echo "<p><a href=\"http://wiki.eclipse.org/PTP/builds/",$ptpVer,"\""," >Back to PTP ",$ptpVer," builds page</a>";

?>

</body>


</html?
