<template>
  <a-row :gutter="16" type="flex" justify="start">
    <a-col :span="24">
      <a-list :data-source="links">
        <a-list-item class="r-list-item" slot="renderItem" slot-scope="item, index">
          <nuxt-link v-if="item.link" class="r-text-link" :to="item.link">
            <a-avatar shape="square" :icon="item.icon"/>
            {{ item.label }}
          </nuxt-link>
          <nuxt-link v-else-if="!item.link" @click.native="onLogout" class="r-text-normal" to="/">
            <a-avatar shape="square" :icon="item.icon"/>
            {{ item.label }}
          </nuxt-link>
        </a-list-item>
        <template slot="footer">
          <div class="r-list-item ant-list-item">
          </div>
        </template>
      </a-list>
      <r-spinner :is-absolute="true"
                 v-if="(processes.isRunning)"></r-spinner>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

const LINKS = [
  {
    label: 'Your account',
    icon: 'profile',
    link: '/account/profile'
  },
  {
    label: 'Your orders',
    icon: 'clock-circle',
    link: '/account/orders'
  },
  {
    label: 'Your transactions',
    icon: 'credit-card',
    link: '/account/credit'
  },
  // {
  //     label: 'Invite friends',
  //     icon: 'user-add',
  //     link: '/account/invite'
  // },
  {
    label: 'Your addresses',
    icon: 'environment',
    link: '/account/location'
  },
  {
    label: 'Payment methods',
    icon: 'wallet',
    link: '/account/payment'
  },
  {
    label: 'Notifications',
    icon: 'bell',
    link: '/account/notifications'
  },
  {
    label: 'Your stores',
    icon: 'shop',
    link: '/account/stores'
  },
  {
    label: 'Your products',
    icon: 'profile',
    link: '/account/products'
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
  {
    label: 'Logout',
    icon: 'logout',
    link: null
  },
];
export default {
  data() {
    return {
      links: LINKS,
      store: null,
      placement: 'right',
      redirectTo: '/'
    };
  },
  computed: mapGetters({
    processes: "base/processes",
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    onLogout() {
      let payload = {
        redirectTo: this.redirectTo,
        params: {}
      };

      this.$message.success('Your browsing session has been successfully closed off. Good bye!');

      this.$store.dispatch('auth/onLogout', payload);
    }
  },
}
</script>
