<?php echo $__env->make('layouts.global.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body style="background-color: #f8f9fa;">
    <div style="padding: 11px;padding-top: 11px;padding-bottom: 11px;">
        <?php echo $__env->make('layouts.global.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.search_page.searchbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php if(isset($products)): ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ingredienti</th>
                        <th>Prezzo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($products) > 0): ?>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <a style="color:black; text-decoration: none;"
                                        href="<?php echo e(url('product/' . $product->guid)); ?>">
                                        <?php echo e($product->name); ?>

                                    </a>
                                </td>
                                <td>
                                    <a style="color:black; text-decoration: none;"
                                        href="<?php echo e(url('product/' . $product->guid)); ?>">
                                        <?php echo e($product->recipes); ?>

                                    </a>
                                </td>
                                <td>
                                    <a style="color:black; text-decoration: none;"
                                        href="<?php echo e(url('product/' . $product->guid)); ?>">
                                        € <?php echo e(number_format($product->price, 2, ',', '')); ?>

                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>

                        <tr>
                            <td>Nessun risultato </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        <?php endif; ?>
        <?php echo $__env->make('layouts.global.cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php echo $__env->make('layouts.global.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<?php /**PATH C:\TAVOLI\fastoder.laravel\resources\views/search.blade.php ENDPATH**/ ?>