<template>
  <a-row :gutter="16" type="flex" justify="start">
    <a-col class="gutter-row" :span="24">
      <a-list :data-source="links">
        <a-list-item slot="renderItem" slot-scope="item, index">
          <router-link class="r-text-grey" :to="item.link">
            <a-icon :type="item.icon"/>
            {{ item.label }}
          </router-link>
        </a-list-item>
        <div slot="header">
        </div>
        <template slot="footer">
          <router-link @click.native.prevent="logout" class="r-text-grey" to="/">
            <a-icon type="logout"/>
            Logout
          </router-link>
        </template>
      </a-list>
      <r-spinner v-if="isProcessing" :is-absolute="true"></r-spinner>
    </a-col>
  </a-row>
</template>
<script>
  const LINKS = [
    {
      label: 'Your account',
      icon: 'profile',
      link: '/account/profile'
    },
    {
      label: 'Invite friends',
      icon: 'user-add',
      link: '/account/invite'
    },
    {
      label: 'Your addresses',
      icon: 'environment',
      link: '/account/location'
    },
    {
      label: 'Your orders',
      icon: 'clock-circle',
      link: '/account/orders'
    },
    {
      label: 'Your credit',
      icon: 'credit-card',
      link: '/account/credit'
    },
    {
      label: 'Payment options',
      icon: 'wallet',
      link: '/account/payment'
    },
    {
      label: 'Notifications',
      icon: 'bell',
      link: '/account/notifications'
    },
    {
      label: 'Your products',
      icon: 'profile',
      link: '/account/product/list'
    },
    {
      label: 'Your stores',
      icon: 'shop',
      link: '/account/store/list'
    },
    {
      label: 'How it works',
      icon: 'bulb',
      link: '/hiw'
    },
    {
      label: 'Your help',
      icon: 'question-circle',
      link: '/help'
    },
  ];
  export default {
    name: 'r-account-menu',
    data() {
      return {
        links: LINKS,
        user: null,
        hasData: false,
        collapsed: false,
        store: null,
        placement: 'right',
        hasDrawer: true,
        isLoggedIn: false,
        isProcessing: false,
        redirectTo: '/'
      };
    },
    computed: {},
    mounted() {
      this.payload();
    },
    methods: {
      payload() {
      },
      logout() {
        this.isProcessing = true;

        let $this = this;
        let path = '/logout';
        let params = {};

        HTTP.post(path, params)
          .then(response => {
            setTimeout(function () {
              $this.isProcessing = false;
              window.location.href = $this.redirectTo;
            }, 3600);
          })
          .catch(error => {
            console.log('error', error);
            $this.isProcessing = false;
            console.log('Errors', error);
          });
      }
    },
  }
</script>
