<template>
    <div class="custom-select">
      <div class="select-container" @click="toggleDropdown">
        <div class="selected-option">{{  label }}</div>
        <div class="dropdown-icon">▼</div>
      </div>
      <div class="options-container" v-if="isDropdownOpen">
        <div class="search-container" v-if="options.length > 10">
          <input type="text" class="search-input" v-model="searchQuery" placeholder="Search...">
        </div>
        <div class="options-list">
          <div v-for="option in filteredOptions" :key="option.id" class="option" @click="selectOption(option)">
            {{ option.status ? option.status :  option.name }}
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
    import { mapGetters } from 'vuex'
    export default {
      props: {
        options: {
          type: Array,
          required: true
        },
        label: {
          type: String
        }
      },
      data() {
        return {
          isDropdownOpen: false,
          searchQuery: '',
        }
      },
      computed: {
        filteredOptions() {
          var self = this;

          if(this.options.length > 10){
            return self.options.filter(option => {
              if(!option.status){
                return option.name.toLowerCase().includes(this.searchQuery.toLowerCase())
              }
            })
          }else{
            return self.options;
          };
        }
      },
      mounted(){
      },
      methods: {
        toggleDropdown() {
          this.isDropdownOpen = !this.isDropdownOpen
        },
        selectOption(option) {
          this.$emit('passData', option)
          this.isDropdownOpen = false
        },
      }
    }
  </script>


<style src="../../css/custom_select.scss" lang="scss">

</style>