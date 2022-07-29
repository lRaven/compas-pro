<template>
	<div class="portfolio-card" @click="this.$emit('open_modal', card.img)">
		<img
			:src="card.preview"
			:alt="card.description"
			class="portfolio-card__img"
		/>
		<div class="portfolio-card__body">
			<p class="portfolio-card__description">{{ card.description }}</p>
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
		cursor: pointer;
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
			width: max-content;
			margin-left: auto;
		}
	}
</style>
