<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :span="24">
      <p class="r-item-text r-text-white">
        <nuxt-img v-if="!isDollar() && item.currency_url"
                  :src="item.currency_url"
                  height="18px"
        ></nuxt-img>
        <span>{{ (isDollar() ? '$' : '') +  item.price }}</span>
        <span>{{ item.currency }}</span>
      </p>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-ranking-price',
  props: {
    item: {
      type: Object,
      required: true,
      default: () => {
        return { currency: null, price: 0, currency_url: null }
      }
    }
  },
  data () {
    return {}
  },
  created () {
  },
  computed: {},
  methods: {
    isDollar () {
      return this.item.currency === 'USD'
    }
  }
}
</script>
