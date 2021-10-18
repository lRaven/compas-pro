<footer class="footer wrapper">
	<a href="/" class="footer__logo">
		<img src="img/logo.png" alt="">
		<div class="footer__title">
			<p>Компас ПРО</p>
			<span>всегда в правильном направлении</span>
		</div>
	</a>
	<ul class="footer__menu">
		<li class="footer__menu__item">
			<a href="#services">Услуги</a>
		</li>
		{{-- <li class="footer__menu__item">--}}
			{{-- <a href="#">Партнерство</a>--}}
			{{-- </li>--}}
		<li class="footer__menu__item">
			<a href="#training">Обучение</a>
		</li>
		{{-- <li class="footer__menu__item">--}}
			{{-- <a href="#">Написать письмо</a>--}}
			{{-- </li>--}}
	</ul>
	<a href="https://telegram.im/@compass_pro" class="footer__messenger">
		<svg>
			<use xlink:href="./img/sprite.svg#messenger-dark"></use>
		</svg>
	</a>
	<ul class="footer__partners">
		<li>
			<img src="/img/huawei.png" alt="">
		</li>
		<li>
			<img src="/img/ibm-business.png" alt="">
		</li>
	</ul>
	<hr>
	<div class="footer__copyright"> Создание и продвижение сайтов © 2015-{{\Carbon\Carbon::now()->format('Y')}} </div>
</footer>

<!-- <script src="js/libs.min.js"></script> -->
<script src="js/main.min.js"></script>
</body>

</html>