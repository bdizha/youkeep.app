<template>
  <a-card class="r-bg-primary-light r-pull-h-24 r-border-none">
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
                    Benefits for shoppers
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h3 class="r-heading">

                    Online  <span class="r-text-primary">checkout</span> made fast, simple,
                    and secure.
                  </h3>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24}" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-medium">
                    Find the best prices and get real time
                    shopping feedback from your friends.
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
          <r-avatar data-src="/assets/asset-13.svg" :size="300" class="r-avatar-block"
          ></r-avatar>
        </a-col>
      </a-row>
    </div>
  </a-card>
</template>
<script>
export default {
  name: 'r-shopper-benefits',
  props: {},
  data () {
    return {
      benefits: [
        {
          title: '<span class="r-text-primary">Find</span> more returning customers',
          content: 'You can reach marketplace by posting your product information on Paise. Enable more buying shoppers and increase recurring orders with Paise.'
        },
        {
          title: '<span class="r-text-primary">Offer</span> fast delivery services for every order',
          content: 'For each order received, you can send your product to Paise warehouse. You don’t have to worry about transport anymore with Paise.'
        },

        {
          title: '<span class="r-text-primary">Decide</span> and set your selling product price',
          content: 'Paise Purchase your products according to your credit term. More stable for production planning, nor No more hustle for money collection.'
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
