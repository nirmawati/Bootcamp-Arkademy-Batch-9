<aside class="main-sidebar">

    <section class="sidebar">
    <br>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Home', 'icon' => 'file-code-o', 'url' => ['/']],
                    ['label' => 'Data Penduduk', 'icon' => 'file-code-o', 'url' => ['/person']],
                    ['label' => 'Wilayah', 'icon' => 'dashboard', 'url' => ['/regions']],
                    ['label' => 'Summary', 'icon' => 'dashboard', 'url' => ['/summary']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],

                ],
            ]
        ) ?>

    </section>

</aside>
