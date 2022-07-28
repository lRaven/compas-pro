<template>
	<div class="portfolio-slider">
		<swiper
			slidesPerView="auto"
			:space-between="30"
			class="portfolio-slider__slider"
			:modules="modules"
			:navigation="{
				nextEl: '.portfolio-slider-button-next',
				prevEl: '.portfolio-slider-button-prev',
			}"
			:pagination="{ el: '.portfolio-slider-pagination' }"
		>
			<swiper-slide
				v-for="item in list"
				:key="item.id"
				class="portfolio-slider__slide"
			>
				<portfolio-card
					:card="item"
					@open_modal="open_modal"
				></portfolio-card>
			</swiper-slide>
		</swiper>
		<div class="portfolio-slider__bottom">
			<v-button
				color="purple"
				icon="/img/icon/arrow-right.svg"
				text="Смотреть всё портфолио"
				@click="this.$router.push({ name: 'portfolio' })"
			></v-button>

			<div class="portfolio-slider__control">
				<button
					class="portfolio-slider-button-prev swiper-button-prev"
				></button>
				<div
					class="portfolio-slider-pagination swiper-pagination"
				></div>
				<button
					class="portfolio-slider-button-next swiper-button-next"
				></button>
			</div>
		</div>

		<transition mode="out-in">
			<portfolio-modal
				:image="selected_project"
				:isModalOpen="isModalOpen"
				v-if="isModalOpen"
				@close_modal="close_modal"
			></portfolio-modal>
		</transition>
	</div>
</template>

<script>
	import { Swiper, SwiperSlide } from "swiper/vue";
	import { Navigation, Pagination } from "swiper";

	import "swiper/css";
	import "swiper/css/navigation";
	import "swiper/css/pagination";

	import PortfolioCard from "@/components/portfolio/PortfolioCard.vue";
	import PortfolioModal from "@/components/portfolio/PortfolioModal.vue";
	import { unlockScroll } from "@/js/scrollControl";

	export default {
		name: "PortfolioSlider",
		components: {
			Swiper,
			SwiperSlide,

			PortfolioCard,
			PortfolioModal,
		},
		props: { list: Array },
		data: () => ({
			isModalOpen: false,
			selected_project: "",
		}),
		methods: {
			open_modal(img) {
				this.selected_project = img;
				this.isModalOpen = true;
			},
			close_modal() {
				unlockScroll();
				this.selected_project = "";
				this.isModalOpen = false;
			},
		},
		setup: () => ({ modules: [Navigation, Pagination] }),
	};
</script>

<style lang="scss" scoped>
	.portfolio-slider {
		&__slider {
			margin-bottom: 8rem;
			@media (max-width: 767px) {
				margin-bottom: 4rem;
			}
		}
		&__bottom {
			display: flex;
			align-items: center;
			justify-content: space-between;
			gap: 4rem;
			@media (max-width: 767px) {
				flex-direction: column-reverse;
				margin-bottom: 4rem;
			}
			.v-button {
				max-width: 40rem;
			}
		}
		&__control {
			display: flex;
			align-items: center;
		}
	}
</style>

<style lang="scss">
	.portfolio-slider {
		.portfolio-card {
			height: 100%;
			@media (max-width: 1023px) {
				max-width: 37rem;
			}
			@media (max-width: 650px) {
				grid-template-rows: 23rem 1fr;
			}
		}
	}
</style>
