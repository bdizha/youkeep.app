<template>
  <nuxt-link class="r-logo" to="/">
    <img class="r-hide-sm" :src="'/images/' + (isDark ? 'icon_white': 'logo') + '.svg'"
         alt="Kshopit - It's Shopping Time!"/>
    <img class="r-hide-lg" :src="'/images/' + (isDark ? 'icon_white': 'icon') + '.svg'"
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
