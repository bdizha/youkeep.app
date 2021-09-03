<template>
  <a-row :gutter="[24,24]" align="middle" justify="center"
         type="flex"
  >
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <h1 class="r-heading">
        <span class="r-text-secondary">Get</span> everything your <span class="r-text-primary">heart</span> desires
      </h1>
    </a-col>
    <a-col :lg="{ span: span }" :md="{ span: span }"
           :sm="{ span: 12 }"
           :xs="{ span: 24 }"
    >
      <a-button block
                class="r-btn-secondary"
                size="large"
                type="secondary"
      >
        <a-icon type="clock-circle"/>
        Coming soon
      </a-button>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-empty',
  components: {},
  props: {
    span: { type: Number, required: false, default: 24 },
  },
  data () {
    return {
      hasData: true,
      isProcessing: true,
      width: 18
    }
  },
  computed: mapGetters({
    user: 'auth/user',
    processes: 'base/processes',
    hasCategories: 'base/hasCategories',
  }),
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
    }
  }
}
</script>
