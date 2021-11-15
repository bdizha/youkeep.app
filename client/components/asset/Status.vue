<template>
  <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <div class="r-text-xs r-text-light">
        Status
      </div>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <div class="r-text-xs r-text-white">
        Auction
      </div>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-asset-status',
  props: {
    product: {
      type: Object,
      required: true,
      default: () => {
        return { currency: null, price: 0, currency_url: null }
      }
    },
    hasTitle: { type: Boolean, required: false, default: false }
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
