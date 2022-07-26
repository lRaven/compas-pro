<template>
	<div class="portfolio-card">
		<img
			:src="card.img"
			:alt="card.description"
			class="portfolio-card__img"
		/>
		<div class="portfolio-card__body">
			<p class="portfolio-card__description">{{ card.description }}</p>
			<router-link to="/" class="portfolio-card__link">
				<svg
					width="42"
					height="20"
					viewBox="0 0 42 20"
					fill="none"
					xmlns="http://www.w3.org/2000/svg"
					class="portfolio-card__link-arrow"
				>
					<path
						d="M40.0002 10L40.7304 10.6832L41.3696 10L40.7304 9.31677L40.0002 10ZM30.8489 1.68323L39.27 10.6832L40.7304 9.31677L32.3093 0.316769L30.8489 1.68323ZM39.27 9.31677L30.8489 18.3168L32.3093 19.6832L40.7304 10.6832L39.27 9.31677Z"
						fill="#4b4fb4"
					/>
					<path d="M40 10L0 10" stroke="#4b4fb4" stroke-width="2" />
				</svg>
			</router-link>
		</div>
	</div>
</template>

<script>
	export default {
		name: "PortfolioCard",
		props: { card: Object },
	};
</script>

<style lang="scss" scoped>
	@import "@/assets/scss/variables";

	.portfolio-card {
		display: grid;
		grid-template-rows: 23rem 1fr;
		background-color: $white;
		width: 100%;
		max-width: 37rem;
		box-shadow: $shadow;
		@media (max-width: 1023px) {
			max-width: inherit;
		}
		@media (max-width: 650px) {
			grid-template-rows: 30rem 1fr;
		}
		@media (max-width: 375px) {
			grid-template-rows: 23rem 1fr;
		}

		&__img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		&__body {
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			padding: 2rem;
			gap: 0.5rem;
		}

		&__description {
			font-size: 1.6rem;
			line-height: 1.2;
			font-weight: 600;
		}

		&__link {
			display: flex;
			&-arrow {
				margin-left: auto;
			}
		}
	}
</style>
