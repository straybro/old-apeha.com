<?
if ($_GET[set]==buy){
	if ($stat[credits] >= 500){

		$buy = mysql_query("UPDATE players SET credits=credits-500 WHERE user='$user'");
		$num = rand(0, 99);
		$insert = mysql_query("INSERT INTO lotto(name, number) VALUES('$user','$num')");
		$infond = mysql_query("UPDATE lotto_fond SET fond=fond+400");
		echo "<p><center><font class=sysmessage>�� ������ ����� ��� �������: <b>$num</b></font></center><p>";

		exit();}
		if ($credits < 500){
			echo "� ��� ������������ �����";
			exit();}
}
if ($_GET[set]==play){
	$num1 = rand(0, 99);
	$fondasd = mysql_query("SELECT * FROM lotto_fond");
	$resta = mysql_fetch_array($fondasd);
	$fond = $resta['fond'];
	$date = date('d.m.Y H:i:s');
	$sqlwin = mysql_query("SELECT * FROM lotto WHERE number='$num1'");
	$reswinrow = mysql_num_rows($sqlwin);
	if($reswinrow == 0){
		$win = "���";
		$winplayers = mysql_query("INSERT INTO lotto_winner(time, name, number, fond) VALUES('$date', '$win','$num1', $fond)");

		$sbrosl = mysql_query("TRUNCATE TABLE lotto");
	}else{
		while ($reswin = mysql_fetch_array($sqlwin)){
			$win = $reswin['name'];
		}
		$plus = mysql_query("UPDATE players SET credits=credits+'$fond' WHERE user='$win'");
		$sbrosf = mysql_query("UPDATE lotto_fond SET fond=0");
		$sbrosl = mysql_query("TRUNCATE TABLE lotto");
		$winplayers = mysql_query("INSERT INTO lotto_winner(time, name, number, fond) VALUES('$date', '$user','$num1', '$fond')");
	}
	echo "<p><center><font class=sysmessage>������� �����: <b>$num1</b>. ���������� ���������: <b>$win</b>.</font></center><p>";
	exit();}
	?>
		$otchet=mysql_query("SELECT * FROM lotto_winner order by id desc");
		for ($i=0; $i<mysql_num_rows($otchet); $i++) {
			$otchets=mysql_fetch_array($otchet);
			echo"<u>$otchets[time]</u> | ����������: <b>$otchets[name]</b> | �����: $otchets[number] | ����: $otchets[fond] ��.<br>";
		}
		?></FIELDSET>
		if ($stat['rank'] == 100) print "<input type=button value='�������� �����' onclick='window.location = \"?gameroom=2&set=play\"' class=search style='WIDTH: 100px'>
&nbsp;&nbsp;&nbsp;&nbsp; ";?> <? print "<input type=button value='������ �����' onclick='window.location = \"?gameroom=2&set=buy\"' class=search style='WIDTH: 100px'>"; ?>
		//if ($stat['rank']>=98) {
		?>
		//exit();}
		?>