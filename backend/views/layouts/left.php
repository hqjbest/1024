<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => '员工管理', 'icon' => 'file-code-o', 'url' => ['/users']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    [
                        'label' => '权限管理',
                        'icon' => 'fa fa-connectdevelop',
                        'url' => ['#'],
                        'options' => ['class' => 'treeview'],
                        'items' => [
                            [
                                'label' => '用户管理',
                                'icon' => 'fa fa-table',
                                'url' => ['/user/index'],
                                //'active'=>(Yii::$app->controller->id=='moderator' || Yii::$app->controller->id=='assignment' ),
                            ],
//                          [
//                              'label' => '权限管理',
//                              'icon' => 'fa fa-table',
//                              'url' => ['/admin/assignment'],
//                              'active'=>(Yii::$app->controller->id=='assignment')
//                          ],
                            [
                                'label' => '角色管理',
                                'icon' => 'fa fa-flask',
                                'url' => ['/admin/role'],
                                //'active'=>(Yii::$app->controller->id=='role')
                            ],
                            [
                                'label' => '权限管理',
                                'icon' => 'fa fa-sitemap',
                                'url' => ['/admin/permission'],
                                //'active'=>(Yii::$app->controller->id=='permission')
                            ],
                            [
                                'label' => '路由管理',
                                'icon' => 'fa fa-database',
                                'url' => ['/admin/route'],
                                //'active'=>(Yii::$app->controller->id=='route')
                            ],
                        ],
                        //'visible' => Yii::$app->user->can('/admin/*'),
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
