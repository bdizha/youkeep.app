<template>
  <a-button @click="onModal"
            block
            type="secondary" class="r-btn-bordered-secondary"
            icon="check-circle"
            :size="'default'">{{ 'Subscribe' }}
  </a-button>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-store-subscribe',
  props: {
    store: {type: Object, required: true}
  },
  data() {
    return {};
  },
  computed: mapGetters({
    store: 'shop/store',
    hasStoreTray: 'base/hasStoreTray'
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    onModal() {
      let modal = {};
      modal.isVisible = !this.hasStoreTray;
      modal.current = 'subscribe';

      this.$store.dispatch('base/onModal', modal);
    }
  },
  watch: {},
};
</script>
