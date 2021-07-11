<template>
  <r-avatar class="r-avatar-store"
            shape="square"
            :size="size"
            src-placeholder="/assets/icon_default.png"
            :src="store.photo_url"
  />
</template>
<script>
export default {
  name: 'r-store-photo',
  props: {
    store: { type: Object, required: false, default: null },
    size: { type: Number, required: false, default: 120 },
    isShowing: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      quantity: 1,
      styles: null
    }
  },
  created () {

  },
  methods: {}
}
</script>
