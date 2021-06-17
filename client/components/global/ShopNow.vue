<template>
  <a-row class="r-mv-24" type="flex" justify="center">
    <a-col class="r-text-center" :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
      <a-card :class="setClass('r-bg', 'light')" class="r-border-none r-border-radius-none r-shadow-none">
        <a-card-meta class="r-text-center">
          <template slot="description">
            <a-row :gutter="[48, 48]" type="flex" justify="center" align="middle">
              <a-col class="r-text-left" :xs="{span: 24}" :sm="{span: 24}" :md="{span: 12}" :lg="{span: 12}">
                <a-row type="flex" justify="end">
                  <a-col class="r-text-left" :xs="{span: 24}" :sm="{span: 24}" :md="{span: 18}" :lg="{span: 16}">
                    <a-row :gutter="[24,24]" type="flex" justify="start">
                      <a-col class="r-text-left" :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
                        <h2 class="r-heading">
                          Join thousands of <span :class="setClass('r-text')">stores</span> who trust Shopple with
                          their
                          marketplaces.
                        </h2>
                      </a-col>
                      <a-col class="r-text-left" :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
                        <p class="r-text-normal">
                          See what running a business is like with Shopple on your books. Try us for free - we'll do one
                          month
                          of
                          your
                          bookkeeping and prepare a set of financial statements for you to keep.
                        </p>
                      </a-col>
                      <a-col :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
                        <a-button
                          size="large"
                          type="primary"
                          :class="setClass('r-btn')"
                          @click="onModal"
                        >
                          Let's get you started
                        </a-button>
                      </a-col>
                    </a-row>
                  </a-col>
                </a-row>
              </a-col>
              <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                     :lg="{ span: 12 }"
              >
                <r-avatar class="r-avatar-block" :dataSrc="'/images/content/8.svg'" :size="450"></r-avatar>
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
