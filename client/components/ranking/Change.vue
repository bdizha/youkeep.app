<template>
  <span :class="getTextColor(value)">{{ value }}</span>
</template>
<script>
export default {
  name: 'r-ranking-change',
  props: {
    value: {
      type: String,
      required: true,
      default: '0'
    }
  },
  data () {
    return {}
  },
  created () {
  },
  computed: {},
  methods: {
    getTextColor (value) {
      if (parseFloat(value) < 0) {
        return `r-text-tertiary`
      }
      return `r-text-secondary`
    }
  }
}
</script>
