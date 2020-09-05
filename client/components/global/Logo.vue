<template>
  <nuxt-link class="r-logo" to="/">
    <img class="r-hide-sm" :src="'/assets/k-icon.png'"
         alt="Kshopit - It's Shopping Time!"/>
    <img class="r-hide-lg" :src="'/assets/k-icon.png'"
         alt="Kshopit - It's Shopping Time!"/>
  </nuxt-link>
</template>
<script>
import {mapGetters} from "vuex";

export default {
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
