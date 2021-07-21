<template>
  <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
    <a-col v-for="(item, index) in links"
           :key="index" :span="24"
    >
      <template v-if="!item.modal">
        <nuxt-link :to="item.link" class="r-item-shadow">
          <a-avatar :icon="item.icon" shape="square" :size="30"/>
          {{ item.label }}
        </nuxt-link>
      </template>
      <template v-if="item.modal">
        <nuxt-link :to="item.link"
                   class="r-item-shadow"
                   @click.native="onModal(item.modal)"
        >
          <a-avatar :icon="item.icon" shape="square"/>
          {{ item.label }}
        </nuxt-link>
      </template>
    </a-col>
  </a-row>
</template>
<script>
const LINKS = [
  {
    label: 'Home',
    icon: 'home',
    link: '/',
    modal: null
  },
  {
    label: 'Explore',
    icon: 'compass',
    link: '/stores/its-shopping-time'
  },
  {
    label: 'Rewards',
    icon: 'gift',
    link: '/rewards',
    modal: null
  },
  {
    label: 'My Orders',
    icon: 'gift',
    link: '/orders',
    modal: null
  },
  {
    label: 'Wishlist',
    icon: 'heart',
    link: '/wishlist',
    modal: 'wishlist'
  },
  {
    label: 'History',
    icon: 'clock-circle',
    link: '/timeline',
    modal: 'timeline'
  }
]

export default {
  name: 'r-quick-links',
  props: {},
  data () {
    return {
      links: LINKS
    }
  },
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    async onModal (current) {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = current

      await this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
