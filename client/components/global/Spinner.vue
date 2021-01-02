<template>
  <div v-show="isRunning()" :class="{
        'r-abs-spinner' : isAbsolute,
    'r-fix-spinner' : !isAbsolute
    }">
    <div class="ant-spin-spinning">
      <svg height="100%" viewBox="0 0 32 32" width="100%">
        <circle cx="16" cy="16" fill="none" r="14" stroke-width="4"
                style="stroke: #f50a2b; opacity: 0.2;"></circle>
        <circle cx="16" cy="16" fill="none" r="14" stroke-width="4"
                style="stroke: #f50a2b; stroke-dasharray: 80px; stroke-dashoffset: 60px;"></circle>
      </svg>
    </div>
  </div>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-spinner',
  props: {
    process: {type: String, required: false, default: ''},
    isAbsolute: {type: Boolean, required: false, default: false}
  },
  data() {
    return {};
  },
  computed: mapGetters({
    store: 'shop/store',
    processes: 'base/processes',
  }),
  created() {
    this.payload();
  },
  methods: {
    isRunning() {
      return this.processes[this.process] !== undefined &&
        this.processes[this.process];
    },
    payload() {
    }
  },
};
</script>
