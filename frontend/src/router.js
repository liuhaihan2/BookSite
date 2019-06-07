import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    //排行
    {
      path: '/rank',
      name: 'rank',
      component: () => import('./views/Rank.vue')
    },
    //分类
    {
        path: '/category',
        name: 'category',
        component: () => import('./views/Category.vue')
    },
    //个人中心
    {
        path: '/personal',
        name: 'personal',
        component: () => import('./views/Personal.vue')
    },
    //登录
    {
        path: '/login',
        name: 'login',
        component: () => import('./views/Login.vue')
    },
    //注册
    {
        path: '/registe',
        name: 'registe',
        component: () => import('./views/Registe.vue')
    },
    // 书籍详情页
    {
        path: '/bookdetail',
        name: 'bookdetail',
        component: () => import('./views/BookDetail.vue')
    },
    //booklistdetail
    {
        path: '/booklistdetail',
        name: 'booklistdetail',
        component: () => import('./views/BookListDetail.vue')
    }
  ]
})
