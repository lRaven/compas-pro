<template>
	<section class="consulting">
		<div class="consulting__container center">
			<div class="consulting__col">
				<div class="consulting__title-wrapper">
					<h1 class="consulting__title">Web-Consulting</h1>
				</div>
				<p class="consulting__description">
					Обсудим ваш проект, бесплатно составим техническое задание,
					сформируем цену, закрепим за проектом специалистов и
					приступим к работе, осуществляя контроль за всеми
					последующими этапами работ.
				</p>
			</div>
			<div class="consulting__col">
				<div class="consulting__benefit">
					<img
						src="img/icon/code.svg"
						class="consupting__benefit-icon"
						alt=""
					/>
					<div class="consulting__benefit-content">
						<h4 class="consulting__benefit-title">Качество</h4>
						<p class="consulting__benefit-description">
							Профессиональный подход к каждому проекту и
							выполнению отдельных задач. Реализуем все идеи и
							сделаем Ваш бизнес доходным.
						</p>
					</div>
				</div>
				<div class="consulting__benefit">
					<img
						src="img/icon/price.svg"
						class="consupting__benefit-icon"
						alt=""
					/>
					<div class="consulting__benefit-content">
						<h4 class="consulting__benefit-title">Цена</h4>
						<p class="consulting__benefit-description">
							Вы сэкономите свой бюджет и получите отличный
							результат в приемлемые сроки
						</p>
					</div>
				</div>
				<div class="consulting__benefit">
					<img
						src="img/icon/code.svg"
						class="consupting__benefit-icon"
						alt=""
					/>
					<div class="consulting__benefit-content">
						<h4 class="consulting__benefit-title">
							Получение прибыли
						</h4>
						<p class="consulting__benefit-description">
							Грамотно сделанный проект будет приносить вам
							прибыль, благодаря слаженной работе нашей команды
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</template>

<script>
	export default {
		name: "Web Consulting",
	};
</script>

<style lang="scss" scoped>
	.consulting {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		background: radial-gradient(
				19.91% 98.94% at 87.72% 51.85%,
				rgba(145, 156, 251, 0.09) 0%,
				rgba(0, 26, 255, 0) 100%
			),
			radial-gradient(
				42.94% 75.51% at 17.25% 36.57%,
				rgba(228, 255, 253, 0.41) 0%,
				rgba(255, 255, 255, 0) 100%
			),
			radial-gradient(
				22.59% 39.52% at 8.47% 75.79%,
				rgba(108, 79, 155, 0.2) 0%,
				rgba(112, 29, 168, 0) 100%
			),
			linear-gradient(
				0deg,
				rgba(160, 186, 191, 0.2) -2.08%,
				rgba(160, 186, 191, 0.124) 100%
			),
			#ffffff;
		&__container {
			display: flex;
			align-items: center;
			justify-content: space-between;
			gap: 10rem;
		}
		&__col {
		}

		&__title {
			width: max-content;
			&-wrapper {
				display: flex;
				align-items: center;
				height: 11rem;
				width: fit-content;
				padding-right: 6rem;
				background: url(/img/icon/decorative-block.svg) center right /
					contain no-repeat;
				margin-bottom: 10rem;
			}
		}
		&__description {
			display: block;
			max-width: 57rem;
			width: max-content;
		}

		&__benefit {
			display: flex;
			align-items: flex-start;
			gap: 2rem;
			&:nth-child(2) {
				transform: translateX(5rem);
				.consulting__benefit-text {
					max-width: 37rem;
				}
			}
			+ .consulting__benefit {
				margin-top: 7rem;
			}

			&-icon {
			}
			&-content {
			}
			&-title {
				color: var(--light-purple);
				margin-bottom: 2rem;
			}
			&-description {
				font-size: 1.4rem;
				line-height: 2rem;
				font-weight: 300;
				color: var(--light-dark);
			}
		}
	}
</style>
