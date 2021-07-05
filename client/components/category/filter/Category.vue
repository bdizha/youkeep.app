<template>
  <a-row :gutter="[12,12]" type="flex" justify="start" align="middle">
    <a-col v-if="hasCategories" :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
      <a-checkbox-group v-model="selected"
                        @change="onFilter"
      >
        <a-row :gutter="[12,12]" type="flex" justify="start" align="middle">
          <a-col v-for="(category, index) in categories"
                 v-if="index < counter"
                 :key="category.id"
                 :xs="{span: 24}" :sm="{span: 24}" :md="{span:24 }" :lg="{span:24}"
          >
            <a-tooltip placement="top">
              <template slot="title">
                <span>Select: {{ category.name }}</span>
              </template>
              <a-checkbox :style="'background: ' + category.name"
                          :value="category.id"
              >
                {{ category.name }}
              </a-checkbox>
            </a-tooltip>
          </a-col>
        </a-row>
      </a-checkbox-group>
    </a-col>
    <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
      <a-row :gutter="[12, 12]" type="flex" justify="start" align="middle">
        <a-col v-if="counter < categories.length" :xs="{ span: 12 }" :sm="{ span: limit < counter ? 12 : 24 }"
               :lg="{ span: limit < counter ? 12 : 24 }"
        >
          <a-button
            block
            @click="onIncrement"
            class="r-btn-bordered-secondary"
            size="large"
            icon="plus-circle"
            type="secondary"
          >
            More
          </a-button>
        </a-col>
        <a-col v-if="limit < counter" :xs="{ span: 12 }" :sm="{ span: 12 }" :lg="{ span: 12 }">
          <a-button
            block
            @click="onDecrement"
            class="r-btn-bordered-primary"
            size="large"
            icon="minus-circle"
            type="secondary"
          >
            Less
          </a-button>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-filter-category',
  props: {
    limit: { type: Number, required: false, default: 6 }
  },
  data () {
    return {
      selected: [],
      counter: this.limit
    }
  },
  created () {
    this.selected = this.payload.category_ids
  },
  computed: mapGetters({
    payload: 'product/payload',
    menuCategory: 'base/menuCategory',
    categories: 'base/categories',
    processes: 'base/processes',
    hasCategories: 'base/hasCategories'
  }),
  methods: {
    async onFilter () {
      const payload = this.payload
      payload.category_ids = this.selected
      await this.onProducts(payload)
    },
    onIncrement () {
      this.counter += this.limit
    },
    onDecrement () {
      this.counter -= this.limit
    },
    async onProducts (payload) {
      await this.$store.dispatch('base/onProducts', payload)
    }
  }
}
</script>
