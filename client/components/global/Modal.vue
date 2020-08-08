<template>
  <a-modal :class="cssClass"
           :mask-closable="maskClosable"
           :after-close="onClose"
           :closable="closable"
           v-model="modal.current == current">
    <template slot="footer">
      <a-row type="flex" justify="center" align="middle">
        <a-col class="gutter-row" :span="24">
          <h4 class="r-heading r-text-red r-text-center">
            <a-icon type="gift"/>
            <span>FREE Deliveries For 1 Week with Kshop <br></span>
          </h4>
        </a-col>
      </a-row>
    </template>
    <slot/>
    <r-spinner v-if="isProcessing" :is-absolute="true"></r-spinner>
  </a-modal>
</template>
<script>
  import {mapGetters} from "vuex";

  export default {
    name: 'r-modal',
    props: {
      hasFooter: {type: Boolean, required: false, default: false},
      maskClosable: {type: Boolean, required: false, default: true},
      closable: {type: Boolean, required: false, default: true},
      current: {type: String, required: false, default: null},
      cssClass: {type: String, required: false, default: null},
    },
    data() {
      return {
        isProcessing: false,
      };
    },
    mounted() {
      this.payload();
    },
    computed: mapGetters({
      modal: 'app/modal',
      cart: 'cart/cart',
    }),
    methods: {
      payload() {
        let $this = this;
        setTimeout(function () {
          $this.isProcessing = false;
        }, 300);
      },
      onClose(event) {
        let modal = {};
        modal.isVisible = false;
        modal.current = null;
        modal.product = null;

        this.$store.dispatch('store/onProduct', modal.product);
        this.$store.dispatch('app/onModal', modal);
      }
    },
  };
</script>
