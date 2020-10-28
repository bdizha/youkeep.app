<template>
  <a-card class="r-bg-primary-light r-p-48">
    <a-card-meta>
      <template slot="description">
        <a-row class="r-m-48" type="flex" justify="center">
          <a-col :span="24">
            <h2 class="r-heading">
              Download the Shopple app
            </h2>
            <p class="r-text-normal">
              The free Shopple app is available for Android and iOS. Download it soon!
            </p>
          </a-col>
        </a-row>
        <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
          <a-col :xs="{span: 24}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 12}">
            <a-button block size="large" type="secondary" class="r-btn-secondary">
              <a-icon type="apple"/>
              Coming soon
            </a-button>
          </a-col>
          <a-col :xs="{span: 24}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 12}">
            <a-button block size="large" type="secondary" class="r-btn-secondary">
              <a-icon type="android"/>
              Coming soon
            </a-button>
          </a-col>
        </a-row>
      </template>
    </a-card-meta>
  </a-card>
</template>
<script>
export default {
  name: 'r-download',
  data() {
    return {};
  },
  created() {
  },
  methods: {},
};
</script>
