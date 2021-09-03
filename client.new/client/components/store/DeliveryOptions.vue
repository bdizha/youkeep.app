<template>
  <a-radio-group v-model="deliveryOption" :size="size">
    <a-radio-button :value="1">DELIVERY</a-radio-button>
    <a-radio-button :value="2">PICKUP</a-radio-button>
  </a-radio-group>
</template>
<script>
export default {
  props: {
    size: { type: String, required: false, default: 'large' },
  },
  data () {
    return {
      deliveryOption: 1
    }
  },
  created () {
  },
  methods: {},
  watch: {
    openKeys (val) {
      console.log('openKeys', val)
    },
  },
}
</script>
