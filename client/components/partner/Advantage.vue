<template>
  <a-card class="r-bg-yellow-light r-pull-h-24 r-border-none">
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
                    <span class="r-text-secondary">Offer</span> effortless shopping
                  </h2>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-medium">
                    Youkeep works with experts in commerce including eCommerce platforms, payment providers, system integrators, marketing agencies, and technology solutions to make success effortless.
                  </p>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-normal">
                    Youkeep works with experts in commerce including eCommerce platforms, payment providers, system integrators, marketing agencies, and technology solutions to make success effortless.
                  </p>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                >
                  <nuxt-link to="/partners">
                    <a-button block
                              class="r-btn-bordered-primary"
                              size="large"
                              type="primary"
                    >
                      Learn more <a-icon type="right"></a-icon>
                    </a-button>
                  </nuxt-link>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
        <a-col class="r-text-right" :lg="{ span: 6 }" :md="{ span: 9 }" :sm="{ span: 24 }"
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
