<template>
  <a-steps :current="currentStep">
    <a-step title="Business Information">
    </a-step>
    <a-step title="Supplier Information">
    </a-step>
    <a-step title="Billing Information">
    </a-step>
    <a-step title="Confirmation">
    </a-step>
  </a-steps>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  components: {},
  layout: 'column',
  data () {
    return {
      currentStep: 0,
      formLayout: 'horizontal',
      formCoupon: this.$form.createForm(this, { name: 'form_coupon' }),
      modal: {
        current: null,
        isVisible: false
      }
    }
  },
  computed: mapGetters({
    currentStep: 'account/currentStep'
  }),
  methods: {
    onModal (current) {
      this.modal.isVisible = true
      this.modal.current = current
      this.$store.dispatch('app/onModal', this.modal)
    }
  }
}
</script>
