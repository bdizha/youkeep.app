<template>
  <r-account>
    <a-row align="middle" justify="center" type="flex">
      <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }" class="gutter-row"
      >
        <r-account-order-list></r-account-order-list>
      </a-col>
    </a-row>
  </r-account>
</template>
<script>
export default {
  components: {},
  data () {
    return {}
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {
    }
  }
}
</script>
