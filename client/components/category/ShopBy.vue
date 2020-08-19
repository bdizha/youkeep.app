<template>
  <a-row type="flex" justify="start">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-button @click="onModal" class="r-hide-sm r-btn-bordered-grey"
                block
                type="secondary"
                :size="size">
        <a-icon type="control"/>
        Filters
      </a-button>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-category-shop-by',
  props: {
    justify: {type: String, required: false, default: 'start'},
    size: {type: String, required: false, default: 'default'},
  },
  data() {
    return {};
  },
  computed: mapGetters({
    store: 'shop/store',
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    async onModal() {
      let modal = {};
      modal.isVisible = true;
      modal.isClosable = true;
      modal.current = 'category';

      this.$store.dispatch('base/onModal', modal);
    }
  },
  watch: {},
};
</script>
