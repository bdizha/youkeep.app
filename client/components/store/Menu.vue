<template>
  <div class="r-catalog-store">
    <r-store-notice v-if="hasNotice"></r-store-notice>
    <r-store-face :is-plain="true" :store="store"></r-store-face>
    <a-collapse default-active-key="1" expandIconPosition="right">
      <a-collapse-panel key="1" class="r-collapse-panel" header="Delivery">
        <r-delivery-form size="default"
                         :is-store="true"
                         :has-submit="false"
        ></r-delivery-form>
      </a-collapse-panel>
      <a-collapse-panel key="10" class="r-collapse-panel" header="Catalog">
        <r-store-catalog></r-store-catalog>
        <r-spinner :is-absolute="true"></r-spinner>
      </a-collapse-panel>
      <a-collapse-panel v-for="(item, index) in list"
                        :key="index"
                        class="r-collapse-panel"
                        :header="item.title"
      >
        <div v-html="item.content"></div>
      </a-collapse-panel>
      <a-collapse-panel :key="list.length" class="r-collapse-panel" header="You may also like">
        <r-store-list></r-store-list>
      </a-collapse-panel>
    </a-collapse>
    <a-row class="r-mb-48" type="flex" justify="center">
      <a-col class="r-p-24" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
        <div class="r-store-text-light">
          Shopple is an independent shopping service that is not necessarily affiliated with,
          endorsed or sponsored by the stores listed here but it enables you to get the deliveries
          you
          want.
        </div>
      </a-col>
    </a-row>
  </div>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-menu',
  props: {},
  data () {
    return {
      list: []
    }
  },
  computed: mapGetters({
    user: 'auth/user',
    hasNotice: 'base/hasNotice',
    store: 'base/store',
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
      this.list = [
        {
          title: 'Trading Hours',
          content: this.store ? this.store.trading_hours : null
        },
        {
          title: 'Contact',
          content: this.store.phone
        },
        {
          title: 'Description',
          content: this.store ? this.store.content_formatted : null
        },
        {
          title: 'Website',
          content: '<a target="_blank" href="' + this.store.url + '">' + this.store.url + '</a>'
        }
      ]
    }
  }
}
</script>
