import Vue from 'vue'
import VueRouter from 'vue-router'
import HomePage from '../pages/HomePage'
import FollowsPage from '../pages/FollowsPage'
import ListPage from '../pages/ListPage'
import ProfielPage from '../pages/ProfielPage'

Vue.use(VueRouter)

const routes = [
    {
      path: '/',
      name: 'HomePage',
      component: HomePage
    },
    {
      path: '/Follows',
      name: 'FollowsPage',
      component: FollowsPage
    },
    {
      path: '/List',
      name: 'ListPage',
      component: ListPage,
      props: true
    },
    {
      path: '/Profiel',
      name: 'ProfielPage',
      component: ProfielPage
    }
  ]

  const router = new VueRouter({
    mode: 'history',
    routes
  })

export default router
