<?php

for ($i = 1; $i <= 100; $i++){ //数字の1~100を表示する
if (($i % 3) === 0){ //$iが3で割り切れたらFizzを表示する
echo "Fizz";
}
if (($i % 5) === 0){ //$iが5で割り切れたらBuzzを表示する
echo "Buzz";
}
if (($i % 3) && ($i % 5)){ //$iが3でも5でも割りきれなかったら数値を表示する
echo $i;
}
echo "\n";
}

?>
