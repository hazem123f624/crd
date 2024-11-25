<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
<h1>create product</h1>
<form action="store" method="post">

   <input type="text" name="product[name]" placeholder="name">
   <input type="number" name="product[price]" placeholder="price">
    <textarea name="product[description]" placeholder="descripton"></textarea>
    <input type="file" name="product[img]">

    <label>category</label>
    <SELECT name="product[category_id]">
        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($cat['id']); ?>"><?php echo e($cat['name']); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </SELECT>

    <label>users</label>
    <SELECT name="product[user_id]">
        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($user['id']); ?>"><?php echo e($user['name']); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </SELECT>

    <input type="submit" value="save">
</form>
</body>
</html>
<?php /**PATH C:\laragon\www\backend2023\session3\src\views/products/create.blade.php ENDPATH**/ ?>