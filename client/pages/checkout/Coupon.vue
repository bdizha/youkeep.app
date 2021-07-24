<template>
  <a-form :form="form"
          class="ant-form ant-form-vertical r-margin-bottom-24"
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
  props: {
    name: 'r-checkout-coupon'
  },
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
