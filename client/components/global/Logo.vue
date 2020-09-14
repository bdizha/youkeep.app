<template>
  <nuxt-link class="r-logo" :class="{'r-logo__icon': isIcon}" to="/">
    <img class="r-hide-sm" :src="'/images/' + (isIcon ? 'icon-01': 'logo-01') + '.svg'"
         alt="Owami - It's Shopping Time!"/>
    <img class="r-hide-lg" :src="'/images/' + (isIcon ? 'icon-01': 'icon-02') + '.svg'"
         alt="Owami - It's Shopping Time!"/>
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
