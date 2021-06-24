<template>
  <div class="r-store-item-line">
    <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
      <a-col :xs="{span: 12}" :sm="{span: 10}" :md="{span: 9}" :lg="{span: 8}">
        <r-avatar
          class="r-avatar-store"
          shape="square"
          :size="size"
          :src="store.photo_url"
          src-placeholder="/assets/icon_default.png"
        />
      </a-col>
      <a-col :xs="{span: 12}" :sm="{span: 14}" :md="{span: 15}" :lg="{span: 16}">
        <r-store-meta :store="store"></r-store-meta>
      </a-col>
    </a-row>
  </div>
</template>
<script>
export default {
  name: 'r-store-item',
  components: {},
  props: {
    store: { type: Object, required: false },
    hasActions: { type: Boolean, required: false, default: true },
    size: { type: Number, required: false, default: 90 },
    isShow: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      hasSpin: true,
    }
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {
      let $this = this
    },
    onSearch () {
      this.isSearching = true
    },
  }
}
</script>
