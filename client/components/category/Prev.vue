<template>
  <a-row align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 20 }" :xs="{ span: 24 }"
           class="r-ph-24"
    >
      <a-button class="r-btn-bordered-grey" icon="left" type="secondary"
                @click="onPrev"
      >
        Back
      </a-button>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-category-prev',
  props: {},
  data () {
    return {
      fetchBy: {
        id: 1
      }
    }
  },
  computed: mapGetters({
    category: 'base/category',
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {
    },
    onPrev () {
      this.$router.go(-1)
    }
  }
}
</script>
