<template>
  <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
    <a-col class="gutter-row" :xs="{ span: 24 }"
           :sm="{ span: 24 }" :lg="{ span: 24 }"
    >
      <a-card title="Account Information">
        <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
          <a-col :xs="{ span: 20 }"
                 :sm="{ span: 20 }" :lg="{ span: 20 }"
          >
            <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
              <a-col :xs="{ span: 12 }"
                     :sm="{ span: 12 }" :lg="{ span: 12 }"
              >
                <label class="r-heading-light">Account status:</label>
              </a-col>
              <a-col :xs="{ span: 12 }"
                     :sm="{ span: 12 }" :lg="{ span: 12 }"
              >
                <a-switch disabled size="large" default-checked>
                  <a-icon slot="checkedChildren" type="check"/>
                  <a-icon slot="unCheckedChildren" type="close"/>
                </a-switch>
              </a-col>
            </a-row>
            <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
              <a-col :xs="{ span: 12 }"
                     :sm="{ span: 12 }" :lg="{ span: 12 }"
              >
                <label class="r-heading-light">Account balance:</label>
              </a-col>
              <a-col :xs="{ span: 12 }"
                     :sm="{ span: 12 }" :lg="{ span: 12 }"
              >
                <label class="r-heading-light">R0.00</label>
              </a-col>
            </a-row>
          </a-col>
          <a-col :xs="{ span: 4 }"
                 :sm="{ span: 4 }" :lg="{ span: 4 }"
          >
            <a-button v-on:click="onModal('account-credit', $event)" block size="small"
                      type="secondary" class="r-btn-bordered-grey"
            >
              Add credit
            </a-button>
          </a-col>
        </a-row>
      </a-card>
    </a-col>
    <a-col class="gutter-row" :xs="{ span: 24 }"
           :sm="{ span: 24 }" :lg="{ span: 24 }"
    >
      <a-card title="Seller Information">
        <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
          <a-col :xs="{ span: 20 }"
                 :sm="{ span: 20 }" :lg="{ span: 20 }"
          >
            <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
              <a-col :xs="{ span: 12 }"
                     :sm="{ span: 12 }" :lg="{ span: 12 }"
              >
                <label class="r-heading-light">Free shipping</label>
              </a-col>
              <a-col :xs="{ span: 12 }"
                     :sm="{ span: 12 }" :lg="{ span: 12 }"
              >
                R375.00
              </a-col>
            </a-row>
            <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
              <a-col :xs="{ span: 12 }"
                     :sm="{ span: 12 }" :lg="{ span: 12 }"
              >
                <label class="r-heading-light">Eat as you go</label>
              </a-col>
              <a-col :xs="{ span: 12 }"
                     :sm="{ span: 12 }" :lg="{ span: 12 }"
              >
                R1000.00
              </a-col>
            </a-row>
          </a-col>
          <a-col :xs="{ span: 4 }"
                 :sm="{ span: 4 }" :lg="{ span: 4 }"
          >
            <a-button v-on:click="onModal('account-promo', $event)" block size="small"
                      type="secondary" class="r-btn-bordered-grey"
            >
              Add promo
            </a-button>
          </a-col>
        </a-row>
      </a-card>
    </a-col>
    <a-col class="gutter-row" :xs="{ span: 24 }"
           :sm="{ span: 24 }" :lg="{ span: 24 }"
    >
      <a-card title="Billing Information">
        <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
          <a-col :xs="{ span: 20 }"
                 :sm="{ span: 20 }" :lg="{ span: 20 }"
          >
            <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
              <a-col :xs="{ span: 12 }"
                     :sm="{ span: 12 }" :lg="{ span: 12 }"
              >
                <label class="r-heading-light">Free shipping</label>
              </a-col>
              <a-col :xs="{ span: 12 }"
                     :sm="{ span: 12 }" :lg="{ span: 12 }"
              >
                R375.00
              </a-col>
            </a-row>
            <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
              <a-col :xs="{ span: 12 }"
                     :sm="{ span: 12 }" :lg="{ span: 12 }"
              >
                <label class="r-heading-light">Eat as you go</label>
              </a-col>
              <a-col :xs="{ span: 12 }"
                     :sm="{ span: 12 }" :lg="{ span: 12 }"
              >
                R1000.00
              </a-col>
            </a-row>
          </a-col>
          <a-col :xs="{ span: 4 }"
                 :sm="{ span: 4 }" :lg="{ span: 4 }"
          >
            <a-button v-on:click="onModal('account-promo', $event)" block size="small"
                      type="secondary" class="r-btn-bordered-grey"
            >
              Add promo
            </a-button>
          </a-col>
        </a-row>
      </a-card>
    </a-col>
    <a-col class="gutter-row" :xs="{ span: 24 }"
           :sm="{ span: 24 }" :lg="{ span: 24 }"
    >
      <a-card title="Service Information">
        <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
          <a-col :xs="{ span: 20 }"
                 :sm="{ span: 20 }" :lg="{ span: 20 }"
          >
            <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
              <a-col :xs="{ span: 12 }"
                     :sm="{ span: 12 }" :lg="{ span: 12 }"
              >
                <label class="r-heading-light">Free shipping</label>
              </a-col>
              <a-col :xs="{ span: 12 }"
                     :sm="{ span: 12 }" :lg="{ span: 12 }"
              >
                R375.00
              </a-col>
            </a-row>
            <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
              <a-col :xs="{ span: 12 }"
                     :sm="{ span: 12 }" :lg="{ span: 12 }"
              >
                <label class="r-heading-light">Eat as you go</label>
              </a-col>
              <a-col :xs="{ span: 12 }"
                     :sm="{ span: 12 }" :lg="{ span: 12 }"
              >
                R1000.00
              </a-col>
            </a-row>
          </a-col>
          <a-col :xs="{ span: 4 }"
                 :sm="{ span: 4 }" :lg="{ span: 4 }"
          >
            <a-button v-on:click="onModal('account-promo', $event)" block size="small"
                      type="secondary" class="r-btn-bordered-grey"
            >
              Add promo
            </a-button>
          </a-col>
        </a-row>
      </a-card>
    </a-col>
  </a-row>
</template>
<script>
export default {
  components: {},
  layout: 'account-seller-show',
  async asyncData  ({ store }) {
    await store.dispatch('account/onMenu', { currentItem: 'account' })
  },
  data () {
    return {
      formLayout: 'horizontal',
      formCoupon: this.$form.createForm(this, { name: 'form_coupon' }),
      modal: {
        current: null,
        isVisible: false
      }
    }
  },
  methods: {
    onModal (current) {
      this.modal.isVisible = true
      this.modal.current = current
      this.$store.dispatch('app/onModal', this.modal)
    }
  }
}
</script>
