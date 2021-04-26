<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col :class="{'r-p-12': hasPad }" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <div class="r-margin-out">
        <r-category-arrows></r-category-arrows>
      </div>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-category-actions',
  props: {
    hasPad: {type: Boolean, required: false, default: true},
  },
  data() {
    return {};
  },
  computed: mapGetters({
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
  }
};
</script>
