// state
import axios from 'axios'

export const state = () => ({
  products: [
    {
      theme: 'primary',
      title: '<span class="r-text-primary">Shop</span> simple with Paise',
      slug: 'shop-with-paise',
      heading: 'On-demand, instant and <span class="r-text-primary">secure</span> checkout.',
      summary: 'Take your shopping to the next level only when you shop with paise at the participating stores.',
      content: 'You\'ll enjoy the Paise checkout experience. Track your purchases, upcoming bills and cash earned in one place.',
      image: 'service-24.svg',
      images: [
        '/assets/asset-13.svg',
        '/assets/asset-14.svg'
      ],
      steps: [
        {
          title: 'Desire it',
          heading: 'Checkout simple with Paise.',
          content: 'Find your favourites or discover new brands that let you get the most out of shopping.',
          image: '/assets/asset-02-white.svg'
        },
        {
          title: 'Shop it',
          heading: 'Choose to pay with Paise',
          content: 'Add what you want to your cart and choose to pay with Paise It\'s that simple and instant.',
          image: '/assets/asset-17-white.svg'
        },
        {
          title: 'Enjoy it',
          heading: 'Pay over time in 3 months',
          content: 'Settle 25% of the order total today and pay the rest over 3 monthly payments at zero interest.',
          image: '/assets/asset-18.svg'
        }
      ],
      features: [
        {
          title: 'A better way to shop',
          content: 'Paise remembers and encrypts your details, so you can speed safely through checkout in one tap. Pay in full at checkout or split your purchase into 3 adaptive installments.',
          image: 'service-06.svg'
        },
        {
          title: 'Discover it. Get it.',
          content: 'Shop automatically gathers and tracks your orders, so you don’t have to search, copy, or paste. You can also use Shop without auto-tracking.',
          image: 'service-13.svg'
        },
        {
          title: 'Stay in the moment',
          content: 'Inform Paise with your favorite stores for a customized feed with deals, trending items, and recommendations you’ll love. Your personal details are secure.',
          image: 'service-01.svg'
        }
      ],
      row: 1
    },
    {
      theme: 'secondary',
      title: '<span class="r-text-secondary">Pay</span> later with Paise',
      slug: 'pay-with-paise',
      heading: 'Get <span class="r-text-secondary">more</span> value with split payments',
      summary: 'You\'ll never pay extra with Paise when you pay on time.',
      content: 'Paise lets you split your purchases into 3 zero interest payments or pay after your purchase within 7 days.',
      image: 'service-04.svg',
      images: [
        '/assets/asset-27-01.png',
        '/assets/asset-27-02.png',
        '/assets/asset-27-03.png',
        '/assets/asset-27-04.png'
      ],
      steps: [
        {
          title: 'Find it',
          heading: '<span class="r-text-secondary">Shop</span> simple with Paise.',
          content: 'Find your favourites or discover new brands that let you get the most out of shopping.',
          image: '/assets/asset-28.svg'
        },
        {
          title: 'Order it',
          heading: '<span class="r-text-secondary">Choose</span> to pay with Paise',
          content: 'Add what you want to your cart and choose to pay with Paise It\'s that simple and instant.',
          image: '/assets/asset-17-white.svg'
        },
        {
          title: 'Enjoy it',
          heading: '<span class="r-text-secondary">Pay</span> over time in 3 months',
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
          title: 'Transact simple with Paise',
          content: 'Your financial information is protected when you open an account with Paise.',
          image: 'service-15.svg'
        }
      ],
      row: 1
    },
    {
      theme: 'yellow',
      title: '<span class="r-text-yellow">Earn</span> cash with Paise',
      slug: 'earn-with-paise',
      heading: '<span class="r-text-yellow">Shop</span> securely and earn instant credit.',
      summary: 'Shop at brands you love and earn cash you can withdraw. That\'s real money, not another loyalty program you\'ll never use.',
      content: 'Start shopping with Paise at partnering cashback stores, we\'ll automatically add cashback into your account. You can earn cash whether you pay with Paise or not.',
      image: 'service-08.svg',
      images: [
        '/assets/asset-30.png'
      ],
      steps: [
        {
          title: 'Get it',
          heading: 'Sign up to earn cashback.',
          content: 'Create a Paise account in few seconds, it\'s completely simple, free and secure at your own convenience.',
          image: '/assets/asset-28.svg'
        },
        {
          title: 'Shop it',
          heading: 'Shop at brands on Paise.',
          content: 'Shop your favourites and earn cash. Earn cash whether you pay with Paise or not. You always earn with Paise.',
          image: '/assets/asset-22.svg'
        },
        {
          title: 'Earn it',
          heading: 'Get cash or pay your next purchase.',
          content: 'Withdraw real money you\'ve earned or choose to settle an upcoming bill on Paise in one centralized place.',
          image: '/assets/asset-23.svg'
        }
      ],
      features: [
        {
          title: 'Sign up to earn cashback.',
          content: 'Create a Paise account in few seconds, it\'s completely simple, free and secure at your convenience.',
          image: 'service-12.svg'
        },
        {
          title: 'Shop at brands on Paise.',
          content: 'Shop your favourites and earn cash. Earn cash whether you pay with Paise or not.',
          image: 'service-18.svg'
        },
        {
          title: 'Get cash or pay your next purchase.',
          content: 'Withdraw real money you\'ve earned or choose to settle an upcoming bill on Paise.',
          image: 'service-07.svg'
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
      content: 'Paise\'s fulfillment services equip brands of all sizes with the ecommerce infrastructure and national footprint as the world\'s largest retailers. Our owned and operated fulfillment centers pick, pack, and ship for direct-to-shopper and B2B use cases and can achieve 1-2 day delivery across the continental U.S. We offer flexible pick, pack, and shipping pricing that scales with your business. ',
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
