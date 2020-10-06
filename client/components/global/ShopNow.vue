<template>
  <a-row class="r-text-center" type="flex" justify="center" :gutter="24">
    <a-col class="gutter-row" :xs="{ span: 24 }" :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <a-card class="r-bg-primary-light" hoverable>
        <a-card-meta>
          <template slot="description">
            <a-row type="flex" justify="center">
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                <h2 class="r-heading">
                  Shop online with Shopple
                </h2>
                <p class="r-text-normal">
                  Join the Shopple online experience and get better deals online today.
                </p>
                <a-button size="large" type="secondary" class="r-btn-secondary">
                  Let's go
                </a-button>
              </a-col>
            </a-row>
            <a-row class="r-mt-24 r-m-48" type="flex" justify="center">
              <a-col :span="24">
                <h2 class="r-heading">
                  Download the Shopple app
                </h2>
                <p class="r-text-normal">
                  The free Shopple app will be available for Android and iOS. Download it soon!
                </p>
              </a-col>
            </a-row>
            <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
              <a-col class="r-text-right" :xs="{span: 24}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 12}">
                <a-button size="large" type="secondary" class="r-btn-secondary">
                  <a-icon type="apple"/>
                  Coming soon
                </a-button>
              </a-col>
              <a-col class="r-text-left" :xs="{span: 24}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 12}">
                <a-button size="large" type="secondary" class="r-btn-secondary">
                  <a-icon type="android"/>
                  Coming soon
                </a-button>
              </a-col>
            </a-row>
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-shop-now',
  data() {
    return {}
  },
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    onModal() {
      this.modal.isVisible = true;
      this.modal.current = 'register';
      this.$store.dispatch('app/onModal', modal);
    },
  }
};
</script>

