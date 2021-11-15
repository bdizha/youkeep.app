<template>
  <a-row :gutter="[12,12]" justify="space-between" align="middle" type="flex">
    <a-col v-for="(action, index) in actions"
           :key="index"
           v-if="hasAction(action)"
           class="r-asset-actions"
    >
      <a-button block
                class="r-btn-dark"
                :size="size"
                type="secondary"
      >
        <a-icon :type="action.icon"
                theme="filled"
        ></a-icon>
        <span class="r-text-action">
            {{ action.title }}
          </span>
      </a-button>
    </a-col>
  </a-row>
</template>
<script>

export default {
  name: 'r-store-actions',
  props: {
    isDrop: { type: Boolean, required: false, default: false },
    isFeatured: { type: Boolean, required: false, default: false },
    isSaleable: { type: Boolean, required: false, default: true },
    store: {
      type: Object,
      required: true,
      default: () => {
        return {
          currency: null,
          currency_url: null,
          store: {
            photo_url: '/patterns/pattern-dark.svg'
          }
        }
      }
    },
    size: { type: String, required: false, default: 'small' }
  },
  data () {
    return {
      quantity: 1,
      actions: [
        {
          title: 'Follow',
          slug: 'follow',
          icon: 'heart',
          isFeatured: true,
          isDrop: false,
          isSaleable: false
        },
        {
          title: '1K pins',
          slug: 'collect',
          icon: 'pushpin',
          isFeatured: true,
          isDrop: false,
          isSaleable: false
        },
        {
          title: '250 views',
          slug: 'views',
          icon: 'eye',
          isFeatured: false,
          isDrop: false,
          isSaleable: false
        },
        {
          title: '170 stars',
          slug: 'star',
          icon: 'star',
          isFeatured: true,
          isDrop: false,
          isSaleable: false
        },
        {
          title: 'Share',
          slug: 'share',
          icon: 'share-alt',
          isFeatured: true,
          isDrop: false,
          isSaleable: false
        }
      ]
    }
  },
  created () {
    this.payload()
  },
  computed: {},
  methods: {
    hasAction (action) {
      if (this.isFeatured) {
        return action.isFeatured
      } else if (this.isDrop) {
        return action.isDrop
      } else if (this.isSaleable) {
        return action.isSaleable
      }
      return false
    },
    payload () {
    },
    async onAction () {
      // do something with the action here
    }
  }
}
</script>
