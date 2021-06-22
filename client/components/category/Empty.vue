<template>
  <a-row :gutter="[24,24]" type="flex" justify="center"
         align="middle"
  >
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 24 }"
           :lg="{ span: 24 }"
    >
      <h3 class="r-heading">
        <span class="r-text-secondary">Get</span> vverything your <span class="r-text-primary">heart</span> desires
      </h3>
    </a-col>
    <a-col :xs="{ span: 24 }" :sm="{ span: 12 }"
           :md="{ span: span }"
           :lg="{ span: span }"
    >
      <a-button block
                size="default"
                type="secondary"
                class="r-btn-secondary"
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
