<template>
	<div class="page-portfolio theme-container">
		<div class="page-portfolio__top">
			<the-header></the-header>

			<h1 class="page-portfolio__title center">Портфолио</h1>
		</div>

		<main class="page-portfolio__main center">
			<div class="page-portfolio__filters">
				<!-- //*TODO: vue не умеет добавлять в массив из компонента, пока так -->
				<label class="text-checkbox">
					<input
						type="checkbox"
						value="online-resources"
						class="text-checkbox__real"
						v-model="filters"
					/>
					<span class="text-checkbox__fake">Интернет-ресурсы</span>
				</label>

				<label class="text-checkbox">
					<input
						type="checkbox"
						value="presentations"
						class="text-checkbox__real"
						v-model="filters"
					/>
					<span class="text-checkbox__fake">Презентации</span>
				</label>

				<label class="text-checkbox">
					<input
						type="checkbox"
						value="logos"
						class="text-checkbox__real"
						v-model="filters"
					/>
					<span class="text-checkbox__fake">Логотипы</span>
				</label>
			</div>

			<template v-if="portfolio_filtered.length > 0">
				<portfolio-card
					v-for="card in portfolio_filtered"
					:key="card.id"
					:card="card"
				></portfolio-card>
			</template>
			<p class="page-portfolio__empty" v-else-if="filters.length > 0">
				Список пуст
			</p>
			<p v-else>Ничего не выбрано</p>
		</main>
	</div>
</template>

<script>
	import TheHeader from "@/components/TheHeader.vue";

	import PortfolioCard from "@/components/portfolio/PortfolioCard.vue";
	import { mapState, mapMutations } from "vuex";

	export default {
		name: "PagePortfolio",
		components: {
			TheHeader,

			PortfolioCard,
		},
		watch: {
			filters: {
				handler() {
					this.filterByTagsPortfolio(this.filters);
				},
				deep: true,
			},
		},
		computed: {
			...mapState({
				portfolio_filtered: (state) =>
					state.Portfolio.portfolio_filtered,
			}),
		},
		data: () => ({ filters: ["online-resources"] }),
		methods: {
			...mapMutations(["filterByTagsPortfolio"]),
		},
		created() {
			this.filterByTagsPortfolio(this.filters);
		},
	};
</script>

<style lang="scss" scoped>
	@import "@/assets/scss/variables";

	.page-portfolio {
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
			background: url(/public/img/banner-bg-right.png) center / cover
				no-repeat;

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
			padding: 7rem 1.5rem 7rem 1.5rem;
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			grid-gap: 4rem 3rem;
			grid-auto-rows: max-content;
			@media (max-width: 1023px) {
				grid-template-columns: repeat(2, 1fr);
				padding: 4rem 1.5rem 4rem 1.5rem;
			}

			@media (max-width: 650px) {
				grid-template-columns: 1fr;
			}
		}

		&__filters {
			display: flex;
			align-items: center;
			gap: 2rem;
			grid-column: 1/4;
			@media (max-width: 1023px) {
				grid-column: 1/3;
			}
			@media (max-width: 650px) {
				grid-column: 1/2;
			}
		}
	}

	.text-checkbox {
		&__real {
			display: none;
			&:checked {
				+ .text-checkbox {
					&__fake {
						background-color: $light-purple;
						color: $white;
					}
				}
			}
		}
		&__fake {
			user-select: none;
			cursor: pointer;
			font-size: 1.4rem;
			padding: 1rem 2rem;
			border-radius: 5rem;
			background-color: rgba($gray, 0.3);
			color: rgba($light-dark, 0.7);
			font-weight: 600;
			transition: all 0.2s ease;
			&:hover {
				background-color: $light-purple;
				color: $white;
			}
		}
	}
</style>
