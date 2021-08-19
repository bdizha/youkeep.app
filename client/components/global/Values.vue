<template>
  <a-card class="r-bg-primary-light">
    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <h3 class="r-heading-light r-text-dark r-text-uppercase">
          Our values
        </h3>
      </a-col>
      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
             :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <h4 class="r-heading r-text-dark">
          Making property <span class="r-text-blue">investment</span>
          accessible to everyone.
        </h4>
      </a-col>
      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
             :xs="{ span: 24 }"
      >
        <a-row :gutter="[24,24]" align="middle" class="r-text-left" justify="center" type="flex">
          <a-col v-for="(value, index) in values"
                 :key="index"
                 :lg="{ span: 24 }" :md="{ span: 24 }"
                 :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <div class="r-avatar-item">
              <r-avatar class="r-avatar-item-icon" :dataSrc="'/images/icons/' + value.image" :size="42"></r-avatar>
              <span class="r-text-dark">{{ value.title }}</span>
            </div>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
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
          title: 'We are customer centric',
          image: 'about-01.svg'
        },
        {
          title: 'We do the right thing',
          image: 'about-02.svg'
        },
        {
          title: 'We keep high standards',
          image: 'about-03.svg'
        }
      ]
    }
  },
  mounted () {
  },
  methods: {}
}
</script>
