<template>
  <nuxt-link class="r-item-shadow"
             :to="store.route">
    <a-row :gutter="[24,24]" type="flex" justify="center" align="middle">
      <a-col :style="getPhotoCoverStyle()"
        :xs="{span: 24}" :sm="{span: 24}" :md="{span: 10}" :lg="{span: 10}">
        <r-avatar
          class="r-avatar-store"
          shape="square"
          :size="size"
          :src="store.photo_url"
          src-placeholder="/assets/icon_default.png"
        />
      </a-col>
      <a-col :xs="{span: 24}" :sm="{span:24}" :md="{span: 14}" :lg="{span: 14}">
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
    getPhotoCoverStyle () {
      return 'background-image: url(' + (this.store.photo_cover ? this.store.photo_cover_url : '/assets/icon_default.png') + ');background-size: contain;'
    }
  }
}
</script>
