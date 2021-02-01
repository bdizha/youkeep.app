<template>
  <a-popover
    title="Never miss"
    trigger="click"
    :visible="clicked"
    placement="bottom"
    @visibleChange="handleClickChange"
  >
    <div slot="content">
      <r-store-item :store="store"></r-store-item>
    </div>
  </a-popover>
</template>
<script>
export default {
  name: 'r-store-popover',
  props: {
    store: {type: Object, required: true}
  },
  data() {
    return {
      clicked: true,
      hovered: false,
    };
  },
  methods: {
    hide() {
      this.clicked = true;
      this.hovered = false;
    },
    handleHoverChange(visible) {
      this.clicked = false;
      this.hovered = visible;
    },
    handleClickChange(visible) {
      this.clicked = visible;
      this.hovered = false;
    },
  },
};
</script>
