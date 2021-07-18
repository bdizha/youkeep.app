<template>
  <a-row :gutter="[24, 24]" align="top" justify="start" type="flex">
    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <h4 class="r-heading-light">
        DELIVERY INFORMATION
      </h4>
      <p class="r-text-normal">
        Free delivery on orders over R500, excluding furniture.
      </p>
      <p class="r-text-normal">
        Your order will be delivered to your door within 3-5 working days. Couriers will deliver using contact-free
        methods and keep 1.5m away at all times.
      </p>
      <p class="r-text-normal">
        Alternatively, choose Click & Collect to collect from 400+ stores. We'll send you an email when your order is
        ready for pickup.
      </p>
    </a-col>
    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <h4 class="r-heading-light">
        RETURNS INFORMATION
      </h4>
      <p class="r-text-normal">
        Returns are free on everything except furniture.
      </p>
      <p class="r-text-normal">
        You have 30 days to return any unused products for any reason from the date of delivery.
      </p>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-product-returns',
  props: {
    product: { type: Object, required: false, default: null },
  },
  data () {
    return {}
  },
  created () {
  },
  computed: {},
  methods: {},
}
</script>
