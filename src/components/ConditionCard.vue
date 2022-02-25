<template>
	<div class="condition">
		<img :src="icon" alt="" class="condition__img" />
		<h3 class="condition__title">{{ title }}</h3>
		<p class="condition__description">{{ description }}</p>
	</div>
</template>

<script>
	export default {
		name: "Condition",
		props: {
			icon: String,
			title: String,
			description: String,
		},
	};
</script>

<style lang="scss" scoped>
	.condition {
		background-color: var(--white);
		padding: 3rem 1.6rem 3rem 2rem;
		width: 31rem;
		height: max-content;
		box-shadow: 0 0.4rem 3rem rgba(0, 0, 0, 0.15);

		&__img {
			width: 5rem;
			height: 5rem;
			margin-bottom: 2rem;
		}
		&__title {
			line-height: 3.7rem;
			margin-bottom: 2.8rem;
		}
		&__description {
			font-size: 1.4rem;
			font-weight: 300;
			color: var(--light-dark);
			line-height: 2rem;
		}
	}
</style>
