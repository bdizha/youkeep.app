<template>
  <a-row :gutter="[24,24]" justify="start" type="flex">
    <a-col v-for="(article_category, index) in help.article_categories"
           :key="index"
           :lg="{ span:12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
           class="gutter-row"
    >
      <nuxt-link :to="'/help/category/' + article_category.slug">
      <a-card class="r-bg-white" hoverable>
        <a-row :gutter="[12,12]" align="bottom" justify="start" type="flex">
          <a-col :lg="{ span: 24 }"
                 :sm="{ span: 24 }" :xs="{ span: 24 }"
          >
            <h4 class="r-heading r-text-primary">
              {{ article_category.name }}
            </h4>
          </a-col>
          <a-col :lg="{ span: 24 }"
                 :sm="{ span: 24 }" :xs="{ span: 24 }"
          >
            <p class="r-text-normal">
              {{ article_category.content }}
            </p>
          </a-col>
        </a-row>
      </a-card>
      </nuxt-link>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-help',
  props: {
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
