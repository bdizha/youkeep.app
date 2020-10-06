<template>
  <r-page>
    <a-row :gutter="[48,48]" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 12 }"
             :lg="{ span: 12 }">
        <a-card hoverable>
          <a-card-meta>
            <template slot="description">
              <h4 class="r-heading">
                Get paid to shop with Shopple.
              </h4>
              <h1 class="r-heading r-text-secondary">
                A better way to your shopping.
              </h1>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }">
        <a-card hoverable>
          <a-card-meta>
            <template slot="description">
              <div class="r-page-header-photo">
                <div class="r-page-primary"
                     style="background-image: url('/images/welcome-02.jpg')">
                </div>
              </div>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
    </a-row>
    <a-row class="r-mt-48" type="flex" justify="start" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{ span: 24 }">
        <a-row :gutter="[48,48]" type="flex" justify="space-between">
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card hoverable>
              <a-card-meta>
                <template slot="description">
                  <h4 class="r-heading">
                    Shop
                  </h4>
                  <p class="r-text-normal">
                    Instantly find and watch 1000's of fast streaming videos.
                    Shop with us
                  </p>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            &nbsp;
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            &nbsp;
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card hoverable>
              <a-card-meta>
                <template slot="description">
                  <h4 class="r-heading">
                    Watch
                  </h4>
                  <p class="r-text-normal">
                    Instantly find and watch 1000's of fast streaming videos.
                    Shop with us
                  </p>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">            &nbsp;
          </a-col>
          <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
                 style="text-align: left;">
            <a-card hoverable>
              <a-card-meta>
                <template slot="description">
                  <h4 class="r-heading">
                    Upload
                  </h4>
                  <p class="r-text-normal">
                    Instantly find and watch 1000's of fast streaming videos.
                    Shop with us
                  </p>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <r-shopper-modal></r-shopper-modal>
  </r-page>
</template>
<script>
export default {
  name: 'r-customer',
  data() {
    return {
      postCode: null,
      formPostCode: this.$form.createForm(this, {name: 'form_post_code'}),
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
  created() {
  },
  methods: {
    onModal() {
      let modal = {};
      modal.isVisible = true;
      modal.isClosable = true;
      modal.current = 'shopper';

      this.$store.dispatch('base/onModal', modal);
    }
  }
};
</script>
