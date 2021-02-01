<template>
  <div :class="{'r-store-flex__has-notice': hasNotice}" class="r-store-flex">
    <r-store-notice v-if="hasNotice"></r-store-notice>
    <r-store-item :store="store"></r-store-item>
    <r-store-actions :store="store"></r-store-actions>
    <r-delivery-form size="default"
                     :is-store="true"
                     :has-submit="false"></r-delivery-form>
    <a-collapse default-active-key="1" expandIconPosition="right">
      <a-collapse-panel class="r-category-menu-panel" header="Catalog">
        <r-store-catalog></r-store-catalog>
      </a-collapse-panel>
      <a-collapse-panel class="r-category-menu-panel" header="You might like">
        <r-store-list></r-store-list>
      </a-collapse-panel>
      <a-collapse-panel class="r-category-menu-panel" header="About this store">
        <r-store-info :store="store"></r-store-info>
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
import {mapGetters} from "vuex";

export default {
  name: 'r-store-menu',
  props: {},
  data() {
    return {};
  },
  computed: mapGetters({
    user: 'auth/user',
    hasNotice: 'base/hasNotice',
    store: 'shop/store',
  }),
  created() {
    this.payload();
  },
  methods: {
    async payload() {
    },
  },
}
</script>
