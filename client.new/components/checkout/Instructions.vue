<template>
  <a-row :gutter="24" justify="center"
         type="flex"
  >
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-form :form="form"
              class="ant-form ant-form-vertical"
              @submit="onStep"
      >
        <a-form-item label="Notes">
          <a-input
            v-decorator="['notes', { rules: [{ required: true, message: 'Please enter your delivery instructions.' }] }]"
            placeholder="Your delivery instructions"
            size="large"
            type="textarea"
          >
          </a-input>
        </a-form-item>
        <a-form-item label="What if you're not around?">
          By selecting this option you accept full responsibility for your
          order after it has been delivered unattended, including any loss due
          to theft or damage due to temperature sensitivity.
        </a-form-item>
        <a-row :gutter="24" class="r-mv-24" justify="start"
               type="flex"
        >
          <a-col :lg="{ span: 18 }" :md="{ span: 18 }"
                 :sm="{ span: 12 }"
                 :xs="{ span: 12 }" class="r-text-left"
          >
            <a-button class="r-btn-bordered-secondary"
                      html-type="button"
                      size="large"
                      type="secondary"
            >
              Skip
            </a-button>
          </a-col>
          <a-col :lg="{ span: 6 }" :md="{ span: 6 }"
                 :sm="{ span: 12 }"
                 :xs="{ span: 12 }" class="r-text-right"
          >
            <a-button block class="r-btn-secondary" html-type="submit"
                      type="secondary"
            >
              Proceed
            </a-button>
          </a-col>
        </a-row>
      </a-form>
      <r-spinner process="isProcessing"></r-spinner>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-checkout-instructions',
  props: {},
  data () {
    return {
      form: this.$form.createForm(this, { name: 'form_instructions' }),
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
