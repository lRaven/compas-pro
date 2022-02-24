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
		font-weight: 400;
	}
	p {
		font-size: 1.8rem;
		font-weight: 400;
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
