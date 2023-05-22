<?php
require 'Conexion.php';

class Curso extends Conexion{
    public $curso_id;
    public $curso_nombre;
    public $curso_periodos;
    public $curso_fase;
    public $instructor_nombre;
    public $creditos_curso;


    public function __construct($args = [] )
    {
        $this->curso_id = $args['curso_id'] ?? null;
        $this->curso_nombre = $args['curso_nombre'] ?? '';
        $this->curso_periodos = $args['curso_periodos'] ?? '';
        $this->curso_fase = $args['curso_fase'] ?? '';
        $this->instructor_nombre = $args['instructor_nombre'] ?? '';
        $this->creditos_curso = $args['creditos_curso'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO cursos(curso_nombre, curso_periodos, curso_fase, instructor_nombre, creditos_curso) values('$this->curso_nombre','$this->curso_periodos','$this->curso_fase','$this->instructor_nombre','$this->creditos_curso')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
