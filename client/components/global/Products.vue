<template>
  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <h4 class="r-heading-light r-text-uppercase">
            <span class="r-text-primary" v-if="!isShow">
              Addtract Marketplace Products
            </span>
            <span class="r-text-secondary"  v-if="isShow">
              Explore More
            </span>
          </h4>
        </a-col>
        <a-col v-if="!isShow" :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <h3 class="r-heading">
            Build the future of B2B infrastructure
          </h3>
        </a-col>
      </a-row>
    </a-col>
    <a-col v-for="(product, index) in products"
           :key="index"
           v-if="!isHidden(product)"
           :lg="{ span: isCurrent(product) ? 24 : 8 }" :md="{ span: isCurrent(product) ? 24 : 8 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24}"
    >
      <a-card class="r-card-product"
              :class="{'r-bg-white': !isCurrent(product), 'r-bg-secondary-light r-pull-h-24 r-border-none-sm': isCurrent(product)}"
      >
        <a-row align="middle" justify="start" type="flex">
          <a-col v-if="!isCurrent(product)" :lg="{ span: 24 }" :md="{ span: 24 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                     :xs="{ span: 24}"
              >
                <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <h4 class="r-heading">
                      {{ product.title }}
                    </h4>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <p class="r-text-normal">
                      {{ product.content }}
                    </p>
                  </a-col>
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <nuxt-link :to="'/product/' + product.slug">
                      <a-button block
                                class="r-btn-bordered-secondary"
                                size="large"
                      >
                        Learn more
                      </a-button>
                    </nuxt-link>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-card>
    </a-col>
  </a-row>
</template>
<script>

