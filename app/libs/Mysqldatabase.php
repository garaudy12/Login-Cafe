<?php
//manejo de la base de datos
    class MySQLdb {
        private $host = "localhost:3307";
        private $usuario = "root";
        private $clave = ""; 
        private $db = "bdcafetienda";
        private $puerto = ""; 
        private $conn;
        function __construct(){
            $this->conn = mysqli_connect($this->host, 
            $this->usuario, 
            $this->clave, 
            $this->db);

            if(mysqli_connect_errno()){
                printf("Error en la conexión a la base de datos %s",
                mysqli_connect_errno());
                exit();
            }else{
                //printf ("Conexión exitosa"."<br>");
            }

            if (!mysqli_set_charset($this->conn, "utf8")){
                printf("Error en la conversión de caracteres %s",
                mysqli_connect_error());
                exit();
            }else{
                //printf ("El conjunto de caracteres es: ".mysqli_character_set_name($this->conn)."<br>");
            }
        }//fin del constructor

        function query($sql){
            $data = array();
            $r = mysqli_query($this->conn,$sql);
            if(mysqli_num_rows($r)>0){
                $data = mysqli_fetch_assoc($r);
            }
            return $data;
        }

        //regresa un valor booleano
        function queryNoSelect($sql){
            $r = mysqli_query($this->conn,$sql);
            return $r;
        }
    }
