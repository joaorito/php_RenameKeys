# PHP RenameKeys

This PHP function could be used to automatic rename keys from a object or a array (single or multidimensional).


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
        [DataHora] => 20180227162644
        [Produto] => Array
            (
                [0] => Array
                    (
                        [Nome] => Produto 1
                        [Preco] => 10
                        [Estoque] => 1
                    )
    
                [1] => Array
                    (
                        [Nome] => Produto 2
                        [Preco] => 15
                        [Estoque] => 1
                    )
    
                [2] => Array
                    (
                        [Nome] => Produto 3
                        [Preco] => 20
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
        [Date] => 20180227162644
        [Product] => Array
            (
                [0] => Array
                    (
                        [Name] => Produto 1
                        [Price] => 10
                        [Avaiable] => 1
                    )
    
                [1] => Array
                    (
                        [Name] => Produto 2
                        [Price] => 15
                        [Avaiable] => 1
                    )
    
                [2] => Array
                    (
                        [Name] => Produto 3
                        [Price] => 20
                        [Avaiable] => 
                    )
    
            )
    
        [Delivery] => Array
            (
                [Address] => Rua Joao, 123
                [City] => Sao Paulo
                [State] => SP
                [Phone] => Array
                    (
                        [0] => Array
                            (
                                [Area Code] => 11
                                [Phone] => 928374762
                            )
    
                        [1] => Array
                            (
                                [Area Code] => 11
                                [Phone] => 675675676
                            )
    
                        [2] => Array
                            (
                                [Area Code] => 11
                                [Phone] => 9278784762
                            )
    
                    )
    
            )
    
    )
        </pre>
</td>
</tr>
</table>