export default {
  name: 'r-products',
  props: {
    isShow: { type: Boolean, required: false, default: false },
    product: { type: Object, required: false, default: () => {} }
  },
  data () {
    return {
      currentItem: {
        row: 0
      },
      products: [
        {
          title: 'Online Store',
          slug: 'online-store',
          content: 'Develop your direct-to-consumer site with enterprise-grade, off-the-shelf features.',
          features: [
            {
              title: 'Seamless integration',
              content: 'We made implementing Balance easy and smooth with different options for you to choose from. You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Balance integrations with Magento, BigCommerce, Salesforce, and Quickbooks. Click here to get access to our API docs.'
            },
            {
              title: 'Seamless integration',
              content: 'We made implementing Balance easy and smooth with different options for you to choose from. You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Balance integrations with Magento, BigCommerce, Salesforce, and Quickbooks. Click here to get access to our API docs.'
            },
            {
              title: 'Seamless integration',
              content: 'We made implementing Balance easy and smooth with different options for you to choose from. You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Balance integrations with Magento, BigCommerce, Salesforce, and Quickbooks. Click here to get access to our API docs.'
            }
          ],
          row: 1
        },
        {
          title: 'Instant Payments',
          slug: 'instant-payments',
          content: 'Competitive financing options designed and tailored for fast-growing ecommerce companies.',
          features: [
            {
              title: 'Seamless integration',
              content: 'We made implementing Balance easy and smooth with different options for you to choose from. You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Balance integrations with Magento, BigCommerce, Salesforce, and Quickbooks. Click here to get access to our API docs.'
            },
            {
              title: 'Seamless integration',
              content: 'We made implementing Balance easy and smooth with different options for you to choose from. You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Balance integrations with Magento, BigCommerce, Salesforce, and Quickbooks. Click here to get access to our API docs.'
            },
            {
              title: 'Seamless integration',
              content: 'We made implementing Balance easy and smooth with different options for you to choose from. You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Balance integrations with Magento, BigCommerce, Salesforce, and Quickbooks. Click here to get access to our API docs.'
            }
          ],
          row: 1
        },
        {
          title: 'Order Fulfillment',
          slug: 'order-fulfillment',
          content: 'Manage orders, warehouse your inventory, and deliver to your customers simply and quickly.',
          features: [
            {
              title: 'Seamless integration',
              content: 'We made implementing Balance easy and smooth with different options for you to choose from. You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Balance integrations with Magento, BigCommerce, Salesforce, and Quickbooks. Click here to get access to our API docs.'
            },
            {
              title: 'Seamless integration',
              content: 'We made implementing Balance easy and smooth with different options for you to choose from. You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Balance integrations with Magento, BigCommerce, Salesforce, and Quickbooks. Click here to get access to our API docs.'
            },
            {
              title: 'Seamless integration',
              content: 'We made implementing Balance easy and smooth with different options for you to choose from. You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Balance integrations with Magento, BigCommerce, Salesforce, and Quickbooks. Click here to get access to our API docs.'
            }
          ],
          row: 1
        },
        {
          title: 'Marketing Services',
          slug: 'marketing-services',
          content: 'Find and win more customers with data-driven marketing services, analytics, and automations.',
          features: [
            {
              title: 'Seamless integration',
              content: 'We made implementing Balance easy and smooth with different options for you to choose from. You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Balance integrations with Magento, BigCommerce, Salesforce, and Quickbooks. Click here to get access to our API docs.'
            },
            {
              title: 'Seamless integration',
              content: 'We made implementing Balance easy and smooth with different options for you to choose from. You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Balance integrations with Magento, BigCommerce, Salesforce, and Quickbooks. Click here to get access to our API docs.'
            },
            {
              title: 'Seamless integration',
              content: 'We made implementing Balance easy and smooth with different options for you to choose from. You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Balance integrations with Magento, BigCommerce, Salesforce, and Quickbooks. Click here to get access to our API docs.'
            }
          ],
          row: 2
        },
        {
          title: 'Customer Service',
          slug: 'customer-service',
          content: 'Cultivate lifetime fans by giving your customers top-tier multichannel support.',
          features: [
            {
              title: 'Seamless integration',
              content: 'We made implementing Balance easy and smooth with different options for you to choose from. You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Balance integrations with Magento, BigCommerce, Salesforce, and Quickbooks. Click here to get access to our API docs.'
            },
            {
              title: 'Seamless integration',
              content: 'We made implementing Balance easy and smooth with different options for you to choose from. You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Balance integrations with Magento, BigCommerce, Salesforce, and Quickbooks. Click here to get access to our API docs.'
            },
            {
              title: 'Seamless integration',
              content: 'We made implementing Balance easy and smooth with different options for you to choose from. You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Balance integrations with Magento, BigCommerce, Salesforce, and Quickbooks. Click here to get access to our API docs.'
            }
          ],
          row: 2
        },
        {
          title: 'Business Finance',
          slug: 'business-finance',
          content: 'Develop your brand’s positioning and pricing strategy and optimize your business operations.',
          features: [
            {
              title: 'Seamless integration',
              content: 'We made implementing Balance easy and smooth with different options for you to choose from. You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Balance integrations with Magento, BigCommerce, Salesforce, and Quickbooks. Click here to get access to our API docs.'
            },
            {
              title: 'Seamless integration',
              content: 'We made implementing Balance easy and smooth with different options for you to choose from. You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Balance integrations with Magento, BigCommerce, Salesforce, and Quickbooks. Click here to get access to our API docs.'
            },
            {
              title: 'Seamless integration',
              content: 'We made implementing Balance easy and smooth with different options for you to choose from. You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Balance integrations with Magento, BigCommerce, Salesforce, and Quickbooks. Click here to get access to our API docs.'
            }
          ],
          row: 2
        }
      ]
    }
  },
  created () {

  },
  methods: {
    setCurrentItem (currentItem) {
      this.currentItem = currentItem
    },
    onCloseItem () {
      this.currentItem = null

      console.log('>>>>', this.currentItem)
    },
    isCurrent (item) {
      return item === this.currentItem
    },
    isHidden (item) {
      return this.product !== null &&
        this.product.slug === item.slug
    }
  }
}
</script>
