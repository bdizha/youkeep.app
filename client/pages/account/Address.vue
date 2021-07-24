<template>
  <r-account>
    <a-row align="middle" justify="center" type="flex">
      <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }" class="gutter-row"
      >
        <r-account-address-list></r-account-address-list>
        <r-account-address-add></r-account-address-add>
      </a-col>
    </a-row>
  </r-account>
</template>
<script>
export default {
  components: {},
  data () {
    return {
      radioStyle: {
        display: 'block',
        lineHeight: '24px',
        marginBottom: '24px'
      },
      address: { id: null }
    }
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    async onAddresses () {
    }
  }
}
</script>
