<template>
	<router-view v-slot="{ Component }">
		<transition name="fade-left" mode="out-in">
			<component :is="Component" />
		</transition>
	</router-view>
</template>

<script>
	import { unlockScroll } from "@/js/scrollControl";

	export default {
		name: "App",
		watch: {
			$route(to) {
				document.title = to.meta.title || "Default Title";
			},

			"$route.path"() {
				//* срабатывает при переходе по router-link
				unlockScroll();
			},
		},
	};
</script>

<style lang="scss">
	@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap");

	@import "@/assets/scss/animations.scss";
	@import "@/assets/scss/center.scss";
	@import "@/assets/scss/swiper.scss";

	* {
		scroll-behavior: smooth;
	}

	#app,
	.theme-container {
		min-height: 100vh;
	}

	body {
		font-family: "Montserrat", sans-serif;
		background-color: #eff5f6;
		overflow-x: hidden;
		&.locked {
			overflow: hidden;
		}
	}

	img,
	svg {
		user-select: none;
		pointer-events: none;
	}
	section {
		min-height: 100vh;
		overflow-x: hidden;
		padding: 4rem;
	}

	h1 {
		font-size: 5.2rem;
		font-weight: 700;
	}
	h2 {
		text-transform: uppercase;
		font-size: 3.6rem;
		font-weight: 800;
		line-height: 1.5;
	}
	h3 {
		font-size: 2.7rem;
		font-weight: 500;
	}
	h4 {
		font-size: 2rem;
		font-weight: 700;
	}
	p {
		font-size: 1.8rem;
		font-weight: 400;
		line-height: 2.8rem;
	}
	span {
		font-size: 1rem;
		font-weight: 400;
	}

	@media (max-width: 1023px) {
		section {
			min-height: fit-content;
			// padding: 1.5rem;
		}

		h1 {
			font-size: 4rem;
		}
		h2 {
			font-size: 3.2rem;
		}
		h3 {
			font-size: 2rem;
		}
		h4 {
			font-size: 1.6rem;
		}
		p {
			font-size: 1.6rem;
		}
		span {
		}
	}

	@media (max-width: 767px) {
		section {
			padding: 1.5rem;
		}
	}

	@media (max-width: 540px) {
		h1 {
			font-size: 2.4rem;
		}
		h2 {
			font-size: 2.4rem;
		}
		h3 {
		}
		h4 {
			font-size: 1.4rem;
		}
		p {
			font-size: 1.4rem;
		}
		span {
			font-size: 0.7rem;
			line-height: 1;
		}
	}
</style>
