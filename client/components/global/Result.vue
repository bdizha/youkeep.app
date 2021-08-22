<template>
  <div class="r-status-update">
    <a-row v-if="hasResult" align="middle" justify="center" type="flex">
      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <h4 class="r-heading r-text-secondary">
          <a-icon type="check-circle"/>
          <span>{{ result.title }}</span>
        </h4>
      </a-col>
      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <p class="r-text-normal" v-html="result.content"></p>
      </a-col>
    </a-row>
  </div>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-result',
  props: {},
  data () {
    return {}
  },
  computed: mapGetters({
    result: 'form/result',
    hasResult: 'form/hasResult',
    processes: 'form/processes'
  }),
  created () {
  },
  methods: {}
}
</script>
