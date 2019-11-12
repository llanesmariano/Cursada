<?php
// EJERCITACION TERMINADA!
echo "EJERCITACION TERMINADA!<br><br>";

//Escribir en código una variable $persona que sea un array con la siguiente información.
echo "Ejercicio de Array <br><br>";

$persona = [
    'Nombre' => 'Jon',
    'Apellido' => 'Snow',
    'Edad' => 34,
    'Hobbies' => [
        'Netflix',
        'Futbol',
        'Programar'
        ]
    ];

    $persona["Edad"] = 25;
    $persona["Direccion"] = "Winterfell";
    $persona["Hobbies"][] = "otro hobbie";

    var_dump($persona);

    // Ejercicio 1 
    echo "<br><br> Ejercicio de Condicionales <br>Ejercicio 1.<br><br>";

    $numero1 = rand(1,5);
    $numero2 = rand(1,5);

    if ($numero1 > $numero2){
        echo " El Numero1 mayor es $numero1"; 
    } else if ($numero1 == $numero2){
        echo " Los numeros son iguales"; 
    } else {
        echo " El Numero2 mayor es $numero2"; 
    }

    var_dump ($numero1, $numero2);


    // Ejercicio 2
    echo "<br><br> Ejercicio de Condicionales <br>Ejercicio 2.<br><br>";

    $numero3 = rand(1,5);
    
    if ($numero3 == 3 ||  $numero3 == 5){
        echo "El numero es $numero3";
    }

    var_dump ($numero3);

    // Ejercicio 3
    echo "<br><br> Ejercicio de Condicionales <br>Ejercicio 3.<br><br>";

    if ($numero3 != 3){
        echo "El numero NO es 3";
    } else {
        echo "El numero es $numero3";
    }

    var_dump ($numero3);

    // Ejercicio 4
    echo "<br><br> Ejercicio de Condicionales <br>Ejercicio 4.<br><br>";

    $numero4 = rand(1,100);
    if ($numero4 > 50){
        echo "El número es mayor a 50";
    } else {
        echo "El número es menor a 50";
    }

    var_dump ($numero4);


    // Ejercicio 5
    echo "<br><br> Ejercicio de Condicionales <br>Ejercicio 5.<br><br>";

    $nombreDeUsuario = "admin";
    $ContraseniaDeUsuario = "1234";

    if ($nombreDeUsuario == "admin" && $ContraseniaDeUsuario == "1234"){
        echo "Bienvenido $nombreDeUsuario!";
    } else if ($nombreDeUsuario != "admin"){
        echo "Error en el usuario";
    } else if ($ContraseniaDeUsuario != "1234"){
        echo "Error en la contraseña";
    }

    var_dump($nombreDeUsuario, $ContraseniaDeUsuario);

    // Ejercicio 6
    echo "<br><br> Ejercicio de Condicionales <br>Ejercicio 6.<br><br>";

    $edad = rand(1,20);
    $casado = false;
    $sexo = [
        "Masculino",
        "Femenino",
        "Otro"
    ];

    if ($edad > 18 && $casado == false && $sexo[2]=="Otro"){
        echo "Bienvenido!";
    }

    var_dump($edad);

    // Ejercicio 7
    echo "<br><br> Ejercicio de Condicionales <br>Ejercicio 7.<br><br>";

    $cantidadDeAlumnos = 100;

    if ($cantidadDeAlumnos){
        echo "true";
    } else {
        echo "false";
    }

    var_dump($cantidadDeAlumnos);

    // Ejercicio 8
    echo "<br><br> Ejercicio de Condicionales <br>Ejercicio 8.<br><br>";
    
    $numero = rand(1,2);

    echo ($numero%2==0) ? "el $numero es par" : "el $numero es inpar";

    var_dump ($numero);

    // Ejercicio 9
    echo "<br><br> Ejercicio de Condicionales <br>Ejercicio 9.<br><br>";

    $nota= rand(0,10);

    switch ($nota) {
        case 0:
        case 1:
        case 2:
        case 3:
            echo "desaprobado";
            break;
        case 4:
        case 5:
            echo "zafamos";
            break;
        case 6:
        case 7:
        case 8:
            echo "Bien!!!";
            break;
        case 9:
            echo "MUY bien!!";
            break;
        case 10:
            echo "Excelente!!!!!";
            break;
        default:
            echo "El número no es válido";
            break;
    }
 

    echo "<br><br>EJERCITACION TERMINADA!";









?>