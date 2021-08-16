<template>
  <div class="r-notice">
    <div class="r-status-update">
      <h4 class="r-heading-light r-text-uppercase">
        <a-icon type="check-circle"/>
        <span>{{ notice }}</span>
      </h4>
      <h3 v-if="hasThanks" class="r-heading-light r-text-uppercase">Thank you!</h3>
    </div>
  </div>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-notice',
  props: {
    hasThanks: { type: Boolean, required: false, default: false }
  },
  data () {
    return {}
  },
  computed: mapGetters({
    notice: 'base/notice',
    hasNotice: 'base/hasNotice'
  }),
  created () {
  },
  methods: {}
}
</script>
