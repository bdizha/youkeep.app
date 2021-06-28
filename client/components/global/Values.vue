<template>
  <a-card class="r-bg-secondary-light">
    <a-card-meta>
      <template slot="description">
        <div class="r-mv-48">
          <a-row :gutter="[24,24]" type="flex" justify="start" align="middle">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                   :lg="{ span: 12 }"
            >
              <a-row class="r-text-left" :gutter="[24,24]" type="flex" justify="center" align="middle">
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                >
                  <h4 class="r-heading-light r-text-primary r-text-uppercase">
                    Our values
                  </h4>
                </a-col>
                <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                >
                  <h2 class="r-heading">
                    We make handling your <span class="r-text-secondary">marketplaces</span> more human
                  </h2>
                </a-col>
              </a-row>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                   :lg="{ span: 12 }"
            >
              <a-row class="r-text-left" :gutter="[24,24]" type="flex" justify="center" align="middle">
                <a-col v-for="(value, index) in values"
                       :key="index"
                       :xs="{ span: 24 }" :sm="{ span: 24 }"
                       :md="{ span: 24 }"
                       :lg="{ span: 24 }"
                >
                  <a-row class="r-text-left" :gutter="[24,24]" type="flex" justify="center" align="middle">
                    <a-col :xs="{ span: 8 }" :sm="{ span: 9 }"
                           :md="{ span: 6 }"
                           :lg="{ span: 4 }"
                    >
                      <r-avatar :dataSrc="'/images/icons/' + value.image" :size="60"></r-avatar>
                    </a-col>
                    <a-col :xs="{ span: 16 }" :sm="{ span: 16 }"
                           :md="{ span: 18 }"
                           :lg="{ span: 20 }"
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
