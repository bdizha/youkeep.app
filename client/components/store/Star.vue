<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col class="gutter-row" :xs="{ span: 24 }"
           :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-rate size="small" :default-value="4"/>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-store-star',
  props: {
    store: {type: Object, required: false}
  },
  data() {
    return {
      hasData: false
    };
  },
  created() {
    this.payload();
  },
  computed: mapGetters({
    processes: 'base/processes'
  }),
  methods: {
    payload() {
    },
  },
};
</script>
