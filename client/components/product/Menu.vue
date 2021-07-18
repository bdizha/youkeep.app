<template>
  <r-store-menu :is-product="true" :is-store="false"></r-store-menu>
</template>
<script>
export default {
  name: 'r-product-menu',
  props: {},
  data () {
    return {}
  },
  computed: {},
  created () {
  },
  mounted () {
  },
  methods: {
    formatter (value) {
      return 'R' + value
    }
  }
}
</script>
