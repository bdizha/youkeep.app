<template>
  <r-account>
    <a-row type="flex" justify="start" align="middle">
      <a-col class="gutter-row" :xs="{ span: 24 }"
             :sm="{ span: 24 }" :lg="{ span: 24 }">
        <a-card title="ACCOUNT CREDIT" style="width: 100%; margin-bottom: 20px;">
          <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
            <a-col :xs="{ span: 20 }"
                   :sm="{ span: 20 }" :lg="{ span: 20 }">
              <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
                <a-col :xs="{ span: 12 }"
                       :sm="{ span: 12 }" :lg="{ span: 12 }">
                  <label class="r-heading-light">Account status:</label>
                </a-col>
                <a-col :xs="{ span: 12 }"
                       :sm="{ span: 12 }" :lg="{ span: 12 }">
                  <a-switch disabled size="large" default-checked>
                    <a-icon slot="checkedChildren" type="check"/>
                    <a-icon slot="unCheckedChildren" type="close"/>
                  </a-switch>
                </a-col>
              </a-row>
              <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
                <a-col :xs="{ span: 12 }"
                       :sm="{ span: 12 }" :lg="{ span: 12 }">
                  <label class="r-heading-light">Account balance:</label>
                </a-col>
                <a-col :xs="{ span: 12 }"
                       :sm="{ span: 12 }" :lg="{ span: 12 }">
                  <label class="r-heading-light">R0.00</label>
                </a-col>
              </a-row>
            </a-col>
            <a-col :xs="{ span: 4 }"
                   :sm="{ span: 4 }" :lg="{ span: 4 }">
              <a-button v-on:click="onModal('account-credit', $event)" block size="small"
                        type="secondary" class="r-btn-bordered-black">
                Add credit
              </a-button>
            </a-col>
          </a-row>
        </a-card>
      </a-col>
    </a-row>
    <a-row type="flex" justify="start" align="middle">
      <a-col class="gutter-row" :xs="{ span: 24 }"
             :sm="{ span: 24 }" :lg="{ span: 24 }">
        <a-card title="ACCOUNT PROMOS" style="width: 100%; margin-bottom: 20px;">
          <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
            <a-col :xs="{ span: 20 }"
                   :sm="{ span: 20 }" :lg="{ span: 20 }">
              <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
                <a-col :xs="{ span: 12 }"
                       :sm="{ span: 12 }" :lg="{ span: 12 }">
                  <label class="r-heading-light">Free shipping</label>
                </a-col>
                <a-col :xs="{ span: 12 }"
                       :sm="{ span: 12 }" :lg="{ span: 12 }">
                  R375.00
                </a-col>
              </a-row>
              <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
                <a-col :xs="{ span: 12 }"
                       :sm="{ span: 12 }" :lg="{ span: 12 }">
                  <label class="r-heading-light">Eat as you go</label>
                </a-col>
                <a-col :xs="{ span: 12 }"
                       :sm="{ span: 12 }" :lg="{ span: 12 }">
                  R1000.00
                </a-col>
              </a-row>
            </a-col>
            <a-col :xs="{ span: 4 }"
                   :sm="{ span: 4 }" :lg="{ span: 4 }">
              <a-button v-on:click="onModal('account-promo', $event)" block size="small"
                        type="secondary" class="r-btn-bordered-black">
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
    name: 'r-account-credit',
    components: {},
    data() {
      return {
        formLayout: 'horizontal',
        formCoupon: this.$form.createForm(this, {name: 'form_coupon'}),
        modal: {
          current: null,
          isVisible: false
        }
      };
    },
    methods: {
      onModal(current) {
        this.modal.isVisible = true;
        this.modal.current = current;
        this.$store.dispatch('app/onModal', modal);
      },
    },
  };
</script>
