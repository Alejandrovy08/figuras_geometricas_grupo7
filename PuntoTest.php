<?php
// Incluir el archivo de la clase Punto
require_once 'Punto.php';

// Función para realizar aserciones manuales de igualdad
function assertEquals($expected, $actual, $testName) {
    if ($expected === $actual) {
        echo "[✔] $testName: Prueba pasada.<br>";
    } else {
        echo "[✘] $testName: Falló. Se esperaba '$expected', pero se obtuvo '$actual'<br>";
    }
}

// Pruebas unitarias para la clase Punto

// Test 1: Prueba la obtención de la coordenada X
$punto1 = new Punto(3, 4);
$expectedX = 3;
$actualX = $punto1->getX();
assertEquals($expectedX, $actualX, "Prueba de obtención de X");

// Test 2: Prueba la obtención de la coordenada Y
$expectedY = 4;
$actualY = $punto1->getY();
assertEquals($expectedY, $actualY, "Prueba de obtención de Y");

// Test 3: Prueba del método __toString()
$expectedToString = "(3, 4)";
$actualToString = $punto1->__toString();
assertEquals($expectedToString, $actualToString, "Prueba de __toString()");

// Test 4: Prueba de cálculo de distancia entre dos puntos
$punto2 = new Punto(6, 8);
$expectedDistancia = 5.0; // Distancia entre (3,4) y (6,8)
$actualDistancia = $punto1->distancia($punto2);
assertEquals($expectedDistancia, $actualDistancia, "Prueba de cálculo de distancia");

?>
