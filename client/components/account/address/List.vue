<template>
  <a-row type="flex" justify="center">
    <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
      <div class="r-account-item"
           v-for="address in addresses"
           :class="{'r-account-item__active': address.is_default}"
           :key="'address-' + address.id"
           v-on:click="onModal('account-address', address)">
        <a-row type="flex" justify="center" align="middle" :gutter="[12,12]">
          <a-col :xs="{ span: 16 }"
                 :sm="{ span: 16 }" :lg="{ span: 16 }">
            <span v-html="onItemLabel(address)"></span>
          </a-col>
          <a-col class="r-text-right" :xs="{ span: 4 }"
                 :sm="{ span: 4 }" :lg="{ span: 4 }">
            <a-switch v-model="isDefault" size="large" :default-checked="address.is_default"/>
          </a-col>
          <a-col class="r-text-right" :xs="{ span: 4 }"
                 :sm="{ span: 4 }" :lg="{ span: 4 }">
            <a-button v-on:click="onModal('account-password', $event)" block size="small"
                      type="secondary" class="r-btn-bordered-black">
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
    name: 'r-account-address-list',
    props: {},
    data() {
      return {
        isDefault: false,
        modal: {
          current: null,
          isVisible: false,
          category: null,
          address: null,
        }
      };
    },
    computed: mapGetters({
      addresses: 'account/addresses'
    }),
    mounted() {
    },
    methods: {
      onModal(current, address) {
        let modal = {};
        modal.isVisible = true;
        modal.current = current;
        modal.address = address;
        this.$store.dispatch('app/onModal', modal);
      },
      onItemLabel(address) {
        let label = '<strong>' + address.address_line + ', ' +
          address.address_line_2 + ', ' + address.suburb + '</strong>,<br>' +
          address.city + ', ' + address.postal_code;

        return label;
      }
    }
  };
</script>
