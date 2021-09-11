<template>
  <a-card class="r-bg-white">
    <a-row :gutter="[24,24]" justify="center" type="flex">
      <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
        <a-breadcrumb>
          <a-icon slot="separator" type="right"/>
          <a-breadcrumb-item v-if="hasStore" class="r-breadcrumb-item" :key="0">
            <nuxt-link :to="store.route">
              {{ store.name }}
            </nuxt-link>
          </a-breadcrumb-item>
          <a-breadcrumb-item class="r-breadcrumb-item"
                             v-for="(breadcrumb, index) in breadcrumbs"
                             :key="index"
          >
            <template v-if="breadcrumb.route">
              <nuxt-link :to="prefix + breadcrumb.route">
                {{ breadcrumb.name }}
              </nuxt-link>
            </template>
            <template v-if="!breadcrumb.route">
              {{ breadcrumb.name }}
            </template>
          </a-breadcrumb-item>
        </a-breadcrumb>
      </a-col>
    </a-row>
  </a-card>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-breadcrumbs',
  props: {
    breadcrumbs: { type: Array, required: true, default: () => [] },
    prefix: { type: String, required: false, default: null },
    hasClass: { type: Boolean, required: false, default: true }
  },
  data () {
    return {}
  },
  computed: mapGetters({
    store: 'base/store',
    hasStore: 'base/hasStore',
    processes: 'base/processes'
  }),
  created () {
    this.payload()
  },
  methods: {
    payload () {

    }
  }
}
</script>
