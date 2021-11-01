<template>
  <a-row align="middle"
         justify="center"
         type="flex"
  >
    <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}" @click="onModal">
      <a-row :gutter="[24,24]" justify="start" type="flex">
        <a-col v-if="hasModal" :xs="{ span: 24 }" class="r-text-left">
          <h3 class="r-heading">
            Enter delivery address
          </h3>
        </a-col>
        <a-col :xs="{ span: 24 }" class="r-text-left">
          <a-auto-complete
            :placeholder="'Enter your delivery address...'"
            :size="size"
            :value="hasAddress ? address.address_line : ''"
            option-label-prop="title"
            style="width: 100%"
            @search="handleSearch"
          >
            <a-input>
              <a-icon slot="prefix" type="environment"/>
              <a-button v-if="hasButton"
                        slot="suffix"
                        class="r-btn-primary"
                        size="large"
                        style="margin-right: -12px"
                        type="secondary"
              >
                Discover <a-icon type="right"/>
              </a-button>
            </a-input>
          </a-auto-complete>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-delivery-search',
  components: {},
  props: {
    hasModal: { type: Boolean, required: false, default: false },
    isStore: { type: Boolean, required: false, default: false },
    hasButton: { type: Boolean, required: false, default: true },
    size: { type: String, required: false, default: 'large' }
  },
  data () {
    return {
      form: this.$form.createForm(this, { name: 'form_delivery' })
    }
  },
  computed: mapGetters({
    search: 'address/search',
    address: 'address/address',
    hasAddress: 'address/hasAddress',
  }),
  methods: {
    handleSearch (value) {
      this.dataSource = value ? this.onSearch(value) : []
    },
    async onSearch (term) {
      await this.$store.dispatch('address/onSearch', {
        term: term
      })
    },
    onModal () {
      if (!this.hasModal) {
        const modal = {}
        modal.isVisible = true
        modal.isClosable = true
        modal.current = 'delivery'

        this.$store.dispatch('base/onModal', modal)
      }
    },
  },
}
</script>
