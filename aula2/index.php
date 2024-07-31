<?php
    $nome='Cleber';
    echo 'Meu primeiro nome é ' .$nome. '<br>';

    echo '<hr>';

    echo 'texto que usa "aspas" sdasd <br>';

    echo '<hr>';

    echo '<h1 style=color:blue>OPA</h1>';

    echo '<hr>';

    $linguagens=['PHP', 'JAVA', 'PYTHON', 2024];
    echo $linguagens[2];

    echo '<hr>';

    $clientes=['nome'=>'Haroldo', 'idade'=>57];
    echo $clientes['nome'].'<hr>'.$clientes["idade"];

   
?>

    <hr>

<?php
    $cadastro=[
        1=>[
            'nome'=>'Leonardo',
            "telefone" =>[
                'residencial'=>'0000-0000',
                'comercial'=>'0001-1000',
            ]
            
        ],

        2=>[
            'nome'=>'Hamilton',
            'telefone'=>'0000-0000',
        ],
    ];
    echo $cadastro[1]['telefone']['comercial'];

    echo   '<br>';

    echo $cadastro[1]['nome'];

    echo '<hr>';

    $valor_1 = 1;
    $valor_2 = 2;
    $valor_3 = 3;
    $resultado = $valor_1 + $valor_2 * $valor_3;
    echo 'Resultado = '.$resultado;

    echo '<hr>';

    $d = 20;
    $d-= 3;
    echo $d.'<br>';

    echo '<hr>';

    $f='curso de ';
    $f.='PHP';
    echo $f.'<br>';

    echo '<hr>';

    $g=false;
    $h=true;
    $i=true;
    var_dump($g && $h);
    var_dump($h && $i);
    var_dump($g && $h && $i);
    var_dump($g || $h);
    var_dump($h || $i);
    var_dump($g || $h || $i);
    var_dump($g || $h && $i);