<?php

class ContohStatic {
  public static $nama = "Hilmi Almuhtade";

  public static function ucapSalam() {
    return "Halo, nama saya " . self::$nama;
  }
}

echo ContohStatic::ucapSalam();
echo "<br>";
