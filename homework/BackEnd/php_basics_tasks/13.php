<?php
$s = 400;
$t = 6;
echo 'Расстояние = ', $s, ' км', '<br>', 'Время = ',$t ,' часов', '<br>';
echo 'Средняя скорость автомобиля = ', round ($s/$t), ' км/час', ' или ', round (($s*1000)/($t*3600)), ' м/с';
?>