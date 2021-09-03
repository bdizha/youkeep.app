<template>
  <a-form :form="form"
          class="ant-form ant-form-vertical r-mb-24"
  >
    <a-input
      v-decorator="['coupon', { rules: [{ required: false, message: 'Please enter your coupon' }] }]"
      placeholder="Add a coupon code"
    >
    </a-input>
  </a-form>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-checkout-coupon',
  props: {},
  data () {
    return {
      form: this.$form.createForm(this, { name: 'form_cart' }),
    }
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
