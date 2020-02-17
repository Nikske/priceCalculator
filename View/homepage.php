<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Becode - Boiler plate MVC</title>
</head>
<body>
<?php require 'includes/header.php' ?>
<form action="#" method="post">
    <section>
        <label for="users">Choose a person:</label>

        <select id="users">

            <?php for ($i = 0; $i < count($userArray); $i++): ?>
                <option value= <?php echo $userArray[$i]->getId() ?>> <?php echo$userArray[$i]->getName() ?></option>
            <?php endfor; ?>


        </select>
    </section>
    <section>
        <label for="product">Choose a product:</label>

        <select name="product" id="product">

            <?php for ($i = 0; $i < count($productArray); $i++): ?>
                <option value= <?php echo $productArray[$i]->getProductId() ?>> <?php echo $productArray[$i]->getProductName() ?></option>
            <?php endfor; ?>


        </select>
    </section>
    <input type="submit" value="require">
</form>
<?php require 'includes/footer.php' ?>
</body>
</html>