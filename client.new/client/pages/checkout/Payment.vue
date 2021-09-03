<template>
  <a-row v-if="cart.count > 0" :gutter="24" justify="center"
         type="flex"
  >
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
           class="gutter-row"
    >
      <r-account-card-list :has-title="false"></r-account-card-list>
      <a-row :gutter="24" class="r-margin-vertical-24" justify="end" type="flex">
        <a-col :lg="{ span: 18 }" :md="{ span: 18 }" :sm="{ span: 12 }"
               :xs="{ span: 12 }" class="r-text-left"
        >
          <r-account-card-add></r-account-card-add>
        </a-col>
        <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 12 }"
               :xs="{ span: 12 }" class="gutter-row"
        >
          <a-button block class="r-btn-secondary" html-type="button"
                    type="secondary"
          >
            Place order
          </a-button>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  props: {
    name: 'r-checkout-payment'
  },
  data () {
    return {}
  },
  computed: mapGetters({
    cart: 'cart/cart'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onStep () {
      this.$store.dispatch('base/onModal', modal)
    }
  },
}
</script>
