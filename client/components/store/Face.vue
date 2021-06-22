<template>
  <div class="r-store-face">
    <r-store-photos v-if="false" :store="store"></r-store-photos>
    <a-card class="r-bg-grey-light">
      <a-card-meta>
        <template slot="description">
          <a-row :gutter="[12, 12]" type="flex" justify="center" align="middle">
            <a-col class="r-text-center" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
              <div class="r-store-avatar">
                <r-store-rate v-if="false" :store="store"></r-store-rate>
                <r-store-photo slot="cover" :store="store"></r-store-photo>
              </div>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
              <r-store-meta :store="store"></r-store-meta>
            </a-col>
            <a-col v-if="false" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
              <a-button
                block
                class="r-btn-primary"
                size="default"
                icon="check-circle"
                type="secondary"
              >
                Follow
              </a-button>
            </a-col>
          </a-row>
        </template>
      </a-card-meta>
    </a-card>
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
    }
  }
}
</script>
