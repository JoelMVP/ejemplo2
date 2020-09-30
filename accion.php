<?php
$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];

echo "Hola: " . $Nombre . " " . $Apellido;
echo "<br />";


$option = $_POST['taskOption'];
echo "Ubicacion: " . $option;

echo "<br />";

if (isset($_POST['check1'])) {
    echo "Checkbox Seleccionada";
    echo "Valor: Si";
} else {
    echo "Checkbox No Seleccionada ";
    echo "Valor: No";
}
?>
<br>
<a href="form.php">Volver al formulario</a>