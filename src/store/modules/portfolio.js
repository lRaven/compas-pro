const state = () => ({
	portfolio: [
		{
			id: 1,
			img: '/img/portfolio/academ.png',
			description: 'Сайт жилого комплекса\n«Академический»',
			tag: 'online-resources'
		},
		{
			id: 2,
			img: '/img/portfolio/kolotok.png',
			description: 'Интернет-магазин стройматериалов\n«Колоток»',
			tag: 'online-resources'
		},
		{
			id: 3,
			img: '/img/portfolio/gooru.png',
			description: 'Сайт для сервиса интеллектуального парсинга',
			tag: 'online-resources'
		},
		{
			id: 4,
			img: '/img/portfolio/gooru_brief.png',
			description: 'Квиз для сайта парсинга',
			tag: 'online-resources'
		},
		{
			id: 5,
			img: '/img/portfolio/gooru_presentation.png',
			description: 'Презентация сервиса',
			tag: 'presentations'
		},
		{
			id: 6,
			img: '/img/portfolio/academ_layouts.png',
			description: 'Поэтажные планировки\nЖК «АКАДЕМИЧЕСКИЙ»',
			tag: 'online-resources'
		},
	],
	portfolio_filtered: []
})

const getters = {}

const mutations = {
	filterByTagsPortfolio(state, array) {
		state.portfolio_filtered = state.portfolio.filter(el => {
			return array.includes(el.tag)
		})
	}
}

const actions = {}

export default {
	state,
	getters,
	mutations,
	actions
}