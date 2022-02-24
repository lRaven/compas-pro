<template>
	<div class="theme-container">
		<the-header />
		<main class="main" id="main">
			<the-banner />
			<the-consulting />
			<the-services />
		</main>
		<!-- <the-footer /> -->
	</div>
</template>

<script>
	import TheHeader from "../components/TheHeader.vue";

	import TheBanner from "../components/TheBanner.vue";
	import TheConsulting from "../components/TheConsulting.vue";
	import TheServices from "../components/TheServices.vue";

	// import TheFooter from "../components/general/TheFooter.vue";

	export default {
		name: "Home",
		components: {
			TheHeader,

			TheBanner,
			TheConsulting,
			TheServices,

			// TheFooter,
		},

		data() {
			return {};
		},
		methods: {},
	};
</script>

<style lang="scss" scoped>
	.main {
		min-height: 100vh;
	}
</style>

<style lang="scss">
	@keyframes marquee {
		0% {
			transform: translateX(100%);
		}
		100% {
			transform: translateX(-100%);
		}
	}
</style>
