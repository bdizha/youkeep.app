<template>
  <a-row :gutter="[12,12]" type="flex" justify="center" align="middle">
    <a-col v-for="(photo, index) in category.photos"
           v-if="(index + 1) > start && index < start + 3"
           :key="index"
           :xs="{span:8}" :sm="{span:8}" :md="{span:8}" :lg="{span:8}">
      <r-avatar shape="square"
                :size="99"
                :src="photo"
                src-placeholder="/assets/icon_default.png"/>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-category-photo',
  props: {
    category: {type: Object, required: true, default: {}},
    start: {type: Number, required: true, default: 1},
  },
  data() {
    return {
      size: 80,
      styles: null
    };
  },
  created() {
    this.setStyles();
  },
  methods: {
    setStyles() {
      let styles = '';
      let suffix = 'px;';

      styles += 'max-width: ' + this.size + suffix;
      styles += 'max-height: ' + this.size + suffix;
      styles += 'line-height: ' + this.size + suffix;

      this.styles = styles;
    },
    onCategory(event) {
      this.$store.dispatch('shop/onCategory', this.category.route);
    }
  }
};
</script>
