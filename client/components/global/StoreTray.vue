<template>
  <a-row class="r-stores-tray" :class="{'r-stores-tray-active': hasStoreTray}" type="flex" justify="center"
         :gutter="24"
         style="padding: 48px 24px;background: #FFFFFF url(/images/art-grey.svg) repeat scroll 0% 0% !important;"
  >
    <a-col :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-row class="r-mb-24" type="flex" justify="start" align="middle">
        <a-col :span="12">
          <r-store-delivery-options></r-store-delivery-options>
        </a-col>
        <a-col :span="12" style="text-align: right;">
          <a-select
            size="large"
            labelInValue
            :defaultValue="sortOptions[0]"
            style="width: 160px;"
            @change="onFilter"
          >
            <a-select-option v-for="(sort, index) in sortOptions"
                             :key="index"
                             :value="sort.key"
            >
              <span class="r-sort-value">{{ sort.label }}</span>
            </a-select-option>
          </a-select>
        </a-col>
      </a-row>
      <a-row :gutter="[24,48]" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 12 }" :md="{ span: 6 }" :lg="{ span: 4 }"
               v-if="stores.length > 0"
               v-for="(store, index) in stores"
               :key="index"
        >
          <a :href="'/store/' + store.slug" style="display: block; width: 100%;">
            <r-store-item :store="store"></r-store-item>
          </a>
        </a-col>
      </a-row>
      <a-row type="flex" justify="center">
        <a-col class="r-p-24" :sm="{ span: 24 }" :lg="{ span: 18 }">
          <p class="r-store-text-light">
            Shopple is an independent shopping service that is not necessarily affiliated with,
            endorsed or sponsored by the stores listed here but it enables you to get the deliveries you
            want.
          </p>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-tray',
  components: {},
  props: {},
  data () {
    return {
      sort: null,
      sortOptions: [
        {
          label: 'All',
          key: 0
        },
        {
          label: 'Biggest Savings',
          key: 1
        },
        {
          label: 'Shopping',
          key: 2
        },
        {
          label: 'Prepared Meals',
          key: 3
        },
        {
          label: 'Alcohol',
          key: 4
        }
      ]
    }
  },
  computed: mapGetters({
    stores: 'store/stores',
    hasStoreTray: 'app/hasStoreTray',
  }),
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onFilter (value) {
      this.sort = value
    }
  }
}
</script>
