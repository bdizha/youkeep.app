<template>
  <a-row type="flex" justify="start" :gutter="0">
    <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: span }">
      <a-card hoverable
              :style="{backgroundImage: 'url(' + store.photo_cover_url + ')'}">
        <r-store-photo slot="cover" :store="store"></r-store-photo>
        <a-card-meta>
          <template slot="description">
            <a-row :gutter="[12,12]" type="flex" justify="start" align="middle">
              <a-col class="gutter-row" :xs="{ span: 24 }"
                     :sm="{ span: 24 }" :lg="{ span: 24 }">
                <a-row class="gutter-row">
                  <a-col class="gutter-row" :xs="{ span: 24 }"
                         :sm="{ span: 24 }" :lg="{ span: 24 }">
                    <a-button block
                              class="r-btn-bordered-grey"
                              type="primary">
                      {{ store.name }}
                    </a-button>
                  </a-col>
                  <a-col class="gutter-row" :xs="{ span: 24 }"
                         :sm="{ span: 24 }" :lg="{ span: 24 }">
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
  </a-row>
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
  computed: mapGetters({
    store: 'shop/store'
  }),
  mounted() {
  },
  methods: {
    onDrawer() {
    }
  }
};
</script>
