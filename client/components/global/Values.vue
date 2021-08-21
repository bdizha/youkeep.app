<template>
  <a-card class="r-bg-primary-light r-pull-h-24 r-border-none">
    <div class="r-mv-48">
      <a-row class="r-text-center" :gutter="[48,48]" align="middle" justify="start" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row class="r-text-center" :gutter="[24,24]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h2 class="r-heading-light r-text-secondary">
                Our values
              </h2>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-medium r-text-dark">
                Making property <span class="r-text-yellow">investment</span>
                <span class="r-text-primary">accessible</span> to everyone.
              </p>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="middle" class="r-text-left" justify="center" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <r-avatar data-src="/images/content/apartment-5.jpg" :size="300" class="r-avatar-block"
              ></r-avatar>
            </a-col>
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" class="r-text-left" justify="center" type="flex">
                <a-col v-for="(value, index) in values"
                       :key="index"
                       :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <div class="r-checked-item">
                    <a-icon class="r-checked-item-icon" type="check"></a-icon>
                    <span class="r-text-bold">{{ value.title }}</span>
                    <span class="r-text-dark">{{ value.content }}</span>
                  </div>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </div>
  </a-card>
</template>
<script>
export default {
  layout: 'default',
  name: 'r-values',
  props: {},
  data () {
    return {
      values: [
        {
          title: 'Accessible',
          content: 'Equal access to high-yield savings rates and affordable credit that grows.'
        },
        {
          title: 'Transparent',
          content: 'Deliver open and timely communications.'
        },
        {
          title: 'Flexible',
          content: 'Listen, collaborate, improve. Repeat.'
        },
        {
          title: 'Bold',
          content: 'Ready to take on the day’s challenge.'
        },
        {
          title: 'Authentic',
          content: 'Remove fees, fine print, and complex systems.'
        },
        {
          title: 'Supportive',
          content: 'Connect with customers and each other.'
        }
      ]
    }
  },
  mounted () {
  },
  methods: {}
}
</script>
