<template>
  <a-row :gutter="[24,24]" justify="start" align="middle" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-xs r-text-light">
            Description
          </p>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-normal r-text-white" v-html="store.description"></p>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 12 }" :md="{ span: 12}"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-xs r-text-light">
            NFTs
          </p>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-normal r-text-white">
            26
          </p>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 12 }" :md="{ span: 12}"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <div class="r-text-xs r-text-light">
            Floor price
          </div>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <r-store-price :store="{currency: 'SOL', price: 0.24, currency_url: '/currencies/SOL.svg'}"></r-store-price>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 12 }" :md="{ span: 12}"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-xs r-text-light">
            Volume
          </p>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-normal r-text-white">
            $759
          </p>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 12 }" :md="{ span: 12}"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[6,6]" justify="start" align="middle" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-xs r-text-light">
            Running auctions
          </p>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-normal r-text-white">
            3
          </p>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-store-about',
  components: {},
  props: {
    store: {
      type: Object,
      required: () => {
        return {
          description: null
        }
      }
    }
  },
  data () {
    return {}
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {
    }
  }
}
</script>
