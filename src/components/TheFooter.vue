<template>
	<footer class="footer">
		<div class="footer__container center">
			<div class="footer__col">
				<img class="footer__logo" src="favicon.ico" />
				<p class="footer__name">Компас Про</p>
				<p class="footer__slogan">с нами в правильном напралении</p>
			</div>
			<div class="footer__col">
				<img src="img/icon/huawei.png" alt="" />
				<img src="img/icon/ibm-business.png" alt="" />
			</div>
			<div class="footer__col">
				<p class="footer__disclaimer">
					Создание и продвижение сайтов © 2015-{{ current_year }}
				</p>
			</div>
		</div>
	</footer>
</template>

<script>
	export default {
		name: "Footer",
		computed: {
			current_year: () => {
				return new Date().getFullYear();
			},
		},
	};
</script>

<style lang="scss" scoped>
	.footer {
		height: 8rem;
		&__container {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			align-items: center;
			height: 100%;
		}
		&__col {
			&:first-child {
				display: grid;
				grid-template-columns: 6rem 1fr;
				grid-template-rows: repeat(2, min-content);
				grid-gap: 0.4rem 1.4rem;
			}
			&:nth-child(2) {
				img {
					height: 4rem;
				}
			}
		}
		&__logo {
			height: 6rem;
			grid-row: 1/3;
		}
		&__name {
			font-size: 1.4rem;
			font-weight: 700;
			line-height: inherit;
			text-transform: uppercase;
			align-self: flex-end;
		}
		&__slogan {
			font-size: 1rem;
			width: max-content;
			line-height: inherit;
			text-transform: uppercase;
		}
		&__disclaimer {
		}
	}
</style>
