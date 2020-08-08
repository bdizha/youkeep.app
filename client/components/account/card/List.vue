<template>
  <a-row class="r-account-list" type="flex" justify="center">
    <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <div class="r-account-item"
           v-for="card in cards"
           :class="{'r-account-item__active': card.is_default}"
           :key="'address-' + card.id"
           v-on:click="onModal('account-card', card)">
        <a-row type="flex" justify="center" align="middle" :gutter="[12,12]">
          <a-col class="gutter-row" :xs="{ span: 16 }" :sm="{ span: 16 }" :md="{ span: 16 }"
                 :lg="{ span: 16 }">
            <a-row :gutter="24" type="flex" justify="start">
              <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
                     :lg="{ span: 12 }">
                Card number
              </a-col>
              <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
                     :lg="{ span: 12 }">
                {{ card.card_number }}
              </a-col>
            </a-row>
            <a-row :gutter="24" type="flex" justify="start">
              <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
                     :lg="{ span: 12 }">
                Expiration
              </a-col>
              <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }"
                     :lg="{ span: 12 }">
                {{ card.expire_at }}
              </a-col>
            </a-row>
          </a-col>
          <a-col class="r-text-right" :xs="{ span: 4 }"
                 :sm="{ span: 4 }" :lg="{ span: 4 }">
            <a-switch v-model="isDefault" size="large" :default-checked="card.is_default"/>
          </a-col>
          <a-col class="r-text-right" :xs="{ span: 4 }"
                 :sm="{ span: 4 }" :lg="{ span: 4 }">
            <a-button block
                      size="small"
                      v-on:click="onModal('account-card', card)"
                      class="r-btn-red-bordered" type="primary">
              Change
            </a-button>
          </a-col>
        </a-row>
      </div>
    </a-col>
  </a-row>
</template>
<script>
  import {mapGetters} from "vuex";

  export default {
    name: 'r-account-card-list',
    props: {},
    data() {
      return {
        isDefault: false,
      };
    },
    computed: mapGetters({
      cards: 'account/cards'
    }),
    mounted() {
      this.payload();
    },
    methods: {
      onModal(current, card) {
        let modal = {};
        modal.isVisible = true;
        modal.current = current;
        modal.card = card;
        this.$store.dispatch('app/onModal', modal);
      },
      payload() {
        // this.$store.dispatch('account/fetchCards');
      },
    }
  };
</script>
