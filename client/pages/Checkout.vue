<template>
  <div class="r-checkout">
    <a-row align="middle" justify="center" style="margin-top: 125px;" type="flex">
      <a-col :lg="{ span: 18 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <a-row>
          <a-col :lg="{ span: 16 }" :md="{ span: 16 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
            <a-row class="r-bg-primary-light" style="margin-right: 20px; padding: 20px;">
              <a-col :span="24">
                <a-collapse :defaultActiveKey="1" accordion="true" bordered="true"
                            expandIconPosition="right"
                >
                  <a-collapse-panel :key="1" class="r-checkout-icon r-checkout-icon-address"
                                    header="Delivery address"
                  >
                    <r-account-address-list></r-account-address-list>
                    <a-row :gutter="24" align="middle" class="r-mv-24" justify="start" type="flex">
                      <a-col :lg="{ span: 18 }" :md="{ span: 18 }" :sm="{ span: 12 }"
                             :xs="{ span: 12 }" class="r-text-left"
                      >
                        <r-account-address-add></r-account-address-add>
                      </a-col>
                      <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 12 }"
                             :xs="{ span: 12 }" class="r-text-right"
                      >
                        <a-button block class="r-btn-secondary" html-type="button"
                                  type="secondary"
                        >
                          Proceed
                        </a-button>
                      </a-col>
                    </a-row>
                  </a-collapse-panel>
                  <a-collapse-panel :key="2" class="r-checkout-icon r-checkout-icon-notes"
                                    header="Delivery instructions"
                  >
                    <a-form :class="{'r-hidden' :isProcessing || isSuccessful}"
                            :form="formContact"
                            class="ant-form ant-form-vertical"
                            @submit="saveContact"
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
                          <a-button class="r-btn-bordered-grey"
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
                    <r-spinner v-if="isProcessing" :is-absolute="true"></r-spinner>
                    <r-notice v-if="isSuccessful"></r-notice>
                  </a-collapse-panel>
                  <a-collapse-panel :key="3" class="r-checkout-icon r-checkout-icon-contact"
                                    header="Your mobile number"
                  >
                    <a-form :class="{'r-hidden' :isProcessing || isSuccessful}"
                            :form="formMobile"
                            class="ant-form ant-form-vertical"
                            @submit="saveMobile"
                    >
                      <a-form-item :wrapper-col="{ xs: {span: 24},  lg: {span: 12} }"
                                   label="We use your number to text or call you about your order."
                      >
                        <a-input
                          v-decorator="['name', { rules: [{ required: true, message: 'Please enter your mobile number' }] }]"
                          placeholder="Your mobile number name"
                          size="large"
                        >
                        </a-input>
                      </a-form-item>
                      <a-row :gutter="24" class="r-mv-24" justify="start"
                             type="flex"
                      >
                        <a-col :lg="{ span: 18 }" :md="{ span: 18 }"
                               :sm="{ span: 12 }"
                               :xs="{ span: 12 }" class="r-text-left"
                        >
                          <a-button class="r-btn-bordered-grey"
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
                          <a-button block class="r-btn-secondary" html-type="button"
                                    type="secondary"
                          >
                            Proceed
                          </a-button>
                        </a-col>
                      </a-row>
                    </a-form>
                    <r-spinner v-if="isProcessing" :is-absolute="true"></r-spinner>
                    <r-notice v-if="isSuccessful"></r-notice>
                  </a-collapse-panel>
                  <a-collapse-panel :key="4" class="r-checkout-icon r-checkout-icon-payment"
                                    header="Payment"
                  >
                    <r-account-card-list></r-account-card-list>
                    <a-row :gutter="24" class="r-mv-24" justify="end" type="flex">
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
                  </a-collapse-panel>
                </a-collapse>
              </a-col>
            </a-row>
          </a-col>
          <a-col :lg="{ span: 8 }" :xs="{ span: 24 }">
            <a-row class="r-bg-primary-light">
              <a-col :span="24" class="r-p-24">
                <a-form :form="formCart"
                        class="ant-form ant-form-vertical"
                >
                  <a-form-item :wrapper-col="{ span: 24 }">
                    <a-button block class="ant-btn ant-btn-secondary"
                              disabled
                              html-type="submit"
                              type="secondary"
                    >
                      Place order
                    </a-button>
                  </a-form-item>
                  <a-form-item :wrapper-col="{ xs: {span: 24},  lg: {span: 12} }"
                               label="We use your number to text or call you about your order."
                  >
                    <a-input
                      v-decorator="['name', { rules: [{ required: true, message: 'Please enter your mobile number' }] }]"
                      placeholder="Your mobile number name"
                      size="large"
                    >
                    </a-input>
                  </a-form-item>
                  <a-form-item label="Coupon">
                    <a-input
                      v-decorator="['coupon', { rules: [{ required: false, message: 'Please enter your coupon' }] }]"
                      placeholder="Enter your coupon code"
                      size="large"
                    >
                    </a-input>
                  </a-form-item>
                  <a-form-item>
                    <a-table :columns="columns" :dataSource="summary" :pagination="false"/>
                  </a-form-item>
                </a-form>
              </a-col>
            </a-row>
            <a-row>
              <a-col :span="24" class="r-checkout-footer">
                <p class="r-text-normal">
                  By placing your order, you agree to be bound by the Youkeep Terms of
                  <nuxt-link target="_blank" to="/service">Service</nuxt-link>
                  and
                  <nuxt-link href="/privacy" to="_blank">Privacy Policy</nuxt-link>
                  .
                </p>
                <p class="r-text-normal">
                  Your card will be temporarily authorized for R15. Your
                  statement will reflect the final order total after order completion. Learn more
                  A VAT fee may be added to your final total if required by law or the
                  retailer. The fee will be visible on your receipt after delivery.
                </p>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </div>
</template>
<script>
const columns = [
  {
    title: 'Item',
    dataIndex: 'name',
    key: 'name',
  },
  {
    title: 'Value',
    dataIndex: 'value',
    key: 'value',
    width: '24%',
  }
]

export default {
  name: 'r-checkout',
  data () {
    return {
      cart: {
        items: [],
        frequency: {},
        frequencies: []
      },
      isSuccessful: false,
      isProcessing: false,
      current: 0,
      summary: [],
      columns,
      formLayout: 'horizontal',
      formNote: this.$form.createForm(this, { name: 'form_notes' }),
      formMobile: this.$form.createForm(this, { name: 'form_mobile' }),
      formContact: this.$form.createForm(this, { name: 'form_contact' }),
      formCart: this.$form.createForm(this, { name: 'form_cart' })
    }
  },
  mounted () {
    this.cart = this.$store.state.cart
    this.summary = this.cart.summary
  },
  methods: {
    processCart () {
      // submit the order record
    },
    next () {

    },
    saveDeliverySchedule () {

    },
    saveMobile () {

    },
    saveContact () {

    }
  }
}
</script>
