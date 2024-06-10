<?php

$veiculos = [
    [
        'modelo' => 'AUDI TT',
        'cor' => 'VERMELHO',
        'ano' => '2015',
        'placa' => 'X6Y4NJ0',
        'marca' => 'AUDI',
        'qtdd portas' => '2',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'FERRARI 448 SPIDER',
        'cor' => 'AZUL',
        'ano' => '2020',
        'placa' => 'QI40VAR',
        'marca' => 'FERRARI',
        'qtdd portas' => '2',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'GOLF GTI',
        'cor' => 'AMARELO',
        'ano' => '2000',
        'placa' => 'EED2CF9',
        'marca' => 'GOLF',
        'qtdd portas' => '4',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'COROLLA',
        'cor' => 'VERDE',
        'ano' => '2025',
        'placa' => 'T6LBU0T',
        'marca' => 'TOYOTA',
        'qtdd portas' => '4',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'PORCHE MACAN',
        'cor' => 'ROXO',
        'ano' => '2008',
        'placa' => 'S4CAS8L',
        'marca' => 'PORCHE',
        'qtdd portas' => '4',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'HONDA CIVIC TURBO S',
        'cor' => 'LILAS',
        'ano' => '2014',
        'placa' => 'I12FT7K',
        'marca' => 'HONDA',
        'qtdd portas' => '4',
        'tipo' => 'CARRO'
    ],
    [

        'modelo' => 'LAMBORGHINI URUS',
        'cor' => 'SKYBLUE',
        'ano' => '2024',
        'placa' => '9C4KKMP',
        'marca' => 'LAMBORGHINI',
        'qtdd portas' => '4',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'HONDA SHADOW 750',
        'cor' => 'ROSA',
        'ano' => '2018',
        'placa' => '3IAK3UY',
        'marca' => 'HONDA',
        'qtdd portas' => '0',
        'tipo' => 'MOTOCICLETA'
    ],
    [
        'modelo' => 'SUZUKI BOULEVARD 800',
        'cor' => 'MARROM',
        'ano' => '2021',
        'placa' => '2Z634EF',
        'marca' => 'SUZUKI',
        'qtdd portas' => '0',
        'tipo' => 'MOTOCLICLETA'
    ],
    [
        'modelo' => 'TESLA MODEL S',
        'cor' => 'PRETO',
        'ano' => '2023',
        'placa' => '3ZIY8IM',
        'marca' => 'TESLA',
        'qtdd portas' => '4',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'NISSAN SKYLINE',
        'cor' => 'PRETO',
        'ano' => '2016',
        'placa' => '5237R4V',
        'marca' => 'NISSAN',
        'qtdd portas' => '2',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'DUCATI DESERT X',
        'cor' => 'BRANCO',
        'ano' => '2022',
        'placa' => '7XLIZ1W',
        'marca' => 'DUCATI',
        'qtdd portas' => '0',
        'tipo' => 'MOTOCLICLETA'
    ],
    [
        'modelo' => 'CHEVROLET S10',
        'cor' => 'PRETO',
        'ano' => '2025',
        'placa' => '3STJQLU',
        'marca' => 'CHEVROLET',
        'qtdd portas' => '4',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'FIAT MOB',
        'cor' => 'LARANJA',
        'ano' => '2020',
        'placa' => '3OASYGL',
        'marca' => 'FIAT',
        'qtdd portas' => '4',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'JEEP COMPASS',
        'cor' => 'MARROM',
        'ano' => '2024',
        'placa' => '2TM8IMT',
        'marca' => 'JEPP',
        'qtdd portas' => '2',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'KAWASAKI KRL 110',
        'cor' => 'MARROM',
        'ano' => '2020',
        'placa' => '9HU67X9',
        'marca' => 'KAWASAKI',
        'qtdd portas' => '0',
        'tipo' => 'MOTOCLICLETA'
    ],
    [
        'modelo' => 'KAWASAKI NINJA 300',
        'cor' => 'VERDE CLARO',
        'ano' => '2017',
        'placa' => '5QPET54',
        'marca' => 'KAWASAKI',
        'qtdd portas' => '0',
        'tipo' => 'MOTOCLICLETA'
    ],
    [
        'modelo' => 'ORBEA WILD H30 XT',
        'cor' => 'CINZA',
        'ano' => '2025',
        'placa' => 'NONE',
        'marca' => 'ORBEA',
        'qtdd portas' => '0',
        'tipo' => 'BICLETA'
    ],
    [
        'modelo' => 'TOYOTA SUPRA',
        'cor' => 'ROXO',
        'ano' => '1998',
        'placa' => 'NONE',
        'marca' => 'TOYOTA',
        'qtdd portas' => '2',
        'tipo' => 'CARRO'
    ],
    [
        'modelo' => 'GTSM1 700C',
        'cor' => 'PRETO',
        'ano' => '2025',
        'placa' => 'NONE',
        'marca' => 'GTSM1',
        'qtdd portas' => '0',
        'tipo' => 'BICLETA'
    ]

];

?>

<table border="1" class="tabela">
    <tr>
        <td>Modelo</td>
        <td>Cor</td>
        <td>Ano</td>
        <td>Placa</td>
        <td>Marca</td>
        <td>Quantidades placas</td>
        <td>Tipo</td>
        <td>Edição</td>
        <td>Remoção</td>
    </tr>

    <?php foreach ($veiculos as $info) { ?>


        <tr>
            <td><?= $info['modelo'] ?></td>
            <td><?= $info['cor'] ?></td>
            <td><?= $info['ano'] ?></td>
            <td><?= $info['placa'] ?></td>
            <td><?= $info['marca'] ?></td>
            <td><?= $info['qtdd portas'] ?></td>
            <td><?= $info['tipo'] ?></td>

            <td><button>Editar</button></td>
            <td><button>Apagar</button></td>
        </tr>

    <?php } ?>


</table>