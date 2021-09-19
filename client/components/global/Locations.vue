<template>
  <a-card class="r-bg-secondary-light r-pull-h-24 r-border-none">
    <div class="r-mv-96">
      <a-row justify="center" type="flex">
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
                          <h4 class="r-heading-light r-text-uppercase">
                            {{ location.city }}
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                        >
                          <h4 class="r-heading r-text-primary">
                            {{ location.country }}
                          </h4>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                        >
                          <p class="r-text-normal">
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
    </div>
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
          city: 'Mumbai',
          country: 'India',
          email: 'info@paise.com'
        },
        {
          city: 'Singapore',
          country: 'Singapore',
          email: 'partner@paise.com'
        },
        {
          city: 'Jakarta',
          country: 'Indonesia',
          email: 'partner@paise.com'
        },
        {
          city: 'Kuala Lumpur',
          country: 'Malaysia',
          email: 'partner@paise.com'
        },
        {
          city: 'Hanoi',
          country: 'Vietnam',
          email: 'partner@paise.com'
        },
        {
          city: 'Dhaka',
          country: 'Bangladesh',
          email: 'info@paise.com'
        },
        {
          city: 'Manila',
          country: 'Philippines',
          email: 'partner@paise.com'
        },
        {
          city: 'Islamabad',
          country: 'Pakistan',
          email: 'info@paise.com'
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
