<?php

use yii\helpers\Url;
?>
<header class="site-header" id="header">
    <nav class="navbar navbar-expand-lg transparent-bg static-nav">
        <div class="container">
            <a class="navbar-brand" href="/main">
                <img src="/maintemplate/img/logo.png" alt="logo" class="logo-default">
                <img src="/maintemplate/img/logo.svg" alt="logo" class="logo-scrolled">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto ml-xl-auto mr-xl-0">
                    <li class="nav-item">
                        <a class="nav-link pagescroll active" href="/"><?= Yii::t('app', 'Главная') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll scrollupto" href="<?= Url::to(['site/about']) ?>"><?= Yii::t('app', 'О нас') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#speakers"><?= Yii::t('app', 'Курсы') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#blog"><?= Yii::t('app', 'Лайфхаки') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#contact"><?= Yii::t('app', 'Приложения') ?></a>
                    </li>
                    <li class="nav-item">
                        <?= $this->render('select-language') ?>
                    </li>
                    <li class="nav-item">
                        <?php if (!Yii::$app->user->identity): ?>
                            <a class="navbar-btn btn btn-info" href="<?= Url::to(['site/about']) ?>"><?= Yii::t('app', 'Войти / Зарегистрироватся') ?></a>
                        <?php else: ?>
                            <a class="navbar-dropdown-btn btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= Yii::t('app', 'Привет') ?>, <?= Yii::$app->user->identity->name ?>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
        <!--side menu open button-->
        <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span></span> <span></span> <span></span>
        </a>
    </nav>
    <!-- side menu -->
    <div class="side-menu gradient-bg">
        <div class="overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close btn-close-no-padding" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link pagescroll active" href="/"><?= Yii::t('app', 'Главная') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll scrollupto" href="<?= Url::to(['site/about']) ?>"><?= Yii::t('app', 'О нас') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#speakers"><?= Yii::t('app', 'Курсы') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#blog"><?= Yii::t('app', 'Лайфхаки') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#contact"><?= Yii::t('app', 'Приложения') ?></a>
                    </li>
                    <li class="nav-item">
                        <?= $this->render('select-language') ?>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-btn btn btn-info" href="<?= Url::to(['site/about']) ?>"><?= Yii::t('app', 'Войти / Зарегистрироватся') ?></a>
                    </li>
                </ul>
            </nav>
            <div class="side-footer w-100">
                <ul class="social-icons-simple white top40">
                    <li><a href="https://facebook.com/shonbay.online" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a href="https://www.instagram.com/shonbay.online" target="_blank" class="insta"><i class="fab fa-instagram"></i></a> </li>
                </ul>
                <p class="whitecolor">© 2020 Online English</p>
            </div>
        </div>
    </div>
    <div id="close_side_menu" class="tooltip tooltipstered" style="display: none;"></div>
    <!-- End side menu -->
</header>