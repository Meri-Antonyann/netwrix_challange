import './bootstrap';
import axios from 'axios'
import VueAxios from 'vue-axios'
import {createApp} from 'vue';
import { createStore } from 'vuex'
import store from './store/index.js'
import router from './router/index'
import App from './App.vue';


const vuestore = createStore(store);
createApp(App).use(VueAxios, axios).use(vuestore).use(router).mount("#app")