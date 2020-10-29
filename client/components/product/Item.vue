<template>
  <a-row class="r-product" type="flex" justify="center" align="middle">
    <a-col class="gutter-row" :span="24">
      <a-card hoverable>
        <r-product-photo slot="cover" :product="product"></r-product-photo>
        <a-card-meta>
          <template slot="description">
            <r-product-credit :product="product"></r-product-credit>
            <a-row :gutter="[12,12]" type="flex" justify="start" align="middle">
              <a-col class="gutter-row" :xs="{ span: 24 }"
                     :sm="{ span: 24 }" :lg="{ span: 24 }">
                <r-rate :rating="product.rating"></r-rate>
              </a-col>
              <a-col class="gutter-row" :xs="{ span: 24 }"
                     :sm="{ span: 24 }" :lg="{ span: 24 }">
                <a-row class="gutter-row">
                  <a-col class="gutter-row" :xs="{ span: 24 }"
                         :sm="{ span: 24 }" :lg="{ span: 24 }">
                    <r-product-header :product="product"></r-product-header>
                    <r-product-price :product="product"></r-product-price>
                  </a-col>
                  <a-col class="gutter-row" :xs="{ span: 24 }"
                         :sm="{ span: 24 }" :lg="{ span: 24 }">
                    <r-product-actions :product="product" size="small"></r-product-actions>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </template>
        </a-card-meta>
      </a-card>
      <r-spinner v-if="false" :process="'isProduct'" :is-absolute="true"></r-spinner>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-product-item',
  props: {
    product: {type: Object, required: false}
  },
  data() {
    return {
      hasData: false
    };
  },
  created() {
    let $this = this;
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
