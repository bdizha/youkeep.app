<template>
  <div class="r-store-face">
    <r-store-photos v-if="false" :store="store"></r-store-photos>
    <a-row :gutter="[12, 12]" align="middle" justify="center" type="flex">
      <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-text-center">
        <a-card :style="getPhotoCoverStyle()" class="r-bg-primary-light">
          <a-card-meta>
            <template slot="description">
              <div class="r-store-avatar">
                <r-store-rate v-if="false" :store="store"></r-store-rate>
                <r-store-photo slot="cover" :store="store"></r-store-photo>
              </div>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
      <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-text-center">
        <r-store-meta :store="store"></r-store-meta>
      </a-col>
      <a-col v-if="false" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <a-button
          block
          class="r-btn-primary"
          icon="check-circle"
          size="large"
          type="secondary"
        >
          Follow
        </a-button>
      </a-col>
    </a-row>
  </div>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-face',
  components: {},
  props: {
    store: { type: Object, required: false },
    isPlain: { type: Boolean, required: false, default: false },
    span: { type: Number, required: false, default: 24 }
  },
  data () {
    return {}
  },
  computed: mapGetters({}),
  mounted () {
  },
  methods: {
    onDrawer () {
    },
    getPhotoCoverStyle () {
      return 'background-image: url(' + (this.store.photo_cover ? this.store.photo_cover_url : '/assets/icon_default.png') + ');background-size: contain;'
    }
  }
}
</script>
