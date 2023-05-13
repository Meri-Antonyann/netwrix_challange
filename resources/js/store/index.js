
import { ref } from 'vue';
import { useLoading } from 'vue3-loading-overlay';
import 'vue3-loading-overlay/dist/vue3-loading-overlay.css';

const state = {
    partners: []
};

const getters = {
    partners: state => state.partners ? state.partners : null
};

const mutations = {
    partners (state, partners) {
        state.partners = partners;
    }
};

const actions =  {
    loadPartners({commit}, data) {
        const fullPage = ref(true);
        let formContainer = ref(null);
        let loader = useLoading();
        const onCancel =() => {
            console.log('User cancelled the loader.')
        }; 

        loader.show({
            container: this.fullPage ? null : formContainer.value,
            canCancel: true,
            onCancel: onCancel,
        });

        axios.get('/api/partners', { params: { data } }).then(response=>{
            if(response.data.status) commit('partners', response.data.data.partners)
            loader.hide()
        }).catch(error=>{
            console.log(error)
        })
    }
  }

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
};