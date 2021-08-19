<template>
  <a-card class="r-bg-primary-light">
    <a-card-meta>
      <template slot="description">
        <a-row class="r-m-48" justify="center" type="flex">
          <a-col :span="24">
            <h2 class="r-heading r-text-secondary">
              Download the Brickcent app
            </h2>
            <p class="r-text-normal">
              The free Brickcent app is available for Android and iOS. Download it soon!
            </p>
          </a-col>
        </a-row>
        <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
          <a-col :lg="{span: 12}" :md="{span: 12}" :sm="{span: 12}" :xs="{span: 24}">
            <a-button block class="r-btn-secondary" size="large" type="secondary">
              <a-icon type="apple"/>
              Coming soon
            </a-button>
          </a-col>
          <a-col :lg="{span: 12}" :md="{span: 12}" :sm="{span: 12}" :xs="{span: 24}">
            <a-button block class="r-btn-secondary" size="large" type="secondary">
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
  data () {
    return {}
  },
  created () {
  },
  methods: {},
}
</script>
