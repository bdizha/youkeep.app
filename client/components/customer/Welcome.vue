<template>
  <a-card class="r-bg-secondary-light r-border-none">
    <div class="r-mv-48">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
               :xs="{ span: 24}"
        >
          <a-row :gutter="[96,96]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h4 class="r-heading-light r-text-uppercase">
                    It's shopping time!
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h3 class="r-heading ">
                    Shop <span class="r-text-primary">simple</span> with Paise checkout
                  </h3>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-medium">
                    Paise delights your shopping game and gives you the freedom to shop at any store on your own terms while you keep your finances under control.
                  </p>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-normal">
                    Paise offers a shopping assistant with the most
                    convenient
                    shopping tools on the marketplace. Just to enable you to shop better.
                  </p>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-normal">
                    Make payments, report a problem, manage returns.
                  </p>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <p class="r-text-normal">
                    Chat with support 24/7 - we´re always here for you.
                  </p>
                </a-col>
                <a-col :lg="{ span: 9 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                >
                  <nuxt-link to="/consumer">
                    <a-button block
                              class="r-btn-secondary"
                              size="large"
                              type="secondary"
                    >
                      Learn more
                    </a-button>
                  </nuxt-link>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                >
                  <a-button block
                            class="r-btn-bordered-secondary"
                            size="large"
                            type="secondary"
                  >
                    Get Paise checkout <a-icon type="right"></a-icon>
                  </a-button>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 9 }" :md="{ span: 9 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <r-avatar data-src="/assets/asset-06.svg" :size="300"
                        class="r-avatar-block"
              ></r-avatar>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </div>
  </a-card>
</template>
<script>
export default {
  name: 'r-customer-welcome',
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

