<template>
  <a-row class="r-margin-top-24" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="gutter-row">
      <div v-for="address in search.data"
           :key="'address-' + address.id"
           :class="{'r-account-item__active': address.is_default}"
           class="r-account-item"
           v-on:click="onSelect(address)"
      >
        <a-row :gutter="[12,12]" align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 20 }"
                 :sm="{ span: 20 }" :xs="{ span: 20 }"
          >
            <span v-html="onItemLabel(address)"></span>
          </a-col>
          <a-col :lg="{ span: 4 }" :sm="{ span: 4 }"
                 :xs="{ span: 4 }" class="r-text-right"
          >
            <a-avatar icon="check" shape="square"/>
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
    farmers: 'base/farmers',
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
