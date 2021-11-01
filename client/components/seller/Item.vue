<template>
  <div class="r-bg-dark r-text-left">
    <a-row :gutter="[12,12]" justify="start" align="middle" type="flex">
      <a-col :lg="{ span: 24 }" :md="{ span: 24}"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <div class="r-seller-meta">
          <p class="r-item-text r-text-white">
            {{ item.title.substring(0, 24) }}
          </p>
          <p v-if="hasIcon" class="r-item-text r-text-primary">
            {{ item.content }}
          </p>
          <div class="r-seller-avatar">
            <a-card class="r-bg-dark r-p-0 r-border-circle">
              <div class="r-p-6">
                <nuxt-img src="/images/icon_secondary.svg" width="36px"></nuxt-img>
              </div>
            </a-card>
          </div>
        </div>
      </a-col>
    </a-row>
  </div>
</template>
<script>
export default {
  name: 'r-seller-item',
  props: {
    hasIcon: {
      type: Boolean,
      required: false,
      default: true
    },
    item: {
      type: Object,
      required: true,
      default: () => {
      }
    }
  },
  data () {
    return {}
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
