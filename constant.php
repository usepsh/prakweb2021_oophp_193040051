<?php

// bedanya define sama const = define tidak bisa disimpan disebuah kelas, harus disimpan diluar sebagai konstanta global
// di php ada Magic Constant : __LINE__, __FILE__ dan lain"

// define('NAMA', 'Jungkook');
// echo NAMA;

// echo "<br>";

// const UMUR = 24;
// echo UMUR;

// class Coba
// {
//   const NAMA = 'Jennie';
// }

// echo Coba::NAMA;

// echo __FILE__;

// function coba()
// {
//   return __FUNCTION__;
// }

// echo coba();

class Coba
{
  public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;
