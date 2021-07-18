<template>
  <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
           :sm="{ span: 12 }"
           :xs="{ span: 12 }"
    >
      <a-card class="r-bg-secondary-light">
        <a-card-meta>
          <template slot="description">
            <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 8 }" :md="{ span: 10 }"
                     :sm="{ span: 12 }"
                     :xs="{ span: 12 }"
              >
                <r-avatar :dataSrc="'/images/content/12.svg'" :size="90" class="r-avatar-auto"
                ></r-avatar>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h1 class="r-text-secondary">
                  <a-icon type="up"/>
                  <span class="r-number r-icon-effect-secondary">36</span>
                  <span class="r-subscript r-text-secondary">%</span>
                </h1>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h3 class="r-heading">
                  <span class="r-text-primary">Increase</span> in conversion rate
                </h3>
              </a-col>
            </a-row>
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
           :sm="{ span: 12 }"
           :xs="{ span: 12 }"
    >
      <a-card class="r-bg-secondary-light">
        <a-card-meta>
          <template slot="description">
            <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 8 }" :md="{ span: 10 }"
                     :sm="{ span: 12 }"
                     :xs="{ span: 12 }"
              >
                <r-avatar :dataSrc="'/images/content/14.svg'" :size="90" class="r-avatar-auto"
                ></r-avatar>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h1 class="r-text-secondary">
                  <a-icon type="up"/>
                  <span class="r-number r-icon-effect-secondary">48</span>
                  <span class="r-subscript r-text-secondary">%</span>
                </h1>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h3 class="r-heading">
                  <span class="r-text-primary">Increase</span> in returning orders
                </h3>
              </a-col>
            </a-row>
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
           :sm="{ span: 12 }"
           :xs="{ span: 12 }"
    >
      <a-card class="r-bg-secondary-light">
        <a-card-meta>
          <template slot="description">
            <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
              <a-col :lg="{ span: 8 }" :md="{ span: 10 }"
                     :sm="{ span: 12 }"
                     :xs="{ span: 12 }"
              >
                <r-avatar :dataSrc="'/images/content/15.svg'" :size="90" class="r-avatar-auto"
                ></r-avatar>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"

              >
                <h1 class="r-text-secondary">
                  <a-icon type="up"/>
                  <span class="r-number r-icon-effect-secondary">24</span>
                  <span class="r-subscript r-text-secondary">%</span>
                </h1>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h3 class="r-heading">
                  <span class="r-text-primary">Increase</span> in sales volume
                </h3>
              </a-col>
            </a-row>
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
           :sm="{ span: 12 }"
           :xs="{ span: 12 }"
    >
      <r-merchant-benefits></r-merchant-benefits>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-merchant-metrics',
  props: {},
  data () {
    return {}
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
