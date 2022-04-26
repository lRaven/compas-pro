<template>
	<header class="the-header center">
		<div class="the-header__col">
			<img src="img/icon/logo.svg" alt="logo" class="the-header__logo" />
			<div class="the-header__slogan">
				<span class="the-header__slogan-row">с нами</span>
				<span class="the-header__slogan-row">в правильном</span>
				<span class="the-header__slogan-row">направлении</span>
			</div>
		</div>

		<a
			href="https://telegram.im/@compass_pro"
			target="_blank"
			class="the-header__col the-header__telegram"
		>
			<img src="img/icon/tg.svg" alt="" />
		</a>
	</header>
</template>

<script>
	export default {
		name: "TheHeader",
	};
</script>

<style lang="scss" scoped>
	.the-header {
		position: absolute;
		left: 50%;
		transform: translateX(-50%);
		top: 0;
		height: 8rem;
		display: flex;
		justify-content: space-between;
		align-items: center;
		padding: 0 1.5rem;
		z-index: 2;
		&__col {
			display: flex;
			align-items: center;
			gap: 3rem;
			color: var(--white);
			z-index: 3;
		}

		&__logo {
			height: 4rem;
		}
		&__slogan {
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			height: 4rem;
			&-row {
				display: block;
				text-transform: uppercase;
			}
		}

		&__telegram {
			background: linear-gradient(
				315.55deg,
				#3b94c7 6.42%,
				#4a50b6 64.22%
			);
			width: 3.4rem;
			height: 3.4rem;
			display: flex;
			justify-content: center;
			align-items: center;
		}
	}

	@media (max-width: 767px) {
		.the-header {
			&__col {
				gap: 2.5rem;
			}
		}
	}

	@media (max-width: 425px) {
		.the-header {
			&__col {
				gap: 2rem;
			}

			&__logo {
				max-width: 9rem;
			}

			&__slogan {
				height: 3rem;
			}
		}
	}
</style>
