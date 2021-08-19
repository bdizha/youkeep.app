<template>
  <a-card class="r-bg-secondary-light r-pull-h-24 r-border-none">
    <a-row class="r-mv-48" justify="center" type="flex">
      <a-col :lg="{span: 16}" :md="{span: 18}" :sm="{span: 24}" :xs="{span: 24}">
        <a-row :gutter="[24,24]" justify="center" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }" class="r-text-center"
          >
            <h3 class="r-heading-light r-text-uppercase r-text-primary">
              Where we're located
            </h3>
          </a-col>
          <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
            <a-row :gutter="[24,24]" justify="start" type="flex">
              <a-col v-for="(location, index) in locations"
                     :key="index"
                     :lg="{ span: 6 }" :md="{ span: 6 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
              >
                <a-card class="r-bg-white">
                  <div class="r-checked-item">
                    <a-icon class="r-checked-item-icon" type="environment"/>
                    <a-row :gutter="[6,6]" align="top" justify="start" type="flex">
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                      >
                        <h4 class="r-heading-light r-text-dark">
                          {{ location.city }}
                        </h4>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                      >
                        <h4 class="r-heading r-text-blue">
                          {{ location.continent }}
                        </h4>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                      >
                        <p class="r-text-normal r-text-blue">
                          {{ location.email }}
                        </p>
                      </a-col>
                    </a-row>
                  </div>
                </a-card>
              </a-col>
            </a-row>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
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
          city: 'Cape Town',
          continent: 'Africa',
          email: 'info@Brickcent.com'
        },
        {
          city: 'Johannesburg',
          continent: 'Africa',
          email: 'info@Brickcent.com'
        },
        {
          city: 'Dubai',
          continent: 'Middle East',
          email: 'partner@Brickcent.com'
        },
        {
          city: 'Mumbai',
          continent: 'Asia',
          email: 'partner@Brickcent.com'
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
