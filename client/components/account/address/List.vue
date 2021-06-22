<template>
  <a-row type="flex" justify="center">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-card v-if="hasTitle" class="r-mb-24" title="YOUR DELIVERY ADDRESSES" style="width: 100%;">
        <div class="r-text-small">
          <template v-if="hasAddresses">
            Here you can manage all your address.
          </template>
          <template v-if="!hasAddresses">
            Your delivery address is currently not set
          </template>
        </div>
      </a-card>
      <div class="r-account-item"
           v-for="address in addresses"
           :class="{'r-account-item__active': address.is_default}"
           :key="'address-' + address.id"
           v-on:click="onModal('account-address', address)"
      >
        <a-row type="flex" justify="center" align="middle" :gutter="[0,12]">
          <a-col :xs="{ span: 16 }"
                 :sm="{ span: 16 }" :lg="{ span: 16 }"
          >
            <span v-html="onItemLabel(address)"></span>
          </a-col>
          <a-col class="r-text-right" :xs="{ span: 4 }"
                 :sm="{ span: 4 }" :lg="{ span: 4 }"
          >
            <a-switch v-model="address.is_default" size="small" :default-checked="address.is_default"/>
          </a-col>
          <a-col class="r-text-right" :xs="{ span: 4 }"
                 :sm="{ span: 4 }" :lg="{ span: 4 }"
          >
            <a-avatar :size="30" shape="square" icon="edit"/>
          </a-col>
        </a-row>
      </div>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  props: {
    hasTitle: { type: Boolean, required: false, default: true },
  },
  data () {
    return {
      isDefault: false
    }
  },
  computed: mapGetters({
    modal: 'base/modal',
    addresses: 'account/addresses',
    hasAddresses: 'account/hasAddresses',
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
      this.onAddresses()
    },
    async onAddresses () {
      await this.$store.dispatch('account/onAddresses')
    },
    onModal (current, address) {
      let modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = current

      this.$store.dispatch('address/onAddress', address)
      this.$store.dispatch('base/onModal', modal)
    },
    onItemLabel (address) {
      let label = '<strong>' + address.address_line + ', ' +
        address.address_line_2 + ', ' + address.suburb + '</strong>,<br>' +
        address.city + ', ' + address.postal_code

      return label
    }
  }
}
</script>
