<HTML>
<HEAD>
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
	<TITLE>EXAMEN M07UF2 DAW2 2016-2017</TITLE>
</HEAD>
<BODY>
<?php
	$quantesTemperatures = $_REQUEST["nombreDeTemperatures"];
	$temps = $_REQUEST["temp"];
	$temp = array();
        $suma = 0;
	print "El nombre de temperatures &eacute;s ".$quantesTemperatures." : <BR><BR>\n";
	foreach( $temps as $key => $n ) {
	  //print "n : ".$n." , key : ".$key."<BR>\n";
	  $temp[$key] = $n;
	}
	for ($i=0;$i<$quantesTemperatures;$i++){
		print 'Temp['.($i+1).'] : '.$temp[$i].'<BR>';
		print "\n";
		$suma += $temp[$i];
	}
	print '<BR>Mitjana aritm&eacute;tica : '.$suma/$quantesTemperatures.'<BR>';
	print '<BR>';
?>
    <FORM action="index.php">
        <INPUT type="submit" value="Retorna"/>
    </FORM>
</BODY>
</HTML>	
