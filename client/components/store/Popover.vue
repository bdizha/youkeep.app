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
      <a-row type="flex" justify="center" align="middle">
        <a-col class="r-ph-24 r-pv-12" :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
          <r-store-actions :store="store"></r-store-actions>
        </a-col>
      </a-row>
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
  mounted() {
    let $this = this;
    setTimeout(function () {
      $this.clicked = false;
    }, 9000);
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
