<template>
  <div v-if="hasNotice" class="r-store-notice">
    <div class="r-status-update">
      <h4 class="r-heading r-text-secondary">
        <a-icon type="check-circle"/>
        <span>{{ notice }} </span>
      </h4>
      <h3 v-if="hasThanks" class="r-heading-light r-text-uppercase">Thank you!</h3>
    </div>
  </div>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-notice',
  props: {
    hasThanks: { type: Boolean, required: false, default: false },
    process: { type: String, required: false, default: '' },
  },
  data () {
    return {}
  },
  computed: mapGetters({
    notice: 'base/notice',
    hasNotice: 'base/hasNotice',
    processes: 'base/processes'
  }),
  created () {
  },
  methods: {},
}
</script>
