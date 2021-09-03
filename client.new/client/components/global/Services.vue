<template>
  <a-card class="r-bg-secondary-light r-pull-mh-24 r-border-none">
    <a-row :gutter="[24,24]" align="top" justify="center" type="flex">
      <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <div class="r-mv-96">
          <a-row :gutter="[48,48]" align="top" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}" class="r-text-center">
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24}" class="r-text-center">
                  <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                           class="r-text-left"
                    >
                      <div class="r-shade-secondary">
                        <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                          Scale It
                        </h4>
                      </div>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                           class="r-text-left"
                    >
                      <h2 class="r-heading-light">
                        Launch <span class="r-text-primary">autonomous</span> e-commerce experiences
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
                           class="r-text-left"
                    >
                      <p class="r-text-medium">
                        Integrate with Shopple's merchant APIs to introduce Product as a Service (PaaS) tools to your marketplace and multiply
                        sales.
                      </p>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                <a-col v-for="(service, index) in services"
                       :key="index"
                       :lg="{ span: 8 }" :md="{ span: 8 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-card class="r-bg-secondary-white">
                    <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                      <a-col :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 8 }"
                             :xs="{ span: 12 }"
                      >
                        <div class="r-icon-bg">
                          <a-icon class="r-text-white" style="font-size: 45px" :type="service.icon"/>
                        </div>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <a-row :gutter="[12,12]" justify="center" type="flex">
                          <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                          >
                            <h4 class="r-heading r-text-primary">
                              {{ service.title }}
                            </h4>
                          </a-col>
                          <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                          >
                            <p class="r-text-normal r-text-dark">
                              {{ service.content }}
                            </p>
                          </a-col>
                        </a-row>
                      </a-col>
                    </a-row>
                  </a-card>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-col>
    </a-row>
  </a-card>
</template>
<script>
export default {
  name: 'r-services',
  props: {},
  data () {
    return {
      services: [
        {
          title: 'Checkout X',
          content: 'Setup your online store with autonomous services. Shopple seamlessly powers your entire customer experience.',
          icon: 'rocket'
        },
        {
          title: 'Dual X',
          content: 'Video, chatbot, and text tools to give your customers top-tier multichannel support and earn more happy customers.',
          icon: 'robot'
        },
        {
          title: 'Schema X',
          content: 'Discover and retain more customers with data-driven marketing decisions, analytics, and autonomous workers in the cloud.',
          icon: 'cloud-sync'
        },
        {
          title: 'Aerial X',
          content: 'Manage and track customer orders, monitor your inventory, and deliver to your customers simply, securely and quickly.\n',
          icon: 'compass'
        },
        {
          title: 'Promoter X',
          content: 'Sell anything, anywhere. Introduce your brand to millions of existing Shopple merchants and resellers in our marketplace. ',
          icon: 'customer-service'
        },
        {
          title: 'Cashier X',
          content: 'Track & analyse every transaction. Competitive financing options designed and tailored for fast-growing ecommerce companies.',
          icon: 'gold'
        },
        {
          title: 'Cockpit X',
          content: 'Easily manage customer data, order management, and reconciliation from a customized performance dashboard.',
          icon: 'dashboard'
        },
        {
          title: 'Lens X',
          content: 'Discover and retain more customers with data-driven marketing decisions, analytics, and autonomous workers in the cloud.',
          icon: 'monitor'
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
