# PHP RenameKeys

This PHP function could be used to automatic rename keys from a object ou a array (single or multidimensional).


Example: Single Arrays

Click to see the code <a href="https://github.com/joaorito/php_RenameKeys/blob/master/example_single.php">example_single.php</a>

<table>
<tr>
<td width=45%>
    <div>Original Array</div>
    <pre style="border: 1px; padding: 5px; ">
Array
(
    [DataHora] => 20180227142904
    [Produto] => Produto 1
    [Preco] => 10
    [Quant] => 2
)
    </pre>
</td>
<td width=45%>
    <div>New Array</div>
    <pre style="border: 1px; padding: 5px; ">
Array
(
    [Date] => 20180227142904
    [Product] => Produto 1
    [Price] => 10
    [Amount] => 2
)
    </pre>
</td>
</tr>
</table>


Example: Multidimensional Arrays

Click to see the code <a href="https://github.com/joaorito/php_RenameKeys/blob/master/example_multi.php">example_multi.php</a>



<table>
<tr>
<td width=45%>
    <div>Original Array</div>
    <pre style="border: 1px; padding: 5px; ">
Array
(
    [DataHora] => 20180227143320
    [Produto] => Array
        (
            [0] => Array
                (
                    [Nome] => Produto 1
                    [Value] => 10
                    [Estoque] => 1
                )

            [1] => Array
                (
                    [Nome] => Produto 2
                    [Value] => 15
                    [Estoque] => 1
                )

            [2] => Array
                (
                    [Nome] => Produto 3
                    [Value] => 20
                    [Estoque] => 
                )

        )

    [Entrega] => Array
        (
            [Logradouro] => Rua Joao, 123
            [Cidade] => Sao Paulo
            [Estado] => SP
            [Telefone] => Array
                (
                    [0] => Array
                        (
                            [DDD] => 11
                            [Telefone] => 928374762
                        )

                    [1] => Array
                        (
                            [DDD] => 11
                            [Telefone] => 675675676
                        )

                    [2] => Array
                        (
                            [DDD] => 11
                            [Telefone] => 9278784762
                        )

                )

        )

)
    </pre>
</td>
<td width=45%>
    <div>New Array</div>
    <pre style="border: 1px; padding: 5px; ">
Array
(
    [Date] => 20180227143320
    [Product] => Array
        (
            [0] => Array
                (
                    [Nome] => Produto 1
                    [Value] => 10
                    [Estoque] => 1
                )

            [1] => Array
                (
                    [Nome] => Produto 2
                    [Value] => 15
                    [Estoque] => 1
                )

            [2] => Array
                (
                    [Nome] => Produto 3
                    [Value] => 20
                    [Estoque] => 
                )

        )

    [Delivery] => Array
        (
            [Logradouro] => Array
                (
                )

            [Cidade] => Array
                (
                )

            [Estado] => Array
                (
                )

            [Telefone] => Array
                (
                    [0] => Array
                        (
                            [DDD] => Array
                                (
                                )

                            [Telefone] => Array
                                (
                                )

                        )

                    [1] => Array
                        (
                            [DDD] => Array
                                (
                                )

                            [Telefone] => Array
                                (
                                )

                        )

                    [2] => Array
                        (
                            [DDD] => Array
                                (
                                )

                            [Telefone] => Array
                                (
                                )

                        )

                )

        )

)
    </pre>
</td>
</tr>
</table>
