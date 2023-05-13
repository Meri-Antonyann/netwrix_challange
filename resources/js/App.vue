<template>
    <Header />
    <partner-locator-component></partner-locator-component>
</template>
<script>
import Header from './layouts/Header.vue'
import PartnerLocatorComponent from './components/PartnerLocatorComponent.vue';

export default {
    name: "App",
    components: {
        Header,
        PartnerLocatorComponent
    },
    data() {
        return {
        }
    }
}
</script>