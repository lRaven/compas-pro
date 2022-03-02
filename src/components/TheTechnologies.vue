<template>
	<section class="technologies">
		<div class="technologies__container center">
			<div class="technologies__title-wrapper">
				<h1 class="technologies__title">Технологии</h1>
			</div>
		</div>
		<div class="technologies__lists">
			<div class="technologies__list">
				<Vue3Marquee :duration="20" :clone="true">
					<img height="120" src="img/icon/laravel.svg" class="" />
					<img height="120" src="img/icon/react.svg" class="" />
					<img height="120" src="img/icon/python.svg" class="" />
					<img height="120" src="img/icon/csharp.svg" class="" />
					<img height="120" src="img/icon/nodejs.svg" class="" />
					<img height="120" src="img/icon/vue.svg" class="" />
					<img height="120" src="img/icon/bootstrap.svg" class="" />
				</Vue3Marquee>
			</div>
			<div class="technologies__list">
				<Vue3Marquee
					:duration="24"
					:clone="true"
					:direction="'reverse'"
				>
					<img height="100" src="img/icon/ibm.svg" class="" />
					<img height="100" src="img/icon/mysql.svg" class="" />
					<img height="100" src="img/icon/npm.svg" class="" />
					<img height="100" src="img/icon/postgresql.svg" class="" />
					<img height="100" src="img/icon/aws.svg" class="" />
					<img height="100" src="img/icon/airflow.svg" class="" />
				</Vue3Marquee>
			</div>
		</div>
	</section>
</template>

<script>
	import { Vue3Marquee } from "vue3-marquee";
	import "vue3-marquee/dist/style.css";

	export default {
		name: "Technologies",
		components: {
			Vue3Marquee,
		},
	};
</script>

<style lang="scss" scoped>
	.technologies {
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		background: url(/img/tech-bg.jpg) center / cover no-repeat;
		padding: 10rem 0 20rem 0;
		&__title {
			width: max-content;
			color: var(--white);
			&-wrapper {
				display: flex;
				align-items: center;
				height: 11rem;
				width: fit-content;
				padding-right: 7rem;
				background: url(/img/icon/decorative-block.svg) center right /
					contain no-repeat;
				margin-bottom: 10rem;
			}
		}
		&__lists {
			display: flex;
			flex-direction: column;
			gap: 5rem;
		}
		&__list {
			img {
				padding: 0 4rem;
				max-width: 40rem;
			}
		}
	}
</style>
