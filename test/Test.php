<?php


use PHPUnit\Framework\TestCase;

require_once("../Ejercicio1/funcionesEjercicio1.php");

class Test extends TestCase
{
    public function  testCambioDeNombreConExtencionJpg(){
       $respuesta = funcionCambiarNombreImagen("robot.jpg", "archivo");
        $this->assertEquals("archivo.jpg",$respuesta);
    }

    public function  testCambioDeNombreConExtencionPng(){
        $respuesta = funcionCambiarNombreImagen("robot.png", "archivo");
        $this->assertEquals("archivo.png",$respuesta);
    }

    public function  testCambioDeNombreConExtencionJpeg(){
        $respuesta = funcionCambiarNombreImagen("robot.jpeg", "archivo");
        $this->assertEquals("archivo.jpeg",$respuesta);
    }

    public function  testCambioDeNombreConExtencionGif(){
        $respuesta = funcionCambiarNombreImagen("robot.gif", "archivo");
        $this->assertEquals("archivo.gif",$respuesta);
    }

    /*public function testValidarDatosArchivo(){

    }

    public function testCopiarDatosArchivo(){

    }*/
}
