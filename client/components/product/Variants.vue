<template>
  <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
    <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
      <a-popover :visible="isVisible" placement="topLeft">
        <span slot="title">Choose {{ productType.name }}:</span>
        <template slot="content">
          <a-checkbox-group v-model="selected"
                            @change="onVariant"
          >
            <a-row :gutter="[12,12]" type="flex" justify="start" align="middle">
              <a-col v-for="(variant, index) in productType.variants"
                     :key="variant.id"
                     :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24 }" :lg="{span: 24}"
              >
                <a-tooltip placement="top">
                  <template slot="title">
                    <span>Select: {{ variant.name }}</span>
                  </template>
                  <a-checkbox :value="variant.id">
                    {{ variant.name }}
                  </a-checkbox>
                </a-tooltip>
              </a-col>
            </a-row>
          </a-checkbox-group>
        </template>
        <a-button block
                  class="r-btn-bordered-grey"
                  @click="onShow"
        >
          <a-row :gutter="[12,12]" type="flex" justify="start" align="middle">
            <a-col class="r-text-left" :xs="{span: 18}" :sm="{span: 18}" :md="{span: 18}" :lg="{span: 18}">
              {{ productType.name + ': ' + selected }}
            </a-col>
            <a-col class="r-text-right" :xs="{span: 6}" :sm="{span: 6}" :md="{span: 6}" :lg="{span: 6}">
              <a-icon type="right"/>
            </a-col>
          </a-row>
        </a-button>
      </a-popover>
    </a-col>
  </a-row>
</template>
<script>
import { mapState } from 'vuex'

export default {
  name: 'r-product-variants',
  props: {
    productType: { type: Object, required: true, default: { name: null, variants: [] } },
  },
  data () {
    return {
      selected: null,
      isVisible: false
    }
  },
  computed: mapState({
    filters: 'base/filters'
  }),
  mounted () {

  },
  methods: {
    onFilter () {
      this.$store.dispatch('base/onFilters', this.selected)
    },
    onShow () {
      this.isVisible = true
    },
    onVariant () {
      this.isVisible = false
    },
  },
}
</script>
