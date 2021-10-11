// state
import axios from 'axios'

export const state = () => ({
  products: [
    {
      theme: 'primary',
      title: '<span class="r-text-primary">Enjoy</span> with Spazapass',
      slug: 'enjoy-with-spazastop',
      heading: '<span class="r-text-primary">Find</span> on-demand homemade dishes.',
      summary: 'Take your taste to the next level only when you eat with spazastop with the participating chefs.',
      content: 'You\'ll enjoy the Spazastop checkout experience. Track your orders in real-time, upcoming deals and cash earned in one place.',
      icon: 'coffee',
      images: [
        '/assets/asset-03.svg'
      ],
      steps: [
        {
          title: 'Step 01',
          heading: '<span class="r-text-primary">Order</span> fast with Spazastop.',
          summary: 'Desire it and get exactly what you want from thousands of chefs and restaurants.',
          content: 'Find your favourites or discover new brands that let you get the most out of shopping.',
          image: '/assets/asset-23.svg'
        },
        {
          title: 'Step 02',
          heading: '<span class="r-text-primary">Choose</span> to pay with Spazapass',
          summary: 'Discover dishes served by nearby locals and set your full meal schedule with ease.',
          content: 'Add what you want to your cart and choose to pay with Spazapass. It\'s that simple and easy.',
          image: '/assets/asset-19.svg'
        },
        {
          title: 'Step 03',
          heading: '<span class="r-text-primary">Enjoy</span> your chef\'s best dishes',
          summary: 'Discover dishes served by nearby locals and set your full meal schedule with ease.',
          content: 'Settle 25% of the order total today and pay the rest overtime at giveaway interest.',
          image: '/assets/asset-24.svg'
        }
      ],
      features: [
        {
          title: '<span class="r-text-primary">Find</span> a better way to find food',
          content: 'Spazastop remembers and encrypts your meal history, so you can speed safely through checkout in one tap.',
          icon: 'bank'
        },
        {
          title: '<span class="r-text-primary">Crave</span> it now and get it.',
          content: 'Spazastop automatically gathers and tracks your orders, so you don’t have to miss your favourite meals.',
          icon: 'bank'
        },
        {
          title: '<span class="r-text-primary">Stay</span> happy and be satisfied',
          content: 'Inform Spazastop with your favorite chefs for a customized feed with deals, and suggestions you’ll love.',
          icon: 'bank'
        }
      ],
      row: 1
    },
    {
      theme: 'secondary',
      title: '<span class="r-text-primary">Cook</span> with Spazastop',
      slug: 'cook-with-spazastop',
      heading: '<span class="r-text-primary">Serve</span> great dishes in your location',
      summary: 'Design your own menu, set your own prices and work when you want. We’ll help you with payments, logistics and customer support.',
      content: 'Spazastop lets you make meaningful income by doing what they love! It’s completely free to apply. Many chefs make around R10,000 / week.',
      icon: 'fire',
      images: [
        '/assets/asset-04.svg'
      ],
      steps: [
        {
          title: 'Step 01',
          heading: '<span class="r-text-primary">Get</span> started with Spazastop',
          summary: 'Get started and allow customers to discover your dishes easily. We’ll help you with payments, logistics and customer support.',
          content: 'Customers can order and pay online or through the Spazastop ordering App without any costs charged.',
          image: '/assets/asset-26.svg'
        },
        {
          title: 'Step 02',
          heading: '<span class="r-text-primary">Prepare</span> to cook with Spazastop',
          summary: 'Start accepting incoming orders and enable every person to have access to a wholesome, homemade meal at an affordable price.',
          content: 'Confirm orders on your tablet or phone and deliver happiness to your customers with homemade meals.',
          image: '/assets/asset-21.svg'
        },
        {
          title: 'Step 03',
          heading: '<span class="r-text-primary">Serve</span> dishes to loyal customers',
          summary: 'Update an order ready for delivery and a rider or the customer will pick up the order.',
          content: 'Complete more on-demand orders and earn smart. Because there\'s no place like kitchen.',
          image: '/assets/asset-27.svg'
        }
      ],
      features: [
        {
          title: 'Promote your dishes',
          content: 'You can run marketing promotions anytime to improve your in-app placement, attract first-time customers, and earn more repeat customers.',
          icon: 'tags'
        },
        {
          title: 'Get a SpazaPass account',
          content: 'With DashPass, high-value customers see your business first and pay lower fees when they order from you - at no added cost to you.',
          icon: 'gift'
        },
        {
          title: 'Pick a card to connect',
          content: 'Link any debit or credit card and get instant approval to earn as you sell with Spazastop orders. It only takes 48 hours to get paid after each delivery.',
          icon: 'credit-card'
        },
        {
          title: 'Get paid in every 48 hours',
          content: 'Your financial information is protected when you open a <b>Merchant Account</b> with Spazastop and it will always be centralized for your convenience.',
          icon: 'dollar'
        }
      ],
      row: 1
    },
    {
      theme: 'yellow',
      title: '<span class="r-text-primary">Sell</span> with Spazastop',
      slug: 'sell-with-spazastop',
      heading: '<span class="r-text-primary">Sell</span> more and grow your business.',
      summary: 'Shop at brands you love and earn cash you can withdraw. That\'s real money, not another loyalty program you\'ll never use.',
      content: 'Start shopping with Spazastop at partnering cashback stores, we\'ll automatically add cashback into your account. You can earn cash whether you pay with Spazastop or not.',
      icon: 'shop',
      images: [
        '/assets/asset-15.svg'
      ],
      steps: [
        {
          title: 'Step 01',
          heading: '<span class="r-text-primary">Join</span> Spazastop up to earn cashback.',
          summary: 'Get started and discover great deals, and get rewarded instantly, it\'s completely simple. ',
          content: 'Create a Spazastop account in a few seconds, free and secure at your own convenience.',
          image: '/assets/asset-26.svg'
        },
        {
          title: 'Step 02',
          heading: '<span class="r-text-primary">Shop</span> at partner stores with Spazastop.',
          summary: 'Choose the rewards you love and unlock rewards from partner stores. You always earn with Spazastop.',
          content: 'Shop your favourites and earn cash. Earn cash whether you pay with Spazapass or not.',
          image: '/assets/asset-25.svg'
        },
        {
          title: 'Step 03',
          heading: '<span class="r-text-primary">Unlock</span> value or pay your next purchase.',
          summary: 'Enjoy exclusive deals and the freedom to shop anywhere and you prefer.',
          content: 'Shop securely at your favorite stores. No matter what you need, we\'ve got a flexible option to fit your budget. ',
          image: '/assets/asset-27.svg'
        }
      ],
      features: [
        {
          title: 'Sign up to earn cashback.',
          content: 'Create a Spazastop account in few seconds, it\'s completely simple, free and secure.',
          icon: 'gift'
        },
        {
          title: 'Shop at brands on Spazastop.',
          content: 'Shop your favourites and earn cash. Earn cash whether you pay with Spazastop or not.',
          icon: 'gift'
        },
        {
          title: 'Get cash or pay your next purchase.',
          content: 'Withdraw real money you\'ve earned or choose to settle an upcoming bill on Spazastop.',
          icon: 'gift'
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
      content: 'Retailer can generate an invoice from the checkout, and pay it with a cheque, bank transfer or credit card. You can customize the invoices your customers receive with your own brand colors and logo. We made implementing Spazastop easy and smooth with different options for you to choose from. We understand the complexities of your business and make sure our features answer your needs as a B2B merchant or marketplace. Marketplaces get their fee payout immediately as well.',
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
      content: 'Easily manage and pay out third party vendors globally in local currency. Charge marketplace commission and apply fees to vendors without touching the funds.  We would charge the commission on behalf of the marketplace and transfer it to their Spazastop account. Spazastop will automatically trigger payment to the vendor after the buyer has paid. ',
      image: 'service-04.svg',
      row: 1
    },
    {
      title: 'Order management',
      slug: 'x-order',
      heading: '<span class="r-text-primary">Faster</span> deliveries with our nationwide fulfillment network',
      summary: 'Manage orders, warehouse, inventory, and deliver to your shoppers fast and securely.',
      content: 'Spazastop\'s fulfillment services equip brands and chefs of all sizes with the ecommerce infrastructure and national footprint as the world\'s largest retailers. Our owned and operated fulfillment centers pick, pack, and ship for direct-to-shopper and B2B use cases and can achieve 1-2 day delivery across the continental U.S. We offer flexible pick, pack, and shipping pricing that scales with your business. ',
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
      label: 'I would like to join Spazastop',
      key: 1
    },
    {
      label: 'I want to partner with Spazastop',
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
