<?php
$a = 5;
$b = '05';
var_dump($a == $b);                    // Почему true? Сравнение с приведением типа
var_dump((int)'012345');                        // Почему 12345? Строка преведена в число
var_dump((float)123.0 === (int)123.0); // Почему false? Не равны по типу
var_dump((int)0 === (int)'hello, world'); // Почему true? 'hello, world' при приведении у чилу дало 0


