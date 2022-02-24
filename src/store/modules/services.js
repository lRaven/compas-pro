const state = () => ({
	services: [
		{
			id: 1,
			image: 'img/icon/aggregator-sites.svg',
			title: 'Сайты агрегаторы',
			description: 'Сайт, который агрегирует (собирает) и классифицирует информацию и предложения разных компаний на одном ресурсе.',
		},
		{
			id: 2,
			image: 'img/icon/business-sites.svg',
			title: 'Создание сложных сайтов для бизнеса',
			description: 'Проект рассчитан на корректную работу при крупном количестве посетителей единовременно и высоких нагрузках на сервер.',
		},
		{
			id: 3,
			image: 'img/icon/aggregator-sites.svg',
			title: 'Сайты агрегаторы',
			description: 'Сайт, который агрегирует (собирает) и классифицирует информацию и предложения разных компаний на одном ресурсе.',
		},
		{
			id: 4,
			image: 'img/icon/business-sites.svg',
			title: 'Создание сложных сайтов для бизнеса',
			description: 'Проект рассчитан на корректную работу при крупном количестве посетителей единовременно и высоких нагрузках на сервер.',
		}
	],
})

const getters = {
	SERVICES: state => {
		return state.services;
	},
}

const mutations = {
	SET_SINGLE_ROOM(state, payload) {
		state.services.push(payload);
	},
}

const actions = {}

export default {
	state,
	getters,
	mutations,
	actions
}