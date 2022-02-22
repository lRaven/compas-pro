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
	@import "./assets/scss/center.scss";
	@import "./assets/css/variables.css";

	* {
		scroll-behavior: smooth;
		font-family: "Montserrat";
	}

	img,
	svg {
		user-select: none;
		pointer-events: none;
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
