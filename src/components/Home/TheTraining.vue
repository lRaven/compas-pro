<template>
	<section class="the-training">
		<div class="the-training__container center">
			<div class="the-training__col">
				<div class="the-training__title-wrapper">
					<div class="the-training__title-block"></div>
					<h1 class="the-training__title">Обучение</h1>
				</div>
				<div class="the-training__tabs">
					<div
						class="the-training__nav-decorative"
						:class="{ moved: tab === 'dev' }"
					></div>
					<button
						class="the-training__nav selected"
						:class="{ selected: tab === 'newbie' }"
						@click="tab = 'newbie'"
					>
						<h4 class="the-training__nav-text">Новичкам</h4>
					</button>
					<button
						class="the-training__nav"
						:class="{ selected: tab === 'dev' }"
						@click="tab = 'dev'"
					>
						<h4 class="the-training__nav-text">Разработчикам</h4>
					</button>

					<transition-group mode="out-in">
						<div class="the-training__tab" v-if="tab === 'newbie'">
							<p class="the-training__description">
								Пройдите обучение в дружном коллективе профессиональных
								разработчиков. Гарантированная помощь в изучении материала,
								практика на реальных проектах, оценка ваших компетенций для
								выбора индивидуальной программы обучения в интересующем вас
								направлении WEB-разработки. По прохождении курса обучения
								гарантированное трудоустройство в уютном офисе.
							</p>
						</div>
						<div class="the-training__tab" v-else-if="tab === 'dev'">
							<p class="the-training__description">
								Пройдите обучение в дружном коллективе разработчиков. Мы
								гарантируем помощь в изучении материала, практику на реальных
								проектах, оценку ваших компетенций для выбора индивидуальной
								программы обучения в интересующем вас направлении
								WEB-разработки.
							</p>
						</div>
					</transition-group>
					<v-button
						color="purple"
						icon="/img/icons/tg.svg"
						text="Оставить заявку"
						@click="openExternalSite('https://telegram.im/@compass_pro')"
					></v-button>
				</div>
			</div>
			<div class="the-training__col">
				<condition-card
					icon="/img/icons/code.svg"
					title="Трудоустройство"
					description="По результатам обучения лучших учеников приглашаем на постоянную работу"
				></condition-card>
				<condition-card
					icon="/img/icons/code.svg"
					title="Карьерный рост"
					description="Предоставляем возможности для карьерного роста и получения ценного опыта"
				></condition-card>
				<condition-card
					icon="/img/icons/code.svg"
					title="Новые знания"
					description="Наши преподаватели обучат вас необходимым профессиональным навыкам в области WEB-разработки"
				></condition-card>
				<condition-card
					icon="/img/icons/code.svg"
					title="Достойные условия"
					description="Обещаем интересные проекты, дружную команду и высокую заработную плату"
				></condition-card>
			</div>
		</div>
	</section>
</template>

<script>
	import ConditionCard from '@/components/conditions/ConditionCard';
	import { openExternalSite } from '@/js/openExternalSite';

	export default {
		name: 'TheTraining',
		components: { ConditionCard },
		data: () => ({ tab: 'newbie' }),
		methods: { openExternalSite },
	};
</script>

