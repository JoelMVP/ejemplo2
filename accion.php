<?php
// $Nombre=$_GET["Nombre"];
// $Apellido=$_GET["Apellido"];

// echo "Hola: ".$Nombre." ".$Apellido;
// echo "<br />";
// if(isset($_GET["Aceptar"]))
//     echo "Presiono Apectar";
// if(isset($_GET["Cancelar"]))
//     echo "Presiono Cancelar";
?>
<?php
$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];

echo "Hola: " . $Nombre . " " . $Apellido;
echo "<br />";
if (isset($_POST["Aceptar"]))
    echo "Presiono Apectar";
if (isset($_POST["Cancelar"]))
    echo "Presiono Cancelar";

echo "<br />";

if (isset($_POST['check1'])) {
    echo "Seleccionada";
    // Checkbox is selected
} else {
    echo "No Seleccionada";
    // Alternate code
}

$option = isset($_POST['taskOption']) ? $_POST['taskOption'] : false;
if ($option) {
    echo htmlentities($_POST['taskOption'], ENT_QUOTES, "UTF-8");
} else {
    echo "task option is required";
    exit;
}
?>