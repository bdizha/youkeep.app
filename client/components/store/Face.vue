<template>
  <nuxt-link :to="store.route"
             style="display: block; width: 100%;">
    <a-card :class="{'r-card-plain': isPlain}" class="r-store-card"
            :style="'background-image: url(' + store.photo_cover_url + ');'">
      <a-card-meta>
        <template slot="description">
          <a-row type="flex" justify="center" align="middle">
            <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
              <dev class="r-store-avatar">
                <r-store-photo slot="cover" :store="store"></r-store-photo>
              </dev>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
              <r-store-meta :store="store"></r-store-meta>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
              <a-button
                block
                class="r-btn-primary"
                size="default"
                type="secondary">
                Follow
              </a-button>
            </a-col>
          </a-row>
        </template>
      </a-card-meta>
    </a-card>
  </nuxt-link>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-store-face',
  components: {},
  props: {
    store: {type: Object, required: false},
    isPlain: {type: Boolean, required: false, default: false},
    span: {type: Number, required: false, default: 24}
  },
  data() {
    return {}
  },
  computed: mapGetters({}),
  mounted() {
  },
  methods: {
    onDrawer() {
    }
  }
};
</script>
