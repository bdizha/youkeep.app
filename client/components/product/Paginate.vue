<template>
  <a-row type="flex" justify="center">
    <a-col :span="24">
      <a-row v-if="hasProducts" :gutter="[24,24]" class="r-mb-24" type="flex" justify="center">
        <a-col :xs="{span: 24}" :sm="{span: 16}" :md="{span: 18}" :lg="{span: 20}">
          <a-pagination v-model="products.current_page"
                        :show-total="(total, range) => `${range[0]}-${range[1]} of ${total} items`"
                        :page-size="parseInt(products.per_page)"
                        @change="onChange"
                        :total="products.total"
                        show-less-items>
            <template slot="buildOptionText" slot-scope="props">
              <a-button class="r-btn-bordered-grey"
                        type="secondary" :size="'default'">
                {{ props.value }}
              </a-button>
            </template>
          </a-pagination>
        </a-col>
        <a-col class="r-text-right" :xs="{span: 24}"
               :sm="{span: 8}" :md="{span: 6}" :lg="{span: 4}">
          <div class="r-same-height">
            <a-select
              labelInValue
              :defaultValue="sortOptions[0]"
              size="default"
              @change="onSort"
              style="min-width: 100%;">
              <a-select-option v-for="(s, index) in sortOptions"
                               :key="index"
                               :value="s.key">
                <span class="r-sort-value">{{ s.label }}</span>
              </a-select-option>
            </a-select>
          </div>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

const SORTS = [
  {
    label: 'Name: A to Z',
    key: 0
  },
  {
    label: 'Name: Z to A',
    key: 1
  },
  {
    label: 'Price: Low to High',
    key: 2
  },
  {
    label: 'Price: High to Low',
    key: 3
  },
  {
    label: 'Most Recent',
    key: 4
  }
];
export default {
  name: 'r-product-paginate',
  components: {},
  props: {
    category: {
      type: Object, required: true, default: () => {
        id: null
      }
    },
    isVertical: {type: Boolean, required: false, default: true},
  },
  data() {
    return {
      sortOptions: SORTS,
      payload: {
        limit: process.env.APP_LIMIT,
        category_id: this.category.id,
        sort: 0,
        page: 1
      }
    }
  },
  computed: mapGetters({
    store: 'base/store',
    filters: 'shop/filters',
    hasProducts: 'base/hasProducts',
    products: 'base/products',
    processes: 'base/processes',
  }),
  created() {
  },
  methods: {
    async onChange(pageNumber, pageSize) {
      console.log('pageNumber ::: ', pageNumber);
      console.log('pageSize ::: ', pageSize);

      this.payload.page = pageNumber;
      await this.onProducts();
    },
    async onSort(option) {
      this.payload.sort = option.key;
      await this.onProducts();
    },
    async onProducts() {
      await this.$store.dispatch('base/onProducts', this.payload);
    }
  }
};
</script>
