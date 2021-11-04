<template>
  <a-card class="r-bg-dark r-pull-h-24 r-border-none">
    <div class="r-mv-48">
      <a-row :gutter="[96,96]" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
            <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h4 class="r-heading-light r-text-uppercase">
                    The Youkeep advantage
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h2 class="r-heading">
                    <span class="r-text-primary">Offer</span> seamless collector experiences
                  </h2>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-medium">
                    Youkeep works with artists, collectors, NFT marketplaces, wallet providers, financial institutions, payment providers, crypto exchanges, charity organizations, and regulators to make our partners' prosperity possible.
                  </p>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-normal">
                    With millions in transaction since October 2021, we’ll help you generate revenue on our platform - from direct sales to secondary sales
                  </p>
                </a-col>
                <a-col>
                  <nuxt-link to="/register">
                    <a-button block
                              class="r-btn-primary"
                              size="large"
                              type="primary"
                    >
                      Partner with Youkeep
                    </a-button>
                  </nuxt-link>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
        <a-col class="r-text-right" :lg="{ span: 9 }" :md="{ span: 9 }" :sm="{ span: 24 }"
               :xs="{ span: 24}"
        >
          <r-avatar data-src="/assets/asset-17.svg" :size="300" class="r-avatar-block"
          ></r-avatar>
        </a-col>
      </a-row>
    </div>
  </a-card>
</template>
<script>
export default {
  name: 'r-partner-advantage',
  props: {},
  data () {
    return {
    }
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
