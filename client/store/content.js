// state
import axios from 'axios'

export const state = () => ({
  services: [
    {
      theme: 'primary',
      accent: 'tertiary',
      title: '<span class="r-text-primary">Collect</span> with Youkeep',
      slug: 'collect-with-youkeep',
      heading: '<span class="r-text-primary">Find</span> on-demand original NFTs.',
      summary: 'Take your taste to the next level only when you eat with youkeep with the participating artists.',
      content: 'You\'ll enjoy the Youkeep digital asset experience. Track your orders in real-time, upcoming liquidity and cash earned in one place.',
      icon: 'compass',
      images: [
        '/assets/asset-03.svg'
      ],
      steps: [
        {
          title: '01',
          heading: '<span class="r-text-tertiary">Order</span> fast with Youkeep.',
          summary: 'Desire it and get exactly what you want from thousands of artists and marketplaces.',
          content: 'Find your favourites or discover new brands that let you get the most out of shopping.',
          image: '/assets/asset-23.svg'
        },
        {
          title: '02',
          heading: '<span class="r-text-tertiary">Choose</span> to pay with Youkeep',
          summary: 'Discover NFTs served by nearby locals and set your full NFT schedule with ease.',
          content: 'Add what you want to your cart and choose to pay with Youkeep. It\'s that simple and easy.',
          image: '/assets/asset-13.svg'
        },
        {
          title: '03',
          heading: '<span class="r-text-tertiary">Enjoy</span> your artist\'s best NFTs',
          summary: 'Discover NFTs served by nearby locals and set your full NFT schedule with ease.',
          content: 'Settle 25% of the order total today and pay the rest overtime at giveaway interest.',
          image: '/assets/asset-24.svg'
        }
      ],
      features: [
        {
          title: '<span class="r-text-primary">Find</span> a better way to discover',
          content: 'Youkeep remembers and encrypts your NFT history, so you can speed safely through checkout in one tap.',
          icon: 'bank'
        },
        {
          title: '<span class="r-text-primary">Crave</span> it now and get it.',
          content: 'Youkeep automatically gathers and tracks your orders, so you don’t have to miss your favourite collectibles.',
          icon: 'bank'
        },
        {
          title: '<span class="r-text-primary">Stay</span> happy and be satisfied',
          content: 'Inform Youkeep with your favorite artists for a customized feed with liquidity, and suggestions you’ll love.',
          icon: 'bank'
        }
      ],
      row: 1
    },
    {
      theme: 'secondary',
      accent: 'primary',
      title: '<span class="r-text-primary">Create</span> with Youkeep',
      slug: 'create-with-youkeep',
      heading: '<span class="r-text-primary">Serve</span> great NFTs in your network',
      summary: 'Design your  own collection, set your own prices and work when you want. We’ll help you with payments, logistics and customer support.',
      content: 'Youkeep lets you make meaningful income by doing what they love! It’s completely free to apply. Many artists make around $1,000 / week.',
      icon: 'fire',
      images: [
        '/assets/asset-04.svg'
      ],
      steps: [
        {
          title: '01',
          heading: '<span class="r-text-tertiary">Get</span> started with Youkeep',
          summary: 'Get started and allow collectors to discover your NFTs easily. We’ll help you with payments, logistics and customer support.',
          content: 'Collectors can order and pay online or through the Youkeep ordering App without any costs charged.',
          image: '/assets/asset-05.svg'
        },
        {
          title: '02',
          heading: '<span class="r-text-tertiary">Prepare</span> to collect with Youkeep',
          summary: 'Start accepting incoming orders and enable every person to have access to a wholesome, original collectibles at an affordable price.',
          content: 'Confirm orders on your tablet or phone and deliver happiness to your collectors with original collectibles.',
          image: '/assets/asset-06.svg'
        },
        {
          title: '03',
          heading: '<span class="r-text-tertiary">Serve</span> NFTs to loyal collectors',
          summary: 'Update an order ready for delivery and a rider or the customer will pick up the order.',
          content: 'Complete more on-demand orders and earn smart. Because there\'s no place like kitchen.',
          image: '/assets/asset-10.svg'
        }
      ],
      features: [
        {
          title: 'Promote your NFTs',
          content: 'You can run marketing promotions anytime to improve your in-app placement, attract first-time collectors, and earn more repeat collectors.',
          icon: 'tags'
        },
        {
          title: 'Get a SpazaPass account',
          content: 'With DashPass, high-value collectors see your business first and pay lower fees when they order from you - at no added cost to you.',
          icon: 'gift'
        },
        {
          title: 'Pick a card to connect',
          content: 'Link any debit or credit card and get instant approval to earn as you sell with Youkeep orders. It only takes 48 hours to get paid after each delivery.',
          icon: 'credit-card'
        },
        {
          title: 'Get paid in every 48 hours',
          content: 'Your financial information is protected when you open a <b>Seller Account</b> with Youkeep and it will always be centralized for your convenience.',
          icon: 'dollar'
        }
      ],
      row: 1
    },
    {
      theme: 'secondary',
      accent: 'tertiary',
      title: '<span class="r-text-primary">Buy/sell</span> with Youkeep',
      slug: 'trade-with-youkeep',
      heading: '<span class="r-text-primary">Buy/sell</span> more and grow revenue.',
      summary: 'Shop at brands you love and earn cash you can withdraw. That\'s real money, not another loyalty program you\'ll never use.',
      content: 'Start shopping with Youkeep at partnering cashback stores, we\'ll automatically add cashback into your account. You can earn cash whether you pay with Youkeep or not.',
      icon: 'shop',
      images: [
        '/assets/asset-15.svg'
      ],
      steps: [
        {
          title: '01',
          heading: '<span class="r-text-tertiary">Join</span> Youkeep up to earn cashback.',
          summary: 'Get started and discover great liquidity, and get rewarded instantly, it\'s completely simple. ',
          content: 'Create a Youkeep account in a few seconds, free and secure at your own convenience.',
          image: '/assets/asset-05.svg'
        },
        {
          title: '02',
          heading: '<span class="r-text-tertiary">Shop</span> at partner stores with Youkeep.',
          summary: 'Choose the rewards you love and unlock rewards from partner stores. You always earn with Youkeep.',
          content: 'Shop your favourites and earn cash. Earn cash whether you pay with Youkeep or not.',
          image: '/assets/asset-06.svg'
        },
        {
          title: '03',
          heading: '<span class="r-text-tertiary">Unlock</span> value or pay your next purchase.',
          summary: 'Enjoy exclusive liquidity and the freedom to shop anywhere and you prefer.',
          content: 'Shop securely at your favorite stores. No matter what you need, we\'ve got a flexible option to fit your budget. ',
          image: '/assets/asset-10.svg'
        }
      ],
      features: [
        {
          title: 'Sign up to earn cashback.',
          content: 'Create a Youkeep account in few seconds, it\'s completely simple, free and secure.',
          icon: 'gift'
        },
        {
          title: 'Shop at brands on Youkeep.',
          content: 'Shop your favourites and earn cash. Earn cash whether you pay with Youkeep or not.',
          icon: 'gift'
        },
        {
          title: 'Get cash or pay your next purchase.',
          content: 'Withdraw real money you\'ve earned or choose to settle an upcoming bill on Youkeep.',
          icon: 'gift'
        }
      ],
      row: 1
    }
  ],
  products: [
    {
      title: 'Unlimited access to API docs',
      slug: 'x-checkout',
      heading: ' An <span class="r-text-primary">automated</span> farming experience.',
      summary: 'The intuitive and flexible farming experience created for sellers and retailers. ',
      content: 'Retailer can generate an invoice from the checkout, and pay it with a cheque, bank transfer or credit card. You can customize the invoices your collectors receive with your own brand colors and logo. We made implementing Youkeep easy and smooth with different options for you to choose from. We understand the complexities of your business and make sure our features answer your needs as a B2B seller or marketplace. Marketplaces get their fee payout immediately as well.',
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
      heading: '<span class="r-text-tertiary">Adaptive</span> and instant seller payouts.',
      summary: 'Competitive financing options designed for fast-growing ecommerce companies.',
      content: 'Easily manage and pay out third party vendors globally in local currency. Charge marketplace commission and apply fees to vendors without touching the funds.  We would charge the commission on behalf of the marketplace and transfer it to their Youkeep account. Youkeep will automatically trigger payment to the vendor after the buyer has paid. ',
      image: 'service-04.svg',
      row: 1
    },
    {
      title: 'Order management',
      slug: 'x-order',
      heading: '<span class="r-text-tertiary">Faster</span> deliveries with our nationwide fulfillment network',
      summary: 'Manage orders, warehouse, inventory, and deliver to your shoppers fast and securely.',
      content: 'Youkeep\'s fulfillment services equip brands and artists of all sizes with the ecommerce infrastructure and national footprint as the world\'s largest retailers. Our owned and operated fulfillment centers pick, pack, and ship for direct-to-shopper and B2B use cases and can achieve 1-2 day delivery across the continental U.S. We offer flexible pick, pack, and shipping pricing that scales with your business. ',
      image: 'service-14.svg',
      row: 1
    },
    {
      title: 'Integration assistance',
      slug: 'x-plans',
      heading: '<span class="r-text-tertiary">Retailers</span> set up payment plans while sellers get paid instantly.',
      summary: 'Competitive financing options designed for fast-growing ecommerce companies.',
      content: 'Real-time financing assessment within seconds for each buyer, full collection handling, 100% of the risk on us - 0% on you. The sellers get paid the full invoice amount instantly, and bear 0% of the credit risk. We handle the collections and 100% of the risk, each time.',
      image: 'service-08.svg',
      row: 2
    }
  ],
  service: {},
  testimonials: [],
  plans: [
    {
      title: 'Basic',
      theme: 'primary',
      heading: 'The core features for individuals and sellers',
      price: 'Free',
      frequency: null,
      action: 'Continue for free',
      features: [
        'Unlimited public/private store integrations',
        'Free for any type of seller store requirements',
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
      heading: 'Seller platform with simple, pay-as-you-go pricing',
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
        'Everything included in the Seller plan, plus... ',
        'Available for businesses with large service catalog',
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
      label: 'I would like to join Youkeep',
      key: 1
    },
    {
      label: 'I want to partner with Youkeep',
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
  article: {},
  serves: [],
  hasServes: false,
  stores: [],
  hasStores: false,
  theme: 'primary',
  themes: ['primary', 'secondary', 'tertiary', 'dark'],
  rankings: [],
  hasRankings: false
})

// getters
export const getters = {
  services: state => state.services,
  service: state => state.service,
  products: state => state.products,
  theme: state => state.theme,
  testimonials: state => state.testimonials,
  hasTestimonials: state => state.testimonials.length > 0,
  plans: state => state.plans,
  reasons: state => state.reasons,
  article: state => state.article,
  articles: state => state.articles,
  serves: state => state.serves,
  stores: state => state.stores,
  hasServes: state => state.hasServes,
  hasStores: state => state.hasStores,
  themes: state => state.themes,
  hasRankings: state => state.hasRankings,
  rankings: state => state.rankings
}

// mutations
const mutations = {
  setService (state, service) {
    state.service = service
  },
  setArticle (state, article) {
    state.article = article
  },
  setTestimonials (state, testimonials) {
    state.testimonials = testimonials
  },
  setArticles (state, articles) {
    state.articles = articles
  },
  setServes (state, serves) {
    state.serves = serves
    state.hasServes = serves !== undefined && serves.length > 0
  },
  setStores (state, stores) {
    state.stores = stores
    state.hasStores = stores.data !== undefined && stores.data.length > 0
  },
  setTheme (state, theme) {
    state.theme = theme
  },
  setRankings (state, rankings) {
    state.rankings = rankings
    state.haRankings = rankings.data !== undefined && rankings.data.length > 0
  }
}

// actions
const actions = {
  async onStores ({ dispatch, commit, state }, payload) {
    try {
      dispatch('base/onProcess', { key: 'isFixed', value: true }, { root: true })
      commit('setStores', [])

      await axios.post('/stores', payload).then(({ data }) => {
        commit('setStores', data.stores)

        dispatch('base/onProcess', { key: 'isFixed', value: false }, { root: true })
      })
    } catch (e) {
      console.error('onStores errors')
      console.log(e)
    }
  },
  onTheme ({ commit, state }) {
    try {
      const random = Math.floor(Math.random() * Math.floor(3))
      const theme = state.themes[random]
      return theme
    } catch (e) {
      console.error('onTheme errors')
      console.log(e)
      return null
    }
  },
  async onServes ({ dispatch, commit, state }, payload) {
    try {
      dispatch('base/onProcess', { key: 'isFixed', value: true }, { root: true })
      await axios.post('/serves', payload).then(({ data }) => {
        commit('setServes', data)
        dispatch('base/onProcess', { key: 'isFixed', value: false }, { root: true })
      })
    } catch (e) {
      console.error('onServes errors')
      console.log(e)
    }
  },
  async onRankings ({ dispatch, commit, state }, payload) {
    try {
      dispatch('base/onProcess', { key: 'isFixed', value: true }, { root: true })
      await axios.post('/rankings', payload).then(({ data }) => {
        const rankings = data.rankings
        commit('setRankings', rankings)
        dispatch('base/onProcess', { key: 'isFixed', value: false }, { root: true })

        console.log('data found', rankings)

        return Promise.resolve(rankings)
      })
    } catch (e) {
      console.error('onRankings errors')
      console.log(e)
    }
  },
  onService ({ dispatch, commit, state }, slug) {
    const service = state.services.find((service) => {
      return service.slug === slug
    })

    commit('setService', service)
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
