import { createStore } from 'vuex'
import Services from '@/store/modules/services'

export default createStore({
	state: {
		windowWidth: null,
	},
	getters: {
		WINDOW_WIDTH: state => {
			return state.windowWidth;
		}
	},
	mutations: {
		SET_WINDOW_WIDTH(state, payload) {
			state.windowWidth = payload;
		}
	},
	actions: {},

	modules: { Services },
});