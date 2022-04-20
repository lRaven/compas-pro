<template>
	<section class="the-services">
		<div class="the-services__container center">
			<div class="the-services__col">
				<div class="the-services__title-wrapper">
					<div class="the-services__title-block"></div>
					<h1 class="the-services__title">Услуги</h1>
				</div>
				<p class="the-services__description">
					специализируемся на направлении — интернет для бизнеса с
					внедрением в структуру бизнес-модели нейросетей и
					искусственного интеллекта.
				</p>
				<a href="https://telegram.im/@compass_pro" target="_blank">
					<v-button
						:color="'blue'"
						:icon="'img/icon/tg.svg'"
						:text="'Оставить заявку'"
					></v-button>
				</a>
			</div>
			<div class="the-services__col">
				<div class="the-services__control">
					<div
						class="the-services__control-up"
						@click="
							if (!startSlider) {
								slide--;
								scrollSliderByButtons(breakpoints[slide]);
							}
						"
					>
						<svg
							width="30"
							height="14"
							viewBox="0 0 30 14"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
								opacity="0.3"
								d="M15 1.00003L14.6796 0.616173L15 0.348749L15.3204 0.616173L15 1.00003ZM28.6796 13.0693L14.6796 1.38389L15.3204 0.616173L29.3204 12.3016L28.6796 13.0693ZM15.3204 1.38389L1.32039 13.0693L0.679606 12.3016L14.6796 0.616173L15.3204 1.38389Z"
								fill="#4A50B6"
							/>
						</svg>
					</div>
					<div class="the-services__control-pagination">
						<div
							class="the-services__control-dot"
							v-for="service in services"
							:key="service.id"
							:class="`the-services__control-dot-${service.id}`"
							@click="
								scrollSliderByButtons(
									breakpoints[service.id - 1]
								)
							"
						></div>
					</div>
					<div
						class="the-services__control-down"
						@click="
							if (!endSlider) {
								slide++;
								scrollSliderByButtons(breakpoints[slide]);
							}
						"
					>
						<svg
							width="31"
							height="14"
							viewBox="0 0 31 14"
							opacity="1"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
								d="M15.5 12.6854L15.1863 13.0747L15.5 13.3276L15.8137 13.0747L15.5 12.6854ZM29.6863 0.610687L15.1863 12.2961L15.8137 13.0747L30.3137 1.38931L29.6863 0.610687ZM15.8137 12.2961L1.31374 0.610686L0.686256 1.38931L15.1863 13.0747L15.8137 12.2961Z"
								fill="#4A50B6"
							/>
						</svg>
					</div>
				</div>
				<div class="the-services__list">
					<service-card
						v-for="service in services"
						:key="service.id"
						:textImage="service.image"
						:title="service.title"
						:description="service.description"
						:class="`service-${service.id}`"
					></service-card>
				</div>
			</div>
		</div>
		<div class="the-services__marquee">
			<Vue3Marquee :duration="20" :clone="true">
				<img
					height="100"
					src="img/icon/compas-pro.svg"
					class="the-services__marquee-img"
				/>
			</Vue3Marquee>
		</div>
	</section>
</template>

