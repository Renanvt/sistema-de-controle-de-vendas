
<?php
global $static;
include 'static/colaboradores_static.php';
include 'src/functions/soma.php';
include 'src/functions/comissao.php';
include 'src/functions/sal-final.php';


$colaboradores = array(
    1 => array(
        'Colaborador' => 'José',
        'Sal' => array(
            'Salário Fixo' => number_format(2000.3, 2,'.','')
        ),
        'Vendas' => array(
            'Venda Semana 1'  => number_format(1500.10, 2, '.', ''),
            'Venda Semana 2' => number_format(2250.00, 2, '.', ''),
            'Venda Semana 3' => number_format(2800.00, 2, '.', ''),
            'Venda Semana 4' => number_format(1900.00, 2, '.', '')
        ),
        'Resultado' => array(
            'Total Vendas' =>  soma($colaboradores_static)[1],
            'Comissão' => comissao($colaboradores_static)[1],
            'Salário Final' => salFinal($colaboradores_static)[1]
        )
    ),
    2 => array(
        'Colaborador' => 'Tadeu',
        'Sal' => array(
            'Salário Fixo' => number_format(2500.00, 2, '.', ''),
        ),
        'Vendas' => array(
            'Venda Semana 1' => number_format(1500.00, 2, '.', ''),
            'Venda Semana 2' => number_format(4150.20, 2, '.', ''),
            'Venda Semana 3' => number_format(3500.00, 2, '.', ''),
            'Venda Semana 4' => number_format(2100.00, 2, '.', ''),
        ),
        'Resultado' => array(
            'Total Vendas' => soma($colaboradores_static)[2],
            'Comissão' => comissao($colaboradores_static)[2],
            'Salário Final' => salFinal($colaboradores_static)[2]
        )
    ),
    3 => array(
        'Colaborador' => 'Amanda',
        'Sal' => array(
            'Salário Fixo' => number_format(1800.00, 2, '.', ''),
        ),
        'Vendas' => array(
            'Venda Semana 1' =>  number_format(1500.00, 2, '.', ''),
            'Venda Semana 2' => number_format(6950.00, 2, '.', ''),
            'Venda Semana 3' => number_format(4800.40, 2, '.', ''),
            'Venda Semana 4' => number_format(2250.00, 2, '.', ''),
        ),
        'Resultado' => array(
            'Total Vendas' => soma($colaboradores_static)[3],
            'Comissão' => comissao($colaboradores_static)[3],
            'Salário Final' => salFinal($colaboradores_static)[3]
        )
    ),
    4 => array(
        'Colaborador' => 'Tsara',
        'Sal' => array(
            'Salário Fixo' => number_format(2200.00, 2, '.', ''),
        ),
        'Vendas' => array(
            'Venda Semana 1' => number_format(1500.00, 2, '.', ''),
            'Venda Semana 2' => number_format(4250.80, 2, '.', ''),
            'Venda Semana 3' => number_format(3200.00, 2, '.', ''),
            'Venda Semana 4' => number_format(1980.00, 2, '.', ''),
        ),
        'Resultado' => array(
            'Total Vendas' => soma($colaboradores_static)[4],
            'Comissão' => comissao($colaboradores_static)[4],
            'Salário Final' => salFinal($colaboradores_static)[4]
        )
    ),

);
return $colaboradores;

?>





