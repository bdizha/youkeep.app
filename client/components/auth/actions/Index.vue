<template>
  <a-row class="r-margin-bottom-24" v-show="!isLoggedIn" :gutter="24" type="flex" justify="center"
         align="middle">
    <a-col :xs="{span: 12}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 12}">
      <r-auth-actions-login :size="'default'" :instruction="'Have an account?'"></r-auth-actions-login>
    </a-col>
    <a-col :xs="{span: 12}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 12}">
      <r-auth-actions-register :size="'default'" :instruction="'New here?'"></r-auth-actions-register>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-auth-actions',
  props: {},
  data() {
    return {};
  },
  computed: mapGetters({
    isLoggedIn: 'auth/isLoggedIn'
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    onModal(current) {
      let modal = {};
      modal.isVisible = true;
      modal.isClosable = true;
      modal.current = current;

      this.$store.dispatch('base/onModal', modal);
    },
  },
}
</script>
