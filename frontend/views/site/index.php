<?php
/* @var $this \yii\web\View */

$this->title = 'Главная страница';
?>
<div class="breadcrumbs">
    Главная страница
    /
    Управление энергетики и жилищно-коммунального хозяйства
</div>
<section class="section-news">
    <div class="row">
        <div class="col-md-4 offset-md-8">
            <div class="d-flex justify-content-between mb-3">
                <a class="news-list-link" href="#">
                    Пресс-центр <i class="fas fa-long-arrow-alt-right"></i>
                </a>
                <a class="news-list-link" href="#">
                    Подписаться на новости
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="/images/3da260c43583974d38f30274680efa3f_1280x720.jpg" class="card-img-top" alt="post-img">
                        <div class="card-body">
                            <h5 class="card-title">В ГОРОДЕ ТУРКЕСТАН ПРОДОЛЖАЕТСЯ РАБОТА ПО ГАЗИФИКАЦИИ СОЦИАЛЬНЫХ ОБЪЕКТОВ</h5>
                            <p class="card-text"><small class="text-muted">12 марта 2021</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="/images/82b11ad587002d10055d39fa6331fda5_1280x720.jpg" class="card-img-top" alt="post-img">
                        <div class="card-body">
                            <h5 class="card-title">ВЕДЕТСЯ  АКТИВНАЯ РАЗЪЯСНИТЕЛЬНАЯ РАБОТА ПО ПОДКЛЮЧЕНИЮ К ПРИРОДНОМУ ГАЗУ</h5>
                            <p class="card-text"><small class="text-muted">23 октября 2020</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                    <small class="text-muted">23 октября 2020</small>
                    <p class="list-group-item__title">
                        ВНИМАНИЮ ЖИТЕЛЕЙ ЖИЛОГО МАССИВА «ТУРАН»
                    </p>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <small class="text-muted">23 октября 2020</small>
                    <p class="list-group-item__title">
                        ПРОВЕДЕН БРИФИНГ ПО ПОДГОТОВКЕ К ОТОПИТЕЛЬНОМУ СЕЗОНУ В ТУРКЕСТАНСКОЙ ОБЛАСТИ ЗА 2020-2021 ГОДЫ
                    </p>
                </a>
                <a href="#" class="list-group-item list-group-item-action" tabindex="-1" aria-disabled="true">
                    <small class="text-muted">23 октября 2020</small>
                    <p class="list-group-item__title">
                        В ГОРОДЕ ТУРКЕСТАН ПРОДОЛЖАЕТСЯ РАБОТА ПО ГАЗИФИКАЦИИ СОЦИАЛЬНЫХ ОБЪЕКТОВ
                    </p>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="section-banner">
    <div class="owl-carousel owl-theme">
        <div class="item">
            <img src="/images/12d371524c754ab8d531ba8fd8e7cece_original.64089.jpg" alt="banner">
        </div>
        <div class="item">
            <img src="/images/8509eeef755fd0d96cb7c7483e0358fe_original.153065.png" alt="banner">
        </div>
    </div>
</section>
<?php
$js =<<<JS
$('.owl-carousel').owlCarousel({
    loop: true,
    margin :10,
    items: 1,
    nav: false,
    autoplay: true,
    autoplayTimeout: 3000
})
JS;

$this->registerCssFile('@web/css/owl.carousel.min.css');
$this->registerCssFile('@web/css/owl.theme.default.min.css');
$this->registerJsFile('@web/js/owl.carousel.min.js', ['pos' => \yii\web\View::POS_READY, 'depends' => \yii\web\JqueryAsset::className()]);
$this->registerJs($js);
?>