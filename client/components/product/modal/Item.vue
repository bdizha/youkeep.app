<template>
  <r-modal-template :css-class="'r-modal-product'"
                    :mask-closable="true"
                    :closable="true"
                    current="product"
                    style="position: relative;"
  >
    <a-card v-if="hasCategories" class="r-product" :bordered="true">
      <a-row class="r-product-modal" :gutter="36" type="flex"
             justify="center" align="middle"
      >
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
          <r-product-credit :is-showing="true" :product="product"></r-product-credit>
          <r-product-photos :product="product" :size="400"></r-product-photos>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
          <r-product-header :is-showing="true" :product="product"></r-product-header>
          <r-rate :rating="product.rating"></r-rate>
          <r-product-price :is-showing="true" :product="product"></r-product-price>
          <r-product-types :is-showing="true" :product="product"></r-product-types>
          <r-product-actions :is-showing="true" :size="'default'" :product="product"></r-product-actions>
        </a-col>
      </a-row>
    </a-card>
    <r-product-info v-if="false" :product="product"></r-product-info>
    <a-row class="r-mt-48 r-mb-24" type="flex" justify="center">
      <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
        <h3 class="r-heading r-text-secondary">
          <a-icon type="bulb"/>
          <span class="r-text-tip-primary">Related products</span>
        </h3>
      </a-col>
    </a-row>
    <r-category-item :columns="4" :has-product="true" :category="category"></r-category-item>
    <!--        <a-row class="r-mt-48 r-mb-24" type="flex" justify="center">-->
    <!--            <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">-->
    <!--                <h3 class="r-heading r-text-secondary">-->
    <!--                    <a-icon type="bulb"/>-->
    <!--                    <span class="r-text-tip-secondary">Recommended for you</span>-->
    <!--                </h3>-->
    <!--            </a-col>-->
    <!--        </a-row>-->
    <!--        <r-category-item :columns="4" :has-product="true" :category="category"></r-category-item>-->
  </r-modal-template>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  props: {},
  data () {
    return {}
  },
  created () {
    this.payload()
  },
  computed: mapGetters({
    modal: 'base/modal',
    category: 'base/category',
    hasCategories: 'base/hasCategories',
    product: 'base/product',
  }),
  methods: {
    async payload () {
    },
  },
}
</script>
