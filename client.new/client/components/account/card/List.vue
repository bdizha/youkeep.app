<template>
  <a-row class="r-account-list" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
      <div v-for="card in cards"
           :key="'address-' + card.id"
           :class="{'r-account-item__active': card.is_default}"
           class="r-account-item"
           v-on:click="onModal('account-card', card)"
      >
        <a-row :gutter="[12,12]" align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 16 }" :md="{ span: 16 }" :sm="{ span: 16 }"
                 :xs="{ span: 16 }"
          >
            <a-row :gutter="24" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                     :xs="{ span: 12 }"
              >
                Card number
              </a-col>
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                     :xs="{ span: 12 }"
              >
                {{ card.card_number }}
              </a-col>
            </a-row>
            <a-row :gutter="24" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                     :xs="{ span: 12 }"
              >
                Expiration
              </a-col>
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 12 }"
                     :xs="{ span: 12 }"
              >
                {{ card.expire_at }}
              </a-col>
            </a-row>
          </a-col>
          <a-col :lg="{ span: 4 }" :sm="{ span: 4 }"
                 :xs="{ span: 4 }" class="r-text-right"
          >
            <a-switch :default-checked="Boolean(card.is_default)" size="small"/>
          </a-col>
          <a-col :lg="{ span: 4 }" :sm="{ span: 4 }"
                 :xs="{ span: 4 }" class="r-text-right"
          >
            <a-avatar icon="edit" shape="square"/>
          </a-col>
        </a-row>
      </div>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-account-card-list',
  props: {
    hasTitle: { type: Boolean, required: false, default: true }
  },
  data () {
    return {}
  },
  computed: mapGetters({
    modal: 'base/modal',
    cards: 'account/cards',
    hasCards: 'account/hasCards'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
      this.onCards()
    },
    async onCards () {
      await this.$store.dispatch('account/onCards')
    },
    onModal (current, card) {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = true
      modal.current = current

      this.$store.dispatch('card/onCard', card)
      this.$store.dispatch('base/onModal', modal)
    }
  }
}
</script>
