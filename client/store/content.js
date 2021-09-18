// state
import axios from 'axios'

export const state = () => ({
  products: [
    {
      title: 'Shop now with Paise',
      slug: 'shop',
      heading: ' An <span class="r-text-primary">automated</span>, instant and secure shopping experience.',
      summary: 'The intuitive and flexible farming experience created for sellers and retailers. ',
      content: 'Retailer can generate an invoice from the checkout, and pay it with a cheque, bank transfer or credit card. You can customize the invoices your customers receive with your own brand colors and logo. We made implementing Paise easy and smooth with different options for you to choose from. We understand the complexities of your business and make sure our features answer your needs as a B2B merchant or marketplace. Marketplaces get their fee payout immediately as well.',
      image: 'service-24.svg',
      features: [
        {
          title: 'Auto store',
          content: 'You can start using the platform today with zero integration involved, integrate the checkout within a few hours of work, implement using the API capabilities, or use pre-built Paise integrations with Magento, BigCommerce, Salesforce, and Quickbooks.',
          image: 'service-06.svg'
        },
        {
          title: 'Auto serve',
          content: 'Built as building blocks for full customization. Using the Paise API capabilities, you can configure and modify the experience to accommodate your shoppers or vendors’ needs. Developers can click here to get access to our API docs.',
          image: 'service-13.svg'
        },
        {
          title: 'Auto transact',
          content: 'Self-served white-label invoicing. Retailers can generate an invoice from the checkout, and pay it with a cheque, bank transfer or credit card. You can customize the invoices your customers receive with your own brand colors and logo.',
          image: 'service-01.svg'
        },
        {
          title: 'Auto terminal',
          content: 'Paise pre-qualifies shoppers, or does so real-time within seconds, at checkout for those who haven’t yet been qualified, covering net 30,60,90 and up to 120 days. Sellers get paid upfront for issued invoices, while shoppers can pay with terms.',
          image: 'service-25.svg'
        }
      ],
      row: 1
    },
    {
      title: 'Pay later with Paise',
      slug: 'pay',
      heading: 'The best <span class="r-text-primary">value</span> comes in split payments.',
      summary: 'Paise lets you split your purchases into 3 zero interest payments or pay after your purchase within 7 days.',
      content: 'You\'ll never pay extra with Paise when you pay on time.',
      image: 'service-04.svg',
      images: [
        '/assets/asset-02.svg',
        '/assets/asset-17.svg',
        '/assets/asset-18.svg'
      ],
      steps: [
        {
          title: 'Checkout simple with Paise.',
          heading: 'Desire it',
          content: 'Find your favourites or discover new brands that let you get the most out of shopping.',
          image: '/assets/asset-02.svg'
        },
        {
          title: 'Choose to pay with Paise',
          heading: 'Shop it',
          content: 'Add what you want to your cart and choose to pay with Paise It\'s that simple and instant.',
          image: '/assets/asset-17.svg'
        },
        {
          heading: 'Enjoy it',
          title: 'Pay over time in 3 months',
          content: 'Settle 25% of the order total today and pay the rest over 3 monthly payments at zero interest.',
          image: '/assets/asset-18.svg'
        }
      ],
      features: [
        {
          title: 'Get it now, pay later.',
          content: 'Shop for what you love now and split your order total into 3 payments.',
          image: 'service-12.svg'
        },
        {
          title: 'Zero interest or fees.',
          content: 'No hidden fees, no interest, no late fees charged on your credit score.',
          image: 'service-18.svg'
        },
        {
          title: 'Pick a card, any card.',
          content: 'Link any debit or credit card and get instant approval to pay with Paise.',
          image: 'service-07.svg'
        },
        {
          title: 'Transact securely with Paise',
          content: 'Your financial information is protected when you open an account with Paise.',
          image: 'service-15.svg'
        }
      ],
      row: 1
    },
    {
      title: 'Earn more with Paise',
      slug: 'earn',
      heading: '<span class="r-text-primary">Faster</span> deliveries with our nationwide fulfillment network',
      summary: 'Manage orders, warehouse, inventory, and deliver to your shoppers fast and securely.',
      content: 'Paise\'s fulfillment services equip brands of all sizes with the ecommerce infrastructure and national footprint as the world\'s largest retailers. Our owned and operated fulfillment centers pick, pack, and ship for direct-to-consumer and B2B use cases and can achieve 1-2 day delivery across the continental U.S. We offer flexible pick, pack, and shipping pricing that scales with your business while you exceed your customers\' expectations',
      image: 'service-08.svg',
      images: [
        '/assets/asset-01.svg',
        '/assets/asset-08.svg'
      ],
      features: [
        {
          title: 'Auto carrier',
          content: 'Deliver to your customers faster by leveraging our fulfillment network for storage, picking, packing, and shipping. Deliver orders in 1 to 2 business days in the continental U.S. while managing shipping costs through our strategically distributed network of fulfillment centers.',
          image: 'service-31.svg'
        },
        {
          title: 'Auto track',
          content: 'Whether you\'re an ecommerce startup just getting started or an established brand moving high volume, whether you\'re shipping direct-to-consumer or B2B to retail or distribution partners, our tech-enabled order fulfillment capabilities can accommodate all your needs today.',
          image: 'service-11.svg'
        },
        {
          title: 'Auto pilot',
          content: 'Analyze aggregate and SKU-level order data, on-hand inventory information, and inbound and outbound shipments all in a single easy-to-navigate dashboard. Paise automatically pulls in product and order data from all major ecommerce marketplaces and platforms, including our own.',
          image: 'service-26.svg'
        }
      ],
      row: 1
    }
  ],
  services: [
    {
      title: 'Unlimited access to API docs',
      slug: 'x-checkout',
      heading: ' An <span class="r-text-primary">automated</span> farming experience.',
      summary: 'The intuitive and flexible farming experience created for sellers and retailers. ',
      content: 'Retailer can generate an invoice from the checkout, and pay it with a cheque, bank transfer or credit card. You can customize the invoices your customers receive with your own brand colors and logo. We made implementing Paise easy and smooth with different options for you to choose from. We understand the complexities of your business and make sure our features answer your needs as a B2B merchant or marketplace. Marketplaces get their fee payout immediately as well.',
      image: 'service-06.svg',
      images: [
        '/assets/asset-01.svg',
        '/assets/asset-08.svg'
      ],
      row: 1
    },
    {
      title: 'Premium support',
      slug: 'x-payment',
      heading: '<span class="r-text-primary">Adaptive</span> and instant seller payouts.',
      summary: 'Competitive financing options designed for fast-growing ecommerce companies.',
      content: 'Easily manage and pay out third party vendors globally in local currency. Charge marketplace commission and apply fees to vendors without touching the funds.  We would charge the commission on behalf of the marketplace and transfer it to their Paise account. Paise will automatically trigger payment to the vendor after the buyer has paid. ',
      image: 'service-04.svg',
      row: 1
    },
    {
      title: 'Order management',
      slug: 'x-order',
      heading: '<span class="r-text-primary">Faster</span> deliveries with our nationwide fulfillment network',
      summary: 'Manage orders, warehouse, inventory, and deliver to your shoppers fast and securely.',
      content: 'Paise\'s fulfillment services equip brands of all sizes with the ecommerce infrastructure and national footprint as the world\'s largest retailers. Our owned and operated fulfillment centers pick, pack, and ship for direct-to-consumer and B2B use cases and can achieve 1-2 day delivery across the continental U.S. We offer flexible pick, pack, and shipping pricing that scales with your business. ',
      image: 'service-14.svg',
      row: 1
    },
    {
      title: 'Integration assistance',
      slug: 'x-plans',
      heading: '<span class="r-text-primary">Retailers</span> set up payment plans while sellers get paid instantly.',
      summary: 'Competitive financing options designed for fast-growing ecommerce companies.',
      content: 'Real-time financing assessment within seconds for each buyer, full collection handling, 100% of the risk on us - 0% on you. The sellers get paid the full invoice amount instantly, and bear 0% of the credit risk. We handle the collections and 100% of the risk, each time.',
      image: 'service-08.svg',
      row: 2
    }
  ],
  product: null,
  testimonials: [],
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
      action: 'Continue with core',
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
      theme: 'yellow',
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
  ],
  industries: [],
  reasons: [
    {
      label: 'I would like to join Paise',
      key: 1
    },
    {
      label: 'I want to partner with Paise',
      key: 2
    },
    {
      label: 'I\'ve questions about B2B payments',
      key: 3
    },
    {
      label: 'I\'ve a general query about business',
      key: 4
    }
  ],
  articles: [],
  article: {}
})

