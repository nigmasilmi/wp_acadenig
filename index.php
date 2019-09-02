<?php get_header();?>





<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/library-hero.jpg');?>)"></div>
    <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Bienvenido!</h1>
        <h2 class="headline headline--medium">Esto te va a gustar</h2>
        <h3 class="headline headline--small">¿Qué carrera quieres estudiar?</h3>
        <a href="#" class="btn btn--large btn--blue">Encuentra tu carrera</a>
    </div>
</div>

<div class="full-width-split group">
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">Próximos Eventos</h2>

            <div class="event-summary">
                <a class="event-summary__date t-center" href="#">
                    <span class="event-summary__month">Mar</span>
                    <span class="event-summary__day">25</span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="#">Historia Latinoamericana</a></h5>
                    <p>Recuerda y vive la historia de tu tierra<a href="#" class="nu gray">Conoce los detalles del evento</a></p>
                </div>
            </div>
            <div class="event-summary">
                <a class="event-summary__date t-center" href="#">
                    <span class="event-summary__month">Abr</span>
                    <span class="event-summary__day">02</span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="#">Python Hackathon</a></h5>
                    <p>42 Horas para crear la mejor solución usando Python<a href="#" class="nu gray">Entra a la competición</a></p>
                </div>
            </div>

            <p class="t-center no-margin"><a href="#" class="btn btn--blue">Qué más hay?</a></p>

        </div>
    </div>
    <div class="full-width-split__two">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">Nuestros Blogs</h2>

            <div class="event-summary">
                <a class="event-summary__date event-summary__date--beige t-center" href="#">
                    <span class="event-summary__month">Ene</span>
                    <span class="event-summary__day">20</span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="#">Somos la mejor experiencia en Universidades</a></h5>
                    <p>For the 100th year in a row we are voted #1. <a href="#" class="nu gray">Conoce más</a></p>
                </div>
            </div>
            <div class="event-summary">
                <a class="event-summary__date event-summary__date--beige t-center" href="#">
                    <span class="event-summary__month">Feb</span>
                    <span class="event-summary__day">04</span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="#">Profesores en el Ranking de los mejores de Latinoamérica</a></h5>
                    <p>Two of our professors have been in national news lately. <a href="#" class="nu gray">Mira quiénes son</a></p>
                </div>
            </div>

            <p class="t-center no-margin"><a href="#" class="btn btn--yellow">Ver todos los posts</a></p>
        </div>
    </div>
</div>

<div class="hero-slider">
    <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/bus.jpg') ?>);">
        <div class="hero-slider__interior container">
            <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Locomoción Gratuita</h2>
                <p class="t-center">Transporte gratuito para todos nuestros estudiantes</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Mira los detalles</a></p>
            </div>
        </div>
    </div>
    <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/apples.jpg') ?>);">
        <div class="hero-slider__interior container">
            <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Una manzana al día</h2>
                <p class="t-center">Nuestros nutricionistas y dentistas son fans de las manzanas</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Conoce más</a></p>
            </div>
        </div>
    </div>
    <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/bread.jpg') ?>);">
        <div class="hero-slider__interior container">
            <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Barra Libre</h2>
                <p class="t-center">Almuerzos y onces gratuitas</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Entérate</a></p>
            </div>
        </div>
    </div>
</div>


<?php

get_footer();
?>