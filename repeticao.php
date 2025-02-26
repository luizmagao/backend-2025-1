<?php

echo "FOR" . PHP_EOL;
for ($i = 1; $i <= 10; $i++) {
    if ($i == 7) break;
    echo "#$i" . PHP_EOL;
}

echo "WHILE" . PHP_EOL;
$i = 0;
while ($i <= 10) {
    echo "#$i" . PHP_EOL;
    $i += 1;
}
