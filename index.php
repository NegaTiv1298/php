<?php
mkdir('test');
file_put_contents('1.txt', '1');
file_put_contents('2.txt', '1');
file_put_contents('3.txt', '1');
rename('1.txt', 'test/1.txt');
rename('2.txt', 'test/2.txt');
rename('3.txt', 'test/3.txt');
