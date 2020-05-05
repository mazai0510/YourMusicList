import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import HomePage from '../components/HomePage'
import FollowsPage from '../components/FollowsPage'
import ListPage from '../components/ListPage'
import ProfielPage from '../components/ProfielPage'

export default new VueRouter({
  routes: [
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
      path: '/list',
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
})
