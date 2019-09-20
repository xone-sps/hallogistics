import Vue from 'vue'
import Router from 'vue-router'
import Index from '@/components/Home/index'
import Banner from '@/components/Home/Banner'
import AllBranch from '@/components/Page/Branch/All'
import About from '@/components/Page/About'
import Contact from '@/components/Page/Contact'
import Vientiane from '@/components/Page/Branch/Capital'
import North from '@/components/Page/Branch/North'
import Central from '@/components/Page/Branch/Central'
import South from '@/components/Page/Branch/South'
import Blog from '@/components/Page/Blog'
import Price from '@/components/Page/Price'

Vue.use(Router)

export default new Router({
	mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Index
    },
    {
    	path: '/about',
    	name: 'about',
    	component: About
    },
    {
    path: '/contact',
    name: 'contact',
    component: Contact
    },
    // branch
    {
      path: '/all/branch',
      name: 'allbranch',
      component: AllBranch
    },
        {
      path: '/branch/vientiane',
      name: 'vientiane',
      component: Vientiane
    },
        {
      path: '/branch/north',
      name: 'north',
      component: North
    },
        {
      path: '/branch/central',
      name: 'central',
      component: Central
    },
        {
      path: '/branch/south',
      name: 'south',
      component: South
    },
      {
      path: '/blog',
      name: 'blog',
      component: Blog
    },
          {
      path: '/price',
      name: 'price',
      component: Price
    }
  ]
})
