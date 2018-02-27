<?php
/**
 * File: example_single.php
 * Created by Joao Rito on 27/02/18.
 * Last modified by Joao Rito on 27/02/18 14:06
 * https://github.com/joaorito/php_RenameKeys
 */

include_once ('function.php');



/** Original array */
$original = array(
    'DataHora'  => date('YmdHis'),
    'Produto'   => array(
        array('Nome' => 'Produto 1', 'Value' => 10.00, 'Estoque' => true),
        array('Nome' => 'Produto 2', 'Value' => 15.00, 'Estoque' => true),
        array('Nome' => 'Produto 3', 'Value' => 20.00, 'Estoque' => false)
    ),
    'Entrega'   => array(
        'Logradouro'    => 'Rua Joao, 123',
        'Cidade'        => 'Sao Paulo',
        'Estado'        => 'SP',
        'Telefone'      => array(
            array('DDD' => '11', 'Telefone' => '928374762'),
            array('DDD' => '11', 'Telefone' => '675675676'),
            array('DDD' => '11', 'Telefone' => '9278784762'),
        )
    )
);


/** Map of keys to replace */
$map = array(
    'DataHora'      => 'Date',
    'Produto'       => 'Product',
    'Nome'          => 'Name',
    'Preco'         => 'Price',
    'Estoque'       => 'Avaiable',
    'Entrega'       => 'Delivery',
    'Logradouro'    => 'Address',
    'Cidade'        => 'City',
    'Estado'        => 'State',
    'DDD'           => 'Area Code',
    'Telefone'      => 'Phone'
);

$new = replaceKey($original,$map);

?>

<div style="width: 40%; display: inline-block">
    <div>Original Array</div>
    <pre style="border: 1px; padding: 5px; ">
<?php
print_r($original);
?>
    </pre>
</div>


<div style="width: 40%; display: inline-block">
    <div>New Array</div>
    <pre style="border: 1px; padding: 5px; ">
<?php
print_r($new);
?>
    </pre>
</div>
