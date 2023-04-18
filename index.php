<?php

    header('Access-Control-Allow-Origin: *');

    $data = [
        [
            'imagem'=>'https://blog.dankicode.com/wp-content/uploads/2020/12/desenvolvedor-full-stack-em-2021.png',
            'conteudo'=>'Desde o inicio da era digital, mais e mais empresas e organizações estão criando sua presença online
            exclusiva por meio de seus sites;

            Naturalmente, o dominio do desenvolvimento web está testemunhando um crescimento nunca ants, e com certeza a demanda por
            desenvolvedores full stack experientes e qualificados aumentou consideravelmente.

            Gostaria de fazer parte desse time? Então não sai desse post pois hoje nós iremos aprender.'
        ],
        [
            'imagem'=>'https://blog.dankicode.com/wp-content/uploads/2020/11/o-que-e-python.png',
            'conteudo'=>'Desde o inicio da era digital, mais e mais empresas e organizações estão criando sua presença online
            exclusiva por meio de seus sites;

            Naturalmente, o dominio do desenvolvimento web está testemunhando um crescimento nunca ants, e com certeza a demanda por
            desenvolvedores full stack experientes e qualificados aumentou consideravelmente.

            Gostaria de fazer parte desse time? Então não sai desse post pois hoje nós iremos aprender.'
        ],
        [
            'imagem'=>'https://blog.dankicode.com/wp-content/uploads/2020/12/desenvolvedor-full-stack-em-2021.png',
            'conteudo'=>'Desde o inicio da era digital, mais e mais empresas e organizações estão criando sua presença online
            exclusiva por meio de seus sites;

            Naturalmente, o dominio do desenvolvimento web está testemunhando um crescimento nunca ants, e com certeza a demanda por
            desenvolvedores full stack experientes e qualificados aumentou consideravelmente.

            Gostaria de fazer parte desse time? Então não sai desse post pois hoje nós iremos aprender.'
        ],

    ];
    
    die(json_encode($data));

?>