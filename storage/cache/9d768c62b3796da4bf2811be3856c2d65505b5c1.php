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
<a class="btn btn-info" href="create">create new category</a>
  <table class="table">
      <tr>
          <th>id</th>
          <th>name</th>
          <th>edit</th>
          <th>delete</th>
      </tr>
      <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <td><?php echo e($cat["id"]); ?></td>
              <td><?php echo e($cat["name"]); ?></td>
              <td><a class="btn btn-success" href="edit/<?php echo e($cat['id']); ?>">edit</a></td>
              <td><a class="btn btn-warning" href="delete/<?php echo e($cat['id']); ?>">delete</a></td>
          </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
</body>
</html><?php /**PATH C:\laragon\www\backend2023\session3\src\views/category.blade.php ENDPATH**/ ?>