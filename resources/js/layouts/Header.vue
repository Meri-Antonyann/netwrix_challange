<template>
    <div class="main_header">
        <div class="logo">
            <img src="logo/Netwrix_logo_120x25.png">
        </div>
        <div class="search_section">
            <h1>Netwrix Partner Locator</h1>
            <p>Hundreds of Netwrix partners around the world are standing by to help you. </p>
            <p>With our Partner Locator you can easily find the list of authorized partners in your area.</p>
            
            <search-component />

        </div>
       
    </div>


</template>
<script>
import SearchComponent from '../components/SearchComponent.vue'
export default {
    name: "Header",
    components:{
        SearchComponent
    },
    created(){
    this.chechRoute()

    },
    methods:{
        chechRoute(){
            if(this.$route.query.status){
                this.$store.dispatch('loadPartners',  { data: this.$route.query.status,  type: 'status' });
            }
            if(this.$route.query.country){
                this.$store.dispatch('loadPartners',  { data: this.$route.query.country, type: 'country' });
            }
            if(this.$route.query.state){
                this.$store.dispatch('loadPartners',  { data: this.$route.query.state, type: 'state' });
            }
        },
    }
}
</script>

<style src="../../css/header.scss" lang="scss">

</style>