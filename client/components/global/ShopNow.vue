<template>
  <a-row class="r-mv-24" justify="center" type="flex">
    <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}" class="r-text-center">
      <a-card :class="setClass('r-bg', 'light')" class="r-border-none r-border-radius-none r-shadow-none">
        <a-card-meta class="r-text-center">
          <template slot="description">
            <a-row :gutter="[48, 48]" align="middle" justify="center" type="flex">
              <a-col :lg="{span: 12}" :md="{span: 12}" :sm="{span: 24}" :xs="{span: 24}" class="r-text-left">
                <a-row justify="end" type="flex">
                  <a-col :lg="{span: 16}" :md="{span: 18}" :sm="{span: 24}" :xs="{span: 24}" class="r-text-left">
                    <a-row :gutter="[24,24]" justify="start" type="flex">
                      <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}" class="r-text-left">
                        <h2 class="r-heading">
                          Join thousands of <span :class="setClass('r-text')">stores</span> who trust Shopple with
                          their
                          marketplaces.
                        </h2>
                      </a-col>
                      <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}" class="r-text-left">
                        <p class="r-text-normal">
                          See what running a business is like with Shopple on your books. Try us for free - we'll do one
                          month
                          of
                          your
                          bookkeeping and prepare a set of financial statements for you to keep.
                        </p>
                      </a-col>
                      <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
                        <a-button
                          :class="setClass('r-btn')"
                          size="large"
                          type="primary"
                          @click="onModal"
                        >
                          Let's get you started
                        </a-button>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
              </a-col>
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <r-avatar :dataSrc="'/images/content/8.svg'" :size="450" class="r-avatar-block"></r-avatar>
              </a-col>
            </a-row>
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-shop-now',
  props: {
    fill: { type: String, required: false, default: '#0B85EA15' },
    theme: { type: String, required: false, default: 'primary' }
  },
  data () {
    return {}
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = false
      modal.current = 'register'
      this.$store.dispatch('base/onModal', modal)
    },
    setClass (prefix, postfix = '') {
      if (postfix) {
        postfix = '-' + postfix
      }

      return prefix + '-' + this.theme + postfix
    }
  }
}
</script>
