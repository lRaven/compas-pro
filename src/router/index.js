import { createRouter, createWebHistory } from 'vue-router';

const routes = [
	{
		path: '/',
		name: 'home',
		component: () => import(/* webpackChunkName: "home" */ '@/views/PageHome.vue'),
		meta: {
			title: 'Compas Pro',
		}
	},
	{
		path: '/portfolio',
		name: 'portfolio',
		component: () => import(/* webpackChunkName: "portfolio" */ '@/views/PagePortfolio.vue'),
		meta: {
			title: 'Портфолио'
		}
	},
	{
		path: '/yourbuh',
		name: 'yourbuh',
		component: () => import(/* webpackChunkName: "lawyer_accountant" */ '@/views/PageLawyerAccountant.vue'),
		meta: {
			title: 'ПО юристибухгалтер.рф'
		}
	},

	{
		path: '/404',
		name: '404',
		component: () => import(/* webpackChunkName: "not_found" */ '@/views/PageNotFound.vue'),
		meta: {
			title: '404',
		}
	},
	{
		path: '/:pathMatch(.*)*',
		redirect: '/404'
	}
]

const router = createRouter({
	history: createWebHistory(),
	routes,
})

//* переход к странице с координатами x: 0, y: 0
router.beforeEach(() => { window.scrollTo(0, 0); })

export default router