<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $clientes
 */
$clientesList = "<option value'0'>SELECCIONAR CLIENTE</option>";
foreach ($clientes as $cliente) :
    $clientesList .= " <option value='" . $this->Number->format($cliente->id) . "'>" . h($cliente->nombres) . " " . h($cliente->apellidos) . "</option>";
endforeach;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller</title>
</head>

<body>
    <br>
    <center>
        <h1>Taller</h1>
    </center>
    <br>
    <?= $this->Form->create(null, ['type' => 'get']) ?>
    <div class="row">
        <div class="col-form-label">
            <h2>Clientes</h2>
        </div>
        <div class="col">
            <select name="cliente" id="cliente">
                <?php echo $clientesList; ?>
            </select>
        </div>
        <div class="">
            <button>Buscar</button>
        </div>
    </div>
    <?= $this->Form->end() ?>
    <br>
    <center>
        <h2>Elaborado por: Rodriguez Michael y Sanchez Daniela *the best*</h2>
    </center>
    <br>

    <br>

    <?php
    if (isset($_GET['cliente'])) {
        $hi = $_GET['cliente'];
        $conexion = new mysqli("localhost", "root", "", "facturacion");
        if ($conexion->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
        }
        $sql = "SELECT * from clientes WHERE id = '$hi'";
        $clientes = $conexion->query($sql);
        $sql2 = "SELECT SUM(total) AS total FROM ventas WHERE clientes_id = '$hi'";
        $ventas = $conexion->query($sql2);
        if ($clientes->num_rows > 0) //si la variable tiene al
        {
            while ($row = $clientes->fetch_array(MYSQLI_ASSOC)) {

                echo "<div>
            <table class='table table-bordered'>
                <tr>
                    <th class=''>ID</th>
                    <th class=''>" . $row['id'] . "</th>
                </tr>
                <tr>
                    <td class=''>NOMBRES</td>
                    <td class=''>" . $row['nombres'] . " " . $row['apellidos'] . "</td>
                </tr>
                <tr>
                    <td class=''>DIRECCION</td>
                    <td class=''>" . $row['direccion'] . "</td>
                </tr>
                <tr>
                    <td class=''>TELEFONO</td>
                    <td class=''>" . $row['telefono'] . "</td>
                </tr>
                <tr>
                    <td class=''>EMAIL</td>
                    <td class=''>" . $row['correo'] . "</td>
                </tr>
            </table>
        </div>";
            }
            while ($row = $ventas->fetch_array(MYSQLI_ASSOC)) {
                echo "<center>
                <h2>Total de compras realizadas: $" . ($row['total'] + 0) . "</h2>
                </center>";
            }
        } else {
            echo "No hubo resultados";
        }
    }
    #$sql = "SELECT * from clientes AS c";
    #$clientes = $conexion->query($sql);
    ?>
</body>

</html>