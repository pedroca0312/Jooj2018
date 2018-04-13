<html>
<head></head>
    <body>
<h1>Categorias</h1>
<table>
    <tr>
        <th>#</th>
        <th>Nome da Categoria</th>
    </tr>

    <tr>
        <td>]</td>
        <td>Eletronicos</td>
    </tr>

    <?php foreach ($categorias as $categoria): ?>
    <tr>
        <td><?= $categoria->getId();?></td>
        <td><a href="?acao=exibir&id=<?= $categoria->getId(); ?>

    </tr>
</table>
</body>
</html>