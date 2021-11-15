<template>
  <a-row :gutter=[24,24] justify="center" type="flex">
    <a-col v-if="hasProducts" :span="24">
      <div class="r-ph-24">
        <a-pagination v-model="products.current_page"
                      :page-size="parseInt(products.per_page)"
                      :total="products.total"
                      show-less-items
                      @change="onChange"
        >
          <template slot="buildOptionText" slot-scope="props">
            <a-button class="r-btn-bordered-grey"
                      size="large" type="secondary"
            >
              {{ props.value }}
            </a-button>
          </template>
        </a-pagination>
        <div class="r-mv-24">
          <a-row :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, { xs: 12, sm: 12, md: 24, lg: 24 }]" type="flex">
            <a-col v-for="(product, index) in products.data"
                   :key="index"
                   :class="{'r-spin__active':isProcessing}"
                   :lg="{span: columns}"
                   :md="{span: columns}" :sm="{span: columns > 1 ? 12 : 24}" :xs="{span: columns > 1 ? 12 : 24}"
            >
              <r-asset-item :isDrop="isDrop" :product="product"></r-asset-item>
            </a-col>
          </a-row>
        </div>
        <a-pagination v-model="products.current_page"
                      :page-size="parseInt(products.per_page)"
                      :total="products.total"
                      show-less-items
                      @change="onChange"
        >
          <template slot="buildOptionText" slot-scope="props">
            <a-button class="r-btn-bordered-grey"
                      size="large" type="secondary"
            >
              {{ props.value }}
            </a-button>
          </template>
        </a-pagination>
      </div>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'
import axios from 'axios'

export default {
  name: 'r-assets',
  components: {},
  props: {
    isDrop: { type: Boolean, required: false, default: false },
    columns: { type: Number, required: false, default: 8 },
    filters: {
      type: Object,
      required: false,
      default: () => {
        return {
          metric_type_id: null,
          store_id: null,
          is_active: true
        }
      }
    },
    isVertical: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      hasProducts: false,
      isProcessing: false,
      products: {
        data: []
      }
    }
  },
  async fetch () {
    this.hasProducts = false
    await this.onProducts()
  },
  computed: mapGetters({
    processes: 'base/processes'
  }),
  created () {
  },
  methods: {
    async onProducts () {
      this.isProcessing = true

      const path = `/products`
      const $this = this

      await axios.post(path, this.filters)
        .then(({ data }) => {
          $this.products = data
          $this.hasProducts = true
          $this.isProcessing = false
        })
        .catch((e) => {
          console.log(e)
        })
    },
    async onChange (page, limit) {
      const payload = this.filters
      payload.page = page
      payload.limit = limit

      await this.onProducts(payload)
    }
  }
}
</script>
