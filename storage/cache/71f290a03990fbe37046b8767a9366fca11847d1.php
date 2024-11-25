<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Document</title>
</head>
<body>
<h1>edit product</h1>
<form action="../update" method="post">

    <input type="hidden" value="<?php echo e($data['id']); ?>" name="product_id">
    <input type="text" value="<?php echo e($data['name']); ?>" name="product[name]"  placeholder="name">
    <input type="number" value="<?php echo e($data['id']); ?>" name="product[price]" placeholder="price">
    <textarea name="product[description]"  placeholder="descripton"></textarea>
    <input type="file" value="<?php echo e($data['img']); ?>" name="product[img]">
    <input type="submit" value="update">

</form>
</body>
</html><?php /**PATH C:\laragon\www\backend2023\session3\src\views/products/edit.blade.php ENDPATH**/ ?>