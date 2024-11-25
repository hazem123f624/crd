<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--water.css--><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
<a class="btn btn-info" href="create">create new product</a>
<table class="table">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>description</th>
        <th>img</th>
        <th>category</th>
        <th>user</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            
            <td><?php echo e($pro["id"]); ?></td>
            <td><?php echo e($pro["name"]); ?></td>
            <td><?php echo e($pro["price"]); ?></td>
            <td><?php echo e($pro["description"]); ?></td>
            <td><?php echo e($pro["img"]); ?></td>
            <td><?php echo e($pro["category_id"]); ?></td>
            <td><?php echo e($pro["user_id"]); ?></td>
            <td><a class="btn btn-success" href="edit/<?php echo e($pro['id']); ?>">edit</a></td>
            <td><a class="btn btn-warning" href="delete/<?php echo e($pro['id']); ?>">delete</a></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html><?php /**PATH C:\laragon\www\backend2023\session3\src\views/products/product.blade.php ENDPATH**/ ?>