<template>
  <a-row justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-card v-if="hasTitle" class="r-mb-24" style="width: 100%;" title="YOUR DELIVERY ADDRESSES">
        <div class="r-text-small">
          <template v-if="hasAddresses">
            Here you can manage all your address.
          </template>
          <template v-if="!hasAddresses">
            Your delivery address is currently not set
          </template>
        </div>
      </a-card>
      <div v-for="address in addresses"
           :key="'address-' + address.id"
           :class="{'r-account-item__active': address.is_default}"
           class="r-account-item"
           v-on:click="onModal('account-address', address)"
      >
        <a-row :gutter="[0,12]" align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 16 }"
                 :sm="{ span: 16 }" :xs="{ span: 16 }"
          >
            <span v-html="onItemLabel(address)"></span>
          </a-col>
          <a-col :lg="{ span: 4 }" :sm="{ span: 4 }"
                 :xs="{ span: 4 }" class="r-text-right"
          >
            <a-switch v-model="address.is_default" :default-checked="address.is_default" size="small"/>
          </a-col>
          <a-col :lg="{ span: 4 }" :sm="{ span: 4 }"
                 :xs="{ span: 4 }" class="r-text-right"
          >
            <a-avatar :size="30" icon="edit" shape="square"/>
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
      const modal = {}
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
