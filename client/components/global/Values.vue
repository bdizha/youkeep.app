<template>
  <a-card class="r-bg-secondary-light">
    <a-card-meta>
      <template slot="description">
        <div class="r-mv-48">
          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
            <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-row :gutter="[24,24]" align="middle" class="r-text-left" justify="center" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h4 class="r-heading-light r-text-secondary r-text-uppercase">
                    Our values
                  </h4>
                </a-col>
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <h2 class="r-heading">
                    We make handling your <span class="r-text-secondary">marketplaces</span> more human
                  </h2>
                </a-col>
              </a-row>
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
                  <a-row :gutter="[24,24]" align="middle" class="r-text-left" justify="center" type="flex">
                    <a-col :lg="{ span: 4 }" :md="{ span: 6 }"
                           :sm="{ span: 9 }"
                           :xs="{ span: 8 }"
                    >
                      <r-avatar :dataSrc="'/images/icons/' + value.image" :size="60"></r-avatar>
                    </a-col>
                    <a-col :lg="{ span: 20 }" :md="{ span: 18 }"
                           :sm="{ span: 16 }"
                           :xs="{ span: 16 }"
                    >
                      <h3 class="r-heading-light">
                        {{ value.title }}
                      </h3>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </div>
      </template>
    </a-card-meta>
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
          title: 'We put our customers first',
          image: 'about-01.svg'
        },
        {
          title: 'We do the right thing',
          image: 'about-02.svg'
        },
        {
          title: 'We hold ourselves to high standards',
          image: 'about-03.svg'
        }
      ]
    }
  },
  mounted () {
    this.modal = this.$store.state.modal
  },
  methods: {}
}
</script>
