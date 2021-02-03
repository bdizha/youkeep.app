<template>
  <a-card class="r-card-category r-spin-holder" hoverable>
    <nuxt-link class="r-text-primary r-text-view-more" :to="category.route">
      <r-category-photo :category="category" :start="0"></r-category-photo>
      <a-card-meta>
        <template slot="description">
          <a-row type="flex" justify="center" align="middle">
            <a-col class="r-p-24 r-text-center" :span="24">
              <h4 class="r-heading r-text-view-more" style="margin-bottom: 0;">
                {{ category.name }}
              </h4>
            </a-col>
          </a-row>
        </template>
      </a-card-meta>
      <r-category-photo :category="category" :start="3"></r-category-photo>
    </nuxt-link>
    <r-spinner :is-absolute="true"></r-spinner>
  </a-card>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-category-bundle',
  components: {},
  props: {
    category: {type: Object, required: false, default: null},
  },
  data() {
    return {}
  },
  computed: mapGetters({
    store: 'shop/store',
    processes: 'base/processes',
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
      let $this = this;
    },
    onCategory(category) {
      this.$store.dispatch('base/onCategory', category.route);
    },
  }
};
</script>
