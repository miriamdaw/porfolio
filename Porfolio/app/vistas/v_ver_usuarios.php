<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Usuario</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Nombre real</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($usuarios) && is_array($usuarios) && !empty($usuarios)) {
                foreach ($usuarios as $usuario) {
                    echo "<tr>";
                    echo "<td>" . $usuario['user'] . "</td>";
                    echo "<td>" . $usuario['password'] . "</td>";
                    echo "<td>" . $usuario['name'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No hay usuarios registrados</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>