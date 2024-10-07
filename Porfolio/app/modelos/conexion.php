<?php

class Conexion
{
    private $con;
    public function __construct()
    {
        $this->con = new mysqli('localhost', 'root', '', 'porfolio');

        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
    }

    //cambiar
    public function getUsers()
    {
        $query = $this->con->query('SELECT * FROM usuarios');
        $result = [];
        $i = 0;

        if ($query) {

            while ($row = $query->fetch_assoc()) {
                $result[$i] = $row;
                $i++;
            }
        } else {
            echo "Error al obtener los datos de la base de datos" . $this->con->error;
        }

        return $result;
    }

    public function __destruct()
    {
        $this->con->close();
    }
}