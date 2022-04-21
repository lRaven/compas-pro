<template>
	<div class="the-home theme-container">
		<the-header />
		<main class="main" id="main">
			<the-banner />
			<the-consulting />
			<the-services />
			<!--<the-technologies />
			<the-training />
			<the-about /> -->
		</main>
		<!-- <the-footer /> -->
	</div>
</template>

<script>
	import { mapMutations } from "vuex";

	import TheHeader from "@/components/TheHeader";

	import TheBanner from "@/components/TheBanner";
	import TheConsulting from "@/components/TheConsulting";
	import TheServices from "@/components/TheServices";
	// import TheTechnologies from "@/components/TheTechnologies";
	// import TheTraining from "@/components/TheTraining";
	// import TheAbout from "@/components/TheAbout";

	// import TheFooter from "@/components/TheFooter";

	export default {
		name: "PageHome",
		components: {
			TheHeader,

			TheBanner,
			TheConsulting,
			TheServices,
			// TheTechnologies,
			// TheTraining,
			// TheAbout,

			// TheFooter,
		},
		methods: {
			...mapMutations(["SET_WINDOW_WIDTH"]),
		},
		mounted() {
			this.SET_WINDOW_WIDTH(window.innerWidth);

			window.addEventListener("resize", () => {
				this.SET_WINDOW_WIDTH(window.innerWidth);
			});
		},
	};
</script>

<style lang="scss" scoped>
	.main {
		min-height: 100vh;
	}
</style>
