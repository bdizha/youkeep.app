<template>
  <a-row :gutter="[12,12]" align="middle" justify="center" type="flex">
    <a-col v-for="(photo, index) in category.photos"
           v-if="(index + 1) > start && index < start + 3"
           :key="index"
           :lg="{span:8}" :md="{span:8}" :sm="{span:8}" :xs="{span:8}"
    >
      <r-avatar :size="size"
                :src="photo"
                shape="square"
                src-placeholder="/patterns/pattern-dark.svg"
      />
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-category-photo',
  props: {
    category: { type: Object, required: true, default: {} },
    start: { type: Number, required: true, default: 1 },
    size: { type: Number, false: true, default: 90 }
  },
  data () {
    return {
      styles: null
    }
  },
  created () {
    this.setStyles()
  },
  methods: {
    setStyles () {
      let styles = ''
      let suffix = 'px;'

      styles += 'max-width: ' + this.size + suffix
      styles += 'max-height: ' + this.size + suffix
      styles += 'line-height: ' + this.size + suffix

      this.styles = styles
    },
    onCategory (event) {
      this.$store.dispatch('base/onCategory', this.category.route)
    }
  }
}
</script>
