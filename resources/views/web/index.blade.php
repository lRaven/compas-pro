@extends("layouts.site")

@section('meta')
    <title>Компас ПРО</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
@endsection

@section('content')





    <main>
        <section class="home --home-3" id="home">
            <div class="wrapper">
                <div class="home__content">
                    <h1 class="home__title">compas-pro</h1>
                    <span class="home__description">Компетентная цифровизация бизнеса и автоматизация бизнес процессов</span>
{{--                    <a href="#" class="home__button">Узнать больше</a>--}}
                </div>
            </div>
        </section>

        <section class="about">
            <div class="wrapper">
                <div class="about__content">
                    <div class="about__info">
                        <h1 class="about__info__title">Web-Consulting</h1>
                        <span class="about__info__description">обсудим ваш проект, бесплатно составим техническое задание, сформируем цену, закрепим за проектом специалистов и приступим к работе, осуществляя контроль за всеми последующими этапами работ. </span>
                        <i class="about__info__subtitle">Мы профилируемся на создании сложных систем и сервисов</i>
                    </div>
                    <div class="about__advantages">
                        <div class="advantage">
                            <i class="advantage__icon">
                                <svg>
                                    <use xlink:href="/img/sprite.svg#badge"></use>
                                </svg>
                            </i>
                            <span class="advantage__title"> Качественная работа </span>
                            <span class="advantage__description"> Профессиональный подход к каждому проекту и выполнению отдельных задач.
            Реализуем все идеи и сделаем Ваш бизнес доходным </span>
                        </div>
                        <div class="advantage">
                            <i class="advantage__icon">
                                <svg>
                                    <use xlink:href="/img/sprite.svg#dollar-tag"></use>
                                </svg>
                            </i>
                            <span class="advantage__title"> Цена </span>
                            <span class="advantage__description"> Работая с нами, вы сэкономите свой бюджет и получите качественный
            результат за приемлемые сроки </span>
                        </div>
                        <div class="advantage">
                            <i class="advantage__icon">
                                <svg>
                                    <use xlink:href="/img/sprite.svg#money-bag"></use>
                                </svg>
                            </i>
                            <span class="advantage__title"> Получение прибыли </span>
                            <span class="advantage__description">Грамотно сделанный проект будет приносить вам прибыль в самые короткие
            сроки, благодаря слаженной работе нашей команды</span>
                        </div>
                        <div class="advantage">
                            <i class="advantage__icon">
                                <svg>
                                    <use xlink:href="/img/sprite.svg#badge"></use>
                                </svg>
                            </i>
                            <span class="advantage__title"> Работа в краткие сроки </span>
                            <span class="advantage__description"> Выполним работу без отклонения от сроков технического задания, с контролем выполнения промежуточных этапов заказчиком задания </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services" id="services">
            <div class="services__content">
                <div class="services__card">
                    <h2 class="services__card__title">Услуги</h2>
                    <span class="services__card__description">специализируемся на направлении - интернет для бизнеса с внедрением в структуру бизнес-модели нейросетей и искусственного интеллекта.</span>
{{--                    <a class="services__card__button" href="#">Узнать больше</a>--}}
                </div>
                <ul class="services__list" id="services-list">
                    <li class="services__list__item show">
                        <div class="service">
                            <h3 class="service__title">Создание сложных сайтов для бизнеса</h3>
{{--                            <span class="service__description">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать--}}
{{--            несколько абзацев более менее осмысленного текста </span>--}}
                            <a class="service__button" href="https://telegram.im/@compass_pro"><span>Заказать</span>
                                <svg>
                                    <use xlink:href="/img/sprite.svg#arrow"></use>
                                </svg></a>
                        </div>
                    </li>
                    <li class="services__list__item">
                        <div class="service">
                            <h3 class="service__title">Сайты агрегаторы</h3>
{{--                            <span class="service__description">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать--}}
{{--            несколько абзацев более менее осмысленного текста </span>--}}
                            <a class="service__button" href="https://telegram.im/@compass_pro"><span>Заказать</span> <svg>
                                    <use xlink:href="/img/sprite.svg#arrow"></use>
                                </svg></a>
                        </div>
                    </li>
                    <li class="services__list__item">
                        <div class="service">
                            <h3 class="service__title">Система взаимодействия и администрирования</h3>
{{--                            <span class="service__description">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать--}}
{{--            несколько абзацев более менее осмысленного текста </span>--}}
                            <a class="service__button" href="https://telegram.im/@compass_pro">
                                <span>Заказать</span>
                                <svg>
                                    <use xlink:href="/img/sprite.svg#arrow"></use>
                                </svg>
                            </a>
                        </div>
                    </li>
                    <li class="services__list__item">
                        <div class="service">
                            <h3 class="service__title">Клиентское и внутреннее CRM</h3>
{{--                            <span class="service__description">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать--}}
{{--            несколько абзацев более менее осмысленного текста </span>--}}
                            <a class="service__button" href="https://telegram.im/@compass_pro"><span>Заказать</span> <svg>
                                    <use xlink:href="/img/sprite.svg#arrow"></use>
                                </svg></a>
                        </div>
                    </li>
                </ul>
                <div class="services__navigation">
                    <div class="labels">
                        <span class="label show"></span>
                        <span class="label "></span>
                        <span class="label "></span>
                        <span class="label "></span>
                    </div>
{{--                    <div class="buttons">--}}
{{--                        <button id="button-prev" class="button prev"></button>--}}
{{--                        <button id="button-next" class="button next"></button>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>

        <section class="technologies">
            <div class="wrapper">
                <div class="technologies__content">
                    <h2 class="technologies__title">Технологии</h2>

{{--                    <a href="#" class="technologies__link">Узнать больше</a>--}}
                    <hr>
                    <ul class="technologies__list">
                        <li class="technologies__list__item">
                            <img src="./img/laravel.png" srcset="./img/laravel.webp" alt="">
                        </li>
                        <li class="technologies__list__item">
                            <img src="./img/vue.png" srcset="./img/vue.webp" alt="">
                        </li>
                        <li class="technologies__list__item">
                            <img src="./img/webpack.png" srcset="./img/webpack.webp" alt="">
                        </li>
                        <li class="technologies__list__item">
                            <img src="./img/python.png" srcset="./img/python.webp" alt="">
                        </li>
                        <li class="technologies__list__item">
                            <img src="./img/nodejs.png" srcset="./img/nodejs.webp" alt="">
                        </li>
                        <li class="technologies__list__item">
                            <img src="./img/npm.png" srcset="./img/npm.webp" alt="">
                        </li>
                        <li class="technologies__list__item">
                            <img src="./img/ibm-cloud-data.png" srcset="./img/ibm-cloud-data.webp" alt="">
                        </li>
                        <li class="technologies__list__item">
                            <img src="./img/watson.png" srcset="./img/watson.webp" alt="">
                        </li>
                        <li class="technologies__list__item">
                            <img src="./img/mysql.png" srcset="./img/mysql.webp" alt="">
                        </li>
                        <li class="technologies__list__item">
                            <img src="./img/ibm.png" srcset="./img/ibm.webp" alt="">
                        </li>
                        <li class="technologies__list__item">
                            <img src="./img/websocket.png" srcset="./img/websocket.webp" alt="">
                        </li>
                        <li class="technologies__list__item">
                            <img src="./img/ibm-cloud.png" srcset="./img/ibm-cloud.webp" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="training" id="training">
            <div class="training__content">
                <div class="training__card">
                    <h1 class="training__card__title">ОБУЧЕНИЕ</h1>
                    <span class="training__card__description">воспитываем собственные кадры! Приходите к нам, в том случае если ничего не знаете и не понимаете в программировании! Научим, и предоставим перспективную работу!</span>
{{--                    <a href="https://telegram.im/@compass_pro" class="training__card__button">Оставить заявку</a>--}}
{{--                    <div class="training__card__arrows">--}}
{{--                        <button id="arrow-prev" class="arrow prev"></button>--}}
{{--                        <button id="arrow-next" class="arrow next"></button>--}}
{{--                    </div>--}}
                </div>
                <ul class="training__list" id="services-list">
                    <li class="training__list__item show">
                        <svg>
                            <use xlink:href="/img/sprite.svg#money-bag"></use>
                        </svg>
                        <h3>Трудоустройство</h3>
                        <span>Проводим обучение WEB-программированию с последующим трудоустройством на работу</span>
                    </li>
                    <li class="training__list__item">
                        <svg>
                            <use xlink:href="/img/sprite.svg#badge"></use>
                        </svg>
                        <h3>Новые знания</h3>
                        <span>Наши преподаватели научат вас новым профессиональным навыкам и практикам в области web-разработки</span>
                    </li>
                    <li class="training__list__item">
                        <svg>
                            <use xlink:href="/img/sprite.svg#dollar-tag"></use>
                        </svg>
                        <h3>Новая работа</h3>
                        <span>По результатам проведения обучения, лучших мы пригласим к нам на постоянную работу с возможностью
          карьерного роста</span>
                    </li>
                    <li class="training__list__item">
                        <svg>
                            <use xlink:href="/img/sprite.svg#money-bag"></use>
                        </svg>
                        <h3>Стабильная зарплата</h3>
                        <span>С нашей стороны мы обещаем вам хорошие условия труда, интересные проекты, дружную команду и высокую
          заработную плату</span>
                    </li>
                </ul>
            </div>
        </section>
    </main>


@stop
