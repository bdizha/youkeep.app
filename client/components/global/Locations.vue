<template>
  <a-card class="r-bg-secondary r-border-none r-border-radius-none">
    <a-card-meta>
      <template slot="description">
        <a-row class="r-mv-48" justify="center" type="flex">
          <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
            <a-row :gutter="[24,24]" justify="center" type="flex">
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-text-center"
              >
                <h3 class="r-heading-light r-text-uppercase r-text-primary">
                  Where we're located
                </h3>
              </a-col>
              <a-col :lg="{span: 20}" :md="{span: 20}" :sm="{span: 24}" :xs="{span: 24}">
                <a-row :gutter="[24,24]" justify="start" type="flex">
                  <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
                  >
                    <div class="r-checked-item">
                      <a-icon class="r-checked-item-icon" type="environment"/>
                      <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                        >
                          <h4 class="r-heading">
                            Johannesburg,<br>
                            South Africa
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                        >
                          <a class="r-text-white" href="mailto:info@graphigem.com">
                            info@graphigem.com
                          </a>
                        </a-col>
                      </a-row>
                    </div>
                  </a-col>
                  <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
                  >
                    <div class="r-checked-item">
                      <a-icon class="r-checked-item-icon" type="environment"/>
                      <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                        >
                          <h4 class="r-heading">
                            London,<br>
                            United Kingdom
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                        >
                          <a class="r-text-white" href="mailto:info@graphigem.com">
                            info@graphigem.com
                          </a>
                        </a-col>
                      </a-row>
                    </div>
                  </a-col>
                  <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
                  >
                    <div class="r-checked-item">
                      <a-icon class="r-checked-item-icon" type="environment"/>
                      <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                        >
                          <h4 class="r-heading">
                            Sydney,<br>
                            Australia
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                        >
                          <a class="r-text-white" href="mailto:info@graphigem.com">
                            Coming soon
                          </a>
                        </a-col>
                      </a-row>
                    </div>
                  </a-col>
                  <a-col :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 12 }" :xs="{ span: 12 }"
                  >
                    <div class="r-checked-item">
                      <a-icon class="r-checked-item-icon" type="environment"/>
                      <a-row :gutter="[12,12]" align="top" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                        >
                          <h4 class="r-heading">
                            Toronto,<br>
                            Canada
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                        >
                         <p class="r-text-normal">
                           Coming soon
                         </p>
                        </a-col>
                      </a-row>
                    </div>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </template>
    </a-card-meta>
  </a-card>
</template>
<script>
export default {
  layout: 'default',
  name: 'r-locations',
  props: {},
  data () {
    return {
      locations: [
        {
          title: 'South Africa',
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
  methods: {},
}
</script>
