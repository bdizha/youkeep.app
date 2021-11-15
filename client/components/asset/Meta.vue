<template>
  <a-card class="r-bg-dark">
    <a-row :gutter="[24,24]" justify="start" align="middle" type="flex">
      <a-col :lg="{ span: 12 }" :md="{ span: 12}"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <nuxt-link :to="product.store.route">
              <r-store-head :has-overlay="false" :store="product.store"></r-store-head>
            </nuxt-link>
          </a-col>
        </a-row>
      </a-col>
      <a-col :lg="{ span: 12 }" :md="{ span: 12}"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <p class="r-text-xs r-text-light">
              Series
            </p>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <p class="r-text-normal r-text-white">
              {{ product.store.name }}
            </p>
          </a-col>
        </a-row>
      </a-col>
      <a-col :lg="{ span: 12 }" :md="{ span: 12}"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <p class="r-text-xs r-text-light">
              Redeemable
            </p>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <p class="r-text-normal r-text-white">
              No
            </p>
          </a-col>
        </a-row>
      </a-col>
      <a-col :lg="{ span: 12 }" :md="{ span: 12}"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <p class="r-text-xs r-text-light">
              Trading fees
            </p>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <p class="r-text-normal r-text-white">
              0.00% buyer fee, 2.00% seller fee
            </p>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </a-card>
</template>
<script>
export default {
  name: 'r-asset-meta',
  props: {
    product: {
      type: Object,
      required: true,
      default: () => {
      }
    }
  },
  data () {
    return {}
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
