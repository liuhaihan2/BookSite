import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store/'
import axios from 'axios'
import 'whatwg-fetch'
import Antd from 'ant-design-vue'
import 'ant-design-vue/dist/antd.less'
import './registerServiceWorker'
import CKEditor from '@ckeditor/ckeditor5-vue';
// import './mock.js'

Vue.prototype.axios = axios
Vue.config.productionTip = false
Vue.use(Antd)
Vue.use(CKEditor);

new Vue({
    router,
    store,
    render: h => h(App)
}).$mount('#app')