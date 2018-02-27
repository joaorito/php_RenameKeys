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
    'Produto'   => 'Produto 1',
    'Preco'     => 10.00,
    'Quant'     => 2
);


/** Map of keys to replace */
$map = array(
    'DataHora'  => 'Date',
    'Produto'   => 'Product',
    'Preco'     => 'Price',
    'Quant'     => 'Amount'
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
