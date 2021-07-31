<template>
  <a-row :gutter="[48,96]" align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-text-center"
    >
      <r-tabs active-key="customer" theme="primary"></r-tabs>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
           class="r-ph-24"
    >
      <a-card class="r-bg-white">
        <a-card-meta>
          <template slot="description">
            <a-row :gutter="[96,48]" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <a-row :gutter="[24,24]" align="top" justify="start" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                      The Spazamall Platform
                    </h4>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <h3 class="r-heading">
                      Get easy <span class="r-text-secondary">access</span> to powerful marketplace tools
                    </h3>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <p class="r-text-normal">
                      Forget about spending hours learning new software. The Spazamall platform makes it
                      super simple to view your marketplaces, update information, or track your inventory in real
                      time.
                    </p>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <p v-for="(feature, index) in features"
                       :key="index"
                       class="r-text-normal"
                    >
                      <a-icon slot="prefix" class="r-text-secondary" type="check"/>
                      {{ feature.content }}
                    </p>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <a-button class="r-btn-secondary"
                              size="large"
                              to="/register"
                              type="primary"
                              @click="onModal"
                    >
                      Set up your Store Today for free
                    </a-button>
                  </a-col>
                </a-row>
              </a-col>
              <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <r-avatar :dataSrc="'/images/content/screen-02-primary.png'" :size="300" class="r-avatar-block"
                ></r-avatar>
              </a-col>
            </a-row>
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-customer-hiw',
  props: {},
  data () {
    return {
      features: [
        { content: 'Access Spazamall via mobile or desktop - we go where you go' },
        { content: 'Quickly answer categorization requests from your team' },
        { content: 'Contact your team with our simple messaging feature' },
        { content: 'Get operating support at any time within our work ours' }
      ]
    }
  },
  mounted () {
  },
  methods: {
    onModal () {
      const modal = {}
      modal.isVisible = true
      modal.isClosable = false
      modal.current = 'register'
      this.$store.dispatch('base/onModal', modal)
    }
  },
}
</script>
