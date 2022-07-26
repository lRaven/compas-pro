<template>
	<label class="text-checkbox">
		<input
			type="checkbox"
			:value="value"
			class="text-checkbox__real"
			v-model="model"
		/>
		<span class="text-checkbox__fake">{{ description }}</span>
	</label>
</template>

<script>
	export default {
		name: "TextCheckbox",
		props: {
			value: [Number, String],
			list: Array,
			description: {
				value: [Number, String],
				default: "text checkbox",
			},
		},
		watch: {
			model() {
				this.model.push(this.value);
				this.$emit("update:modelValue", this.model);
			},
		},
		data() {
			return {
				model: [...this.list],
			};
		},
	};
</script>

<style lang="scss" scoped>
	@import "@/assets/scss/variables";

	.text-checkbox {
		&__real {
			display: none;
			&:checked {
				+ .text-checkbox {
					&__fake {
						background-color: $light-purple;
						color: $white;
					}
				}
			}
		}
		&__fake {
			user-select: none;
			cursor: pointer;
			font-size: 1.4rem;
			padding: 1rem 2rem;
			border-radius: 5rem;
			background-color: rgba($gray, 0.3);
			color: rgba($light-dark, 0.7);
			font-weight: 600;
			transition: all 0.2s ease;
			&:hover {
				background-color: $light-purple;
				color: $white;
			}
		}
	}
</style>
