<template>
  <a-row class="r-breadcrumbs">
    <a-col class="r-p-24 r-pv-12" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
           :lg="{span: 24}">
      <a-breadcrumb v-if="!processes.isProduct">
        <a-icon slot="separator" type="right"/>
        <a-breadcrumb-item :key="0">
          <NuxtLink  :prefetch="true" v-if="hasStore" :to="store.route">
            {{ store.name }}
          </NuxtLink>
        </a-breadcrumb-item>
        <a-breadcrumb-item v-for="(breadcrumb, index) in product.breadcrumbs" :key="index">
          <NuxtLink  :prefetch="true" :to="breadcrumb.route">
            {{ breadcrumb.name }}
          </NuxtLink>
        </a-breadcrumb-item>
      </a-breadcrumb>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-product-breadcrumbs',
  props: {
    product: {type: Object, required: true, default: null},
    hasClass: {type: Boolean, required: false, default: true}
  },
  data() {
    return {}
  },
  computed: mapGetters({
    store: 'base/store',
    hasStore: 'base/hasStore',
    processes: "base/processes",
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {

    }
  }
};
</script>
