<template>
  <a-row type="flex" justify="start">
    <a-col class="gutter-row" :xs="{ span: 12 }" :sm="{ span: 12 }" :md="{ span: 12 }" :lg="{ span: 12 }">
      <a-button v-on:click="onModal"
                size="default"
                type="primary"
                html-type="button"
                class="r-btn-bordered-black">
        Add new
      </a-button>
    </a-col>
  </a-row>
</template>
<script>
  export default {
    name: 'r-account-address-add',
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
    computed: {},
    mounted() {
    },
    methods: {
      onModal() {
        this.modal.isVisible = true;
        this.modal.current = 'account-address';
        this.modal.address = null;
        this.$store.dispatch('app/onModal', modal);
      }
    }
  };
</script>
