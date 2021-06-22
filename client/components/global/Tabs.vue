<template>
  <a-row class="r-mv-48" type="flex" justify="center" align="middle">
    <a-col class="r-ph-24 r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 12 }"
           :lg="{ span: 12 }"
    >
      <a-card>
        <a-card-meta>
          <template slot="description">
            <a-row :gutter="[24,24]" type="flex" justify="center" align="top">
              <a-col :xs="{ span: 6 }" :sm="{ span: 6 }"
                     :md="{ span: 6 }"
                     :lg="{ span: 6 }"
              >
                <nuxt-link to="/bookkeeping">
                  For Businesses
                </nuxt-link>
              </a-col>
              <a-col :xs="{ span: 6 }" :sm="{ span: 6 }"
                     :md="{ span: 6 }"
                     :lg="{ span: 6 }"
              >
                <nuxt-link to="/hiw">
                  For Shoppers
                </nuxt-link>
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
  name: 'r-tabs',
  props: {},
  data () {
    return {}
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {
    }
  },
}
</script>
