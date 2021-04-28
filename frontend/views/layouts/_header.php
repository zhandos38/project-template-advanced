<?php

use yii\helpers\Url; ?>
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-5 d-flex align-items-center pl-0">
                <img class="top-bar-img d-none d-sm-block" src="/images/gerb.png" alt="gerb">
                <span class="top-bar-title">Государственные органы <i class="fas fa-chevron-down"></i></span>

                <div>
                    <img  class="top-bar-egov-img" src="/images/logo.svg" alt="logo">
                </div>
            </div>
            <div class="col-md-7 d-flex align-items-center pr-0 justify-content-end">
                <div class="top-bar-icons-box">
                    <div class="top-bar-icon-btn d-flex align-items-center rounded-circle">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="top-bar-icon-btn top-bar-icon-btn--lang d-flex align-items-center rounded-circle">
                        RU
                    </div>
                </div>
                <div class="top-bar-lang-box">
                    <i class="fas fa-user"></i>
                    <a href="/">Вход/Регистрация</a>
                </div>
            </div>
        </div>
    </div>
</div>
<header>
    <div class="header__box">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <a href="/">
                        <div class="d-flex">
                            <img src="/images/gerb.png" alt="logo">
                            <h2 class="header__title text-white">
                                Управление энергетики и жилищно-коммунального хозяйства Туркестанской области
                            </h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="<?= Url::to(['site/about']) ?>">Об управлении</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= Url::to(['site/action']) ?>">Деятельность</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= Url::to(['site/documents']) ?>">Документы</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= Url::to(['site/press']) ?>">Пресс-центр</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= Url::to(['site/contact']) ?>">Контакты</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= Url::to(['site/map']) ?>">Карта</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="d-flex justify-content-end">
                        <i class="nav-bar__search-icon fas fa-search"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