<style lang="scss" scoped>
	@import '@/assets/scss/variables';

	.the-training {
		padding-top: 6rem;
		padding-bottom: 6rem;
		background: radial-gradient(
				19.91% 40.74% at 87.72% 51.85%,
				rgba(145, 156, 251, 0.2) 0%,
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
			$white;
		&__container {
			display: flex;
			gap: 3rem;
		}
		&__title {
			width: max-content;
			&-wrapper {
				display: flex;
				align-items: center;
				height: 11rem;
				width: fit-content;
				padding-right: 2.5rem;
				background: url('/public/img/icons/decorative-block.svg') center right /
					contain no-repeat;
				margin-bottom: 10rem;
			}
		}
		&__col {
			&:first-child {
				max-width: 47rem;
			}
			&:last-child {
				display: grid;
				grid-template-columns: repeat(2, 1fr);
				grid-template-rows: repeat(2, max-content);
				grid-gap: 3rem 5rem;
				.condition-card {
					&:nth-child(odd) {
						transform: translateY(8rem);
					}
				}
			}
		}

		&__tabs {
			position: relative;
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			grid-gap: 0 2rem;
			.v-button {
				grid-column: 1/3;
				max-width: 32rem;
			}
		}
		&__tab {
			grid-area: 2/1/2/3;
			margin-bottom: 5rem;
			min-height: 26rem;
		}
		&__description {
			line-height: 2.8rem;
		}

		&__nav {
			user-select: none;
			height: 7.2rem;
			display: flex;
			align-items: center;
			margin-bottom: 3rem;
			background-color: transparent;
			z-index: 2;
			&-text {
				position: relative;
				text-transform: uppercase;
				font-weight: 400;
				color: $light-purple;
				padding: 0 1rem;
				&::after {
					content: '';
					position: absolute;
					left: 0;
					bottom: -1rem;
					width: 100%;
					height: 0.1rem;
					background-color: $light-purple;
					transition: all 0.2s ease;
				}
			}
			&:nth-child(2) {
				grid-area: 1/1;
			}
			&-decorative {
				transform: translateX(-8rem);
				grid-area: 1/1;
				height: 7.2rem;
				background: linear-gradient(
						286.2deg,
						$light-purple 10.05%,
						#772d76 82.75%
					),
					$gray;
				opacity: 0.2;
				transition: all 0.3s ease;

				&.moved {
					transform: translateX(17rem);
					background: linear-gradient(286.2deg, $blue 10.05%, $purple 82.75%),
						linear-gradient(286.2deg, $blue 10.05%, $purple 82.75%), $gray;

					@media (max-width: 1023px) {
						transform: translateX(100%);
					}
				}
			}
			&.selected {
				.the-training__nav {
					&-text {
						color: $middle-dark;
						font-weight: 700;
						&::after {
							width: 0;
						}
					}
				}
			}
		}
	}

	@media (max-width: 1200px) {
		.the-training {
			&__container {
				gap: 2rem;
			}
			&__col {
				&:last-child {
					grid-gap: 2rem 3rem;
				}
			}
		}
	}

	@media (max-width: 1170px) {
		.the-training {
			&__container {
				justify-content: center;
			}
			&__col {
				&:first-child {
					max-width: 50%;
				}
				&:last-child {
					display: flex;
					flex-direction: column;
					gap: 2rem;

					.condition-card {
						&:nth-child(odd) {
							transform: inherit;
						}
					}
				}
			}
			&__nav {
				&-decorative {
					width: 15rem;
				}
			}
		}
	}

	@media (max-width: 1023px) {
		.the-training {
			&__col {
				&:first-child {
					max-width: inherit;
				}
			}
			&__title {
				&-wrapper {
					height: 9.5rem;
					margin-bottom: 5rem;
				}
			}
			&__tabs {
				grid-gap: 0;
				grid-template-columns: repeat(2, 50%);
				justify-content: space-between;
				gap: 1rem;
			}
			&__nav {
				justify-content: center;
				&-text {
				}
				&-decorative {
					width: 100%;
					transform: inherit;
				}
			}
		}
	}

	@media (max-width: 767px) {
		.the-training {
			&__container {
				flex-direction: column;
			}
			&__nav {
				height: 5rem;
				&-decorative {
					height: 5rem;
				}
			}
			&__tab {
				min-height: inherit;
			}
		}
	}

	@media (max-width: 540px) {
		.the-training {
			&__title {
				&-wrapper {
					height: 6.5rem;
				}
			}
			&__nav {
				&:nth-child(3) {
					.the-training__nav-text {
						padding-left: 0;
					}
				}
			}
			&__tabs {
			}
		}
	}
</style>
