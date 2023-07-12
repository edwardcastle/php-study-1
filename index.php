<?php
$name = 'Eduardo Gonzalez';
$jobs = [
    [
        'title' => 'php developer',
        'description' => 'This is an awesome job!!'
    ],
    [
        'title' => 'python developer',
        'description' => 'This is a good programming language'
    ],
    [
      'title' => 'javascript developer',
      'description' => 'This is the language which I have more experience with'
      ],
];

$arreglo = [
    'keyStr1' => 'lado',
    0 => 'ledo',
    'keyStr2' => 'lido',
    1 => 'lodo',
    2 => 'ludo'
];

$countries = [
    ['Mexico' => 'Monterrey', 'Querétaro', 'Guadalajara'],
    ['Colombia' => 'Bogota', 'Cartagena', 'Medellin'],
    ['Cuba' => 'La Habana', 'Artemisa', 'Holguin']
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<ul>
    <li><?php echo $jobs[0]['title'] ?></li>
    <li><?php echo $jobs[1]['title'] ?></li>
    <li><?php echo $jobs[2]['title'] ?></li>
</ul>

<!-- just checking do while -->
<ul>
    <?php
    $index = 0;
    do {
        echo '<li>';
        echo '<h3>'. $jobs[$index]['title'] . '</h3>';
        echo 'description: '. $jobs[$index]['description'];
        echo '<li/>';
        $index = $index + 1;
    } while ($index < 3)
    ?>
</ul>

<hr/>
<!-- just checking for -->
<ul>
	<?php
	for ($idx = 0; $idx < count($jobs); $idx++) {
			echo '<li>';
			echo '<h3>' . $jobs[$idx]['title'] . '</h3>';
			echo 'description:' . $jobs[$idx]['description'];
			echo '</li>';
		}
	?>
</ul>

<!-- Ejercicio 1.
Escribe el código necesario para generar la cadena final usando el arreglo dado -->
<!--
Lado, ledo, lido, lodo, ludo,
decirlo al revés lo dudo.
Ludo, lodo, lido, ledo, lado,
¡Qué trabajo me ha costado!-->
<ul>
    <li><?php echo $arreglo['keyStr1'] ?>,
        <?php echo $arreglo[0]?>,
        <?php echo $arreglo['keyStr2']?>,
        <?php echo $arreglo[1]?>,
        <?php echo $arreglo[2]?>,
    </li>
    <li><?php echo $arreglo[2] ?>,
        <?php echo $arreglo[1]?>,
        <?php echo $arreglo['keyStr2']?>,
        <?php echo $arreglo[0]?>,
        <?php echo $arreglo['keyStr1']?>,
    </li>
</ul>
<!--
Ejercicio 2.
Crea un arreglo que contenga como clave los nombres de 5 países y como valor otro arreglo con 3 ciudades que pertenezcan a ese país, después utiliza un ciclo foreach, para imprimir el nombre del país seguido de las ciudades que definiste:

Ejemplo,

México: Monterrey Querétaro Guadalajara
Colombia: Bogota Cartagena Medellin
-->
</body>
</html>

