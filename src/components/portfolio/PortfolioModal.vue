<template>
	<div class="portfolio-modal" @click.self="this.$emit('close_modal')">
		<transition name="fade-up" mode="out-in">
			<div class="portfolio-modal__body" v-if="isBodyOpen">
				<img :src="image" alt="" class="portfolio-modal__img" />
			</div>
		</transition>
	</div>
</template>

<script>
	import { lockScroll } from "@/js/scrollControl";

	export default {
		name: "PortfolioModal",
		props: {
			isModalOpen: {
				value: Boolean,
				default: false,
			},
			image: {
				value: String,
				required: true,
			},
		},
		watch: {
			isModalOpen() {
				console.log("alo da");
			},
		},
		data: () => ({ isBodyOpen: false }),
		methods: {
			openBody() {
				setTimeout(() => {
					this.isBodyOpen = true;
				}, 300);
			},
		},
		mounted() {
			this.openBody();
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
		padding: 5rem 0;
		z-index: 3;
		overflow-y: auto;
		overflow-x: hidden;
		-webkit-backdrop-filter: blur(2rem);
		backdrop-filter: blur(2rem);

		@media (max-width: 767px) {
			padding: 3rem 0;
		}
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
