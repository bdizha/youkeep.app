<template>
  <nuxt-link :to="store.route"
             style="display: block; width: 100%;">
    <a-card hoverable>
      <a-card-meta>
        <template slot="description">
          <a-row :gutter="[12,12]" type="flex" justify="start" align="middle">
            <a-col :xs="{ span: 24 }"
                   :sm="{ span: 24 }" :lg="{ span: 24 }">
              {{ store.name }}
            </a-col>
          </a-row>
        </template>
      </a-card-meta>
    </a-card>
  </nuxt-link>
</template>
<script>
import {mapGetters} from "vuex";

const DEFAULT_STORE = {route: null, name: null};
export default {
  name: 'r-product-store',
  props: {
    store: {type: Object, required: false, default: DEFAULT_STORE}
  },
  data() {
    return {
      hasData: false
    };
  },
  created() {
    this.payload();
  },
  computed: mapGetters({
    processes: 'base/processes',
  }),
  methods: {
    payload() {
    },
  },
};
</script>
