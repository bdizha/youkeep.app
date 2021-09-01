<template>
  <a-row :gutter="[96,96]" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-card class="r-bg-secondary-light r-pull-h-24 r-border-none r-pt-81">
        <div class="r-mv-48">
          <a-row :gutter="[96,48]" justify="center" type="flex">
            <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
              <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h4 class="r-heading-light r-text-primary r-text-uppercase">
                        {{ currentItem.title }}
                      </h4>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <h2 class="r-heading r-text-dark">
                        {{ currentItem.summary }}
                      </h2>
                    </a-col>
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <p class="r-text-medium r-text-dark">
                        {{ currentItem.content }}
                      </p>
                    </a-col>
                    <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
                           :sm="{ span: 12 }"
                           :xs="{ span: 24 }"
                    >
                      <a-button class="r-btn-primary"
                                @click="onModal"
                                block
                                size="large"
                                type="blue"
                      >
                        Get in touch
                      </a-button>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <nuxt-img width="450" height="450" src="/assets/welcome.svg"></nuxt-img>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" align="top" justify="center" type="flex"
      >
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                   :sm="{ span: 12 }"
                   :xs="{ span: 24 }"
            >
              <h4 class="r-heading-light r-text-primary r-text-uppercase">
                Product Features
              </h4>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                   :xs="{ span: 24}"
            >
              <div class="r-product-item-content">
                <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                  <a-col v-for="(feature, index) in currentItem.features"
                         :key="index"
                         :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                         :xs="{ span: 24}"
                  >
                    <a-card class="r-bg-white">
                      <a-row :gutter="[24,24]" align="top" justify="start" type="flex"
                      >
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h4 class="r-heading">
                            {{ feature.title }}
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-normal">
                            {{ feature.content }}
                          </p>
                        </a-col>
                      </a-row>
                    </a-card>
                  </a-col>
                </a-row>
              </div>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-yellow-light r-pull-h-24 r-border-none-sm">
        <div class="r-mv-48">
          <a-row :gutter="[24,24]" align="top" justify="center" type="flex"
          >
            <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <r-products v-if="hasData" :is-show="true" :product="currentItem"></r-products>
            </a-col>
          </a-row>
        </div>
      </a-card>
    </a-col>
  </a-row>
</template>
<script>

export default {
  data () {
    return {
      products: [
        {
          title: 'Online Store',
          slug: 'online-store',
          summary: 'Automated reconciliation and receivables management',
          content: 'Reduce overhead and save time with invoice reconciliation and settlement and A/R management.',
          features: [
            {
              title: 'Seamless credit lines',
              content: 'Funds-in are tracked and updated in your ERP seamlessly. Automatically match between invoices and payments with dedicated VBANs and a lock-box to reconcile and settle funds to your account.'
            },
            {
              title: 'Auto reimbursement',
              content: 'After receiving the funds from the customer and making sure they match the invoice, we reimburse your Balance account, and make the funds available for your withdrawal.'
            },
            {
              title: 'Auto settlement',
              content: 'You can automatically settle every payment to its appropriate vendor account and get complete control on payouts. Our platform is tailored to allow marketplaces to easily onboard and manage vendors.'
            }
          ],
          row: 1
        },
        {
          title: 'Instant Payments',
          slug: 'instant-payments',
          summary: 'Develop your direct-to-consumer site with enterprise-grade, off-the-shelf features.',
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
          summary: 'Develop your direct-to-consumer site with enterprise-grade, off-the-shelf features.',
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
          summary: 'Develop your direct-to-consumer site with enterprise-grade, off-the-shelf features.',
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
          summary: 'Develop your direct-to-consumer site with enterprise-grade, off-the-shelf features.',
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
          summary: 'Develop your direct-to-consumer site with enterprise-grade, off-the-shelf features.',
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
      ],
      currentItem: {
        row: 0
      },
      hasData: false
    }
  },
  created () {
    this.currentItem = this.products[0]
    this.hasData = true
  },
  methods: {
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = 'register'

      this.$store.dispatch('base/onModal', modal)
    },
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
      return this.currentItem !== null &&
        item.row === this.currentItem.row &&
        item !== this.currentItem
    }
  }
}
</script>
