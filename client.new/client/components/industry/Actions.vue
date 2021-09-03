<template>
  <a-card class="r-bg-secondary-light r-pull-24 r-border-none">
    <div class="r-mv-96">
      <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="center" type="flex">
            <a-col :lg="{ span: 6 }" :md="{ span: 6 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h4 class="r-heading">
                    Your Store
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <div class="r-icon-bg">
                    <nuxt-img src="/images/icon_white.svg"></nuxt-img>
                  </div>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h4 class="r-heading">
                    Shopple APIs
                  </h4>
                </a-col>
                <a-col class="r-text-left"
                       :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[0,0]" justify="center" align="middle" type="flex"
                  >
                    <a-col class="r-text-left" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <template v-for="(group) in groups">
               <span v-for="(action, index) in group.actions"
                     :key="index"
                     class="r-action"
               >
                 <a-tooltip placement="top">
          <template slot="title">
              <span class="r-action-trigger">
                      <span class="r-action-content">{{ action.content }}</span>
              </span>
          </template>
           <span class="r-action-trigger">{{ action.trigger }}:</span>
                      <span class="r-action-title"> {{ action.title }} </span>
        </a-tooltip>
                    </span>
                      </template>
                      <span class="r-action"
                      >
                     <nuxt-link to="/docs">
                        <span class="r-action-title r-text-primary">Learn more...</span>
                     </nuxt-link>
                </span>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
            <a-col :lg="{ span: 6 }" :md="{ span: 6 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                <a-col class="r-text-center" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h4 class="r-heading">
                    Merchant Network
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                    <a-col v-for="(partner, index) in partners"
                           :key="index"
                           :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 8 }"
                           :xs="{ span: 8 }"
                    >
                      <div class="r-icon-bg">
                        <nuxt-img quality="100" width="36" height="36"
                                  :src="'/partners/' + partner.slug + '/icon.svg'"
                        ></nuxt-img>
                      </div>
                    </a-col>
                  </a-row>
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
  name: 'r-merchant-actions',
  props: {},
  data () {
    return {
      groups: [
        {
          title: 'Products',
          actions: [
            {
              title: 'get_products',
              trigger: 'on',
              content: 'Fetch all products by a store identifier and filters',
              icon: 'check'
            },
            {
              title: 'get_product',
              trigger: 'on',
              content: 'Fetch a product and variants by a product identifier',
              icon: 'check'
            },
            {
              title: 'set_product',
              trigger: 'on',
              content: 'Create/update a product by payload',
              icon: 'check'
            },
            {
              title: 'set_product_variant',
              trigger: 'on',
              content: 'Create/update a product variant by payload',
              icon: 'check'
            },
            {
              title: 'delete_product',
              trigger: 'on',
              content: 'Deletes a product and its associated variants',
              icon: 'check'
            },
            {
              title: 'delete_product',
              trigger: 'on',
              content: 'Deletes a product and its associated variants',
              icon: 'check'
            }
          ]
        },
        {
          title: 'Customers',
          actions: [
            {
              title: 'get_customers',
              trigger: 'on',
              content: 'Fetch all customers by a store identifier and filters',
              icon: 'check'
            },
            {
              title: 'get_customer',
              trigger: 'on',
              content: 'Fetch a customer a customer identifier',
              icon: 'check'
            }
          ]
        },
        {
          title: 'Orders',
          actions: [
            {
              title: 'get_orders',
              trigger: 'on',
              content: 'Fetch all orders by a store identifier and filters',
              icon: 'check'
            },
            {
              title: 'get_order',
              trigger: 'on',
              content: 'Fetch an order and an order identifier identifier',
              icon: 'check'
            }
          ]
        },
        {
          title: 'Connections',
          actions: [
            {
              title: 'get_connections',
              trigger: 'on',
              content: 'Fetch all connections by a store identifier and filters',
              icon: 'check'
            },
            {
              title: 'get_connection',
              trigger: 'on',
              content: 'Fetch a connection by a connection identifier',
              icon: 'check'
            }
          ]
        },
        {
          title: 'Merchant',
          actions: [
            {
              title: 'get_merchant',
              trigger: 'on',
              content: 'Fetch a merchant by a merchant identifier',
              icon: 'check'
            }
          ]
        }
      ],
      partners: [
        {
          title: 'Amazon',
          slug: 'amazon'
        },
        {
          title: 'Bigcommerce',
          slug: 'bigcommerce'
        },
        {
          title: 'Walmart',
          slug: 'walmart'
        },
        {
          title: 'Magento',
          slug: 'magento'
        },
        {
          title: 'Shopify',
          slug: 'shopify'
        },
        {
          title: 'Snapchat',
          slug: 'snapchat'
        },
        {
          title: 'Messenger',
          slug: 'messenger'
        },
        {
          title: 'Instagram',
          slug: 'instagram'
        },
        {
          title: 'Facebook',
          slug: 'facebook'
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
