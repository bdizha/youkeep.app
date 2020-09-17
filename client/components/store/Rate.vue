<template>
  <a-button
    block
    type="secondary" class="r-btn-bordered-primary"
    icon="star"
    :size="'small'">{{ store.rate.toFixed(1) + ' rate' }}
  </a-button>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-store-rate',
  props: {
    store: {type: Object, required: true}
  },
  data() {
    return {};
  },
  computed: mapGetters({}),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    onModal() {
      let modal = {};
      modal.isVisible = true;
      modal.current = 'rate';

      this.$store.dispatch('base/onModal', modal);
    }
  },
  watch: {},
};
</script>
