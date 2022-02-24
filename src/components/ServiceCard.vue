<template>
	<div class="service">
		<img :src="textImage" alt="" class="service__bg" />
		<h3 class="service__title">{{ title }}</h3>
		<p class="service__description">{{ description }}</p>
		<svg
			class="service__arrow"
			width="42"
			height="20"
			viewBox="0 0 42 20"
			fill="none"
			xmlns="http://www.w3.org/2000/svg"
		>
			<path
				d="M40.0002 10L40.7304 10.6832L41.3696 10L40.7304 9.31677L40.0002 10ZM30.8489 1.68323L39.27 10.6832L40.7304 9.31677L32.3093 0.316769L30.8489 1.68323ZM39.27 9.31677L30.8489 18.3168L32.3093 19.6832L40.7304 10.6832L39.27 9.31677Z"
				fill="#4B4FB4"
			/>
			<path d="M40 10L0 10" stroke="#4B4FB4" stroke-width="2" />
		</svg>
	</div>
</template>

<script>
	export default {
		name: "Service",
		props: {
			textImage: String,
			title: String,
			description: String,
		},
	};
</script>

<style lang="scss" scoped>
	.service {
		position: relative;
		display: flex;
		flex-direction: column;
		background: linear-gradient(
			147.28deg,
			#ffffff 11.21%,
			#ffffff 61.25%,
			#ffffff 106.29%
		);
		min-height: 35.5rem;
		width: 31rem;
		padding: 11rem 2rem 2rem 2rem;
		box-shadow: 0 0.4rem 3rem rgba(0, 0, 0, 0.15);
		overflow: hidden;
		&::after {
			content: "";
			z-index: 1;
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			transition: opacity 0.3s;
			opacity: 0;
			background: linear-gradient(
				147.28deg,
				#a865dd 11.21%,
				#4b4fb4 61.25%,
				#000000 106.29%
			);
		}
		&:hover {
			&::after {
				opacity: 1;
			}
			.service {
				&__bg {
					left: 0;
					transition: all 0.3s ease;
				}
				&__title,
				&__description {
					color: var(--white);
					transition: all 0.3s ease;
				}
				&__arrow {
					path {
						fill: var(--white);
						stroke: var(--white);
						transition: all 0.3s ease;
					}
				}
			}
		}
		&__bg {
			position: absolute;
			left: 45%;
			top: 2rem;
			height: 11rem;
			width: max-content;
			transition: all 0.3s ease;
			z-index: 2;
		}
		&__title {
			line-height: 3.7rem;
			max-width: 90%;
			margin-bottom: 6rem;
			transition: all 0.3s ease;
			z-index: 2;
		}
		&__description {
			font-size: 1.3rem;
			line-height: 1.8rem;
			margin-bottom: 2rem;
			transition: all 0.3s ease;
			z-index: 2;
		}
		&__arrow {
			align-self: flex-end;
			transition: all 0.3s ease;
			z-index: 2;
		}
	}
</style>
