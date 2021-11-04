<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <r-store-notice v-if="hasNotice"></r-store-notice>
      <a-row :gutter="[24,24]" justify="start" type="flex">
        <a-col v-if="!hasStore" :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <div class="r-ph-24 r-pt-24">
            <a-row :gutter="[24,24]" justify="space-between" type="flex">
              <a-col>
                <h4 class="r-heading" style="line-height: 45px">
                <a-icon type="control"></a-icon> Filters
                </h4>
              </a-col>
              <a-col>
                <a-button class="r-btn-bordered-dark"
                          size="default"
                          type="secondary"
                >
                  Reset <a-icon type="close"/>
                </a-button>
              </a-col>
            </a-row>
          </div>
        </a-col>
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-collapse :default-active-key="activeKey"
                      expandIconPosition="right"
          >
            <a-collapse-panel v-if="!hasStore" key="delivery"
                              class="r-collapse-panel r-hide-lg"
                              header="Delivery address"
            >
              <r-delivery-search :has-submit="false"
                                 :is-store="true"
              ></r-delivery-search>
            </a-collapse-panel>
            <a-collapse-panel v-if="!hasStore"
                              v-for="(filter, index) in filters"
                              :key="filter.id.toString()"
                              class="r-collapse-panel"
                              :header="filter.title"
            >
              <r-category-filter-item :filter="filter"></r-category-filter-item>
            </a-collapse-panel>
            <a-collapse-panel v-if="hasStore"
                              key="store"
                              :header="store.name"
                              class="r-collapse-panel"
            >
              <r-store-face :has-title="false"
                            :store="store"
              ></r-store-face>
            </a-collapse-panel>
            <a-collapse-panel v-if="isCategory"
                              key="category"
                              class="r-collapse-panel"
                              header="By Category"
            >
              <r-category-filter-category></r-category-filter-category>
            </a-collapse-panel>
            <a-collapse-panel v-for="(filter) in category.filters"
                              v-if="isCategory && filter.items.length > 1"
                              :key="filter.name"
                              :header="'By ' + filter.name"
                              class="r-collapse-panel"
            >
              <r-category-filter-item :filter="filter"></r-category-filter-item>
            </a-collapse-panel>
            <a-collapse-panel v-if="hasStore && hasCategories"
                              key="catalog"
                              class="r-collapse-panel"
                              header="Catalog"
            >
              <r-store-catalog></r-store-catalog>
            </a-collapse-panel>
            <a-collapse-panel v-for="(item, index) in list"
                              v-if="hasStore"
                              :key="index + '-item'"
                              :header="item.title"
                              class="r-collapse-panel"
            >
              <div v-html="item.content"></div>
            </a-collapse-panel>
            <a-collapse-panel v-if="!hasStore" key="sellers"
                              class="r-collapse-panel"
                              header="Popular artists"
            >
              <r-store-list></r-store-list>
            </a-collapse-panel>
            <a-collapse-panel v-if="hasStore && isProduct"
                              key="products"
                              class="r-collapse-panel"
                              header="Related Products"
            >
              <div class="r-margin-out">
                <r-product-list :columns="1"
                                :filters="filters"
                                :span="24" :vertical="false"
                ></r-product-list>
              </div>
            </a-collapse-panel>
          </a-collapse>
        </a-col>
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <div class="r-p-24 r-mb-48">
            <h4 class="r-store-text-light">
              Youkeep is an independent business service that is not necessarily affiliated with,
              endorsed or sponsored by the sellers listed here but it enables you to get the deliveries
              you
              want.
            </h4>
          </div>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-menu',
  props: {
    isHome: { type: Boolean, required: false, default: false },
    isCategory: { type: Boolean, required: false, default: false },
    isStore: { type: Boolean, required: false, default: true },
    isProduct: { type: Boolean, required: false, default: false }
  },
  data () {
    return {
      filters: [
        {
          title: 'Sort',
          id: 1,
          type: 1,
          items: [
            {
              name: 'Picked for you',
              id: 1
            },
            {
              name: 'Most popular',
              id: 2
            },
            {
              name: 'Rating',
              id: 3
            },
            {
              name: 'Delivery time',
              id: 4
            }
          ],
          per_row: 1
        },
        {
          title: 'Dietary',
          id: 2,
          type: 1,
          items: [
            {
              name: 'Vegetarian',
              id: 1
            },
            {
              name: 'Vegan',
              id: 2
            },
            {
              name: 'Gluten-free',
              id: 3
            },
            {
              name: 'Halal',
              id: 4
            },
            {
              name: 'Allergy friendly',
              id: 5
            }
          ],
          per_row: 1
        },
        {
          title: 'Price range',
          id: 3,
          type: 1,
          items: [
            {
              name: '< R99',
              id: 1
            },
            {
              name: 'R100 - R499',
              id: 2
            },
            {
              name: 'R500 - R999',
              id: 3
            },
            {
              name: 'R1000 - R4999',
              id: 4
            },
            {
              name: '> R5000',
              id: 5
            }
          ],
          per_row: 1
        },
        {
          title: 'Max delivery fee',
          id: 4,
          type: 1,
          items: [
            {
              name: '< R15',
              id: 1
            },
            {
              name: '< R30',
              id: 2
            },
            {
              name: '< R60',
              id: 3
            },
            {
              name: '< R90',
              id: 4
            },
            {
              name: '> R90',
              id: 5
            }
          ],
          per_row: 1
        }
      ],
      list: [],
      sortItems: null
    }
  },
  async fetch () {
    if (this.isProduct) {
      await this.onProducts()
    }
  },
  computed: {
    activeKey () {
      let activeKey = 1

      if (this.hasStore) {
        activeKey = '1'
      } else if (this.isCategory) {
        activeKey = '1'
      } else if (this.isProduct) {
        activeKey = '1'
      }

      return activeKey
    },
    ...mapGetters({
      user: 'auth/user',
      category: 'base/category',
      hasCategories: 'base/hasCategories',
      hasNotice: 'base/hasNotice',
      store: 'base/store',
      hasStore: 'base/hasStore'
    })
  },
  created () {
    if (this.hasStore) {
      this.payload()
    }
  },
  methods: {
    async onProducts () {
      console.log('filters', this.filters)

      const categoryParts = this.$route.params.category.split('--')

      this.filters.category_id = (categoryParts[1] !== undefined) ? categoryParts[1] : null
      await this.$store.dispatch('base/onProducts', this.filters)
    },
    payload () {
      this.list = [
        {
          title: 'Trading Hours',
          content: this.store ? this.store.trading_hours : null
        },
        {
          title: 'Contact',
          content: this.store ? this.store.phone : null
        },
        {
          title: 'Description',
          content: this.store ? this.store.content_formatted : null
        },
        {
          title: 'Website',
          content: '<a target="_blank" href="' + this.store.url + '">' + this.store.url + '</a>'
        }
      ]
    }
  }
}
</script>
