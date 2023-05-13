<template>
    <div class="search-container">
        <form @submit.prevent="search()">
            <input type="search" v-model="search_text" placeholder="Search by company name or address...">
            <button type="submit"></button>
        </form>
        <div class="select_options">
            <custom-select :options="types" :label="this.$route.query.status ? this.$route.query.status.toUpperCase() : 'Type'"  @passData="selectedType($event)"></custom-select>
            <custom-select :options="countries" :label="this.$route.query.country ? this.$route.query.country.toUpperCase() : 'Country'"  @passData="selectedCountry($event)"></custom-select>
            <custom-select :options="states" :label="this.$route.query.state ? this.$route.query.state.toUpperCase() : 'State'"  @passData="selectedState($event)"></custom-select>
        </div>
    </div>
</template>
<script>
import CustomSelect from './CustomSelect.vue'

export default {
    name: "Search",
    components: {
        CustomSelect
    },
    data() {
        return {
            search_text:  null,
            countries: [],
            states: [],
            types: []
        }
    },
    created(){
        this.loadCountries()
        this.loadStates()
        this.loadTypes()
    },
    methods:{
       
        async loadTypes(){
            await this.axios.get('/api/types').then(response=>{
                if(response.data.status) this.types = response.data.data.types
            }).catch(error=>{
                console.log(error)
            })
        },
       
        async loadCountries(){
            await this.axios.get('/api/countries').then(response=>{
                if(response.data.status) this.countries = response.data.data.countries
            }).catch(error=>{
                console.log(error)
            })
        },

        async loadStates(){
            await this.axios.get('/api/states').then(response=>{
                if(response.data.status) this.states = response.data.data.states
            }).catch(error=>{
                console.log(error)
            })
        },
        async selectedCountry(event){
            this.states = event.states;
            this.$router.push({ path: this.$route.fullPath, query: {country: event.name.toLowerCase()} });
            await  this.$store.dispatch('loadPartners',  { data: event.short_name, type: 'country' });
        },
        async selectedState(event){
            this.$router.push({ path: this.$route.fullPath, query: {state: event.name.toLowerCase()} });
            await this.$store.dispatch('loadPartners',  { data: event.short_name, type: 'state' });
        },
        async selectedType(event){
            this.$router.push({ path: this.$route.fullPath, query: {status: event.status.toLowerCase()} });
            await this.$store.dispatch('loadPartners',  { data: event.status, type: 'status' });
        },

        async search(){
            this.$router.push({ path: this.$route.fullPath, query: {search: this.search_text } });
            await this.$store.dispatch('loadPartners',  { data: this.search_text, type: 'search_text' });
        },
    }
}
</script>