<?php

use yii\bootstrap\Html;

if (Yii::$app->language === 'ru') {
    echo Html::a('<img class="navbar-flag" src="/img/kazakhstan-flag-round-icon-64.png" alt="KAZ">', array_merge(
        \Yii::$app->request->get(),
        [\Yii::$app->controller->route, 'language' => 'kz']
    ),
        [
            'class' => 'nav-link'
        ]);
} else {
    echo Html::a('<img class="navbar-flag" src="/img/russia-flag-round-icon-64.png" alt="RUS">', array_merge(
        \Yii::$app->request->get(),
        [\Yii::$app->controller->route, 'language' => 'ru']
    ),
    [
        'class' => 'nav-link'
    ]);
}