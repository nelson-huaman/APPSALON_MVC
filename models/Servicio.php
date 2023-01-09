<?php

namespace Model;

class Servicio extends ActiveRecord {

    protected static $tabla = 'servicios';
    protected static $columnasDB = ['id', 'nombre', 'precio'];

    
    public $id;
    public $nombre;
    public $precio;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->precio = $args['precio'] ?? '';
    }

    public function validar() {
        if (!$this->nombre) {
            self::$alertas['error'][] = 'EL Nombre del Servicio es Obligatotio';
        }

        if (!$this->precio) {
            self::$alertas['error'][] = 'EL Precio del Servicio es Obligatotio';
        }

        if (!is_numeric($this->precio)) {
            self::$alertas['error'][] = 'EL Precio no es Válido';
        }

        return self::$alertas;
    }


}