<template>
  <a-card class="r-bg-white">
    <a-row :gutter="[24,24]" align="bottom" justify="start" type="flex">
      <a-col :lg="{ span: 24 }"
             :sm="{ span: 24 }" :xs="{ span: 24 }"
      >
        <nuxt-link :to="'/help/category/' + articleCategory.slug">
          <h3 class="r-heading">
            {{ articleCategory.name }}
          </h3>
        </nuxt-link>
      </a-col>
      <a-col v-for="(article, index) in articleCategory.articles"
             :key="index"
             :lg="{ span: 24 }"
             :sm="{ span: 24 }" :xs="{ span: 24 }"
      >
        <r-help-article :article="article"></r-help-article>
      </a-col>
    </a-row>
  </a-card>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-help-category',
  props: {
    articleCategory: { type: Object, required: true }
  },
  data () {
    return {}
  },
  mounted () {
  },
  computed: mapGetters({
    help: 'article/help'
  }),
  methods: {}
}
</script>
