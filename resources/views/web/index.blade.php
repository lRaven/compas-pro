@extends("layouts.site")

@section('meta')
<title> Компас ПРО </title>
<meta name="description" content="">
<meta name="keywords" content="">
@endsection

@section('content')
<main>
	<section class="home" id="home">
		<div id="bg-canvas">
			<canvas id="canvas"></canvas>
		</div>
		<div class="wrapper">
			<div class="home__content">
				<h1 class="home__title"> compas-pro </h1>
				<span class="home__description"> Компетентная цифровизация бизнеса и автоматизация бизнес процессов </span>
				{{-- <a href="#" class="home__button"> Узнать больше </a>--}}
			</div>
		</div>
	</section>

	<section class="about">
		<div class="wrapper">
			<div class="about__content">
				<div class="about__info">
					<h1 class="about__info__title"> Web-Consulting </h1>
					<span class="about__info__description">
						обсудим ваш проект, бесплатно составим техническое задание, сформируем
						цену, закрепим за проектом специалистов и приступим к работе, осуществляя контроль за всеми последующими
						этапами работ.
					</span>
					<i class="about__info__subtitle"> Наш профиль - создание сложных систем и сервисов </i>
				</div>
				<div class="about__advantages">
					<div class="advantage">
						<i class="advantage__icon">
							<svg>
								<use xlink:href="/img/sprite.svg#badge"></use>
							</svg>
						</i>
						<span class="advantage__title"> Качество </span>
						<span class="advantage__description">
							Профессиональный подход к каждому проекту и выполнению отдельных задач.
							Реализуем все идеи и сделаем Ваш бизнес доходным.
						</span>
					</div>
					<div class="advantage">
						<i class="advantage__icon">
							<svg>
								<use xlink:href="/img/sprite.svg#dollar-tag"></use>
							</svg>
						</i>
						<span class="advantage__title"> Цена </span>
						<span class="advantage__description">
							Вы сэкономите свой бюджет и получите отличный
							результат в приемлемые сроки
						</span>
					</div>
					<div class="advantage">
						<i class="advantage__icon">
							<svg>
								<use xlink:href="/img/sprite.svg#money-bag"></use>
							</svg>
						</i>
						<span class="advantage__title"> Получение прибыли </span>
						<span class="advantage__description">
							Грамотно сделанный проект будет приносить вам прибыль, благодаря слаженной работе нашей команды
						</span>
					</div>
					<div class="advantage">
						<i class="advantage__icon">
							<svg>
								<use xlink:href="/img/sprite.svg#badge"></use>
							</svg>
						</i>
						<span class="advantage__title"> Работа </span>
						<span class="advantage__description">
							Выполним работу без отклонения от технического задания, с
							контролем выполнения промежуточных этапов заказчиком задания
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="services" id="services">
		<div class="services__content">
			<div class="services__card">
				<h1 class="services__card__title"> Услуги </h1>
				<span class="services__card__description">
					специализируемся на направлении - интернет для бизнеса с внедрением в
					структуру бизнес-модели нейросетей и искусственного интеллекта.
				</span>
				{{-- <a class="services__card__button" href="#">Узнать больше</a>--}}
			</div>
			<ul class="services__list" id="services-list">
				<li class="services__list__item show">
					<div class="service">
						<div class="service__header">
							<h3 class="service__title"> Создание сложных сайтов для бизнеса </h3>
							<span class="service__subtitle">
								Проект рассчитан на корректную работу
								при крупном
								количестве посетителей единовременно и высоких нагрузках на сервер.
							</span>
						</div>
						<a class="service__button" href="https://telegram.im/@compass_pro">
							<span> Заказать </span>
							<svg>
								<use xlink:href="/img/sprite.svg#arrow"></use>
							</svg>
						</a>
					</div>
				</li>
				<li class="services__list__item">
					<div class="service">
						<div class="service__header">
							<h3 class="service__title"> Сайты агрегаторы </h3>
							<span class="service__subtitle">
								Сайт, который агрегирует (собирает) и классифицирует информацию и предложения разных компаний на одном
								ресурсе.
							</span>
						</div>
						<a class="service__button" href="https://telegram.im/@compass_pro">
							<span> Заказать </span>
							<svg>
								<use xlink:href="/img/sprite.svg#arrow"></use>
							</svg>
						</a>
					</div>
				</li>
				<li class="services__list__item">
					<div class="service">
						<div class="service__header">
							<h3 class="service__title"> Система взаимодействия и администрирования </h3>
							<span class="service__subtitle">
								Механизм, позволяющий пользователям одной информационной базы систем общаться друг с
								другом в режиме
								реального времени.
							</span>
						</div>
						<a class="service__button" href="https://telegram.im/@compass_pro">
							<span> Заказать </span>
							<svg>
								<use xlink:href="/img/sprite.svg#arrow"></use>
							</svg>
						</a>
					</div>
				</li>
				<li class="services__list__item">
					<div class="service">
						<div class="service__header">
							<h3 class="service__title"> CRM </h3>
							<span class="service__subtitle"> Системы управления взаимоотношений с клиентами </span>
						</div>
						<a class="service__button" href="https://telegram.im/@compass_pro">
							<span> Заказать </span>
							<svg>
								<use xlink:href="/img/sprite.svg#arrow"></use>
							</svg>
						</a>
					</div>
				</li>
				<li class="services__list__item">
					<div class="service">
						<div class="service__header">
							<h3 class="service__title"> Кросплощадки </h3>
							<span class="service__subtitle"> Кросплатформенная разработка </span>
						</div>
						<a class="service__button" href="https://telegram.im/@compass_pro">
							<span> Заказать </span>
							<svg>
								<use xlink:href="/img/sprite.svg#arrow"></use>
							</svg>
						</a>
					</div>
				</li>
				<li class="services__list__item">
					<div class="service">
						<div class="service__header">
							<h3 class="service__title"> Дизайн и внедрение </h3>
							<span class="service__subtitle">
								Проектирование пользовательских веб-интерфейсов для сайтов или веб-приложений
							</span>
						</div>
						<a class="service__button" href="https://telegram.im/@compass_pro">
							<span> Заказать </span>
							<svg>
								<use xlink:href="/img/sprite.svg#arrow"></use>
							</svg>
						</a>
					</div>
				</li>
				<li class="services__list__item">
					<div class="service">
						<div class="service__header">
							<h3 class="service__title"> Скрапинг/ Краулинг </h3>
							<span class="service__subtitle">
								Автоматизированная обработка,
								приведение к человекочитаемому виду доступных данных
							</span>
						</div>
						<a class="service__button" href="https://telegram.im/@compass_pro">
							<span> Заказать </span>
							<svg>
								<use xlink:href="/img/sprite.svg#arrow"></use>
							</svg>
						</a>
					</div>
				</li>
				<li class="services__list__item">
					<div class="service">
						<div class="service__header">
							<h3 class="service__title"> Роботы соцсетей </h3>
							<span class="service__subtitle">
								Автоматизированные боты - для работы с клиентами, интеграция
								в соцсети и месенджеры
							</span>
						</div>
						<a class="service__button" href="https://telegram.im/@compass_pro">
							<span> Заказать </span>
							<svg>
								<use xlink:href="/img/sprite.svg#arrow"></use>
							</svg>
						</a>
					</div>
				</li>
				<li class="services__list__item">
					<div class="service">
						<div class="service__header">
							<h3 class="service__title">
								Marketplace / Marketplace Management
							</h3>
							<span class="service__subtitle">
								Система администрирования, осуществляющая управление и обеспечивающая настройки параметров процессов
							</span>
						</div>
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
						<div class="service__header">
							<h3 class="service__title">
								UX/UI-дизайн
							</h3>
							<span class="service__subtitle">
								Проектирование пользовательских интерфейсов
							</span>
						</div>
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
						<div class="service__header">
							<h3 class="service__title">
								C#
							</h3>
							<span class="service__subtitle">
								Разработка мобильных приложений, бэкенда, решение консалтинговых задач
							</span>
						</div>
						<a class="service__button" href="https://telegram.im/@compass_pro">
							<span>Заказать</span>
							<svg>
								<use xlink:href="/img/sprite.svg#arrow"></use>
							</svg>
						</a>
					</div>
				</li>
			</ul>
			<div class="services__navigation">
				<div class="labels">
					<span class="label show" onclick="servicesScrollNav(1)"></span>
					<span class="label " onclick="servicesScrollNav(2)"></span>
					<span class="label " onclick="servicesScrollNav(3)"></span>
					<span class="label " onclick="servicesScrollNav(4)"></span>
					<span class="label " onclick="servicesScrollNav(5)"></span>
					<span class="label " onclick="servicesScrollNav(6)"></span>
					<span class="label " onclick="servicesScrollNav(7)"></span>
					<span class="label " onclick="servicesScrollNav(8)"></span>
					<span class="label " onclick="servicesScrollNav(9)"></span>
					<span class="label " onclick="servicesScrollNav(10)"></span>
					<span class="label " onclick="servicesScrollNav(11)"></span>
				</div>
				<div class="buttons">
					<button id="button-prev" class="button prev" onclick="servicesScrollBtn(2)"></button>
					<button id="button-next" class="button next" onclick="servicesScrollBtn(1)"></button>
				</div>
			</div>
		</div>
	</section>

	<section class="technologies">
		<div class="wrapper">
			<div class="technologies__content">
				<h2 class="technologies__title"> Технологии </h2>
				{{-- <a href="#" class="technologies__link"> Узнать больше </a>--}}
				<hr>
				<ul class="technologies__list">
					<li class="technologies__list__item">
						<img src="./img/laravel.svg" alt="">
					</li>
					<li class="technologies__list__item">
						<img src="./img/vue.svg" alt="">
					</li>
					<li class="technologies__list__item">
						<img src="./img/react.svg" alt="">
					</li>
					<li class="technologies__list__item">
						<img src="./img/python.svg" alt="">
					</li>
					<li class="technologies__list__item">
						<img src="./img/csharp.svg" alt="">
					</li>
					<li class="technologies__list__item">
						<img src="./img/nodejs.svg" alt="">
					</li>
					<li class="technologies__list__item">
						<img src="./img/bootstrap.svg" alt="">
					</li>
					<li class="technologies__list__item">
						<img src="./img/git.svg" alt="">
					</li>
					<li class="technologies__list__item">
						<img src="./img/webpack.svg" alt="">
					</li>
					<li class="technologies__list__item">
						<img src="./img/npm.svg" alt="">
					</li>
					<li class="technologies__list__item">
						<img src="./img/mysql.svg" alt="">
					</li>
					<li class="technologies__list__item">
						<img src="./img/ibm.svg" alt="">
					</li>
					<li class="technologies__list__item">
						<img src="./img/websocket.png" srcset="./img/websocket.webp" alt="">
					</li>
					<li class="technologies__list__item">
						<img src="./img/airflow.svg" alt="">
					</li>

					<li class="technologies__list__item">
						<img src="./img/hadoop.svg" alt="">
					</li>
					<li class="technologies__list__item">
						<img src="./img/postgresql.svg" alt="">
					</li>
					<li class="technologies__list__item">
						<img src="./img/scrapy.png" alt="">
					</li>
					<li class="technologies__list__item">
						<img src="./img/aws.svg" alt="">
					</li>
				</ul>
			</div>
		</div>
	</section>

	<section class="training" id="training">
		<div class="training__content">
			<div class="training__card">
				<h1 class="training__card__title"> ОБУЧЕНИЕ </h1>
				<span class="training__card__description1">
					Новичкам: пройдите обучение в дружном коллективе
					профессиональных разработчиков. Гарантированная помощь в
					изучении материала, практика на реальных проектах, оценка
					ваших компетенций для выбора индивидуальной программы
					обучения в интересующем вас направлении WEB-разработки. По
					прохождении курса обучения гарантированное трудоустройство* в
					уютном офисе.
				</span>
				<span class="training__card__description2">
					Разработчикам: углубленное изучение языков
					программирования, практика на реальных проектах, помощь
					наставника, гарантированное трудоустройство*, карьерный
					рост, уютный офис с удобным расположением, комфортное
					рабочее место и лояльная система организации рабочего
					процесса.
				</span>
				<a href="https://telegram.im/@compass_pro" class="training__card__button"> Оставить заявку </a>
				<div class="training__card__arrows">
					<button id="arrow-prev" class="arrow prev" onclick="trainingScrollBtn(2)"></button>
					<button id="arrow-next" class="arrow next" onclick="trainingScrollBtn(1)"></button>
				</div>
			</div>
			<ul class="training__list" id="traning-list">
				<li class="training__list__item show">
					<div class="training__item">
						<svg>
							<use xlink:href="/img/sprite.svg#money-bag"></use>
						</svg>
						<h3> Трудоустройство </h3>
						<span> Проводим обучение WEB-программированию с последующим трудоустройством на работу </span>
					</div>

				</li>
				<li class="training__list__item">
					<div class="training__item">
						<svg>
							<use xlink:href="/img/sprite.svg#badge"></use>
						</svg>
						<h3> Новые знания </h3>
						<span> Наши преподаватели научат вас новым профессиональным навыкам и практикам в области
							web-разработки </span>
					</div>

				</li>
				<li class="training__list__item">
					<div class="training__item">
						<svg>
							<use xlink:href="/img/sprite.svg#dollar-tag"></use>
						</svg>
						<h3> Новая работа </h3>
						<span>
							По результатам проведения обучения, лучших мы пригласим к нам на постоянную работу с возможностью
							карьерного роста
						</span>
					</div>

				</li>
				<li class="training__list__item">
					<div class="training__item">
						<svg>
							<use xlink:href="/img/sprite.svg#money-bag"></use>
						</svg>
						<h3> Стабильная зарплата </h3>
						<span>
							С нашей стороны мы обещаем вам хорошие условия труда, интересные проекты, дружную команду и высокую
							заработную плату
						</span>
					</div>

				</li>
			</ul>
		</div>
	</section>

	<section class="compas-pro" id="compas-pro">
		<div class="compas-pro__content">
			<div class="compas-pro__card">
				<h1 class="compas-pro__card__title"> КОМПАС про </h1>
				<span class="compas-pro__card__description">
					Компас-про на рынке веб консалтинга
					находится с 2015 года.
				</span>
				<span class="compas-pro__card__description2">
					Мы имеем собственную проектную деятельность с
					портфолио проектов
				</span>
				<a href="https://telegram.im/@compass_pro" class="compas-pro__card__button"> Оставить заявку </a>
				<div class="compas-pro__card__arrows">
					<button id="arrow-prev" class="arrow prev" onclick="compassScrollBtn(2)"></button>
					<button id="arrow-next" class="arrow next" onclick="compassScrollBtn(1)"></button>
				</div>
			</div>
			<ul class="compas-pro__list" id="compas-pro-list">
				<li class="compas-pro__list__item show">
					<div class="compas-pro__info">
						<h3> Карьерный рост </h3>
						<span>
							Поощрительное отношение менеджерского
							состава к личным инициативам повышения уровня личностного роста.
						</span>
					</div>

				</li>
				<li class="compas-pro__list__item">
					<div class="compas-pro__info">
						<h3> Досуг </h3>
						<span>
							Совместное проведение активного досуга для сплочения и воспитания дружеских отношений среди коллектива
						</span>
					</div>
				</li>
				<li class="compas-pro__list__item">
					<div class="compas-pro__info">
						<h3> Дружный коллектив профессиональных разработчиков </h3>
						<span>
							Формирование правильной
							мотивации,
							системы поощрений, а также используют специальные методы управления персоналом.
						</span>
					</div>
				</li>
				<li class="compas-pro__list__item">
					<div class="compas-pro__info">
						<h3> Комфортные условия организации труда </h3>
						<span>
							Современные компьютеры.
							Чистый светлый офис, в тихом месте. Зона столовой, имеется собственная кухня. Зона кофе. Вкуснейший
							зерновой кофе, печеньки и конфетки за наш счет.
						</span>
					</div>
				</li>
			</ul>
		</div>
		<div class="address">
			<script type="text/javascript" charset="utf-8" async
				src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae55f846dc8f9b59c77b59a4cd630d23fc490894f1828da4f4b57768de6f9792b&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true">
				</script>
		</div>
	</section>
</main>
@stop