<script>
	import { mapState } from "vuex";

	import vButton from "@/components/v-button";
	import { Vue3Marquee } from "vue3-marquee";
	import "vue3-marquee/dist/style.css";
	import ServiceCard from "@/components/ServiceCard";

	export default {
		name: "TheServices",
		components: {
			vButton,
			Vue3Marquee,
			ServiceCard,
		},
		computed: {
			...mapState({ services: (state) => state.Services.services }),
			numberOfSlides() {
				return this.services.length;
			},
			breakpoints() {
				let breakpoints = [];

				const services = document.querySelector(".the-services");
				const service = services.querySelectorAll(".service");
				const slider = services.querySelector(".the-services__list");
				let paddingTop = window
					.getComputedStyle(slider, null)
					.getPropertyValue("padding-top");
				paddingTop = Number(
					paddingTop.substring(0, paddingTop.length - 2)
				);

				//* получение координат слайдов
				for (let index = 0; index < service.length; index++) {
					if (index % 2 === 0) {
						breakpoints.push(service[index].offsetTop - paddingTop);
					} else
						breakpoints.push(
							service[index].offsetTop + 100 - paddingTop
						);
				}
				return breakpoints;
			},
		},
		data: () => ({
			slide: 0,
			startSlider: true,
			endSlider: false,
		}),
		methods: {
			//*функция прокрутки по брейкпоинтам
			scrollSliderByButtons(distance) {
				const services = document.querySelector(".the-services");
				const slider = services.querySelector(".the-services__list");

				slider.scrollTo(0, distance);
				console.log(this.slide);
			},

			//*pick current dot
			slider() {
				const services = document.querySelector(".the-services");
				const slider = services.querySelector(".the-services__list");
				const dots = services.querySelectorAll(
					".the-services__control-dot"
				);

				for (let index = 0; index < this.breakpoints.length; index++) {
					if (
						slider.scrollTop <= this.breakpoints[index] &&
						slider.scrollTop > this.breakpoints[index - 1]
					) {
						dots[index].classList.add("current");
					} else if (slider.scrollTop <= this.breakpoints[0]) {
						dots[index].classList.remove("current");
						dots[0].classList.add("current");
					} else {
						dots[index].classList.remove("current");
					}
				}

				//*--------------------------------------------------------

				slider.addEventListener("scroll", () => {
					dots.forEach((dot) => {
						dot.removeAttribute("current");
					});

					for (
						let index = 0;
						index < this.breakpoints.length;
						index++
					) {
						if (
							slider.scrollTop <= this.breakpoints[index] &&
							slider.scrollTop > this.breakpoints[index - 1]
						) {
							dots[index].classList.add("current");
							this.slide = index;
						} else if (slider.scrollTop <= this.breakpoints[0]) {
							dots[index].classList.remove("current");
							dots[0].classList.add("current");
							this.slide = 0;
						} else {
							dots[index].classList.remove("current");
						}
					}
				});
			},

			//*отследить старт и конец слайдера
			getStartSlider() {
				const services = document.querySelector(".the-services");
				const slider = services.querySelector(".the-services__list");

				if (
					slider.offsetHeight + slider.scrollTop >=
					slider.scrollHeight
				) {
					this.endSlider = true;
				} else if (slider.scrollTop === 0) {
					this.startSlider = true;
				} else {
					this.startSlider = false;
					this.endSlider = false;
				}

				slider.addEventListener("scroll", () => {
					if (
						slider.offsetHeight + slider.scrollTop >=
						slider.scrollHeight
					) {
						this.endSlider = true;
					} else if (slider.scrollTop === 0) {
						this.startSlider = true;
					} else {
						this.startSlider = false;
						this.endSlider = false;
					}
				});
			},

			//*красит стрелки при достижении границ прокрутки
			repaintArrows() {
				const slider = document.querySelector(".the-services__list");
				const buttonDown = document.querySelector(
					".the-services__control-down"
				);
				const buttonUp = document.querySelector(
					".the-services__control-up"
				);

				if (slider.scrollTop === 0) {
					buttonUp.setAttribute(
						"style",
						"opacity: 0.3; cursor: default;"
					);
				} else
					buttonUp.setAttribute(
						"style",
						"opacity: 1; cursor: pointer;"
					);

				if (
					slider.scrollHeight - slider.scrollTop ===
					slider.clientHeight
				) {
					buttonDown.setAttribute(
						"style",
						"opacity: 0.3; cursor: default;"
					);
				} else {
					buttonDown.setAttribute(
						"style",
						"opacity: 1; cursor: pointer;"
					);
				}

				slider.addEventListener("scroll", () => {
					if (slider.scrollTop === 0) {
						buttonUp.setAttribute(
							"style",
							"opacity: 0.3; cursor: default;"
						);
					} else
						buttonUp.setAttribute(
							"style",
							"opacity: 1; cursor: pointer;"
						);

					if (
						slider.scrollHeight - slider.scrollTop ===
						slider.clientHeight
					) {
						buttonDown.setAttribute(
							"style",
							"opacity: 0.3; cursor: default;"
						);
					} else {
						buttonDown.setAttribute(
							"style",
							"opacity: 1; cursor: pointer;"
						);
					}
				});
			},
		},
		mounted() {
			this.scrollSliderByButtons();
			this.repaintArrows();
			this.slider();
			this.getStartSlider();
		},
	};
