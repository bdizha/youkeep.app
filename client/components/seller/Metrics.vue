<template>
  <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <h2 class="r-heading-light r-text-primary">
        Why Addtract?
      </h2>
    </a-col>
    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <p class="r-text-medium">
        Addtract is the leading product discovery and sourcing platform where retailers and suppliers discover, connect, and grow their business.
      </p>
    </a-col>
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="start" type="flex">
        <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-primary-light">
            <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="start" type="flex">
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <r-avatar :dataSrc="'/images/content/12.svg'" :size="90" class="r-avatar-auto"
                ></r-avatar>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h2 class="r-heading-light">
                  <a-icon class="r-text-primary" type="up"/>
                  <span class="r-number r-icon-effect-secondary">36</span>
                  <span class="r-subscript r-text-primary">%</span>
                </h2>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <p class="r-text-medium">
                  <span class="r-text-primary">Increase</span> in conversion rate
                </p>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-primary-light">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="start" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <r-avatar :dataSrc="'/images/content/14.svg'" :size="90" class="r-avatar-auto"
                    ></r-avatar>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <h2 class="r-heading-light">
                      <a-icon class="r-text-primary" type="up"/>
                      <span class="r-number r-icon-effect-secondary">48</span>
                      <span class="r-subscript r-text-primary">%</span>
                    </h2>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <p class="r-text-medium">
                      <span class="r-text-primary">Increase</span> in returning orders
                    </p>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 8 }" :md="{ span: 8 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-primary-light">
            <a-card-meta>
              <template slot="description">
                <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="start" type="flex">
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <r-avatar :dataSrc="'/images/content/15.svg'" :size="90" class="r-avatar-auto"
                    ></r-avatar>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"

                  >
                    <h2 class="r-heading-light">
                      <a-icon class="r-text-primary" type="up"/>
                      <span class="r-number r-icon-effect-secondary">24</span>
                      <span class="r-subscript r-text-primary">%</span>
                    </h2>
                  </a-col>
                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                         :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <p class="r-text-medium">
                      <span class="r-text-primary">Increase</span> in business volume
                    </p>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-seller-metrics',
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
