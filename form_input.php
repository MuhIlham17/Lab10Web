<?php
/**
* Program memanfaatkan Program 10.2 untuk membuat form inputan sederhana.
**/

include "form.php";

echo "<html><head><title>Form Datadiri</title></head><body>";
$form = new Form("","Input Form");
$form->addField("txtnama", "Nama");
$form->addField("txtnim", "Nim");
$form->addField("txtjurusan", "Jurusan");
$form->addField("txtakelas", "Kelas");
$form->addField("txtalamat", "Alamat");
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();
echo "</body></html>";

?>