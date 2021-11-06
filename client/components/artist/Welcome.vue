<template>
  <a-card class="r-bg-dark r-pull-h-24 r-border-none">
    <div class="r-mv-96">
      <a-row :gutter="[96,96]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 18 }" :md="{ span: 21 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[96,96]" align="middle" justify="end" type="flex">
            <a-col class="r-text-right" :lg="{ span: 9 }" :md="{ span: 9 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <r-avatar data-src="/assets/asset-14.svg" :size="300" class="r-avatar-block"
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
                    <span class="r-text-secondary">Accelerate</span> sells with on demand credit options
                  </h3>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-medium">
                    Youkeep's on-demand checkout is revolutionizing marketplaces and how Shoppers shop online.
                  </p>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-normal">
                    Let your collectors shop now and split their purchases into 3 zero interest terms while you get paid in full on order placement.
                  </p>
                </a-col>
                <a-col :lg="{ span: 9 }" :md="{ span: 9 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                >
                  <a-button block
                            @click="onRegister"
                            class="r-btn-bordered-primary"
                            size="large"
                            type="secondary"
                  >
                    Get started
                  </a-button>
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
  name: 'r-artist-welcome',
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

