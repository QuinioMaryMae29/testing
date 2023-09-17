<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <form action="/save" method="post">
        <label>code:</label>
        <input type="text" name="code" placeholder="code">
        <br><br>
        <label>name:</label>
        <input type="text" name="name" placeholder="name">
        <br><br>
        <label>quantity:</label>
        <input type="text" name="quantity" placeholder="quantity">
        <br><br>
        <input type="submit" value="save">
    </form>
    <br>
    <h1>Product Listing</h1>
    <table border="1">
        <tr>
            <th>code</th>
            <th>name</th>
            <th>quantity</th>
            <th>action</th>
        </tr>
        <?php foreach ($product as $pr): ?>
            <tr>
                <td><?= $pr['code'] ?></td>
                <td><?= $pr['name'] ?></td>
                <td><?= $pr['quantity'] ?></td>
                <td><a href="/delete/<?= $pr['id'] ?>">delete</a> || <a href="/edit/<?= $pr['id'] ?>">edit</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>