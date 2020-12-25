<template>
  <a-row type="flex" justify="center">
    <a-col class="r-p-24" :span="24"
           :class="{'r-product-spinner--active': processes.isProduct}">
      <a-row v-if="hasProducts" :gutter="[24,24]" class="r-mb-24" type="flex" justify="center">
        <a-col :xs="{span: 24}" :sm="{span: 16}" :md="{span: 18}" :lg="{span: 20}">
          <a-pagination class="r-same-height" v-model="products.current_page"
                        :show-total="(total, range) => `${range[0]}-${range[1]} of ${total} items`"
                        :page-size="products.per_page"
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
      <div class="r-product-cards">
        <a-row :gutter="[{ xs: 12, sm: 12, md: 24, lg: 24 }, 24]">
          <a-col class="r-p-24" v-for="(product, index) in products.data" :key="index"
                 :xs="{span: 12}"
                 :sm="{span: 12}" :md="{span: 6}" :lg="{span: 4}">
            <r-product-item :product="product"></r-product-item>
          </a-col>
        </a-row>
      </div>
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
  name: 'r-product-list',
  components: {},
  props: {},
  data() {
    return {
      hasData: false,
      sortOptions: SORTS,
      params: {
        limit: 24,
        category_id: null,
        sort: 0,
        page: 1
      }
    }
  },
  computed: mapGetters({
    store: 'shop/store',
    filters: 'shop/filters',
    category: 'shop/category',
    products: 'shop/products',
    hasProducts: 'shop/hasProducts',
    processes: 'base/processes',
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    onChange(pageNumber, pageSize) {
      console.log('pageNumber ::: ', pageNumber);
      console.log('pageSize ::: ', pageSize);

      this.params.page = pageNumber;
      this.fetchProducts();
    },
    onSort(option) {
      this.params.sort = option.key;
      this.fetchProducts();
    },
    async fetchProducts() {
      this.params.category_id = this.category.id;
      await this.$store.dispatch('shop/onProducts', this.params);
    }
  }
};
</script>
