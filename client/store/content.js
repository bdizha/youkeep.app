// state
export const state = () => ({
  services: [
    {
      title: 'B2B Checkout',
      slug: 'online-store',
      heading: 'An automated B2B checkout experience.',
      summary: 'The intuitive and flexible checkout experience created for B2B ecommerce. ',
      content: 'Buyer can generate an invoice from the checkout, and pay it with a check, wire transfer or credit card. You can customize the invoices your customers receive with your own brand colors and logo. We made implementing Addtract easy and smooth with different options for you to choose from. We understand the complexities of your business and make sure our features answer your needs as a B2B merchant or marketplace. Marketplaces get their fee payout immediately as well.',
      image: 'service-06.svg',
      features: [
        {
          title: 'Auto integration',
          content: 'You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Addtract integrations with Magento, BigCommerce, Salesforce, and Quickbooks.',
          image: 'service-05.svg'
        },
        {
          title: 'Auto customization',
          content: 'Built as building blocks for full customization. Using the Addtract API capabilities, you can configure and modify the experience to accommodate your buyers or vendors’ needs. Developers can click here to get access to our API docs.',
          image: 'service-13.svg'
        },
        {
          title: 'Auto invoicing',
          content: 'Self-served white-label invoicing. Buyers can generate an invoice from the checkout, and pay it with a check, wire transfer or credit card. You can customize the invoices your customers receive with your own brand colors and logo.',
          image: 'service-01.svg'
        },
        {
          title: 'Auto orders',
          content: 'Addtract pre-qualifies buyers, or does so real-time within seconds, at checkout for those who haven’t yet been qualified, covering net 30,60,90 and up to 120 days. Merchants and marketplace vendors get paid upfront for invoices issued to qualified customers, while buyers can pay with terms.',
          image: 'service-08.svg'
        }
      ],
      row: 1
    },
    {
      title: 'Instant Payments',
      slug: 'instant-payments',
      heading: 'Adaptive and instant supplier payouts.',
      summary: 'Competitive financing options designed for fast-growing ecommerce companies.',
      content: 'Easily manage and pay out third party vendors globally in local currency. Charge marketplace commission and apply fees to vendors without touching the funds.  We would charge the commission on behalf of the marketplace and transfer it to their Addtract account. Addtract will automatically trigger payment to the vendor after the buyer has paid. ',
      image: 'service-04.svg',
      features: [
        {
          title: 'Marketplace-centric solution',
          content: 'Addtract would take care of collections from the buyers and payouts to the vendors so the marketplace can remain out of the funds flow.',
          image: 'service-14.svg'
        },
        {
          title: 'Adaptive payments',
          content: 'Automatically settle every payment to its appropriate vendor account while you get complete transparency over the payout flow.',
          image: 'service-07.svg'
        },
        {
          title: 'Settlements in 24 hours',
          content: 'In a financed transaction, vendors will receive the funds to the bank account they’ve set in their account settings, within 1-2 business days.',
          image: 'service-11.svg'
        }
      ],
      row: 1
    },
    {
      title: 'Order Fulfillment',
      slug: 'order-fulfillment',
      heading: 'Faster deliveries with our nationwide fulfillment network',
      summary: 'Manage orders, warehouse your inventory, and deliver to your customers simply and quickly.',
      content: 'Cart.com\'s fulfillment services equip brands of all sizes with the ecommerce infrastructure and national footprint as the world\'s largest retailers. Our owned and operated fulfillment centers pick, pack, and ship for direct-to-consumer and B2B use cases and can achieve 1-2 day delivery across the continental U.S. We offer flexible pick, pack, and shipping pricing that scales with your business. ',
      image: 'service-14.svg',
      features: [
        {
          title: 'Nationwide fulfillment',
          content: 'Deliver to your customers faster by leveraging our fulfillment network for storage, picking, packing, and shipping. Deliver orders in 1 to 2 business days in the continental U.S. while managing shipping costs through our strategically distributed network of fulfillment centers.',
          image: 'service-15.svg'
        },
        {
          title: 'Sell, pack, and ship',
          content: 'Whether you\'re an ecommerce startup just getting started or an established brand moving high volume, whether you\'re shipping direct-to-consumer or B2B to retail or distribution partners, our tech-enabled order fulfillment capabilities can accommodate your needs and exceed your customers\' expectations.',
          image: 'service-11.svg'
        },
        {
          title: 'Automated orders',
          content: 'Analyze aggregate and SKU-level order data, on-hand inventory information, and inbound and outbound shipments all in a single easy-to-navigate dashboard. Addtract automatically pulls in product and order data from all major ecommerce marketplaces and platforms, including our own.',
          image: 'service-01.svg'
        }
      ],
      row: 1
    },
    {
      title: 'Payment Plans',
      slug: 'payment-plans',
      heading: 'Buyers set up payment plans while suppliers get paid instantly.',
      summary: 'Competitive financing optionsdesigned for fast-growing ecommerce companies..',
      content: 'Real-time financing assessment within seconds for each buyer, full collection handling, 100% of the risk on us - 0% on you. The suppliers get paid the full invoice amount instantly, and bear 0% of the credit risk. We handle the collections and 100% of the risk, each time.',
      image: 'service-08.svg',
      features: [
        {
          title: 'Real-time assessments',
          content: 'Customers can apply for terms straight from the checkout by connecting their bank account. Within seconds, they are decided upon as qualified (or not), and their specific possible terms.',
          image: 'service-10.svg'
        },
        {
          title: 'Automated payouts',
          content: 'In a financed transaction, you will receive the funds to the bank account you’ve set in your account settings, within 1-2 business days. If the transaction is not financed, you’ll receive the funds after the customer pays.',
          image: 'service-09.svg'
        },
        {
          title: 'Flexible payments',
          content: 'Real-time qualification, in a matter of seconds. Set flexible rule based limits, or differentiate between your products and other 3rd parties while you customize your services, to fit your business.',
          image: 'service-08.svg'
        }
      ],
      row: 2
    },
    {
      title: 'Customer Service',
      slug: 'customer-service',
      heading: 'Increase sales with a customer service team',
      summary: 'Keep lifetime connections by giving your customers top-tier multichannel support.',
      content: 'Our customer service team represents your brand and is trained to learn your products and guide your shoppers through pre and post purchase questions.',
      image: 'service-09.svg',
      features: [
        {
          title: 'Product experts',
          content: 'Invigorate customer engagement with approachable customer service representatives that are trained to understand your product offering. Our team will dive deep into videos, MSDS sheets, manuals, FAQ\'s, scripts, product descriptions and documentation to provide an optimal pre and post purchase experience for your customers.',
          image: 'service-08.svg'
        },
        {
          title: 'Multichannel targeting',
          content: 'Engage with customers via live chat, SMS, messenger, phone, email, social messages, and more. With the ability to answer product and order related questions, the Cart.com customer service as a service group turns shoppers into loyal fans of your brand. The capabilities of our customer service team increase exponentially when paired with our fulfillment services and online store platform, which unlocks greater data visibility and deep integration across functions.',
          image: 'service-07.svg'
        },
        {
          title: 'Buying assistants',
          content: 'We made implementing Addtract easy and smooth with different options for you to choose from. You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Addtract integrations with Magento, BigCommerce, Salesforce, and Quickbooks.',
          image: 'service-06.svg'
        }
      ],
      row: 2
    },
    {
      title: 'Business Finance',
      slug: 'business-finance',
      heading: 'Accept any payment, any way applicable.',
      summary: 'Automated bookkeeping, payable and receivables management for businesses.',
      content: 'Funds-in are tracked and updated in your ERP seamlessly. Develop your brand’s positioning and pricing strategy and optimize your business operations. Reduce overhead and save time with invoice reconciliation and settlement and A/R management. Buyer can generate an invoice from the checkout, and pay it with a check, wire transfer or credit card. You can customize the invoices your customers receive with your own brand colors and logo.',
      image: 'service-03.svg',
      features: [
        {
          title: 'Auto invoicing',
          content: 'Seamless funds tracking & invoice matching. Automatically match between invoices and payments with dedicated VBANs and a lock-box to reconcile and settle funds to your account.',
          image: 'service-05.svg'
        },
        {
          title: 'Auto reimbursement',
          content: 'After receiving the funds from the customer and making sure they match the invoice, we reimburse your Addtract account, and make the funds available for your withdrawal.',
          image: 'service-04.svg'
        },
        {
          title: 'Auto settlement',
          content: 'You can automatically settle every payment to its appropriate vendor account and get complete control on payouts. Our platform is tailored to allow marketplaces to easily onboard and manage vendors.',
          image: 'service-03.svg'
        }
      ],
      row: 2
    }
  ],
  service: null,
  plans: [
    {
      title: 'Basic',
      theme: 'primary',
      heading: 'The core features for individuals and merchants',
      price: 'Free',
      frequency: null,
      action: 'Continue for free',
      features: [
        'Unlimited public/private store integrations',
        'Free for any type of merchant store requirements',
        'Limited to 3,600 action calls / month',
        'Limited to a total of 6GB of catalog storage',
        'Access to technical and community support via email',
        'Access to a comprehensive documentation',
        'No setup fees, monthly fees, or hidden fees'
      ]
    },
    {
      title: 'Core',
      theme: 'secondary',
      heading: 'Merchant platform with simple, pay-as-you-go pricing',
      price: 'ZAR4,500',
      frequency: '/ integration / month',
      action: 'Continue with merchant',
      features: [
        'Everything included in the Core plan, plus... ',
        'Unlimited public/private store integrations',
        'Limited to 9,000 action calls / month',
        'Limited to a total of 60GB of catalog storage',
        'Configurable to use your existing domain for your store',
        'Free for experimental usage during your trial period',
        'Access to comprehensive documentation'
      ]
    },
    {
      title: 'Enterprise',
      theme: 'dark',
      heading: 'Custom package for your business',
      price: 'ZAR1,600',
      frequency: '/ user / month',
      action: 'Contact Sales',
      features: [
        'Everything included in the Merchant plan, plus... ',
        'Available for businesses with large product catalog',
        'Country-specific rates (delivery, processing fees)',
        'Elastic multi-store AI powered capabilities',
        'Elastic action calls / month based on demand',
        '1 month trial for experimental use cases',
        '24/7 access to premium technical support via all channels'
      ]
    }
  ]
})

// getters
export const getters = {
  services: state => state.services,
  service: state => state.service,
  plans: state => state.plans
}

// mutations
const mutations = {
  setServices (state, services) {
    state.services = services
  },
  setService (state, service) {
    state.service = service
  }
}

// actions
const actions = {
  onService ({ dispatch, commit, state }, slug) {
    const service = state.services.find((service) => {
      return service.slug === slug
    })

    console.log('service:', service)

    commit('setService', service)
  }
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}
