<?php

$animais_detalhes = [
    'cachorro' => [
        'nome' => 'Cachorro',
        'caracteristicas' => [
            ['mora numa casinha', 'cachorro/mora_numa_casinha.jpg'],
            ['tem patas', 'cachorro/tem_patas.jpg']
        ]
    ],
    'coruja' => [
        'nome' => 'Coruja',
        'caracteristicas' => [
            ['gosta da noite', 'coruja/gosta_da_noite.jpg'],
            ['tem olhos grandes', 'coruja/tem_olhos_grandes.jpg']
        ]
    ],
    'gato' => [
        'nome' => 'Gato',
        'caracteristicas' => [
            ['tem bigode', 'gato/tem_bigode.jpg'],
            ['tem unhas afiadas', 'gato/tem_unhas_afiadas.jpg']
        ]
    ],
    'rato' => [
        'nome' => 'Rato',
        'caracteristicas' => [
            ['gosta de queijo', 'rato/gosta_de_queijo.jpeg'],
            ['tem poucos dentes', 'rato/poucos_dentes.jpg']
        ]
    ]
];


$animais = array_keys($animais_detalhes);
$escolha_aleatoria = rand(0, 3);
$escolha_aleatoria2 = (  ( $escolha_aleatoria + 1 ) > 3 ) ? ( $escolha_aleatoria - 1 ) : ( $escolha_aleatoria + 1 );
$animal_escolhido = $animais_detalhes[$animais[$escolha_aleatoria]];


?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>Hello, world!</title>

        <style>
            body {
                background: lightgreen;
            }

            .card-image img {
                object-fit: cover;
                object-position: center;
                width: 100%;
                max-height: 200px;
            }

            img.img-animal {
                object-fit: none;
                object-position: center;
                width: 100%;
                max-height: 200px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid p-4 pb-2" style="background: lightskyblue">
            <div class="row mt-2">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="card card-image d-block">
                        <img src="./imagens/<?=$animal_escolhido['caracteristicas'][0][1]?>" class="card-img-top" alt="<?=$animal_escolhido['caracteristicas'][0][0]?>">
                        <div class="card-body">
                            <p class="card-text"><?=$animal_escolhido['caracteristicas'][0][0]?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-image d-block">
                        <img src="./imagens/<?=$animal_escolhido['caracteristicas'][1][1]?>" class="card-img-top" alt="<?=$animal_escolhido['caracteristicas'][1][0]?>">
                        <div class="card-body">
                            <p class="card-text"><?=$animal_escolhido['caracteristicas'][1][0]?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-2 mt-3" style="background: lightgreen">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <a href="votar.php?apresentado=<?=$animais[$escolha_aleatoria]?>&escolhido=<?=($escolha_aleatoria > 1 ) ? $animais[$escolha_aleatoria] :  $animais[$escolha_aleatoria2]?>">
                        <img width="256" src="./imagens/<?= ($escolha_aleatoria > 1 ) ? $animais[$escolha_aleatoria] :  $animais[$escolha_aleatoria2] ?>.png" class="img-fluid"
                    alt="<?=$animal_escolhido['caracteristicas'][0][0]?>" />
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="votar.php?apresentado=<?=$animais[$escolha_aleatoria]?>&escolhido=<?=($escolha_aleatoria > 1 ) ? $animais[$escolha_aleatoria2] :  $animais[$escolha_aleatoria]?>">
                        <img width="256" src="./imagens/<?=($escolha_aleatoria > 1 ) ? $animais[$escolha_aleatoria2] :  $animais[$escolha_aleatoria]?>.png" class="img-fluid"
                    alt="<?=$animal_escolhido['caracteristicas'][1][0]?>" />
                    </a>                   
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
