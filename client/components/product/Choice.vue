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
              <span>Select: {{ option.title }}</span>
            </template>
            <a-checkbox class="r-checkbox"
                        :checked="isChecked(option)"
                        :disabled="isDisabled(option)"
                        :value="option.id" @change="onChoice"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col flex="auto">
                  {{ option.title }}
                </a-col>
                <a-col v-if="option.price > 0" class="r-text-right r-text-light">
                  {{ (option.price > 0 ? '+R' : '-R') + option.price }}
                </a-col>
              </a-row>
            </a-checkbox>
          </a-tooltip>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters, mapState } from 'vuex'

export default {
  name: 'r-product-choice',
  props: {
    product: { type: Object, required: false, default: { name: null, types: [] } },
    itemKey: { type: Number, required: false, default: null },
    item: { type: Object, required: false, default: null },
    option: { type: Object, required: true, default: { name: null, options: [] } }
  },
  data () {
    return {
      selected: this.option.selected,
      isChoice: true
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
      return this.option.selected.includes(option.id)
    },
    isDisabled (option) {
      return !this.option.selected.includes(option.id) && this.option.selected.length === this.option.required_max
    },
    async onChoice (e) {
      console.log('onChoice >>>> checked', e.target.checked)
      console.log('onChoice >>>> value', e.target.value)

      let option = null
      const isChecked = e.target.checked
      const selected = e.target.value

      const choices = this.option.selected.filter((choice) => {
        return choice !== selected
      })

      console.log('onChoice >>> choices', choices)

      if (isChecked) {
        choices.push(selected)
      }

      option = this.option.options.find((option) => {
        return option.id === selected
      })

      console.log('onChoice >>> choices', choices)

      await this.onOption(option, choices, isChecked)
      await this.$store.dispatch('base/onPopover', { name: null })
    },
    async onOption (option, _choices, isChecked) {
      const productItem = this.productItem
      const options = this.options
      const choices = this.choices.filter((choice) => {
        if (choice.id !== this.option.id) {
          return true
        }
      })

      choices.push({
        id: this.option.id,
        selected: _choices
      })
      const params = { productItem, option, options, choices, isChecked }
      await this.$store.dispatch('product/onOption', params)
    }
  }
}
</script>
