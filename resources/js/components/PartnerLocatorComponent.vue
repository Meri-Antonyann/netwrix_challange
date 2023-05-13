<template>
    <div class="container">
        <div class="partner_div" v-if="partners.length" v-for="(partner,index) in partners" :key="index">
            <div>
                <img :src="partner.logo">
            </div>
            <div>
                <h3>{{ partner.company }}</h3>
                <p>{{ partner.address }}</p>
            </div>
            <div class="contact">
                <a :href="partner.website"> Website </a>
                <a  :href="`tel:${partner.website}`">{{ partner.phone }}</a>
            </div>
            <div class="status">
                <p>{{ partner.status }}</p>
            </div>
        </div>
        <div v-else>
            <p class="empty_result">Your search parameters did not match any partners. Please try different search.</p>
        </div>
    </div>

</template>
<script>
import { mapGetters, mapMutations } from 'vuex';
export default {
    name: "PartnerLocator",
    data() {
        return {
        }
    },
    computed: {
        ...mapGetters({
            partners: "partners",
        }),
    },
    mounted(){
        this.loadPartners();
    },
    methods:{
        ...mapMutations({
            setPartners: "partners"
        }),
        async loadPartners(){
            this.$store.dispatch('loadPartners',  { data: 'null' }) 
        },
    }
}
</script>
<style src="../../css/partnerLocator.scss" lang="scss"></style>