<template>
  <a-card class="r-bg-secondary-light r-pull-h-24 r-border-none">
    <div class="r-mv-48">
    <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
      <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
          <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h4 class="r-heading-light r-text-uppercase">
                  Benefits For Retailers
                </h4>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                <h3 class="r-heading">
                  We <span class="r-text-secondary">connect</span> African retailers to the marketplace
                </h3>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                <p class="r-text-medium">
                  Spazaland enables retainers to conveniently discover and buy products directly from the local farmers with an easy to use farmers' marketplace.
                </p>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"

              >
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col v-for="(item, index) in benefits"
                         :key="index"
                         :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-card class="r-bg-white">
                      <a-row :gutter="[12,12]" align="middle" justify="center" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h4 class="r-heading" v-html="item.title">
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                          <p class="r-text-normal">
                            {{ item.content }}
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
      </a-col>
      <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <r-avatar data-src="/assets/asset-10.svg" :size="300" class="r-avatar-block"
        ></r-avatar>
      </a-col>
    </a-row>
    </div>
  </a-card>
</template>
<script>
export default {
  name: 'r-customer-benefits',
  props: {},
  data () {
    return {
      benefits: [
        {
          title: '<span class="r-text-secondary">Find</span> your returning customers seamlessly',
          content: 'You can reach marketplace by posting your product information on Spazaland. Enable more buying buyers and increase recurring orders with Spazaland.'
        },
        {
          title: '<span class="r-text-secondary">Offer</span> fast delivery services for every order',
          content: 'For each order received, you can send your product to Secai Marche warehouse. You don’t have to worry about transport anymore with Spazaland.'
        },

        {
          title: '<span class="r-text-secondary">Decide</span> and set your selling product price',
          content: 'Secai Marche Purchase your products according to your credit term. More stable for production planning, nor No more hustle for money collection.'
        }
      ]
    }
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
