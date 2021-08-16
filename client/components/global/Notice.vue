<template>
  <div class="r-notice">
    <a-card class="r-bg-blue">
      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
        <a-col :xs="{ span: 24 }" class="r-text-center">
          <h4 class="r-heading-light r-text-white">
            <a-icon type="check-circle"/>
            <span>{{ notice }} </span>
          </h4>
        </a-col>
        <a-col v-if="hasThanks" :xs="{ span: 24 }" class="r-text-center">
          <h3 class="r-heading-light r-text-uppercase">Thank you!</h3>
        </a-col>
      </a-row>
    </a-card>
  </div>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-notice',
  props: {
    hasThanks: { type: Boolean, required: false, default: false }
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
    if (this.hasNotice) {
      this.$notification.open({
        message: this.notice
      })
    }
  },
  methods: {}
}
</script>
