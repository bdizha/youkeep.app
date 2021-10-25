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

            <a-row align="middle" justify="start" type="flex">
              <a-col :lg="{span: 24 }"
                     :md="{span: 24 }"
                     :sm="{span: 24 }"
                     :xs="{span: 24 }"
              >
                <a-radio @change="onRadio" :checked="isChecked(option)" :value="option.id">
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col flex="auto">
                      {{ option.title }}
                    </a-col>
                    <a-col v-if="option.price > 0" class="r-text-right r-text-light">
                      {{ (option.price > 0 ? '+R' : '-R') + option.price }}
                    </a-col>
                  </a-row>
                </a-radio>
              </a-col>
              <a-col v-if="hasOptions(option)" :lg="{span: 24 }"
                     :md="{span: 24 }"
                     :sm="{span: 24 }"
                     :xs="{span: 24 }"
              >
                <r-product-options :selection="getOptions(option)"
                                   :option="option"
                ></r-product-options>
              </a-col>
            </a-row>
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
    option: { type: Object, required: true, default: { name: null, options: [] } }
  },
  data () {
    return {
      selection: {
        currentOptions: [],
        hasOptions: false,
        content: null
      },
      isChoice: false
    }
  },
  computed: {
    ...mapState({}),
    ...mapGetters({
      productItem: 'product/item',
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

      await this.onOption(option, true)
    },
    async onOption (option, isChecked) {
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
      const params = { productItem, option, options, choices, isChecked }

      console.log('onOption >>> option', option)
      await this.$store.dispatch('product/onOption', params)
    },
    hasOptions (option) {
      let selection = {
        currentOptions: [],
        hasOptions: false,
        content: ''
      }

      selection = this.setOptions(option, selection)
      if (selection.currentOptions.length > 0) {
        return true
      }
      return selection.hasOptions
    },
    getOptions (option) {
      const selection = {
        currentOptions: [],
        hasOptions: false,
        content: ''
      }
      return this.setOptions(option, selection)
    },
    setOptions (option, selection) {
      console.log('setOptions dddddd >>>>>>> ' + option.title, option.title)
      console.log('setOptions option >>>>>>> ' + option.title, option)
      console.log('setOptions selection >>>>>>> ' + option.title, selection)
      selection.content += `<div class="r-text-xs">`

      option.options.forEach((item) => {
        console.log('setOptions item >>>>>>> ' + item.title, item)
        const choice = this.choices.find((choice) => {
          return choice.id === item.id || choice.selected === item.id
        })

        if (choice !== undefined) {
          const postFix = (choice.id === item.id) ? ':' : ''
          const textClass = (choice.id === item.id) ? 'r-text-label' : 'r-text-light'

          selection.content += `<span class="${textClass}">`
          selection.content += item.title + postFix
          selection.currentOptions.push(item)
          selection.content += `</span>`
          selection.hasOptions = true

          if (item.options.length > 0) {
            selection = this.setOptions(item, selection)
          }
        }
      })

      selection.content += `</div>`
      return selection
    }
  }
}
</script>
