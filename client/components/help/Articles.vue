<template>
  <a-row :gutter="[24,24]" justify="start" type="flex">
    <a-col v-for="(article, index) in articles"
           :key="index"
           :lg="{ span:8 }" :md="{ span: 8 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
           class="gutter-row"
    >
      <r-help-article :article="article"></r-help-article>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-help-articles',
  props: {
    articles: { type: Array, required: true, default: () => [] }
  },
  components: {},
  data () {
    return {}
  },
  computed: mapGetters({
    help: 'article/help'
  }),
  mounted () {
  },
  methods: {}
}
</script>
