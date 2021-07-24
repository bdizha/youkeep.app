<template>
  <a-row v-if="cart.count > 0" :gutter="24" justify="center"
         type="flex"
  >
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
           class="gutter-row"
    >
      <a-table :columns="columns"
               :dataSource="cart.summary"
               :hoverable="false"
               :pagination="false"
               :show-header="false"
               bordered
      />
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

const columns = [
  {
    title: 'Item',
    dataIndex: 'name',
    key: 'name',
  },
  {
    title: 'Value',
    dataIndex: 'value',
    key: 'value',
    width: '36%',
  }
]

export default {
  props: {
    name: 'r-checkout-items'
  },
  data () {
    return {
      columns,
    }
  },
  computed: mapGetters({
    cart: 'cart/cart'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onStep () {
      this.$store.dispatch('base/onModal', modal)
    }
  },
}
</script>
