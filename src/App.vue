<template>
	<router-view v-slot="{ Component }">
		<transition name="fade" mode="out-in">
			<component :is="Component" />
		</transition>
	</router-view>
</template>

<script>
	export default {
		name: "App",
		components: {},
		watch: {
			$route(to) {
				document.title = to.meta.title || "Default Title";
			},

			"$route.path"() {
				//* срабатывает при переходе по router-link
			},
		},
	};
</script>

<style lang="scss">
	//*шрифт
	@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap");

	@import "./assets/scss/center.scss";
	@import "./assets/css/variables.css";

	* {
		scroll-behavior: smooth;
	}

	body {
		font-family: "Montserrat", sans-serif;
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
			#ffffff;
	}

	img,
	svg {
		user-select: none;
		pointer-events: none;
	}

	h1 {
		font-size: 5.2rem;
		font-weight: 700;
	}
	h2 {
		font-size: 3.6rem;
		font-weight: 800;
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
</style>

<style lang="scss" scoped>
	#app,
	.theme-container {
		height: 100%;
		min-height: 100vh;
	}

	.fade-enter-active,
	.fade-leave-active {
		transition: all 0.5s ease;
		transform: translateY(0rem);
	}

	.fade-enter-from,
	.fade-leave-to {
		opacity: 0;
		transform: translateY(3rem);
		transition: all 1s ease;
	}
</style>
