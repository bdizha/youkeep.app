<template>
  <r-avatar :size="size"
            :src="store.photo_url"
            class="r-avatar-store"
            shape="square"
            src-placeholder="/assets/icon_default.png"
  />
</template>
<script>
export default {
  name: 'r-store-photo',
  props: {
    store: { type: Object, required: false, default: null },
    size: { type: Number, required: false, default: 150 },
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