// getters
export const getters = {
  products: state => state.products,
  services: state => state.services,
  product: state => state.product,
  testimonials: state => state.testimonials,
  hasTestimonials: state => state.testimonials.length > 0,
  plans: state => state.plans,
  reasons: state => state.reasons,
  article: state => state.article,
  articles: state => state.articles
}

// mutations
const mutations = {
  setProduct (state, product) {
    state.product = product
  },
  setArticle (state, article) {
    state.article = article
  },
  setTestimonials (state, testimonials) {
    state.testimonials = testimonials
  },
  setArticles (state, articles) {
    state.articles = articles
  }
}

// actions
const actions = {
  onProduct ({ dispatch, commit, state }, slug) {
    const product = state.products.find((product) => {
      return product.slug === slug
    })

    commit('setProduct', product)
  },
  async onArticles ({ dispatch, commit, state }, route) {
    try {
      await axios.get(route, {}).then(({ data }) => {
        commit('setArticles', data.articles)
      })
    } catch (e) {
      console.error('onArticles error: ', e)
    }
  },
  onArticle ({ dispatch, commit, state }, slug) {
    const article = state.articles.find((article) => {
      return article.slug === slug
    })

    commit('setArticle', article)
  },
  async onTestimonials ({ dispatch, commit, state }, payload) {
    try {
      await axios.get('/testimonials', payload).then(({ data }) => {
        commit('setTestimonials', data.testimonials)
      })
    } catch (e) {
      console.error('on error: ', e)
    }
  }
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions
}
