<template>
	<section class="the-portfolio">
		<div class="the-portfolio__container center">
			<div class="the-portfolio__row">
				<div class="the-portfolio__title-wrapper">
					<div class="the-portfolio__title-block"></div>
					<h1 class="the-portfolio__title">Портфолио</h1>
				</div>
				<p class="the-portfolio__description">
					Чтобы вы могли объективно понять, на что мы способны,<br />
					предлагаем вам познакомиться с нашими успешными проектами.
				</p>
			</div>

			<portfolio-slider :list="portfolio"></portfolio-slider>
		</div>
	</section>
</template>

<script>
	import PortfolioSlider from '@/components/portfolio/PortfolioSlider.vue';
	import { mapState } from 'vuex';

	export default {
		name: 'ThePortfolio',
		components: { PortfolioSlider },
		computed: {
			...mapState({ portfolio: (state) => state.Portfolio.portfolio }),
		},
	};
</script>

<style lang="scss" scoped>
	@import '@/assets/scss/variables';

	.the-portfolio {
		display: flex;
		justify-content: center;
		align-items: center;
		background: radial-gradient(
				36.51% 7.19% at 68.78% 84.82%,
				rgba(67, 244, 255, 0.2) 0%,
				rgba(149, 249, 255, 0) 100%
			),
			radial-gradient(
				21.94% 11.24% at 87.72% 51.85%,
				rgba(145, 156, 251, 0.2) 0%,
				rgba(0, 26, 255, 0) 100%
			),
			radial-gradient(
				42.94% 75.51% at 17.25% 36.57%,
				rgba(228, 255, 253, 0.41) 0%,
				rgba(255, 255, 255, 0) 100%
			),
			radial-gradient(
				20.84% 26.87% at 8.47% 75.79%,
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
		}

		&__row {
			display: flex;
			align-items: center;
			justify-content: space-between;
			gap: 4rem;
			margin-bottom: 8rem;
			@media (max-width: 767px) {
				flex-direction: column;
				align-items: flex-start;
				gap: 2rem;
				margin-bottom: 4rem;
			}
		}

		&__description {
			max-width: 70rem;
		}

		&__title {
			width: max-content;
			&-wrapper {
				display: flex;
				align-items: center;
				height: 11rem;
				width: fit-content;
				padding-right: 3.5rem;
				background: url('/public/img/icons/decorative-block-wide.svg') center
					right / contain no-repeat;

				@media (max-width: 1023px) {
					height: 9.5rem;
				}
				@media (max-width: 540px) {
					height: 6.5rem;
				}
			}
		}
	}
</style>
