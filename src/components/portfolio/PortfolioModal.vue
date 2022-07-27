<template>
	<div class="portfolio-modal" @click.self="this.$emit('close_modal')">
		<div class="portfolio-modal__body">
			<img :src="image" alt="" class="portfolio-modal__img" />
		</div>
	</div>
</template>

<script>
	import { lockScroll } from "@/js/scrollControl";

	export default {
		name: "PortfolioModal",
		props: {
			image: {
				value: String,
				required: true,
			},
		},
		mounted() {
			lockScroll();
		},
	};
</script>

<style lang="scss" scoped>
	@import "@/assets/scss/variables";

	.portfolio-modal {
		cursor: pointer;
		display: flex;
		justify-content: center;
		position: fixed;
		left: 0;
		right: 0;
		top: 0;
		bottom: 0;
		background-color: rgba($black, 0.5);
		padding: 5rem 1.5rem;
		z-index: 3;
		overflow-y: auto;
		overflow-x: hidden;
		-webkit-backdrop-filter: blur(2rem);
		backdrop-filter: blur(2rem);
		&__body {
			cursor: default;
			width: 90vw;
			height: max-content;
			border-radius: 2rem;
			overflow: hidden;
		}
		&__img {
			width: 100%;
		}
	}
</style>
