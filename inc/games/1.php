<table width=100% cellspacing=0 cellpadding=3 border=0>
	function new_game () {
		?>
	}
	if (!$_GET[set])
	{
		new_game();
	}
	if ($_GET[set]==game) {
		if ($_POST[type]==1 or $_POST[type]==2 or $_POST[type]==3 or $_POST[type]==4 or $_POST[type]==5) {
			if ($_POST[type]==1) $st=10;
			if ($_POST[type]==2) $st=25;
			if ($_POST[type]==3) $st=50;
			if ($_POST[type]==4) $st=100;
			if ($_POST[type]==5) $st=200;
			if ($stat[credits]>=$st) {
				if ($_POST[play]==1) {
					$player_1 = rand(1,6);
					$player_2 = rand(1,6);
					$comp_1 = rand(2,6);
					$comp_2 = rand(2,6);
				}
				?>
		if ($_POST[play]==1) {
			?> <br>
		}
		?></FIELDSET>
		if ($_POST['play']==1) {
			?> <br>
		}
		?></FIELDSET>
	$summa_player = $player_1+$player_2;
	$summa_comp = $comp_1+$comp_2;
	if ($summa_player>$summa_comp) {
		mysql_query("UPDATE players SET credits=credits+".$st." WHERE user='".$stat['user']."'");

		$stat[credits] = $stat[credits]+$st;
		echo "<p><center><font class=sysmessage>�����������! �� �������� � ��������� <b>$st ��.</b>!</font></center><p>";
	}
	if ($summa_player<$summa_comp) {
		mysql_query("UPDATE players SET credits=credits-".$st." WHERE user='".$stat['user']."'");

		$stat[credits] = $stat[credits]-$st;
		echo "<p><center><font class=sysmessage>�� ���������! � ��� ���������  <b>$st ��.</b>!</font></center><p>";
	}
	if ($summa_player==$summa_comp) {
		echo "<p><center><font class=sysmessage>�����! ������� ����� ��� ���!</font></center><p>";
	}
	echo "<input type=submit value='������� ��� ���' class=standbut>";
}
else {
	echo "<input type=submit value='������ �����' class=standbut>";
}
?> <input type=button value='����� ����' class=standbut
			}
			else {
				echo "<p><center><font class=bloked>� ��� ������������ �����!</font></center><p>";
				new_game();
			}
		}
		else {
			echo "<p><center><font class=bloked>�� ������� ������!</font></center><p>";
			new_game();
		}
	}
	?>