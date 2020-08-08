<template>
  <a-row :gutter="24" type="flex"
         justify="center">
    <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :lg="{ span: 24 }">
      <r-account-address-list :has-title="false"></r-account-address-list>
      <a-row class="r-margin-vertical-24" :gutter="24" type="flex" justify="start">
        <a-col class="gutter-row r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }"
               :md="{ span: 18 }" :lg="{ span: 18 }">
          <r-account-address-add></r-account-address-add>
        </a-col>
        <a-col class="gutter-row r-text-right" :xs="{ span: 12 }" :sm="{ span: 12 }"
               :md="{ span: 6 }" :lg="{ span: 6 }">
          <a-button block type="primary" html-type="button"
                    class="ant-btn-secondary r-btn-primary">
            Proceed
          </a-button>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-checkout-address'
  props: {
  },
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
