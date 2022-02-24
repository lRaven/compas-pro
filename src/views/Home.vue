<template>
	<div class="theme-container">
		<the-header />
		<main class="main" id="main">
			<the-banner />
		</main>
		<!-- <the-footer /> -->
	</div>
</template>

<script>
	import TheHeader from "../components/TheHeader.vue";

	import TheBanner from "../components/TheBanner.vue";

	// import TheFooter from "../components/general/TheFooter.vue";

	export default {
		name: "Home",
		components: {
			TheHeader,

			TheBanner,

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
