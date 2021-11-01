<template>
  <a-select :value="selected"
            mode="multiple"
            placeholder="Choose mapping category"
            style="width: 100%"
            @change="onSelect"
  >
    <a-select-option v-for="(category, index) in categories"
                     :key="index"
                     :value="category.id"
    >
      {{ category.title }}
    </a-select-option>
  </a-select>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-catalog-map-category',
  props: {
    categories: { type: Array, required: false, default: () => [] }
  },
  data () {
    return {
      selected: []
    }
  },
  computed: {
    filteredOptions () {
      return this.categories.filter(c => !this.selected.includes(c.id))
    },
    ...mapGetters({})
  },
  mounted () {
  },
  methods: {
    async onMap () {
    },
    onSelect (selected) {
      this.selected = selected
    }
  }
}
</script>
