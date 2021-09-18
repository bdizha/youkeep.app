<template>
  <a-table :columns="columns" :dataSource="sellers.data" bordered class="r-grey-shadow">
    <template slot="photo" slot-scope="photo">
      <r-avatar :size="90"
                :src="photo"
                class="r-avatar-store"
                shape="square"
                src-placeholder="/assets/icon_default.png"
      />
    </template>
    <template slot="action" slot-scope="slug, store">
      <a-row :gutter="24" align="middle" justify="center" type="flex">
        <a-col :lg="{span: 12}" :md="{span: 12}" :sm="{span: 12}" :xs="{span: 12}">
          <nuxt-link :to="'/account/store/' + slug">
            <a-button block
                      class="r-btn-bordered-primary"
                      size="small"
                      type="secondary"
            >
              View
            </a-button>
          </nuxt-link>
        </a-col>
        <a-col :lg="{span: 12}" :md="{span: 12}" :sm="{span: 12}" :xs="{span: 12}">
          <a-button block class="r-btn-bordered-secondary"
                    size="small"
                    type="secondary"
                    @click="onModal(slug)"
          >
            Config Map
          </a-button>
        </a-col>
      </a-row>
    </template>
  </a-table>
</template>
<script>
import { mapGetters } from 'vuex'

const COLUMNS = [
  { title: 'Logo', dataIndex: 'photo_url', key: 'photo', scopedSlots: { customRender: 'photo' } },
  { title: 'Name', dataIndex: 'name', key: 'name' },
  { title: 'Tagline', dataIndex: 'description', key: 'description' },
  { title: 'Website', dataIndex: 'url', key: 'url' },
  { title: 'Phone', dataIndex: 'phone', key: 'phone' },
  // { title: 'Catalog', dataIndex: 'catalog', key: 'catalog' },
  { title: 'Actions', dataIndex: 'slug', key: 'slug', scopedSlots: { customRender: 'action' } }
]

export default {
  name: 'r-account-store-list',
  props: {},
  data () {
    return {
      dataSource: [],
      count: 2,
      columns: COLUMNS
    }
  },
  computed: mapGetters({
    modal: 'base/modal',
    sellers: 'account/sellers',
    hassellers: 'account/hassellers'
  }),
  async fetch () {
    await this.onsellers()
  },
  methods: {
    async onsellers () {
      const payload = {
        is_active: true
      }
      await this.$store.dispatch('account/onsellers', payload)
    },
    onModal (current) {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = current

      // this.$store.dispatch('account/onStore', store)
      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
