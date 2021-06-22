<template>
  <div class="r-store-item-line">
    <a-row type="flex" justify="center" align="middle">
      <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
        <nuxt-link :to="store.route" class="r-store-item">
          <r-avatar
            class="r-avatar-store"
            shape="square"
            :size="72"
            :src="store.photo_url"
            src-placeholder="/assets/icon_default.png"
          />
          <r-store-meta :store="store"></r-store-meta>
        </nuxt-link>
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
    isShow: { type: Boolean, required: false, default: false },
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
