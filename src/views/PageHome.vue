<template>
	<div class="page-home theme-container">
		<the-header />
		<main class="main" id="main">
			<the-banner />
			<the-consulting />
			<the-services />
			<the-technologies />
			<the-training />
			<the-about />
		</main>
		<the-footer />
	</div>
</template>

<script>
	import TheHeader from "@/components/TheHeader";

	import TheBanner from "@/components/Home/TheBanner";
	import TheConsulting from "@/components/Home/TheConsulting";
	import TheServices from "@/components/Home/TheServices";
	import TheTechnologies from "@/components/Home/TheTechnologies";
	import TheTraining from "@/components/Home/TheTraining";
	import TheAbout from "@/components/Home/TheAbout";

	import TheFooter from "@/components/TheFooter";

	import { mapActions } from "vuex";

	export default {
		name: "PageHome",
		components: {
			TheHeader,

			TheBanner,
			TheConsulting,
			TheServices,
			TheTechnologies,
			TheTraining,
			TheAbout,

			TheFooter,
		},
		methods: {
			...mapActions(["getWindowWidth"]),
		},
		mounted() {
			this.getWindowWidth();
		},
	};
</script>

<style lang="scss" scoped>
	.main {
		min-height: 100vh;
	}
</style>
