<?php

// define("NAMA", "Hilmi Almuhtade");
// echo NAMA;

// echo "<br>";

// const UMUR = 19;
// echo UMUR;

define("DOMISILI", "Surabaya");
class Coba {
  const NAMA = "Hilmi Almuhtade";

  // magic constant
  public static $file = __FILE__;
  public static $class = __CLASS__;
}
echo DOMISILI;
echo "<br>";
echo Coba::NAMA;
echo "<br>";
echo Coba::$file;
echo "<br>";
echo Coba::$class;
