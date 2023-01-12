<?php $__env->startSection('title', 'Главная'); ?>
<?php $__env->startSection('content'); ?>
    <div class="header">
        <div class="image"></div>
        <div class="header__text">
            <div class="header__up">
                <div class="logo">
                    <a href="<?php echo e(route('main')); ?>"><img src="/public/assets/tv.png" alt=""></a>
                    <a href="<?php echo e(route('main')); ?>">TopMovie</a>
                    <a style="color: #797979" href="<?php echo e(route('page', 1)); ?>">Фильмы</a>
                    <a style="color: #797979" href="<?php echo e(route('serialsPage', 1)); ?>">Сериалы</a>
                </div>
                <div class="menu">
                    <a href="#">Регистрация</a>
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
            <div class="header__down">
                <h1>Флэшбэк (2022)</h1>
                <div class="rate">
                    <div class="imdb">
                        <img src="/public/assets/imdb.png" alt="">
                        <p>5.7/10</p>
                    </div>
                    <div class="kp">
                        <img src="/public/assets/kp.png" alt="">
                        <p>6.5/10</p>
                    </div>
                </div>
                <p class="description">Алекс Льюис, профессиональный киллер с репутацией, в какой-то момент пошел против ветра и теперь вынужден отбиваться и от ФБР, и от криминального босса. Все потому, что убийца отказался нарушить свой моральный кодекс.</p>
            </div>
        </div>
    </div>
    <div class="body__main">
        <div class="navigate">
            <h1>Новые фильмы</h1>
            <div class="dropdown">
                <button class="btn pages_btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Страница
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="<?php echo e(route('page', 1)); ?>">1</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('page', 2)); ?>">2</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('page', 3)); ?>">3</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('page', 4)); ?>">4</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('page', 5)); ?>">5</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('page', 6)); ?>">6</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('page', 7)); ?>">7</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('page', 8)); ?>">8</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('page', 9)); ?>">9</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('page', 10)); ?>">10</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('page', 11)); ?>">11</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('page', 12)); ?>">12</a></li>
                </ul>
            </div>
        </div>

        <div class="catalog">
            <?php $__currentLoopData = $catalog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(isset($item->find('img.nbl-poster__image')[0]->src)): ?>
                <div class="card">
                    <div class="card__all">
                        <img class="card__poster" src="<?php echo e($item->find('img.nbl-poster__image')[0]->src); ?>" alt="">
                        <p class="card__name"><?php echo e($item->find('span.nbl-slimPosterBlock__titleText')[0]->text()); ?></p>
                        <div class="kp">
                            <img class="rate__kp" src="/public/assets/kp.png" alt="">
                            <p><?php echo e($item->find('div.nbl-poster__propertiesRow')[0]->text()); ?>/10</p>
                        </div>
                        <a class="card__btn" href="<?php echo e(route('card', $item->find('a.nbl-slimPosterBlock')[0]->attr('data-content-id'))); ?>">Подробнее</a>
                    </div>
                </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\laravel\resources\views/main.blade.php ENDPATH**/ ?>