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
import Service from '@/components/Page/Service'
import Privacy from '@/components/Page/Privacy'
import NotfoundPage from '@/components/Page/Notfound'

Vue.use(Router)

export default new Router({
	mode: 'history',
  routes: [
  {
    path: '/',
    name: 'home',
    component: Index,
    meta:{title:'Home|Hal Logistics'}
  },
  {
   path: '/about',
   name: 'about',
   component: About,
   meta: {title: 'About|Hal Logistics'}
 },
 {
  path: '/contact',
  name: 'contact',
  component: Contact,
  meta: {title: 'Contact|Hal Logistics'}
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
      component: Vientiane,
      meta: {title: 'ສາຂານະຄອນຫຼວງ|Hal Logistics'}
    },
    {
      path: '/branch/north',
      name: 'north',
      component: North,
      meta: {title: 'ສາຂາພາກເໜືອ|Hal Logistics'}
    },
    {
      path: '/branch/central',
      name: 'central',
      component: Central,
      meta: {title: 'ສາຂາພາກກາງ|Hal Logistics'}
    },
    {
      path: '/branch/south',
      name: 'south',
      component: South,
      meta: {title: 'ສາຂາພາກໃຕ້|Hal Logistics'}
    },
    {
      path: '/blog',
      name: 'blog',
      // redirect: { name: 'home' },
      component: Blog
    },
    {
      path: '/price',
      name: 'price',
      component: Price,
      meta: {title: 'ຄ່າບໍລິການ|Hal Logistics'}
    },
    {
      path: '/service',
      name: 'service',
      component: Service,
      meta: {title: 'ການບໍລິການ|Hal Logistics'}
    },
        {
      path: '/privacy',
      name: 'privacy',
      component: Privacy,
      meta: {title: 'Privacy|Hal Logistics'}
    },
    {
      path: '/*',
      name: 'notfound',
      component: NotfoundPage,
      meta: {title: 'Not found page'}
    },

    ],
    scrollBehavior (to, from, savedPosition) {
      return { x: 10, y: 0 }
    }
    
  })
