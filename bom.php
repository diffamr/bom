<?php
include ("function.php");
echo "===========================\n";
		echo " SPAM BOM SMS & EMAIL\n";
		echo " GUNAKAN DENGAN BIJAK!\n";
		echo " @diffamr\n";
		echo "===========================\n";

		echo " List Tools :\n- BAKMI GM (SMS) = 1 \n- MQPAY (EMAIL) = 2\n- PizzaHUT (SMS) = 3 \n Pilih Mana? : ";
		$type = trim(fgets(STDIN));
		if ($type == 1) {
echo "===========================\n";
		echo " Spam BOM SMS BAKMI GM\n";
		echo " Nomor? (ex : 62xxx)\n Input : ";
		$phone = trim(fgets(STDIN));
		echo " Jumlah?\n Input : ";
		$jum = trim(fgets(STDIN));
		echo "+==========RESULT=========+\n";
		$execute = bakmi($phone, $jum);
		print $execute;
		echo "+===========END===========+\n";
	}elseif ($type == 2) {
		echo "===========================\n";
		echo " Spam BOM MQPAY Email\n";
		echo " Email? \n Input : ";
		$mail = trim(fgets(STDIN));
		echo " Jumlah?\n Input : ";
		$jum = trim(fgets(STDIN));
		echo "+==========RESULT=========+\n";
		$execute = email($mail, $jum);
		print $execute;
		echo "+===========END===========+\n";
	}elseif ($type == 3){
		echo "===========================\n";
		echo " Spam BOM SMS PizzaHUT\n";
		echo " Nomor? (ex : 8xxx)\n Input : 0";
		$phone = trim(fgets(STDIN));
		echo " Jumlah?\n Input : ";
		$jum = trim(fgets(STDIN));
		echo "+==========RESULT=========+\n";
		$execute = phd($phone, $jum);
		print $execute;
		echo "+===========END===========+\n";
	}