const state = () => ({
	portfolio: [
		{
			id: 1,
			preview: '/img/portfolio/preview/residential-complex-preview.png',
			img: '/img/portfolio/residential-complex.png',
			description: 'Сайт жилого комплекса',
			tag: 'online-resources'
		},
		{
			id: 2,
			preview: '/img/portfolio/preview/3dom-preview.png',
			img: '/img/portfolio/3dom.png',
			description: 'Агрегатор недвижимости 3DOM',
			tag: 'online-resources'
		},
		{
			id: 3,
			preview: '/img/portfolio/preview/kolotok-preview.png',
			img: '/img/portfolio/kolotok.png',
			description: 'Интернет-магазин стройматериалов\n«Колоток»',
			tag: 'online-resources'
		},
		{
			id: 4,
			preview: '/img/portfolio/preview/deal-preview.png',
			img: '/img/portfolio/deal.png',
			description: 'Deal-сделки',
			tag: 'online-resources'
		},
		{
			id: 5,
			preview: '/img/portfolio/preview/kolotok-concept-preview.png',
			img: '/img/portfolio/kolotok-concept.png',
			description: 'Концепт интернет-магазина стройматериалов «Колоток»',
			tag: 'online-resources'
		},
		{
			id: 6,
			preview: '/img/portfolio/preview/3dom-layouts-preview.png',
			img: '/img/portfolio/3dom-layouts.png',
			description: 'Поэтажные планировки',
			tag: 'online-resources'
		},
		{
			id: 7,
			preview: '/img/portfolio/preview/gooru-preview.png',
			img: '/img/portfolio/gooru.png',
			description: 'Сайт для сервиса интеллектуального парсинга',
			tag: 'online-resources'
		},
		{
			id: 8,
			preview: '/img/portfolio/preview/gooru-concept_1-preview.png',
			img: '/img/portfolio/gooru-concept_1.png',
			description: 'Концепт сайта парсинга (Вариант 1)',
			tag: 'online-resources'
		},
		{
			id: 9,
			preview: '/img/portfolio/preview/gooru-concept_2-preview.png',
			img: '/img/portfolio/gooru-concept_2.png',
			description: 'Концепт сайта парсинга (Вариант 2)',
			tag: 'online-resources'
		},
		{
			id: 10,
			preview: '/img/portfolio/preview/gooru-concept_3-preview.png',
			img: '/img/portfolio/gooru-concept_3.png',
			description: 'Концепт сайта парсинга (Вариант 3)',
			tag: 'online-resources'
		},
		{
			id: 11,
			preview: '/img/portfolio/preview/gooru-quiz-preview.png',
			img: '/img/portfolio/gooru-quiz.png',
			description: 'Квиз для сайта парсинга',
			tag: 'online-resources'
		},
		{
			id: 12,
			preview: '/img/portfolio/preview/gooru-presentation-preview.png',
			img: '/img/portfolio/gooru-presentation.png',
			description: 'Презентация сервиса',
			tag: 'presentations'
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