<?php
  $ip='127.0.0.1';
	$zona='public';

	$mib='1.3.6.1.4.1.2021.4.5';
	$memoria = snmpgetnext($ip, $zona, $mib, 1000000000);
	$memoria_limpia = str_replace(array("INTEGER:", "\""),"",$memoria);

	$mib='1.3.6.1.4.1.2021.4.6';
	$memoria1 = snmpgetnext($ip, $zona, $mib, 1000000000);
	$memoria1_limpia = str_replace(array("INTEGER:", "\""),"",$memoria1);

	$mib='1.3.6.1.4.1.2021.9.1.6';
	$disco = snmpgetnext($ip, $zona, $mib, 1000000000);
	$disco_limpio = str_replace(array("INTEGER:", "\""),"",$disco);

	$mib='1.3.6.1.4.1.2021.9.1.7';
	$disco1 = snmpgetnext($ip, $zona, $mib, 1000000000);
	$disco1_limpio = str_replace(array("INTEGER:", "\""),"",$disco1);


	echo "Memoria: $memoria_limpia <br>";
	echo "Memoria Libre: $memoria1_limpia <br>";
	echo "Disco Total: $disco_limpio <br>";
	echo "Disco Libre: $disco1_limpio <br>";


	print "<table border=1 bgcolor=#ffffff>";
	print "<tr>
        <td>Memoria RAM</td>
        <td>Memoria RAM Disponible</td>
        <td>Disco</td>
        <td>Disco Libre</td>
        </tr>";

        print "<tr>";
	print "<td>$memoria_limpia</td>";
        print "<td>$memoria1_limpia</td>";
        print "<td>$disco_limpio</td>";
        print "<td>$disco1_limpio</td>";
	print "</tr>";

?>
