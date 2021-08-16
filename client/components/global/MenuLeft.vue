<template>
  <a-layout-sider class="r-slider-left">
    <r-account-menu></r-account-menu>
  </a-layout-sider>
</template>
<script>
const LINKS = [
  {
    label: 'Your orders',
    icon: 'schedule',
    link: '/account/orders'
  },
  {
    label: 'Chats',
    icon: 'message',
    link: '/account/chats'
  },
  {
    label: 'Invite friends',
    icon: 'user-add',
    link: '/account/invite'
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
    label: 'Payment methods',
    icon: 'wallet',
    link: '/account/payment'
  },
  {
    label: 'Your products',
    icon: 'profile',
    link: '/'
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
]
export default {
  name: 'r-menu-left',
  data () {
    return {
      current: ['mail'],
      openKeys: ['sub1'],
    }
  },
  methods: {},
  watch: {},
}
</script>
