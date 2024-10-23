<?php


// Definimos los departamentos del hospital
$departamentos = array("Cardiología", "Neurología");

// Definimos los doctores por departamento
$doctoresCardiologia = array("Dr. García", "Dra. Pérez");
$doctoresNeurologia = array("Dr. Martínez");

// Definimos los pacientes, diagnósticos y tratamientos para los doctores de Cardiología
$pacientesDrGarcia = array(
    array("Paciente" => "Juan", "Diagnóstico" => "Arritmia", "Tratamiento" => "Medicamento X"),
    array("Paciente" => "María", "Diagnóstico" => "Infarto", "Tratamiento" => "Cirugía")
);

$pacientesDraPerez = array(
    array("Paciente" => "Luis", "Diagnóstico" => "Hipertensión", "Tratamiento" => "Medicamento Y")
);

// Definimos los pacientes, diagnósticos y tratamientos para los doctores de Neurología
$pacientesDrMartinez = array(
    array("Paciente" => "Ana", "Diagnóstico" => "Migraña", "Tratamiento" => "Analgésico"),
    array("Paciente" => "Pedro", "Diagnóstico" => "Epilepsia", "Tratamiento" => "Medicamento Z")
);

// Creamos un array multidimensional para almacenar toda la información del hospital
$hospital = array(
    "Cardiología" => array(
        "Dr. García" => $pacientesDrGarcia,
        "Dra. Pérez" => $pacientesDraPerez
    ),
    "Neurología" => array(
        "Dr. Martínez" => $pacientesDrMartinez
    )
);

// Mostramos la información del hospital usando foreach
echo "<h1>Información del Hospital</h1>";

foreach ($hospital as $departamento => $doctores) {
    // Mostramos el nombre del departamento
    echo "<h2>Departamento: $departamento</h2>";

    foreach ($doctores as $doctor => $pacientes) {
        // Mostramos el nombre del doctor
        echo "<h3>Doctor: $doctor</h3>";

        foreach ($pacientes as $paciente) {
            // Mostramos los datos del paciente, su diagnóstico y tratamiento
            echo "<p>Paciente: " . $paciente["Paciente"] . "</p>";
            echo "<p>Diagnóstico: " . $paciente["Diagnóstico"] . "</p>";
            echo "<p>Tratamiento: " . $paciente["Tratamiento"] . "</p>";
            echo "<hr>"; // Separador para cada paciente
        }
    }
}
?>
