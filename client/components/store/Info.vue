<template>
  <a-row class="r-stores-tray" type="flex" justify="center"
         :gutter="24">
    <a-col :sm="{ span: 24 }" :lg="{ span: 24 }">
      <a-row class="r-mt-24" :gutter="24" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }">
          <strong>Trading hours:</strong>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }">
          <p class="r-text-normal" v-html="store.trading_hours"></p>
        </a-col>
      </a-row>
      <a-row :gutter="24" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }">
          <strong>Contact:</strong>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }">
          <p class="r-text-normal">{{ store.phone }}</p>
        </a-col>
      </a-row>
      <a-row :gutter="24" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }">
          <strong>Description:</strong>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }">
          <p class="r-text-normal" v-html="store.description"></p>
          <p class="r-text-normal" v-html="store.content_formatted"></p>
        </a-col>
      </a-row>
      <a-row :gutter="24" type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }">
          <strong>Website:</strong>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }">
          <a class="r-text-link" :href="store.url" target="_blank">
            {{ store.url }}
          </a>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
    import {mapGetters} from 'vuex'

    export default {
        name: 'r-store-info',
        components: {},
        props: {},
        data() {
            return {}
        },
        computed: mapGetters({
            store: 'base/store'
        }),
        created() {
            this.payload();
        },
        methods: {
            async payload() {
            },
        }
    };
</script>
