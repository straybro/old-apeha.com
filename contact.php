<html>

var tl = new Array (
"|                          .:.[ Lost Angels Admins ].:.                     |\r\n",
"| ������� ������ ������� :   �������������                                                       |\r\n",
"|= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =|\r\n",
"| .:.[ MIGON ].:.  E-mail :  migon@anantastudio.ru  | ICQ#:  472578574    |\r\n",
"|                                                                             |\r\n",
"|= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =|\r\n",
"| About us :                                                                  |\r\n",
"|= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =|\r\n",
"|  Sites :  http://langels.ru/                                              |\r\n",
"| ��������� ������ �� ���� :                                                  |\r\n",                                                   
"| ������   :  http://langels.ru/index.php?type=law                         |\r\n",
"| ������� �����   :  http://langels.ru/index.php?type=exp                  |\r\n",
"|                                                                             |\r\n",
"|                                                                             |\r\n",
"| �������� � ���� �� ������ ����� E-mail ��� ICQ, � ������� �� ������ ������ |\r\n",
"|                           ��� �� http://langels.ru/                       |\r\n",
"|                                                                             |\r\n",
"|   ============================= Fallen Angels  =========================    |\r\n",
"|                                                                             |\r\n",
"|. . . . . . . . . .  �� ������ ���� ������ ��� � ����� ���� !. . . . . . . . |\r\n",
"|                            ������ ������  � 2009 - 2010                     |\r\n");

var speed = 5;
var index = 0;
var text_pos = 0;
var str_length = tl[0].length;
var contents, row;

function type_text ( )
{

	contents = '';
	row = Math.max ( 0, index-26 );
	while ( row < index )
	{

		contents += tl[row++];
		
	}//while
	
	document.forms[0].elements[0].value = contents + tl[index].substring ( 0, text_pos ) + "|";
	if ( text_pos++ == str_length )
	{

		text_pos = 0;
		index++;
		if ( index != tl.length )
		{

			str_length = tl[index].length;
			setTimeout ( "type_text()", speed );
			
		}//if
		
	}//if
	else
	{

		setTimeout( "type_text()", speed );
		
	}//else

}//function

</script>