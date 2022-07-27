<template>
	<div class="portfolio-slider">
		<swiper
			slides-per-view="auto"
			:space-between="50"
			class="portfolio-slider__slider"
		>
			<swiper-slide
				v-for="item in list"
				:key="item.id"
				class="portfolio-slider__slide"
			>
				<portfolio-card :card="item"></portfolio-card>
			</swiper-slide>
		</swiper>
	</div>
</template>

<script>
	import { Swiper, SwiperSlide } from "swiper/vue";
	import "swiper/css";

	import PortfolioCard from "@/components/portfolio/PortfolioCard.vue";

	export default {
		name: "PortfolioSlider",
		components: {
			Swiper,
			SwiperSlide,

			PortfolioCard,
		},
		props: { list: Array },
	};
</script>

<style lang="scss" scoped>
	.portfolio-slider {
		&__slider {
			overflow: visible;
		}
		&__slide {
			width: max-content;
			border: 1px solid #000;
		}
	}
</style>
