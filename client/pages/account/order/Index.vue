<template>
  <r-account>
    <r-account-order-list></r-account-order-list>
  </r-account>
</template>
<script>
export default {
  components: {},
  async asyncData ({ store }) {
    await store.dispatch('account/onMenu', { currentItem: 'order.index' })
  },
  data () {
    return {}
  },
  methods: {}
}
</script>
