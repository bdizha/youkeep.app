<template>
  <a-popover
    :visible="clicked"
    placement="top"
    title="Never miss at item!"
    trigger="click"
    @visibleChange="handleClickChange"
  >
    <div slot="content">
      <a-row :gutter="[12,12]" align="middle" justify="center" type="flex">
        <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
          <r-store-item :store="store"></r-store-item>
        </a-col>
        <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
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
    store: { type: Object, required: true }
  },
  data () {
    return {
      clicked: true,
      hovered: false,
    }
  },
  mounted () {
    let $this = this
    setTimeout(function () {
      $this.clicked = false
    }, 9000)
  },
  methods: {
    hide () {
      this.clicked = true
      this.hovered = false
    },
    handleHoverChange (visible) {
      this.clicked = false
      this.hovered = visible
    },
    handleClickChange (visible) {
      this.clicked = visible
      this.hovered = false
    },
  },
}
</script>
