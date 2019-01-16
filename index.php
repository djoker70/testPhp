<?php
error_reporting(-1);
require_once 'classes/File.php';
require_once 'classes/Figure.php';
require_once 'classes/Circle.php';
require_once 'classes/Rectangle.php';
require_once 'classes/Pyramid.php';




$circle = new Circle('Круг',5);
$circle->getFigure();

$rect = new Rectangle('Прямоугольник',8,3);
$rect->getFigure();

$pyram = new Pyramid('Пирамида',7,34,5);
$pyram->getFigure();

$file = new File('file.txt');
//Записываем созданные объекты в файл
$file->write($circle->getName());
$file->write($rect->getName());
$file->write($pyram->getName());

$file->read();
