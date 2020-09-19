<template>
  <r-page>
    <a-row type="flex" justify="center">
      <a-col class="gutter-row" :span="24">
        <div class="r-bg-primary-light">
          <a-row type="flex" justify="center">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
              <a-row type="flex" justify="start" align="middle">
                <a-col class="r-p-48" :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ offset: 3, span: 9 }"
                       :lg="{ offset: 3, span: 9 }">
                  <r-space></r-space>
                  <a-row type="flex" justify="start" align="middle">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" s="r" :md="{ span: 24 }"
                           :lg="{ span: 16 }"
                           style="text-align: left;">
                      <h4 class="r-heading-light r-text-uppercase">
                        Get paid to shop with Owami.
                      </h4>
                      <h1 class="r-heading r-text-uppercase r-text-primary">
                        A better way to your shopping.
                      </h1>
                    </a-col>
                  </a-row>
                  <a-row type="flex" justify="start">
                    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                           :lg="{ span: 24 }"
                           style="text-align: left;">
                      <p class="r-text-normal">
                        Earn up to R55/hr or more shopping for Owami members.
                        Deliver things people love, from the stores they trust.
                      </p>
                      <a-button @click="onApply" type="primary"
                                class="ant-btn r-btn-primary r-mt-24"
                                size="large"
                                html-type="button">
                        Apply now
                      </a-button>
                    </a-col>
                  </a-row>
                  <r-space></r-space>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
                  <div class="r-page-header-photo">
                    <div class="r-page-primary"
                         style="background-image: url('/images/shopper.jpg')">
                    </div>
                  </div>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-col>
    </a-row>
    <a-row :gutter="24" class="r-mv-48" type="flex">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{span: 12}">
        <a-row type="flex" justify="start"
               class="r-radius-right-white">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18, offset:6 }"
                 :lg="{span: 18, offset:6}" class="r-p-48">
            <h2 class="r-heading">
              Why partner with Owami?
            </h2>
            <p class="r-text-normal">
              Owami is a membership-based shopping marketplace, enabling delivery of trendy fashion items,
              hot food and
              household essentials.
            </p>
            <p class="r-text-normal">
              Owami is about more than online shopping. Whether you're looking to pay bills or fund
              dreams, Owami will get you there.
            </p>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <a-row :gutter="24" class="r-mv-48 r-bg-white" justify="center" type="flex">
      <a-col class="r-p-48" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }" :lg="{span: 18}">
        <a-row class="r-mv-48 r-text-center" type="flex" justify="start">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                 :lg="{span: 8}">
            <div class="r-icon r-icon-primary">
              <a-icon type="clock-circle"/>
            </div>
            <h4 class="r-heading-light r-text-uppercase">
              Work on your schedule
            </h4>
            <p class="r-text-normal">
              Work part time or full time – any time.<br>Set your own hours for a completely
              flexible schedule.
            </p>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                 :lg="{span: 8}">
            <div class="r-icon r-icon-primary">
              <a-icon type="shopping-cart"/>
            </div>
            <h4 class="r-heading-light r-text-uppercase">
              Choose your wheels
            </h4>
            <p class="r-text-normal">
              Get tips from other shoppers, attend launch parties, and get a free Owami
              membership.
            </p>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                 :lg="{span: 8}">
            <div class="r-icon r-icon-primary">
              <a-icon type="credit-card"/>
            </div>
            <h4 class="r-heading-light r-text-uppercase">
              Earn money as you shop
            </h4>
            <p class="r-text-normal">
              Experienced shoppers make an average of R50/hr.<br>
              * Paychecks are delivered every week.
            </p>
          </a-col>
        </a-row>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 18 }" :lg="{span: 18}">
        <a-row type="flex" justify="center">
          <a-col :xs="{ span: 24 }" :lg="{ span: 18 }" style="text-align: left;">
            <a-row :gutter="16" type="flex" justify="start" class="r-mv-48 r-p-24">
              <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 16 }" :lg="{ span: 12 }">
                <h2 class="r-heading">
                  Requirements:
                </h2>
                <p v-for="requirement in requirements" class="r-text-normal">
                  <a-checkbox :checked="true">
                    {{ requirement }}
                  </a-checkbox>
                </p>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <a-row class="r-text-center" type="flex" justify="center" :gutter="24">
      <a-col class="gutter-row r-p-48" :xs="{ span: 24 }" :md="{ span: 24 }"
             :lg="{ span: 24 }">
        <a-row type="flex" justify="center">
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :lg="{ span: 12 }">
            <h2 class="r-heading r-text-uppercase">
              Want to start making money shopping with Owami?
            </h2>
            <p class="r-text-normal">
              Apply to be a Owami Shopper today and start achieving your goals.
            </p>
          </a-col>
        </a-row>
        <a-row type="flex" justify="center" align="middle">
          <a-col class="r-pb-48" :xs="{ span: 24 }" :md="{ span: 12 }"
                 :lg="{ span: 12 }">
            <a-button @click="onApply" size="large" type="primary">
              Become a shopper
            </a-button>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
  export default {
    name: 'r-shopper',
    data() {
      return {
        postCode: null,
        formPostCode: this.$form.createForm(this, {name: 'form_post_code'}),
        modal: {
          current: null,
          isVisible: false,
        },
        requirements: [
          "18 years of age minimum",
          "Reliable vehicle, 15 years old or newer",
          "iPhone (iOS 8 or newer) or Android (5.4.2 or newer)",
          "Valid RSA driver's license and auto insurance",
          "Thorough background check required",
          "Insulated cooler bag",
          "Knowledge of product selection",
          "Ability to lift 24+ pounds"
        ]
      }
    },
    mounted() {
      console.log('Shopping component : ', this.modal);
    },
    methods: {
      onApply() {
        this.modal.isVisible = true;
        this.modal.current = 'shopper';
        this.$store.dispatch('app/onModal', modal);
      }
    }
  };
</script>
