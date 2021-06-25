<template>
  <a-form class="ant-form ant-form-vertical"
          @submit="saveAddress"
          :form="formAddress"
  >
    <a-form-item label="Address Line 1">
      <a-input
        v-decorator="['address_line_1', { rules: [{ required: true, message: 'Address line 1 is required' }] }]"
      />
    </a-form-item>
    <a-form-item label="Address line 1 (optional)">
      <a-input
        v-decorator="['email', { rules: [] }]"
      />
    </a-form-item>
    <a-form-item label="Unit # (optional)">
      <a-input
        v-decorator="['unit', { rules: [] }]"
      />
    </a-form-item>
    <a-form-item label="Post Code">
      <a-row>
        <a-col :xs="{ span: 12 }" :lg="{ span: 6 }">
          <a-input
            v-decorator="['post_code', { rules: [{ required: true, message: 'Post code is required' }] }]"
          />
        </a-col>
      </a-row>
    </a-form-item>
    <a-form-item :wrapper-col="{ span: 24 }">
      <a-button type="secondary" html-type="submit"
                class="r-btn-secondary"
      >
        Proceed
      </a-button>
    </a-form-item>
  </a-form>
</template>
<script>
export default {
  data () {
    return {
      cart: {
        items: [],
        frequency: {},
        frequencies: []
      },
      formAddress: this.$form.createForm(this, { name: 'form_address' })
    }
  },
  mounted () {
    this.cart = this.$store.state.cart
    console.log('Cart data : ', this.cart)
  },
  methods: {
    saveAddress (e) {
      e.preventDefault()
      this.formAddress.validateFields((err, values) => {
        if (!err) {
          console.log('Received values of form: ', values)

          this.setCurrent(1)
        }
      })
    }
  },
}
</script>
