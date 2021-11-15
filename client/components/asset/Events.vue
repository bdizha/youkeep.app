<template>
  <a-card class="r-bg-dark r-pull-h-24 r-border-none">
    <div class="r-mv-48">
      <a-row :gutter="[24,24]" justify="center" type="flex">
        <a-col :lg="{ span: 18 }" :md="{ span: 21 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row v-if="hasEventTypes" :gutter="[96, 96]" align="middle" justify="start" type="flex">
            <a-col v-for="(event, index) in eventTypes"
                   :key="index"
                   :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" class="r-slider" justify="start" type="flex">
                <a-col :span="24">
                  <r-asset-slider :route="event.route"
                                  :title="event.name"
                                  :is-drop="isDrop"
                                  :filters="{event_type: event.event_type}"
                  ></r-asset-slider>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </div>
  </a-card>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-asset-events',
  components: {},
  props: {
    isDrop: { type: Boolean, required: false, default: false },
    hasCategories: { type: Boolean, required: false, default: false },
    title: { type: String, required: false, default: 'Just dropped in' },
    columns: { type: Number, required: false, default: 3 },
    filters: {
      type: Object,
      required: false,
      default: () => {
        return {
          event_type_id: null,
          store_id: null,
          is_active: true,
          order_by: 'updated_at'
        }
      }
    }
  },
  data () {
    return {
      events: [
        {
          route: '/asset/just-dropped-in',
          title: 'Just dropped in',
          id: null
        },
        {
          route: '/asset/trending-nfts',
          title: 'Trending NFTs',
          id: null
        },
        {
          route: '/asset/recently-added',
          title: 'Recently added',
          id: null
        }
      ]
    }
  },
  computed: mapGetters({
    eventTypes: 'product/eventTypes',
    hasEventTypes: 'product/hasEventTypes'
  }),
  methods: {
    async onEvents () {
      await this.$store.dispatch('product/onEvents')
    }
  }
}
</script>
