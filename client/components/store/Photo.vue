<template>
  <a-card :style="getPhotoCoverStyle()"
          class="r-bg-cover r-p-0 r-dark"
  >
    <r-avatar shape="circle"
              data-src="/patterns/pattern-default.svg" :size="size"
              class="r-avatar-block"
    ></r-avatar>
  </a-card>
</template>
<script>
export default {
  name: 'r-store-photo',
  props: {
    store: { type: Object, required: false, default: null },
    size: { type: Number, required: false, default: 300 }
  },
  data () {
    return {
      quantity: 1,
      styles: null
    }
  },
  created () {

  },
  methods: {
    getPhotoCoverStyle () {
      const photoUrl = this.size > 100 ? this.store.photo_cover_url : this.store.photo_url
      return `background-image: url(${photoUrl});`
    }
  }
}
</script>
