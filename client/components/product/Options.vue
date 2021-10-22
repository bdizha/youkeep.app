<template>
  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
    <a-col v-if="!isChoice"
           :lg="{span: 24 }"
           :md="{span: 24 }"
           :sm="{span: 24 }"
           :xs="{span: 24 }"
    >

       <pre>
         {{ selected }} vs {{ option.selected }} option id >>> {{ option.id }} {{ choice }}
       </pre>
      <a-radio-group :default-value="selected"
                     @change="onSelect"
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
              <a-radio :default-checked="isChecked(option)" :value="option.id">
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col flex="auto">
                    {{ option.product_type.name }} >>> {{ option.id }} >>> {{ selected }}
                  </a-col>
                  <a-col class="r-text-right">
                    {{ (option.price > 0 ? '+' : '-') + option.price }} {{ option.required_min }} vs
                    {{ option.required_max }}
                  </a-col>
                </a-row>
              </a-radio>
            </a-tooltip>
          </a-col>
        </a-row>
      </a-radio-group>
    </a-col>
    <a-col v-if="isChoice" :lg="{span: 24 }"
           :md="{span: 24 }"
           :sm="{span: 24 }"
           :xs="{span: 24 }"
    >

       <pre>
         {{ selected }} vs {{ option.selected }} option id >>> {{ option.id }}
       </pre>
      <a-checkbox-group v-model="selected"
                        @change="onSelect"
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
              <a-checkbox :value="option.id"
              >
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col flex="auto">
                    {{ option.product_type.name }}
                  </a-col>
                  <a-col v-if="option.price > 0" class="r-text-right">
                    {{ (option.price > 0 ? '+' : '-') + option.price }} {{ option.required_min }} vs
                    {{ option.required_max }}
                  </a-col>
                </a-row>
              </a-checkbox>
            </a-tooltip>
          </a-col>
        </a-row>
      </a-checkbox-group>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters, mapState } from 'vuex'

export default {
  name: 'r-product-options',
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
      isChoice: this.option.is_choice
    }
  },
  computed: {
    choice () {
      this.selected = this.option.selected

      if (this.option.selected) {
        return ''
      }
      return null
    },
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
      if (this.option.is_choice) {
        return this.option.selected.includes(option.id)
      } else {
        return this.option.selected === option.id
      }
    },
    async onOption (selected) {
      const productItem = this.productItem
      const options = this.options
      let option = null
      const _choices = []
      let choices = []

      console.log('this option', this.option)

      choices = this.choices.filter((choice) => {
        if (choice.id !== this.option.id) {
          return true
        }
      })

      if (this.option.is_choice) {
        selected.forEach((choice) => {
          _choices.push(choice.id)
        })

        choices.push({
          id: this.option.id,
          selected: _choices
        })
        option = selected.pop()
      } else {
        option = selected
        choices.push({
          id: this.option.id,
          selected: option.id
        })
      }
      const params = { productItem, option, options, choices }

      console.log('option option', option)
      await this.$store.dispatch('product/onOption', params)
    },
    async onSelect (e) {
      console.log('selected >>>> selected', e.target.value)

      let selected = null

      this.selected = e.target.value

      selected = this.option.options.find((option) => {
        return option.id === this.selected
      })

      console.log('this.selected', this.selected)
      console.log('selected', selected)
      console.log('this.option.options', this.option.options)

      await this.onOption(selected)
      await this.$store.dispatch('base/onPopover', { name: null })
      this.isVisible = false
    },
    async onChoice (e) {
      console.log('selected >>>> selected', e.target.value)

      let selected = null

      this.selected = e.target.value

      selected = this.option.options.find((option) => {
        return option.id === this.selected
      })

      console.log('this.selected', this.selected)
      console.log('selected', selected)
      console.log('this.option.options', this.option.options)

      await this.onOption(selected)
      await this.$store.dispatch('base/onPopover', { name: null })
      this.isVisible = false
    }
  }
}
</script>
