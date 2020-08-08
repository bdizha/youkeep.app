<template>
  <a-row :gutter="24" type="flex" justify="center" align="middle" class="r-download r-padding-48">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }" class="r-text-center">
      <a-row class="r-margin-bottom-24" type="flex" justify="center" align="middle">
        <a-col :span="24">
          <h2 class="r-heading">
            Download the Kshopit app
          </h2>
          <p class="r-text-normal">
            The free Kshopit app is available for Android and iOS. Download it soon!
          </p>
        </a-col>
      </a-row>
      <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
        <a-col :xs="{span: 24}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 8}">
          <a-button block size="large" type="primary" class="r-btn-secondary">
            <a-icon type="apple"/>
            Coming soon
          </a-button>
        </a-col>
        <a-col :xs="{span: 24}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 8}">
          <a-button block size="large" type="primary" class="r-btn-secondary">
            <a-icon type="android"/>
            Coming soon
          </a-button>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
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
