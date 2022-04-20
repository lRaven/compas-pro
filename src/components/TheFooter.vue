<template>
	<footer class="the-footer">
		<div class="the-footer__container center">
			<div class="the-footer__col">
				<div class="the-footer__left">
					<img class="the-footer__logo" src="favicon.ico" />
					<p class="the-footer__name">Компас Про</p>
					<p class="the-footer__slogan">
						с нами в правильном напралении
					</p>
				</div>
			</div>
			<div class="the-footer__col">
				<img src="img/icon/huawei.png" alt="" />
				<img src="img/icon/ibm-business.png" alt="" />
			</div>
			<div class="the-footer__col">
				<p class="the-footer__disclaimer">
					Создание и продвижение сайтов © 2015-{{ current_year }}
				</p>
			</div>
		</div>
	</footer>
</template>

<script>
	export default {
		name: "TheFooter",
		computed: {
			current_year: () => {
				return new Date().getFullYear();
			},
		},
	};
</script>

<style lang="scss" scoped>
	.the-footer {
		height: 8rem;
		&__container {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			align-items: center;
			height: 100%;
		}
		&__col {
			height: 100%;
			display: flex;
			align-items: center;
			&:first-child {
				position: relative;
				&::before {
					content: "";
					position: absolute;
					right: 100%;
					top: 0;
					bottom: 0;
					width: 50vw;
					background-color: rgba(255, 255, 255, 0.5);
				}
			}
			&:nth-child(2) {
				display: flex;
				align-items: center;
				justify-content: center;
				img {
					height: 4rem;
				}
			}
			&:nth-child(-n + 2) {
				background-color: rgba(255, 255, 255, 0.5);
				// background: linear-gradient(
				// 	90deg,
				// 	rgba(0, 0, 0, 0) 100%,
				// 	rgba(240, 13, 13, 0.5) 0%
				// );
			}
			&:last-child {
				justify-content: flex-end;
			}
		}
		&__left {
			display: grid;
			grid-template-columns: 6rem 1fr;
			grid-template-rows: repeat(2, min-content);
			grid-gap: 1rem 1.4rem;
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
			font-size: 1rem;
			text-transform: uppercase;
		}
	}
</style>