</script>

<style lang="scss" scoped>
	.the-services {
		height: 100vh;
		position: relative;
		overflow: hidden;
		padding: 0 1.5rem 0 1.5rem;
		background: radial-gradient(
				19.91% 40.74% at 87.72% 51.85%,
				rgba(145, 156, 251, 0.2) 0%,
				rgba(0, 26, 255, 0) 100%
			),
			radial-gradient(
				42.94% 75.51% at 17.25% 36.57%,
				rgba(228, 255, 253, 0.41) 0%,
				rgba(255, 255, 255, 0) 100%
			),
			radial-gradient(
				22.59% 39.52% at 8.47% 75.79%,
				rgba(108, 79, 155, 0.2) 0%,
				rgba(112, 29, 168, 0) 100%
			),
			linear-gradient(
				0deg,
				rgba(160, 186, 191, 0.2) -2.08%,
				rgba(160, 186, 191, 0.124) 100%
			),
			#fff;
		z-index: 2;
		&__container {
			display: flex;
			gap: 3rem;
			height: 100%;
		}
		&__col {
			&:first-child {
				padding-top: 2rem;
			}
			&:last-child {
				display: flex;
			}
		}
		&__list {
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			grid-gap: 5rem;
			overflow-y: auto;
			-ms-overflow-style: none;
			scrollbar-width: none;
			width: 73rem;
			padding: 2rem 2.7rem 0 2.7rem;

			&::-webkit-scrollbar {
				display: none;
			}
			.service {
				&:nth-child(odd) {
					transform: translateY(10rem);
				}
			}
		}
		&__title {
			position: relative;
			top: 3rem;
			&-wrapper {
				display: flex;
				align-items: center;
				position: relative;
				height: 18rem;
				margin-bottom: 5rem;
			}
			&-block {
				position: absolute;
				left: 0;
				right: 0;
				top: 0;
				bottom: 0;
				transform: translateX(12.5rem);
				width: 140%;
				background: linear-gradient(
						286.2deg,
						#3b94c7 10.05%,
						#4a50b6 82.75%
					),
					linear-gradient(286.2deg, #3b94c7 10.05%, #4a50b6 82.75%),
					#c4c4c4;
				opacity: 0.2;
				z-index: -1;
			}
		}
		&__description {
			margin-bottom: 12rem;
		}
		&__marquee {
			position: absolute;
			left: 0;
			bottom: 4rem;
			z-index: -1;
			&-img {
				width: 100%;
				padding: 0 10rem;
			}
		}

		&__control {
			display: flex;
			flex-direction: column;
			align-items: center;
			align-self: center;
			gap: 1rem;
			&-up,
			&-down {
				cursor: pointer;
				padding: 1rem;
				svg {
					path {
						opacity: 1;
					}
				}
				&.disabled {
					svg {
						path {
							opacity: 0.3;
						}
					}
				}
			}
			&-down {
			}
			&-pagination {
				display: flex;
				flex-direction: column;
				gap: 0.6rem;
			}
			&-dot {
				cursor: pointer;
				width: 0.5rem;
				height: 0.5rem;
				border-radius: 50%;
				background-color: var(--gray);
				transition: all 0.2s ease;
				&.current {
					height: 1.8rem;
					border-radius: 0.8rem;
					background-color: var(--middle-purple);
					transition: all 0.2s ease;
				}
			}
		}
	}
</style>
