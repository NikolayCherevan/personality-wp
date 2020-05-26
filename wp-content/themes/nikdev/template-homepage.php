<?php

/** Template name: Главная Страница */


get_header(); ?>

<div id="pricing" class="pricing-section">
    <div class="container">
        <h2 class="section-title  text-center"> Статьи, которые могу заинтересовать </h2>
        <ul class="populargb">
<?php $populargb = new WP_Query('showposts=5&meta_key=post_views_count&orderby=meta_value_num' );
while ( $populargb->have_posts() ) {
    $populargb->the_post(); ?>
<li>
<div class="mail"><?php the_post_thumbnail(); ?></div>
<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</li>
<?php } ?>
</ul>
    </div>
</div>
<div id="pricing" class="pricing-section">
    <div class="container">
        <h2 class="section-title  text-center"> Партнерские программы для веб-девелопера </h2>
        <div class="wrapp">
            <p> <a href="https://beget.com/?id=1244009" target="_blank"><img src="https://cp.beget.com/promo_data/static/static100x100_4.png" border="0"></a></p>
            <p> <a href="https://surfe.be/ext/429454" target="_blank"><img src="//static.surfe.be/images/banners/ru/240x400_1.gif" alt="Surfe.be - Сервис размещения баннерной рекламы"></a></p>
        </div>

    </div>
</div>
<div id="pricing" class="pricing-section">
    <div class="container text-center">
        <h2 class="section-title"> Народные цены</h2>
        <div class="intro"></div>
        <div class="pricing-wrapper">
            <div class="item item-1 col-md-4 col-sm-4 col-xs-12">
                <div class="item-inner">
                    <h3 class="item-heading"> Реклама "Кризисная, бюджетная"</h3>
                    <div class="price-figure">
                        <span class="currency">$</span><span class="number">2</span>
                    </div>
                    <!--//price-figure-->
                    <div class="price-desc">
                        <p><br> - реклама появится в одном месте сайта<br> - где будет расположена реклама, выбираете вы из доступных мест <br> - баннер, текст, ограничение в размерах</p>



                    </div>
                    <!--//price-desc-->


                </div>
                <!--//item-inner-->
            </div>
            <!--//item-->
            <div class="item item-2 col-md-4 col-sm-4 col-xs-12">
                <div class="item-inner">
                    <h3 class="item-heading"> Реклама <br> "Как для себя" </h3>
                    <div class="price-figure">
                        <span class="currency">$</span><span class="number">10</span>
                    </div>
                    <!--//price-figure-->
                    <div class="price-desc">
                        <p><br> - Реклама появится на всех страницах сайта, расположение выбираете вы из доступных мест.<br> - Баннер, текст, ограничение в размерах </p>



                    </div>
                    <!--//price-desc-->


                </div>
                <!--//item-inner-->
            </div>
            <!--//item-->

            <div class="item item-3 col-md-4 col-sm-4 col-xs-12">
                <div class="item-inner">
                    <h3 class="item-heading"> Реклама <br>"От души"</h3>

                    <div class="price-figure">
                        <span class="currency">$</span><span class="number">50</span>
                        <p class="item-top"> BEST</p>
                    </div>
                    <!--//price-figure-->
                    <div class="price-desc">
                        <p><br> - Реклама появится на всех страницах сайта, расположение выбираете вы сами.<br> - Баннер, текст, фон страницы, реклама в шапке, маскимальный охват</p>

                    </div>
                    <!--//price-desc-->


                </div>
                <!--//item-inner-->
            </div>
            <!--//item-->
        </div>
        <!--//pricing-wrapper-->

    </div>
    <!--//container-->
</div>
<!--//pricing-section-->
<div id="contact" class="contact-section">
    <div class="container text-center">
        <h2 class="section-title with-bg">Contact Us</h2>
        <div class="contact-content">
            <div class="p-bg">
                <div> Задумка проста - Вы связываетесь с нами, мы раскручиваем ваш бизнес до небес! </div>
            </div>

        </div>
        <a class="btn btn-cta btn-primary" href="#wow-modal-id-1"> Связаться </a>

    </div>
    <!--//container-->
</div>
<!--//contact-section-->

<?php get_footer();
