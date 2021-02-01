<template>
  <div :class="{'r-store-flex__has-notice': hasNotice}" class="r-store-flex">
    <r-store-notice v-if="hasNotice"></r-store-notice>
    <r-store-item :store="store"></r-store-item>
    <r-store-actions :store="store"></r-store-actions>
    <r-delivery-form size="default"
                     :is-store="true"
                     :has-submit="false"></r-delivery-form>
    <r-store-catalog></r-store-catalog>
    <r-store-list></r-store-list>
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
