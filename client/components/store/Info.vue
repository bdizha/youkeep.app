<template>
  <a-row :gutter="24" class="r-sellers-tray" justify="center"
         type="flex"
  >
    <a-col :lg="{ span: 24 }" :sm="{ span: 24 }">
      <a-row :gutter="24" align="middle" class="r-mt-24" justify="start" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <strong>Trading hours:</strong>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-normal" v-html="store.trading_hours"></p>
        </a-col>
      </a-row>
      <a-row :gutter="24" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <strong>Contact:</strong>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-normal">{{ store.phone }}</p>
        </a-col>
      </a-row>
      <a-row :gutter="24" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <strong>Description:</strong>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <p class="r-text-normal" v-html="store.description"></p>
          <p class="r-text-normal" v-html="store.content_formatted"></p>
        </a-col>
      </a-row>
      <a-row :gutter="24" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <strong>Website:</strong>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a :href="store.url" class="r-text-link" target="_blank">
            {{ store.url }}
          </a>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-store-info',
  components: {},
  props: {},
  data () {
    return {
      list: [
        {
          title: 'Trading Hours',
          content: this.store.trading_hours
        },
        {
          title: 'Contact',
          content: this.store.phone
        },
        {
          title: 'Description',
          content: this.store.content_formatted
        },
        {
          title: 'Website',
          content: this.store.url
        }
      ]
    }
  },
  computed: mapGetters({
    store: 'base/store'
  }),
  created () {
    this.payload()
  },
  methods: {
    async payload () {
    },
  }
}
</script>
