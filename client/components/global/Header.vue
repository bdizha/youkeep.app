<template>
  <a-layout-header :class="{'r-header__dark': isDark}" class="r-header">
  <a-row align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 16 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
     <a-card class="r-mv-12 r-bg-white">
       <r-layout-menu v-if="!modal.isVisible && !isRaised">
         <r-nav-item>
           <a-icon type="menu" @click="onDrawer('menu')"/>
         </r-nav-item>
         <r-nav-item class="r-nav-item__logo r-p-r-0">
           <r-logo :is-icon="isIcon"></r-logo>
         </r-nav-item>
         <r-nav-item class="r-hide-sm r-nav-item__search">
         </r-nav-item>
         <r-nav-item class="r-hide-sm">
           <r-nav></r-nav>
         </r-nav-item>
       </r-layout-menu>
       <r-layout-menu v-if="modal.isVisible || isRaised" class="r-layout-menu r-layout-menu-modal">
         <r-nav-item class="r-nav-item__text">
           <div v-on:click="onModalClose">
             <a-button class="r-btn-dark"
                       html-type="button"
                       type="secondary"
                       v-on:click="onModalClose"
             >
               <a-icon type="left"/>
               Back
             </a-button>
           </div>
         </r-nav-item>
         <r-nav-item class="r-nav-item__logo">
           <div class="r-logo" v-on:click="onModalClose">
             <r-logo :is-icon="true"></r-logo>
           </div>
         </r-nav-item>
       </r-layout-menu>
       <r-drawer></r-drawer>
       <r-modal></r-modal>
     </a-card>
    </a-col>
  </a-row>
  </a-layout-header>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-header',
  props: {
    isIcon: { type: Boolean, required: false, default: true }
  },
  data () {
    return {
      formStore: this.$form.createForm(this, { name: 'form_store' }),
      deliveryOption: 1
    }
  },
  computed: mapGetters({
    isStore: 'base/isStore',
    cart: 'cart/cart',
    modal: 'base/modal',
    address: 'account/address',
    store: 'base/store',
    processes: 'base/processes',
    stores: 'base/stores',
    hasStores: 'base/hasStores',
    hasStore: 'base/hasStore',
    drawer: 'base/drawer',
    hasStoreTray: 'base/hasStoreTray',
    isDark: 'base/isDark',
    isRaised: 'base/isRaised',
    search: 'base/search'
  }),
  async created () {
    await this.onCountries()
    console.log('Fetching countries >>>> ')

    // await this.onStores()
    console.log('Fetching stores >>>> ')
  },
  methods: {
    onModalClose () {
      this.$store.dispatch('base/onIsRaised', false)

      const modal = {}
      modal.isVisible = false
      modal.current = null

      this.$store.dispatch('base/onModal', modal)
    },
    onDelivery () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'delivery'
      this.$store.dispatch('base/onModal', modal)
    },
    onDrawer (current) {
      const drawer = {}
      drawer.current = current
      drawer.placement = 'left'
      drawer.isVisible = true

      console.log('current', current)

      this.$store.dispatch('base/onDrawer', drawer)
    },
    async onStores () {
      const payload = {
        category_id: null,
        limit: process.env.APP_LIMIT
      }

      await this.$store.dispatch('base/onStores', payload)
    },
    async onCountries () {
      const payload = {
        limit: null
      }

      await this.$store.dispatch('base/onCountries', payload)
    }
  }
}
</script>
