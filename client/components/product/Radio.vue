<template>
  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
    <a-col :lg="{span: 24 }"
           :md="{span: 24 }"
           :sm="{span: 24 }"
           :xs="{span: 24 }"
    >
      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
        <a-col v-for="(option, index) in option.options"
               :key="index"
               :lg="{span: 24 }"
               :md="{span: 24 }"
               :sm="{span: 24 }"
               :xs="{span: 24 }"
        >
          <a-tooltip placement="top">
            <template slot="title">
              <span>Select: {{ option.product_type.name }}</span>
            </template>
            <a-radio @change="onRadio" :checked="isChecked(option)" :value="option.id">
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col flex="auto">
                  {{ option.product_type.name }}
                </a-col>
                <a-col v-if="option.price > 0" class="r-text-right r-text-light">
                  {{ (option.price > 0 ? '+' : '-') + option.price }}
                </a-col>
              </a-row>
            </a-radio>
          </a-tooltip>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters, mapState } from 'vuex'

export default {
  name: 'r-product-radio',
  props: {
    product: { type: Object, required: false, default: { name: null, types: [] } },
    itemKey: { type: Number, required: false, default: null },
    item: { type: Object, required: false, default: null },
    option: { type: Object, required: true, default: { name: null, options: [] } }
  },
  data () {
    return {
      selected: this.option.selected,
      isVisible: false,
      isChoice: false
    }
  },
  computed: {
    ...mapState({
      productItem (state) {
        const productItem = state.product.items.find(item => item.key === this.itemKey)

        if (productItem === undefined) {
          return this.item
        }
        return productItem
      }
    }),
    ...mapGetters({
      choices: 'product/choices',
      options: 'product/options',
      popover: 'base/popover'
    })
  },
  mounted () {
  },
  methods: {
    isChecked (option) {
      const choice = this.choices.find((choice) => {
        if (choice.id === this.option.id) {
          return true
        }
      })

      if (choice === undefined) {
        return false
      }

      return choice.selected === option.id
    },
    async onRadio (e) {
      this.selected = e.target.value
      console.log('onRadio >>> this.selected', this.selected)

      const option = this.option.options.find((option) => {
        return option.id === this.selected
      })

      console.log('onRadio >>> selected', option)

      await this.onOption(option)
      await this.$store.dispatch('base/onPopover', { name: null })
    },
    async onOption (option) {
      const productItem = this.productItem
      const options = this.options
      let choices = []

      console.log('onOption this.option', this.option)

      choices = this.choices.filter((choice) => {
        if (choice.id !== this.option.id) {
          return true
        }
      })

      choices.push({
        id: this.option.id,
        selected: option.id
      })
      const params = { productItem, option, options, choices }

      console.log('onOption >>> option', option)
      await this.$store.dispatch('product/onOption', params)
    }
  }
}
</script>
