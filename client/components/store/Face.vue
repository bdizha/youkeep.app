<template>
  <nuxt-link :to="store.route"
             style="display: block; width: 100%;">
    <a-card class="r-store-card"
            :style="{backgroundImage: 'url(' + store.photo_cover_url + ')'}"
            hoverable>
      <r-store-photo slot="cover" :store="store"></r-store-photo>
      <a-card-meta>
        <template slot="title">
          <r-store-meta :store="store"></r-store-meta>
          <a-row class="r-mt-24" type="flex" justify="center" align="middle">
            <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
              <r-store-actions :store="store"></r-store-actions>
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
