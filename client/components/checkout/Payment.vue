<template>
  <a-row :gutter="24" v-if='cart.count > 0' type="flex"
         justify="center">
    <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :lg="{ span: 24 }">
      <r-account-card-list :has-title="false"></r-account-card-list>
      <a-row class="r-mv-24" :gutter="24" type="flex" justify="end">
        <a-col class="gutter-row r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }"
               :md="{ span: 18 }" :lg="{ span: 18 }">
          <r-account-card-add></r-account-card-add>
        </a-col>
        <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 12 }"
               :md="{ span: 6 }" :lg="{ span: 6 }">
          <a-button block type="secondary" html-type="button"
                    class="r-btn-secondary">
            Place order
          </a-button>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-checkout-payment',
  props: {},
  data() {
    return {};
  },
  computed: mapGetters({
    cart: 'cart/cart'
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    onStep() {
      this.$store.dispatch('base/onModal', modal);
    }
  },
}
</script>
