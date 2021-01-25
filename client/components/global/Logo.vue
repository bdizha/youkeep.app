<template>
  <nuxt-link class="r-logo" :class="{'r-logo__icon': isIcon}" to="/">
    <img class="r-hide-sm" :src="'/images/logo.png'"
         alt="Shopple - It's Shopping Time!"/>
    <img class="r-hide-lg" :src="'/images/logo.png'"
         alt="Shopple - It's Shopping Time!"/>
  </nuxt-link>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  props: {
    isIcon: {type: Boolean, required: false, default: false}
  },
  name: 'r-logo',
  data() {
    return {};
  },
  created() {
  },
  computed: mapGetters({
    isDark: 'base/isDark'
  }),
  methods: {},
};
</script>
