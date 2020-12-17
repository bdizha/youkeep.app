<template>
  <a-row class="r-breadcrumbs">
    <a-col class="r-p-24" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
           :lg="{span: 24}">
      <a-breadcrumb>
        <a-icon slot="separator" type="right"/>
        <a-breadcrumb-item :key="0">
          <nuxt-link v-if="hasStore" :to="store.route">
            {{ store.name }}
          </nuxt-link>
        </a-breadcrumb-item>
        <a-breadcrumb-item v-for="(breadcrumb, index) in category.breadcrumbs" :key="index">
          <nuxt-link :to="breadcrumb.route">
            {{ breadcrumb.name }}
          </nuxt-link>
        </a-breadcrumb-item>
      </a-breadcrumb>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-category-breadcrumbs',
  props: {
    category: {type: Object, required: true, default: null},
    hasClass: {type: Boolean, required: false, default: true}
  },
  data() {
    return {}
  },
  computed: mapGetters({
    store: 'shop/store',
    hasStore: 'shop/hasStore',
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {

    },
    onCategory(category) {
      this.$store.dispatch('shop/onCategory', category.route);
    }
  }
};
</script>
