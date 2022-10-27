<template>
	<div class="page-lawyer-accountant">
		<div class="page-lawyer-accountant__top">
			<the-header />

			<h1 class="page-lawyer-accountant__title center" v-once>
				ПО юристибухгалтер.рф
			</h1>
		</div>

		<main class="page-lawyer-accountant__main">
			<section class="page-lawyer-accountant__section center">
				<a
					href="/docs/description_of_the_functional_characteristics_of_the_yuristbuhgalter.rf_software.pdf"
					target="_blank"
					class="page-lawyer-accountant__link"
				>
					Описание функциональных характеристик программного обеспечения
					“юристибухгалтер.рф”
				</a>

				<a
					href="/docs/software_yuristibuhgalter.rf_technical_documentation.pdf"
					target="_blank"
					class="page-lawyer-accountant__link"
				>
					ПО Юристибухгалтер.рф Техническая документация
				</a>
			</section>
		</main>
	</div>
</template>

<script>
	import TheHeader from '@/components/TheHeader.vue';

	export default {
		name: 'PageLawyerAccountant',
		components: {
			TheHeader,
		},
	};
</script>

<style lang="scss" scoped>
	@import '@/assets/scss/variables';

	.page-lawyer-accountant {
		display: grid;
		grid-template-rows: max-content 1fr;
		min-height: 100vh;
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

		&__top {
			background: url(/public/img/banner-bg-right.png) center / cover no-repeat;

			.the-header {
				position: static;
				transform: none;
			}
		}

		&__title {
			padding: 4rem 1.5rem 2rem 1.5rem;
			color: $white;
		}

		&__main {
			padding: 5rem 1.5rem;
		}
		&__section {
			padding: 0;
			height: 100%;
			min-height: inherit;
		}

		&__link {
			font-size: 2.4rem;
			display: block;
			color: $dark;
			+ .page-lawyer-accountant__link {
				margin-top: 2rem;
			}
		}
	}
</style>
