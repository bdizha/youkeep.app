<template>
  <router-link class="r-logo" to="/">
    <img class="r-hide-sm" :src="'/assets/' + (isDark ? 'icon_white': 'logo') + '.svg'"
         alt="Kshopit - It's Shopping Time!"/>
    <img class="r-hide-lg" :src="'/assets/' + (isDark ? 'icon_white': 'icon') + '.svg'"
         alt="Kshopit - It's Shopping Time!"/>
  </router-link>
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
