<?php $__env->startSection('title', 'Обзор'); ?>
<?php $__env->startSection('content'); ?>
    <div class="header__card">
        <div class="header__text">
            <div class="header__up">
                <div class="logo">
                    <a href="<?php echo e(route('main')); ?>"><img src="/public/assets/tv.png" alt=""></a>
                    <a style="color: black" href="<?php echo e(route('main')); ?>">TopMovie</a>
                    <a style="color: #797979" href="<?php echo e(route('page', 1)); ?>">Фильмы</a>
                    <a style="color: #797979" href="<?php echo e(route('serialsPage', 1)); ?>">Сериалы</a>
                </div>
                <div class="menu">
                    <a style="color: black" href="#">Регистрация</a>
                    <div class="dropdown">
                        <button type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><img src="/public/assets/Menu.png" alt=""></button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Действие</a></li>
                            <li><a class="dropdown-item" href="#">Другое действие</a></li>
                            <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="all__card">
            <div class="text__card">
                <h1 class="card__h1"><?php echo e($item->find('div.watchTitle__title')[0]->text()); ?></h1>
                <div class="under__card">
                    <div class="under__all">
                        <p class="card__params"><?php echo e($item->find('ul.watchParams__paramsList div.watchParams__item_hasDot')[0]->text()); ?></p>
                        <div class="genres card__params">
                            <p class="card__params"><?php echo e($item->find('ul.watchParams__paramsList div.watchParams__item_hasDot')[2]->text()); ?></p>
                            <p class="card__params"><?php echo e($item->find('ul.watchParams__paramsList div.watchParams__item_hasDot')[1]->text()); ?></p>
                        </div>
                        <p class="card__params"><?php echo e($item->find('ul.watchParams__paramsList div.watchParams__item')[0]->text()); ?></p>
                        <p class="card__params"><?php echo e($item->find('ul.watchParams__paramsList div.watchParams__item')[2]->text()); ?></p>
                        <p class="card__params"><?php echo e($item->find('ul.watchParams__paramsList div.watchParams__item')[1]->text()); ?></p>
                    </div>
                </div>
                <div class="card__description">
                    <p class="card__params card__description__one"><?php echo e($item->find('div.clause__text-inner p')[0]->text()); ?></p>
                </div>
            </div>
            <?php if(isset($item->first('img.playerBlock__previewImg')->src)): ?>
                <img class="poster" src="<?php echo e($item->first('img.playerBlock__previewImg')->src); ?>" alt="">
            <?php else: ?>
                <img class="poster" src="/public/assets/no-poster.png" alt="">
            <?php endif; ?>
        </div>
        <div class="rec__movies">
            <h1 class="rec__h1">Схожие по тегам новинки</h1>
            <div class="catalog">
                <?php $__currentLoopData = $catalog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(str_contains($rec->find('div.nbl-poster__propertiesInfo div.nbl-poster__propertiesRow')[0]->text(),$item->find('ul.watchParams__paramsList div.watchParams__item_hasDot')[2]->text())||str_contains($rec->find('div.nbl-poster__propertiesInfo div.nbl-poster__propertiesRow')[0]->text(),$item->find('ul.watchParams__paramsList div.watchParams__item_hasDot')[1]->text())&&str_contains($item->find('div.watchTitle__title')[0]->text(),$rec->find('span.nbl-slimPosterBlock__titleText')[0]->text()) != $rec->find('span.nbl-slimPosterBlock__titleText')[0]->text()): ?>
                        <div class="card">
                            <div class="card__all">
                                <img class="card__poster" src="<?php echo e($rec->find('img.nbl-poster__image')[0]->src); ?>" alt="">
                                <p class="card__name"><?php echo e($rec->find('span.nbl-slimPosterBlock__titleText')[0]->text()); ?></p>
                                <div class="kp">
                                    <img class="rate__kp" src="/public/assets/kp.png" alt="">
                                    <p><?php echo e($rec->find('div.nbl-poster__propertiesRow')[0]->text()); ?>/10</p>
                                </div>
                                    <a class="card__btn" href="<?php echo e(route('serialsView', str_replace('/watch/', '', $rec->find('a.nbl-slimPosterBlock')[0]->href))); ?>">Подробнее</a>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\laravel\resources\views/cardSerials.blade.php ENDPATH**/ ?>