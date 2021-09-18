<template>
  <r-account>
    <a-row align="middle" justify="center" type="flex">
      <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }" class="gutter-row"
      >
        <a-card class="r-mb-24" style="width: 100%;" title="YOUR DELIVERY ADDRESSES">
          <div class="r-text-s">
            <template v-if="hasAddresses">
              Here you can manage all your address.
            </template>
            <template v-if="!hasAddresses">
              Your delivery address is currently not set
            </template>
          </div>
        </a-card>
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }" class="gutter-row"
        >
          <r-account-address-list></r-account-address-list>
        </a-col>
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }" class="gutter-row"
        >
          <r-account-address-add></r-account-address-add>
        </a-col>
      </a-col>
    </a-row>
  </r-account>
</template>
<script>
import { mapGetters } from 'vuex'

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
  computed: mapGetters({
    modal: 'base/modal',
    addresses: 'account/addresses',
    hasAddresses: 'account/hasAddresses'
  }),
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
