<template>
  <a-row :class="{'r-store-item-line': isStore}" type="flex" justify="center"
         align="middle">
    <a-col @click="onModal" :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
      <a-row v-if="hasModal" type="flex" justify="center">
        <a-col class="gutter-row r-text-left" :xs="{ span: 24 }">
          <h3 class="r-heading">
            Enter delivery address
          </h3>
        </a-col>
      </a-row>
      <a-form :class="{'r-form-white': !hasModal && !isStore}"
              class="ant-form ant-form-vertical"
              @submit="onModal"
              :form="form">
        <a-auto-complete
            :value="hasAddress ? address.address_line : ''"
            :size="size"
            style="width: 100%"
            :placeholder="'Enter your address...'"
            option-label-prop="title"
            @search="handleSearch">
          <a-input>
            <a-icon slot="prefix" type="environment"/>
            <a-button v-if="hasSubmit"
                      slot="suffix"
                      style="margin-right: -12px"
                      class="r-btn-secondary"
                      size="large"
                      type="secondary">
              Let's go
            </a-button>
          </a-input>
        </a-auto-complete>
      </a-form>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  components: {},
  props: {
    hasModal: {type: Boolean, required: false, default: false},
    isStore: {type: Boolean, required: false, default: false},
    hasSubmit: {type: Boolean, required: false, default: true},
    size: {type: String, required: false, default: 'large'},
  },
  data() {
    return {
      form: this.$form.createForm(this, {name: 'form_delivery'})
    }
  },
  computed: mapGetters({
    search: 'address/search',
    address: 'address/address',
    hasAddress: 'address/hasAddress',
  }),
  methods: {
    handleSearch(value) {
      this.dataSource = value ? this.onSearch(value) : [];
    },
    async onSearch(term) {
      await this.$store.dispatch('address/onSearch', {
        term: term
      });
    },
    onModal() {
      if (!this.hasModal) {
        let modal = {};
        modal.isVisible = true;
        modal.isClosable = true;
        modal.current = 'delivery';

        this.$store.dispatch('base/onModal', modal);
      }
    },
  },
};
</script>
