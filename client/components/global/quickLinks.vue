<template>
  <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
    <a-col v-for="(item, index) in links"
           :key="index" :span="24"
    >
      <template v-if="!item.modal">
        <div class="r-item-shadow r-checked-item">
          <nuxt-link :to="item.link">
            <a-avatar class="r-checked-item-icon" :icon="item.icon" :size="30" shape="square"/>
            {{ item.label }}
          </nuxt-link>
        </div>
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
    icon: 'bank',
    link: '/',
    modal: null
  },
  {
    label: 'About Graphigem',
    icon: 'bulb',
    link: '/about-us'
  },
  {
    label: 'Zerosum Capital',
    icon: 'global',
    link: '/capital',
    modal: null
  },
  {
    label: 'Approach',
    icon: 'build',
    link: '/approach',
    modal: null
  },
  {
    label: 'Partners',
    icon: 'rocket',
    link: '/partners',
    modal: null
  },
  {
    label: 'Contact',
    icon: 'mail',
    link: '/contact-us',
    modal: null
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
