<template>
  <nuxt-link class="r-store-item-line" :to="store.route">
    <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
      <a-col :xs="{span: 12}" :sm="{span: size > 90 ? 12 : 10}" :md="{span: size > 90 ? 10 : 9}" :lg="{span: size > 90 ? 10 : 8}">
        <r-avatar
          class="r-avatar-store"
          shape="square"
          :size="size"
          :src="store.photo_url"
          src-placeholder="/assets/icon_default.png"
        />
      </a-col>
      <a-col :xs="{span: 12}" :sm="{span: size > 90 ? 12 : 14}" :md="{span: size > 90 ? 14 : 15}" :lg="{span: size > 90 ? 14 : 16}">
        <r-store-meta :store="store"></r-store-meta>
      </a-col>
    </a-row>
  </nuxt-link>
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
