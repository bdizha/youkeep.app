<template>
  <nuxt-link :to="store.route"
             class="r-item-shadow"
  >
    <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
      <a-col :lg="{span: 10}"
             :md="{span: 10}" :sm="{span: 24}" :style="getPhotoCoverStyle()" :xs="{span: 24}"
      >
        <r-avatar
          :size="size"
          :data-src="store.photo_url"
          class="r-avatar-store"
          shape="square"
          src-placeholder="/assets/icon_default.png"
        />
      </a-col>
      <a-col :lg="{span: 14}" :md="{span: 14}" :sm="{span:24}" :xs="{span: 24}">
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
    store: {
      type: Object,
      required: true,
      default: () => {

      }
    },
    hasActions: { type: Boolean, required: false, default: true },
    size: { type: Number, required: false, default: 90 },
    isShow: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      hasSpin: true
    }
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onSearch () {
      this.isSearching = true
    },
    getPhotoCoverStyle () {
      return 'background-image: url(' + ('/assets/icon_default.png') + ');background-size: contain;'
    }
  }
}
</script>
