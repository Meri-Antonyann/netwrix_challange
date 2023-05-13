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
import { ref } from 'vue';
import { useLoading } from 'vue3-loading-overlay';
import 'vue3-loading-overlay/dist/vue3-loading-overlay.css';
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
        console.log(this.partners)
    },
    methods:{
        ...mapMutations({
            setPartners: "partners"
        }),
        async loadPartners(){
            this.$store.dispatch('loadPartners',  { data: 'null' }).then(() => {
            
            }).catch(() => {
            
            });
              
        },
    }
}
</script>
<style scoped lang="scss">
    
    .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;

        .empty_result{
            padding: 15px;
            font-family: 'Open Sans';
            font-style: normal;
            color: #354556;
        }
       
    }
    .partner_div{
        width: 100%;
        height: 169px;
        background: #FFFFFF;
        box-shadow: 0px 1px 2px rgba(5, 27, 43, 0.14);
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-left: 50px;
        padding-right: 50px;
        div{
            width: 20%;
        }
        div:nth-child(2){
            width: 35%;
        }
        h3, p{
            font-family: 'Open Sans';
            font-style: normal;
            color: #354556;

        }
        h3{
            font-weight: 700;
            font-size: 21px;
            line-height: 32px;
        }
        p{
            font-weight: 400;
            font-size: 14px;
            line-height: 24px;
        }
        a{
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 32px;
            color: #0068DA;
        }
        .contact{
            display: flex;
            flex-direction: column;
            padding-right: 25px;
            border-right: 1px solid #DCDEE0;
        }
        .status{
            p{
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 600;
                font-size: 13px;
                line-height: 32px;
                color: #354556;
            }
        }
    }
    .partner_div:first-of-type{
        margin-top: 50px;
    }
    @media(max-width: 767px){
        .partner_div{
                width: 80%;
                height: 418px;
                margin: 0 auto;
                background: #FFFFFF;
                box-shadow: 0px 1px 2px rgba(5, 27, 43, 0.14);
                margin-bottom: 30px;
                display: flex;
                flex-direction: column;
                align-items: start;
                padding: 25px;
                div{
                    width: 100%;
                }
                div:nth-child(2){
                    width: 100%;
                }
            }
    }
    @media (min-width: 768px) {
        .container {
            width: 750px;
        }
        
    }
    
    @media (min-width: 1200px) {
        .container {
            width: 1170px;
        }
    }
</style>