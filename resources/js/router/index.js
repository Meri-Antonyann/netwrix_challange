import { createWebHistory, createRouter } from "vue-router";
import CustomSelect from '../components/CustomSelect.vue'
const routes = [
//    {
//     path:'/',
//     name:'home',
//     component: CustomSelect
//    }

];

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;