<template>
	<section class="the-technologies">
		<div class="the-technologies__container center">
			<div class="the-technologies__title-wrapper">
				<h1 class="the-technologies__title">Технологии</h1>
			</div>
		</div>
		<div class="the-technologies__lists">
			<div class="the-technologies__list">
				<Vue3Marquee :duration="20" :clone="true" v-if="windowWidth > 767">
					<img height="120" src="/img/icons/laravel.svg" class="" />
					<img height="120" src="/img/icons/react.svg" class="" />
					<img height="120" src="/img/icons/python.svg" class="" />
					<img height="120" src="/img/icons/csharp.svg" class="" />
					<img height="120" src="/img/icons/nodejs.svg" class="" />
					<img height="120" src="/img/icons/vue.svg" class="" />
					<img height="120" src="/img/icons/bootstrap.svg" class="" />
				</Vue3Marquee>
				<Vue3Marquee :duration="20" :clone="true" v-else>
					<img height="50" src="/img/icons/laravel.svg" class="" />
					<img height="50" src="/img/icons/react.svg" class="" />
					<img height="50" src="/img/icons/python.svg" class="" />
					<img height="50" src="/img/icons/csharp.svg" class="" />
					<img height="50" src="/img/icons/nodejs.svg" class="" />
					<img height="50" src="/img/icons/vue.svg" class="" />
					<img height="50" src="/img/icons/bootstrap.svg" class="" />
				</Vue3Marquee>
			</div>
			<div class="the-technologies__list">
				<Vue3Marquee
					:duration="20"
					:clone="true"
					:direction="'reverse'"
					v-if="windowWidth > 767"
				>
					<img height="100" src="/img/icons/ibm.svg" class="" />
					<img height="100" src="/img/icons/mysql.svg" class="" />
					<img height="100" src="/img/icons/npm.svg" class="" />
					<img height="100" src="/img/icons/postgresql.svg" class="" />
					<img height="100" src="/img/icons/aws.svg" class="" />
					<img height="100" src="/img/icons/airflow.svg" class="" />
				</Vue3Marquee>
				<Vue3Marquee :duration="20" :clone="true" :direction="'reverse'" v-else>
					<img height="50" src="/img/icons/ibm.svg" class="" />
					<img height="50" src="/img/icons/mysql.svg" class="" />
					<img height="50" src="/img/icons/npm.svg" class="" />
					<img height="50" src="/img/icons/postgresql.svg" class="" />
					<img height="50" src="/img/icons/aws.svg" class="" />
					<img height="50" src="/img/icons/airflow.svg" class="" />
				</Vue3Marquee>
			</div>
		</div>
	</section>
</template>

<script>
	import { Vue3Marquee } from 'vue3-marquee';
	import 'vue3-marquee/dist/style.css';

	import { mapState } from 'vuex';

	export default {
		name: 'TheTechnologies',
		components: {
			Vue3Marquee,
		},
		computed: {
			...mapState(['windowWidth']),
		},
	};
</script>

<style lang="scss" scoped>
	@import '@/assets/scss/variables';

	.the-technologies {
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		background: url(/public/img/tech-bg.jpg) center / cover no-repeat;
		padding: 10rem 0 20rem 0;
		&__title {
			width: max-content;
			color: $white;
			&-wrapper {
				display: flex;
				align-items: center;
				height: 11rem;
				width: fit-content;
				background: url('/public/img/icons/decorative-block.svg') center right /
					contain no-repeat;
				margin-bottom: 10rem;
				padding-right: 7rem;
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

	@media (max-width: 1170px) {
		.the-technologies {
			&__title {
				&-wrapper {
					padding: 0 7rem 0 4rem;
				}
			}
		}
	}
	@media (max-width: 1023px) {
		.the-technologies {
			&__title {
				&-wrapper {
					height: 9.5rem;
				}
			}
		}
	}
	@media (max-width: 767px) {
		.the-technologies {
			&__title {
				&-wrapper {
					padding: 0 7rem 0 1.5rem;
				}
			}
		}
	}

	@media (max-width: 540px) {
		.the-technologies {
			&__title {
				&-wrapper {
					height: 6.5rem;
					padding-right: 5.5rem;
				}
			}
		}
	}
</style>
