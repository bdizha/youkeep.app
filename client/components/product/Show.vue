<template>
  <a-row style="margin-bottom: 24px;">
    <a-col class="gutter-row" :span="24">
      <a-row>
        <a-col class="gutter-row" :span="12">
          <a-breadcrumb>
            <a-breadcrumb-item><a :href="'/store/' + store.slug">Categories</a></a-breadcrumb-item>
            <a-breadcrumb-item v-for="(breadcrumb, index) in category.breadcrumbs" :key="index">
              <a :href="'/store/' + store.slug + '/category/' + breadcrumb.slug">{{ breadcrumb.name }}</a>
            </a-breadcrumb-item>
          </a-breadcrumb>
        </a-col>
      </a-row>
      <a-row style="padding: 0;">
        <a-col class="gutter-row" :span="12">
          <h3 class="r-size-large">
            {{ category.name }}
          </h3>
        </a-col>
        <a-col class="gutter-row" :span="12" style="text-align: right">
          <a-dropdown>
            <a-button>
              Sort By
              <a-icon type="down"/>
            </a-button>
            <a-menu slot="overlay">
              <a-menu-item>
                <a href="javascript:;">Popularity</a>
              </a-menu-item>
              <a-menu-item>
                <a href="javascript:;">Price: Lowest First</a>
              </a-menu-item>
              <a-menu-item>
                <a href="javascript:;">PriceL Highest FIrst</a>
              </a-menu-item>
            </a-menu>
          </a-dropdown>
        </a-col>
      </a-row>
      <a-row style="border: 1px solid rgba(0, 0, 0, 0.1)">
        <a-col :span="24">
          <a-row>
            <a-col class="gutter-row" v-for="(product, index) in products" :key="index + 1" :span="4">
              <r-product :product="product"></r-product>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-product-show',
  components: {},
  props: {
    product: {type: Array, required: true},
    categories: {type: Array, required: true},
  },
  data() {
    return {
      store: {}
    }
  },
  created() {
    this.payload();
  },
  methods: {
    payload() {
      this.store = this.$store.state.store;
    }
  }
};
</script>
