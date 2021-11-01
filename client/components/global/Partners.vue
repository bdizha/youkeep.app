<template>
  <a-card class="r-bg-primary r-pull-h-24 r-border-none">
    <div class="r-mv-48">
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
          <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h4 class="r-heading-light r-text-uppercase">
                    Our partners
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h2 class="r-heading">
                    <span class="r-text-primary">Value</span> = <span class="r-text-orange">Shopping</span> + <span class="r-text-white">Youkeep</span>
                  </h2>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-medium">
                    Our partnerships represent more than iliquidity we strive in providing brands and artists of all sizes with on-demand NFT options for their collectors.
                  </p>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-normal">
                    They depict who we are, and how we structure our team's operations to empower the businesses we
                    serve.
                  </p>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="top" class="r-text-left" justify="center" type="flex">
                <a-col v-for="(partner, index) in partners"
                       :key="index"
                       :lg="{ span: 8 }" :md="{ span: 8 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-card class="r-bg-tertiary-light">
                    <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <nuxt-img :src="partner.logo"></nuxt-img>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h4 class="r-heading r-text-primary">
                          {{ partner.title }}
                        </h4>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-normal  ">
                          {{ partner.content }}
                        </p>
                      </a-col>
                    </a-row>
                  </a-card>
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
  layout: 'default',
  name: 'r-partners',
  props: {},
  data () {
    return {
      partners: [
        {
          logo: '/partners/paise/logo.svg',
          title: 'Paise',
          content: 'On-demand checkout experience '
        },
        {
          logo: '/partners/opslect/logo.svg',
          title: 'Opslect',
          content: 'On-demand data insights'
        },
        {
          logo: '/partners/addsum/logo.svg',
          title: 'Addsum',
          content: 'On-demand growth financing'
        }
      ]
    }
  },
  mounted () {
  },
  methods: {}
}
</script>
