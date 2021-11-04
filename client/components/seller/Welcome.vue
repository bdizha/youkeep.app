<template>
  <a-card class="r-bg-dark r-pull-h-24 r-border-none">
    <div class="r-mv-96">
      <a-row :gutter="[96,96]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[96,96]" align="middle" justify="end" type="flex">
            <a-col class="r-text-right" :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <r-avatar data-src="/assets/asset-03.svg" :size="300" class="r-avatar-block"
              ></r-avatar>
            </a-col>
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h4 class="r-heading-light r-text-uppercase">
                    Convert more sales, faster
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h3 class="r-heading">
                    <span class="r-text-secondary">Accelerate</span> sells with Youkeep's on-demand NFTs marketplace
                  </h3>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-medium">
                    Advertise your marketplace on Youkeep and connect with thousands of new collectors on the $keep marketplace.
                  </p>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-normal">
                    Plus, add marketing programs any time, like SpazaPass, where high-value collectors see your business first.
                  </p>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                >
                  <r-button title="Get started" size="large" action="register" theme="primary"></r-button>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </div>
  </a-card>
</template>
<script>
export default {
  name: 'r-seller-welcome',
  props: {},
  data () {
    return {
    }
  },
  created () {
  },
  computed: {},
  methods: {
    onRegister () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'register'

      this.$store.dispatch('base/onRegister', modal)
    }
  }
}
</script>

