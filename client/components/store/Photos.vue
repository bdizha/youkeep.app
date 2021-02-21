<template>
  <a-row :gutter="[1,1]" type="flex" justify="center" class="r-store-photos">
    <a-col v-for="(photo, index) in store.photos"
           :key="index + 1"
           :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }"
    >
      <div class="r-store-photo-item"
           :style="'background-image: url(' + photo + ');'">
        <r-avatar shape="square"
                  :size="105"
                  src-placeholder="~/assets/icon_default.png"
                  src="~/assets/icon_default.png"
        />

      </div>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-store-photos',
  props: {
    store: { type: Object, required: false, default: {} },
  },
  data () {
    return {
    }
  },
  computed: {},
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
    }
  }
}
</script>
