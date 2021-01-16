<template>
  <a-row class="r-account-list" type="flex" justify="center">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-card v-if="hasTitle" class="r-mb-24" title="PAYMENT METHODS" style="width: 100%;">
        <a-row type="flex" justify="start" align="middle">
          <a-col class="r-store-page" :xs="{ span: 24 }"
                 :sm="{ span: 24 }" :lg="{ span: 12 }">
            <div class="r-text-sm">
              <template v-if="hasCards">
                Here you can manage all your payment cards.
              </template>
              <template v-if="!hasCards">
                Your payment card is currently not set.
              </template>
            </div>
          </a-col>
        </a-row>
      </a-card>
      <div class="r-account-item"
           v-for="card in cards"
           :class="{'r-account-item__active': card.is_default}"
           :key="'address-' + card.id"
           v-on:click="onModal('account-card', card)">
        <a-row type="flex" justify="center" align="middle" :gutter="[12,12]">
          <a-col :xs="{ span: 16 }" :sm="{ span: 16 }" :md="{ span: 16 }"
                 :lg="{ span: 16 }">
            <a-row :gutter="24" type="flex" justify="start" align="middle">
              <a-col :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
                     :lg="{ span: 12 }">
                Card number
              </a-col>
              <a-col :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
                     :lg="{ span: 12 }">
                {{ card.card_number }}
              </a-col>
            </a-row>
            <a-row :gutter="24" type="flex" justify="start" align="middle">
              <a-col :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
                     :lg="{ span: 12 }">
                Expiration
              </a-col>
              <a-col :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
                     :lg="{ span: 12 }">
                {{ card.expire_at }}
              </a-col>
            </a-row>
          </a-col>
          <a-col class="r-text-right" :xs="{ span: 4 }"
                 :sm="{ span: 4 }" :lg="{ span: 4 }">
            <a-switch size="small" :default-checked="Boolean(card.is_default)"/>
          </a-col>
          <a-col class="r-text-right" :xs="{ span: 4 }"
                 :sm="{ span: 4 }" :lg="{ span: 4 }">
            <a-avatar shape="square" icon="edit"/>
          </a-col>
        </a-row>
      </div>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  props: {
    hasTitle: {type: Boolean, required: false, default: true},
  },
  data() {
    return {};
  },
  computed: mapGetters({
    modal: 'base/modal',
    cards: 'account/cards',
    hasCards: 'account/hasCards',
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
      this.onCards();
    },
    async onCards() {
      await this.$store.dispatch('account/onCards');
    },
    onModal(current, card) {
      let modal = {};
      modal.isVisible = true;
modal.isClosable = true;
      modal.current = current;

      this.$store.dispatch('card/onCard', card);
      this.$store.dispatch('base/onModal', modal);
    },
  }
};
</script>
