<template>
  <a-row align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <a-collapse :default-active-key="menu.currentMenuKey"
                  accordion
                  expandIconPosition="right"
      >
        <a-collapse-panel v-for="(item) in menuItems"
                          :key="item.key"
                          :header="item.heading"
                          class="r-collapse-panel"
        >
          <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
            <a-col v-for="(item, index) in item.links"
                   :key="index" :span="24"
            >
              <template v-if="item.link !== null">
                <nuxt-link :to="item.link" class="r-item-shadow">
                  <a-avatar :icon="item.icon" :size="30" shape="square"/>
                  {{ item.label }}
                </nuxt-link>
              </template>
              <template v-if="!item.link">
                <div class="r-item-shadow"
                     @click="onLogout"
                >
                  <a-avatar :icon="item.icon" shape="square"/>
                  {{ item.label }}
                </div>
              </template>
            </a-col>
          </a-row>
        </a-collapse-panel>
        <a-collapse-panel class="r-collapse-panel" header="Quick Links"
        >
          <r-quick-links></r-quick-links>
        </a-collapse-panel>
      </a-collapse>
      <a-row class="r-mb-48" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-p-24">
          <h4 class="r-store-text-light">
            Spazastop is an independent business service that is not necessarily affiliated with,
            endorsed or sponsored by the sellers listed here but it enables you to get the deliveries
            you
            want.
          </h4>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

const MENU = [
  {
    heading: 'Manage Account',
    key: 'account',
    links: [
      {
        label: 'Your Account',
        icon: 'profile',
        link: '/account/profile'
      },
      {
        label: 'Your sellers',
        icon: 'shop',
        link: '/account/store'
      },
      {
        label: 'Your Orders',
        icon: 'clock-circle',
        link: '/account/order'
      },
      // {
      //     label: 'Invite friends',
      //     icon: 'user-add',
      //     link: '/account/invite'
      // },
      {
        label: 'Your Addresses',
        icon: 'environment',
        link: '/account/address'
      },
      {
        label: 'Payment Methods',
        icon: 'wallet',
        link: '/account/payment'
      },
      {
        label: 'Your Billing',
        icon: 'credit-card',
        link: '/account/credit'
      },
      {
        label: 'Notifications',
        icon: 'bell',
        link: '/account/notifications'
      },
      // { In cases Marketplace show this
      //   label: 'Your categories',
      //   icon: 'profile',
      //   link: '/account/service'
      // },
      {
        label: 'Your Settings',
        icon: 'profile',
        link: '/account/settings'
      },
      {
        label: 'Logout',
        icon: 'logout',
        link: null
      }
    ]
  },
  {
    heading: 'Spazastop Services ',
    key: 'products',
    links: [
      {
        label: 'Spazastop+',
        icon: 'plus',
        link: '/hiw'
      },
      {
        label: 'Waykipa Couriers',
        icon: 'cart-icon',
        link: '/account/service/waykipa'
      },
      {
        label: 'Spazastop Credit',
        icon: 'credit-card',
        link: '/account/service/Spazastop'
      },
      {
        label: 'Your help',
        icon: 'question-circle',
        link: '/help'
      },
      {
        label: 'Privacy Policy',
        icon: 'security',
        link: '/privacy'
      },
      {
        label: 'Logout',
        icon: 'logout',
        link: null
      }
    ]
  }
]
export default {
  name: 'r-account-menu',
  data () {
    return {
      menuItems: MENU,
      store: null,
      placement: 'right',
      redirectTo: '/'
    }
  },
  computed: mapGetters({
    processes: 'base/processes',
    menu: 'account/menu',
    hasMenu: 'account/hasMenu'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onLogout () {
      const payload = {
        redirectTo: this.redirectTo,
        params: {}
      }
      this.$message.success('Your browsing session has been successfully closed off. Good bye!')
      this.$store.dispatch('auth/onLogout', payload)
    }
  }
}
</script>
