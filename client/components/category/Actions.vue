<template>
  <a-row type="flex" justify="start" align="middle"
         class="r-gradient" id="r-store-header"
  >
    <a-col :class="{'r-p-12': hasPad }" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <r-category-arrows></r-category-arrows>
    </a-col>
  </a-row>
</template>
<script>

export default {
  name: 'r-category-actions',
  props: {
    hasPad: { type: Boolean, required: false, default: true },
  },
  data () {
    return {}
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
  }
}
</script>
