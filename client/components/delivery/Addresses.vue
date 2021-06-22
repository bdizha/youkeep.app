<template>
  <a-row class="r-mt-24" type="flex" justify="center">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <div class="r-account-item"
           v-for="address in search.data"
           :class="{'r-account-item__active': address.is_default}"
           :key="'address-' + address.id"
           v-on:click="onSelect(address)"
      >
        <a-row type="flex" justify="center" align="middle" :gutter="[12,12]">
          <a-col :xs="{ span: 20 }"
                 :sm="{ span: 20 }" :lg="{ span: 20 }"
          >
            <span v-html="onItemLabel(address)"></span>
          </a-col>
          <a-col class="r-text-right" :xs="{ span: 4 }"
                 :sm="{ span: 4 }" :lg="{ span: 4 }"
          >
            <a-avatar shape="square" icon="check"/>
          </a-col>
        </a-row>
      </div>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-delivery-addresses',
  components: {},
  props: {},
  data () {
    return {
      params: null,
    }
  },
  computed: mapGetters({
    store: 'base/store',
    stores: 'base/stores',
    processes: 'base/processes',
    search: 'address/search',
  }),
  created () {
  },
  methods: {
    async onSelect (address) {
      let params = address

      console.log(params, 'address params')
      await this.$store.dispatch('address/onSelect', params)
    },
    onItemLabel (address) {
      let label = '<div class="r-text-small"><strong title="' + address.secondary_text + '">' + address.title + ', ' + '</strong><br>' +
        address.main_text + '</div>'

      return label
    }
  }
}
</script>
