<template>
  <r-account>
    <a-row align="middle" justify="start" type="flex">
      <a-col :lg="{ span: 24 }"
             :sm="{ span: 24 }" :xs="{ span: 24 }"
      >
        <a-card class="r-mb-24" style="width: 100%;" title="ACCOUNT CREDIT">
          <a-row :gutter="[0,12]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 20 }"
                   :sm="{ span: 20 }" :xs="{ span: 20 }"
            >
              <a-row :gutter="[0,12]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 12 }"
                       :sm="{ span: 12 }" :xs="{ span: 12 }"
                >
                  <label class="r-heading-light">Account status:</label>
                </a-col>
                <a-col :lg="{ span: 12 }"
                       :sm="{ span: 12 }" :xs="{ span: 12 }"
                >
                  <a-switch default-checked disabled size="large">
                    <a-icon slot="checkedChildren" type="check"/>
                    <a-icon slot="unCheckedChildren" type="close"/>
                  </a-switch>
                </a-col>
              </a-row>
              <a-row :gutter="[0,12]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 12 }"
                       :sm="{ span: 12 }" :xs="{ span: 12 }"
                >
                  <label class="r-heading-light">Account balance:</label>
                </a-col>
                <a-col :lg="{ span: 12 }"
                       :sm="{ span: 12 }" :xs="{ span: 12 }"
                >
                  <label class="r-heading-light">R0.00</label>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 4 }"
                   :sm="{ span: 4 }" :xs="{ span: 4 }"
            >
              <a-button block class="r-btn-bordered-secondary" size="small"
                        type="secondary" v-on:click="onModal('account-credit', $event)"
              >
                Add credit
              </a-button>
            </a-col>
          </a-row>
        </a-card>
      </a-col>
    </a-row>
    <a-row align="middle" justify="start" type="flex">
      <a-col :lg="{ span: 24 }"
             :sm="{ span: 24 }" :xs="{ span: 24 }"
      >
        <a-card class="r-mb-24" style="width: 100%;" title="ACCOUNT PROMOS">
          <a-row :gutter="[0,12]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 20 }"
                   :sm="{ span: 20 }" :xs="{ span: 20 }"
            >
              <a-row :gutter="[0,12]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 12 }"
                       :sm="{ span: 12 }" :xs="{ span: 12 }"
                >
                  <label class="r-heading-light">Free shipping</label>
                </a-col>
                <a-col :lg="{ span: 12 }"
                       :sm="{ span: 12 }" :xs="{ span: 12 }"
                >
                  R375.00
                </a-col>
              </a-row>
              <a-row :gutter="[0,12]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 12 }"
                       :sm="{ span: 12 }" :xs="{ span: 12 }"
                >
                  <label class="r-heading-light">Eat as you go</label>
                </a-col>
                <a-col :lg="{ span: 12 }"
                       :sm="{ span: 12 }" :xs="{ span: 12 }"
                >
                  R1000.00
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 4 }"
                   :sm="{ span: 4 }" :xs="{ span: 4 }"
            >
              <a-button block class="r-btn-bordered-secondary" size="small"
                        type="secondary" v-on:click="onModal('account-promo', $event)"
              >
                Add promo
              </a-button>
            </a-col>
          </a-row>
        </a-card>
      </a-col>
    </a-row>
  </r-account>
</template>
<script>
export default {
  components: {},
  data () {
    return {
      formLayout: 'horizontal',
      formCoupon: this.$form.createForm(this, { name: 'form_coupon' })
    }
  },
  methods: {
    onModal (current) {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = current
      this.$store.dispatch('base/onModal', modal)
    },
  },
}
</script>
