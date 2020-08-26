<template>
  <a-card class="r-store-card"
          :style="{backgroundImage: 'url(' + store.photo_cover_url + ')'}"
          hoverable>
    <r-store-photo slot="cover" :store="store"></r-store-photo>
    <a-card-meta>
      <template slot="title">
        <div class="r-slider-item-title">
          {{ store.name }}
        </div>
        <div class="r-slider-item-tag">
          {{ store.description }}
        </div>
      </template>
    </a-card-meta>
  </a-card>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-store-face',
  components: {},
  props: {
    store: {type: Object, required: false},
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
