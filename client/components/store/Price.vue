<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :span="24">
      <p v-if="isShowing" class="r-text-xs r-text-light">
        Current price
      </p>
      <p class="r-item-text r-text-white">
        <nuxt-img v-if="currency.currency_url"
                  :src="currency.currency_url"
                  height="18px"
        ></nuxt-img>
        <span>{{ price }}</span>
        <span>{{ currency.code }}</span>
      </p>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-store-price',
  props: {
    currency: {
      type: Object,
      required: true,
      default: () => {
        return { code: null, currency_url: null }
      }
    },
    price: { type: String, required: false, default: '0.00' },
    isShowing: { type: Boolean, required: false, default: false }
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
