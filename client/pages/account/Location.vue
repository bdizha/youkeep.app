<template>
  <r-account>
    <a-row type="flex" justify="center" align="middle">
      <a-col class="gutter-row r-margin-vertical-24" :xs="{ span: 24 }"
             :sm="{ span: 24 }" :lg="{ span: 24 }">
        <h2 class="r-heading">
          Delivery addresses
        </h2>
        <h4 class="r-heading">
          Here you can manage all your address.
        </h4>
      </a-col>
    </a-row>
    <r-account-address-list></r-account-address-list>
    <r-account-address-add></r-account-address-add>
  </r-account>
</template>
<script>
  export default {
    name: 'r-account-location',
    components: {},
    data() {
      return {
        radioStyle: {
          display: 'block',
          lineHeight: '24px',
          marginBottom: '24px'
        },
        address: {id: null}
      };
    },
    computed: {
      currentAddress() {
        let addresses = this.$store.state.addresses;
        let address = this.$store.state.address;

        if (address == null && addresses.length > 0) {
          this.address = addresses[0];
          return this.address;
        }

        return this.$store.state.address;
      },
    },
    methods: {},
  };
</script>
