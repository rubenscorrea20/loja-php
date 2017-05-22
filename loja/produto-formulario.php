<?php include("cabecalho.php");
    include("conecta.php");
    include("banco-categoria.php");

    $categorias = listaCategorias($conexao);

?>
            <h1>Formulário de produto</h1>
            <form action="adiciona-produto.php" method="post">
                <table class="table">
                    <tr>
                        <td>Nome</td>
                        <td><input class="form-control" type="text" name="nome"></td>
                    </tr>
                    <tr>
                        <td>Preco</td>
                        <td><input class="form-control" type="number" name="preco"></td>
                    </tr>
                    <tr>
                        <td>Descricão</td>
                        <td><textarea class="form-control" name="descricao"></textarea></td>
                    </tr>
                    <tr>
                        <td>Categoria</td>
                        <td>
                            <?php foreach($categorias as $categoria) : ?>
                                <td><input type="radio" name="categoria_id" value="<?=$categoria['id']?>">
                                    <?=$categoria['nome']?></td><br/>
                            <?php endforeach ?>
                        </td>
                    </tr>
                    <tr>
                        <td><input class="btn btn-primary" type="submit" value="cadastrar"></td>
                    </tr>
                </table>
            </form>
<?php include("rodape.php");?>