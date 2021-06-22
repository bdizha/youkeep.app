<template>
  <a-row :gutter="24" v-if="cart.count > 0" type="flex"
         justify="center"
  >
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <a-table bordered
               :pagination="false"
               :show-header="false"
               :hoverable="false"
               :columns="columns"
               :dataSource="cart.summary"
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
  name: 'r-checkout-items',
  props: {},
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
