<template>
	<section class="banner">
		<div class="banner__slide banner__slide-left"></div>
		<div class="banner__slide banner__slide-right"></div>
		<div class="banner__container center">
			<img src="img/icon/logo-big.svg" alt="" class="banner__logo" />

			<div class="banner__title-wrapper">
				<transition>
					<h2 class="banner__title" v-show="isLeftTitle">
						Компетентная цифровизация бизнеса и автоматизация бизнес
						процессов
					</h2>
				</transition>
				<transition>
					<h2 class="banner__title" v-show="isDefaultTitle">
						Бизнес проводник в цифровом мире
					</h2>
				</transition>
				<transition>
					<h2 class="banner__title" v-show="isRightTitle">
						Текст про крутое обучение
					</h2>
				</transition>
			</div>

			<div class="banner__buttons">
				<v-button
					:color="'blue'"
					:text="'Для бизнеса'"
					:icon="'img/icon/arrow-right.svg'"
					@click="
						slides('right');
						isDefaultTitle = false;
						isLeftTitle = true;
						isRightTitle = false;
					"
				></v-button>
				<v-button
					:color="'purple'"
					:text="'Для учебы'"
					:icon="'img/icon/arrow-left.svg'"
					:reverse="'reverse'"
					@click="
						slides('left');
						isDefaultTitle = false;
						isLeftTitle = false;
						isRightTitle = true;
					"
				></v-button>
			</div>
		</div>
	</section>
</template>

<script>
	import vButton from "@/components/v-button";

	export default {
		name: "Banner",
		components: {
			vButton,
		},
		data: () => ({
			isDefaultTitle: true,
			isLeftTitle: false,
			isRightTitle: false,
		}),
		methods: {
			slides(direction) {
				const slideLeft = document.querySelector(".banner__slide-left");
				const slideRight = document.querySelector(
					".banner__slide-right"
				);
				switch (direction) {
					case "right": {
						slideLeft.setAttribute("style", "width: 90%");
						slideRight.setAttribute("style", "width: 10%");
						break;
					}
					case "left": {
						slideRight.setAttribute("style", "width: 90%");
						slideLeft.setAttribute("style", "width: 10%");
						break;
					}
				}
			},

			//*функция анимации поворота блока в сторону курсора
			mouseEffect() {
				const banner = document.querySelector(".banner");
				const logo = document.querySelector(".banner__logo");

				banner.addEventListener("mousemove", (event) => {
					const logoRect = logo.getBoundingClientRect();

					const logoPosition = {
						x: logoRect.x + logoRect.width / 2,
						y: logoRect.y + logoRect.height / 2,
					};

					const logoDistance = {
						x: event.clientX - logoPosition.x,
						y: event.clientY - logoPosition.y,
					};

					const maxDegree = 15;
					const baseDegree = 0;

					const degree = {
						x: (logoDistance.y / 1920) * (maxDegree * 3),
						y:
							baseDegree +
							(logoDistance.x / 1920) * (maxDegree * 2),
					};

					logo.style.transform = `perspective(800px) rotateX(${-degree.x}deg) rotateY(${
						degree.y
					}deg)`;
				});
			},
		},
		mounted() {
			this.mouseEffect();
		},
	};
</script>

<style lang="scss" scoped>
	.banner {
		position: relative;
		display: flex;
		height: 100vh;
		overflow-x: hidden;
		&__container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
		}
		&__logo {
			margin-bottom: 4.2rem;
		}
		&__title {
			color: var(--white);
			text-align: center;
			// transition: all 0.2s ease;

			&-wrapper {
				// position: relative;
				height: 10rem;
				width: 100%;
				margin-bottom: 10rem;
			}
		}
		&__buttons {
			display: flex;
			align-items: center;
			justify-content: center;
			gap: 8rem;
		}
		&__slide {
			width: 50%;
			height: 100%;
			transition: width 0.7s ease;
			&-left {
				background: url(/img/banner-bg-left.png) center left / cover
					no-repeat;
			}
			&-right {
				background: url(/img/banner-bg-right.png) center right / cover
					no-repeat;
			}
		}
	}
</style>
