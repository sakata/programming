<?php

//-----------------
// 曜日を確認します
//-----------------

switch (date("w")){

case 0:
echo "今日は日曜日です。"."\n";
break;

case 1:
echo "今日は月曜日です。"."\n";
break;

case 2:
echo "今日は火曜日です。"."\n";
break;

case 3:
echo "今日は水曜日です。"."\n";
break;

case 4:
echo "今日は木曜日です。"."\n";
break;

case 5:
echo "今日は金曜日です。"."\n";
break;

case 6:
echo "今日は土曜日です。"."\n";
break;

default:
echo "ここにかきません(*^-^*)"."\n";

}
?>
