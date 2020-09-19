<template>
  <div class="r-checkout">
    <a-row style="margin-top: 125px;" type="flex" justify="center" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }" :lg="{ span: 18 }">
        <a-row>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 16 }" :lg="{ span: 16 }">
            <a-row class="r-bg-primary-light" style="margin-right: 20px; padding: 20px;">
              <a-col :span="24">
                <a-collapse accordion="true" bordered="true" expandIconPosition="right"
                            :defaultActiveKey="1">
                  <a-collapse-panel class="r-checkout-icon r-checkout-icon-address" :key="1"
                                    header="Delivery address">
                    <r-account-address-list></r-account-address-list>
                    <a-row class="r-mv-24" :gutter="24" type="flex" justify="start">
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
                  </a-collapse-panel>
                  <a-collapse-panel class="r-checkout-icon r-checkout-icon-notes" :key="2"
                                    header="Delivery instructions">
                    <a-form :class="{'r-hidden' :isProcessing || isSuccessful}"
                            class="ant-form ant-form-vertical"
                            @submit="saveContact"
                            :form="formContact">
                      <a-form-item label="Notes">
                        <a-input type="textarea"
                                 size="large"
                                 placeholder="Your delivery instructions"
                                 v-decorator="['notes', { rules: [{ required: true, message: 'Please enter your delivery instructions.' }] }]">
                        </a-input>
                      </a-form-item>
                      <a-form-item label="What if you're not around?">
                        By selecting this option you accept full responsibility for your
                        order after it has been delivered unattended, including any loss due
                        to theft or damage due to temperature sensitivity.
                      </a-form-item>
                      <a-row class="r-mv-24" :gutter="24" type="flex"
                             justify="start">
                        <a-col class="gutter-row r-text-left" :xs="{ span: 12 }"
                               :sm="{ span: 12 }"
                               :md="{ span: 18 }" :lg="{ span: 18 }">
                          <a-button size="default"
                                    type="primary"
                                    html-type="button"
                                    class="r-btn-bordered-black">
                            Skip
                          </a-button>
                        </a-col>
                        <a-col class="gutter-row r-text-right" :xs="{ span: 12 }"
                               :sm="{ span: 12 }"
                               :md="{ span: 6 }" :lg="{ span: 6 }">
                          <a-button block type="primary" html-type="submit"
                                    class="ant-btn-secondary r-btn-primary">
                            Proceed
                          </a-button>
                        </a-col>
                      </a-row>
                    </a-form>
                    <r-spinner v-if="isProcessing" :is-absolute="true"></r-spinner>
                    <r-notice v-if="isSuccessful"></r-notice>
                  </a-collapse-panel>
                  <a-collapse-panel class="r-checkout-icon r-checkout-icon-contact" :key="3"
                                    header="Your mobile number">
                    <a-form :class="{'r-hidden' :isProcessing || isSuccessful}"
                            class="ant-form ant-form-vertical"
                            @submit="saveMobile"
                            :form="formMobile">
                      <a-form-item :wrapper-col="{ xs: {span: 24},  lg: {span: 12} }"
                                   label="We use your number to text or call you about your order.">
                        <a-input
                          size="large"
                          placeholder="Your mobile number name"
                          v-decorator="['name', { rules: [{ required: true, message: 'Please enter your mobile number' }] }]">
                        </a-input>
                      </a-form-item>
                      <a-row class="r-mv-24" :gutter="24" type="flex"
                             justify="start">
                        <a-col class="gutter-row r-text-left" :xs="{ span: 12 }"
                               :sm="{ span: 12 }"
                               :md="{ span: 18 }" :lg="{ span: 18 }">
                          <a-button size="default"
                                    type="primary"
                                    html-type="button"
                                    class="r-btn-bordered-black">
                            Skip
                          </a-button>
                        </a-col>
                        <a-col class="gutter-row r-text-right" :xs="{ span: 12 }"
                               :sm="{ span: 12 }"
                               :md="{ span: 6 }" :lg="{ span: 6 }">
                          <a-button block type="primary" html-type="button"
                                    class="ant-btn-secondary r-btn-primary">
                            Proceed
                          </a-button>
                        </a-col>
                      </a-row>
                    </a-form>
                    <r-spinner v-if="isProcessing" :is-absolute="true"></r-spinner>
                    <r-notice v-if="isSuccessful"></r-notice>
                  </a-collapse-panel>
                  <a-collapse-panel class="r-checkout-icon r-checkout-icon-payment" :key="4"
                                    header="Payment">
                    <r-account-card-list></r-account-card-list>
                    <a-row class="r-mv-24" :gutter="24" type="flex" justify="end">
                      <a-col class="gutter-row r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }"
                             :md="{ span: 18 }" :lg="{ span: 18 }">
                        <r-account-card-add></r-account-card-add>
                      </a-col>
                      <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 12 }"
                             :md="{ span: 6 }" :lg="{ span: 6 }">
                        <a-button block type="primary" html-type="button"
                                  class="ant-btn-secondary r-btn-primary">
                          Place order
                        </a-button>
                      </a-col>
                    </a-row>
                  </a-collapse-panel>
                </a-collapse>
              </a-col>
            </a-row>
          </a-col>
          <a-col :xs="{ span: 24 }" :lg="{ span: 8 }">
            <a-row class="r-bg-primary-light">
              <a-col class="r-p-24" :span="24">
                <a-form class="ant-form ant-form-vertical"
                        :form="formCart">
                  <a-form-item :wrapper-col="{ span: 24 }">
                    <a-button block disabled
                              type="secondary"
                              html-type="submit"
                              class="ant-btn ant-btn-secondary">
                      Place order
                    </a-button>
                  </a-form-item>
                  <a-form-item :wrapper-col="{ xs: {span: 24},  lg: {span: 12} }"
                               label="We use your number to text or call you about your order.">
                    <a-input
                      size="large"
                      placeholder="Your mobile number name"
                      v-decorator="['name', { rules: [{ required: true, message: 'Please enter your mobile number' }] }]">
                    </a-input>
                  </a-form-item>
                  <a-form-item label="Coupon">
                    <a-input
                      size="large"
                      placeholder="Enter your coupon code"
                      v-decorator="['coupon', { rules: [{ required: false, message: 'Please enter your coupon' }] }]">
                    </a-input>
                  </a-form-item>
                  <a-form-item>
                    <a-table :columns="columns" :dataSource="summary" :pagination="false"/>
                  </a-form-item>
                </a-form>
              </a-col>
            </a-row>
            <a-row>
              <a-col class="r-checkout-footer" :span="24">
                <p class="r-text-normal">
                  By placing your order, you agree to be bound by the Owami Terms of
                  <router-link target="_blank" to="/service">Service</router-link>
                  and
                  <router-link to="_blank" href="/privacy">Privacy Policy</router-link>
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
];

export default {
  name: 'r-checkout',
  data() {
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
      formNote: this.$form.createForm(this, {name: 'form_notes'}),
      formMobile: this.$form.createForm(this, {name: 'form_mobile'}),
      formContact: this.$form.createForm(this, {name: 'form_contact'}),
      formCart: this.$form.createForm(this, {name: 'form_cart'}),
    };
  },
  mounted() {
    this.cart = this.$store.state.cart;
    this.summary = this.cart.summary;
  },
  methods: {
    processCart() {
      // submit the order record
    },
    next() {

    },
    saveDeliverySchedule() {

    },
    saveMobile() {

    },
    saveContact() {

    }
  },
};
</script>
