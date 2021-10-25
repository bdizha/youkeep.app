<template>
  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
    <a-col :lg="{span: 24 }"
           :md="{span: 24 }"
           :sm="{span: 24 }"
           :xs="{span: 24 }"
    >
      <a-card class="r-bg-white">
        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
          <a-col :span="24">
            <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
              <a-col :span="24" v-html="selection.content"></a-col>
              <a-col :span="24">
                <a-row class="r-text-left" :gutter="[24,24]" align="middle" justify="end" type="flex">
                  <a-col>
                    <a-button size="small"
                              block
                              class="r-btn-bordered-dark"
                              type="secondary"
                              @click="onOption(option)"
                    >
                      Edit choices
                    </a-button>
                  </a-col>
                  <a-col class="r-text-right" flex="auto">
                    <h3 class="r-cart-btn-text">
                      <a-icon type="right"></a-icon>
                    </h3>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-card>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters, mapState } from 'vuex'

export default {
  name: 'r-product-options',
  props: {
    option: {
      type: Object,
      required: true,
      default: () => {
        return {
          name: null,
          options: []
        }
      }
    },
    selection: {
      type: Object,
      required: true,
      default: () => {
        return {
          currentOptions: null,
          hasOptions: [],
          content: null
        }
      }
    }
  },
  data () {
    return {}
  },
  computed: {
    ...mapState({}),
    ...mapGetters({
      choices: 'product/choices',
      options: 'product/options',
      productItem: 'product/item',
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
    async onOption (option) {
      const isChecked = true
      const productItem = this.productItem
      const options = option.options
      const choices = this.choices

      const params = { productItem, option, options, choices, isChecked }

      console.log('product-options onOption >>> option', option)
      await this.$store.dispatch('product/onOption', params)
    }
  }
}
</script>
