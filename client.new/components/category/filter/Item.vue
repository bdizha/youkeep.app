<template>
  <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
    <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
      <a-checkbox-group v-model="selected"
                        :class="{'r-filter-color': filter.type == 2}"
                        @change="onFilter"
      >
        <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
          <a-col v-for="(item, index) in filter.items"
                 v-if="index < counter"
                 :key="filter.id"
                 :lg="{span: 24 / filter.per_row}" :md="{span: 24 / filter.per_row }" :sm="{span: 24}" :xs="{span: 24}"
          >
            <a-tooltip placement="top">
              <template slot="title">
                <span>Select: {{ item.name }}</span>
              </template>
              <a-checkbox :style="'background: ' + (filter.type == 2 ?  item.name : 'transparent')"
                          :value="item.id"
              >
                {{ filter.type == 2 ? null : item.name }}
              </a-checkbox>
            </a-tooltip>
          </a-col>
        </a-row>
      </a-checkbox-group>
    </a-col>
    <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
      <a-row :gutter="[12, 12]" align="middle" justify="start" type="flex">
        <a-col v-if="counter < filter.items.length" :lg="{ span: limit < counter ? 12 : 24 }"
               :sm="{ span: limit < counter ? 12 : 24 }"
               :xs="{ span: 12 }"
        >
          <a-button
            block
            class="r-btn-bordered-secondary"
            icon="plus-circle"
            size="large"
            type="secondary"
            @click="onIncrement"
          >
            More
          </a-button>
        </a-col>
        <a-col v-if="limit < counter" :lg="{ span: 12 }" :sm="{ span: 12 }" :xs="{ span: 12 }">
          <a-button
            block
            class="r-btn-bordered-primary"
            icon="minus-circle"
            size="large"
            type="secondary"
            @click="onDecrement"
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
  name: 'r-category-filter-item',
  props: {
    filter: { type: Object, required: true, default: {} },
    limit: { type: Number, required: false, default: 6 }
  },
  data () {
    return {
      selected: [],
      counter: this.limit
    }
  },
  created () {
    this.selected = this.payload.filters
  },
  computed: {
    ...mapGetters({
      payload: 'product/payload'
    })
  },
  methods: {
    async onFilter () {
      const payload = this.payload
      payload.filters = this.selected
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
