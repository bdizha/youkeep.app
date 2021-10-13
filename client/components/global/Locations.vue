<template>
  <a-row justify="center" type="flex">
    <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
      <a-row :gutter="[24,24]" justify="center" type="flex">
        <a-col :lg="{span: 12}" :md="{span: 12}" :sm="{span: 24}" :xs="{span: 24}">
          <a-row :gutter="[12,12]" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
              <h4 class="r-heading-light r-text-uppercase">
                Top Locations
              </h4>
            </a-col>
            <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
              <a-row :gutter="[6,6]" justify="start" type="flex">
                <a-col v-for="(city, index) in cities"
                       :key="index"
                       v-if="index < 14"
                       :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                >
                  <nuxt-link class="r-text-medium" :to="`/location/${city.slug}`">
                    {{ city.name }}
                  </nuxt-link>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{span: 12}" :md="{span: 12}" :sm="{span: 24}" :xs="{span: 24}">
          <a-row :gutter="[12,12]" justify="start" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :xs="{ span: 24}">
              <h4 class="r-heading-light r-text-uppercase">
                Top Cuisines
              </h4>
            </a-col>
            <a-col :lg="{span: 24}" :md="{span: 24}" :sm="{span: 24}" :xs="{span: 24}">
              <a-row :gutter="[6,6]" justify="start" type="flex">
                <a-col v-for="(serve, index) in cuisines"
                       :key="index"
                       v-if="index < 14"
                       :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
                >
                  <nuxt-link class="r-text-medium r-text-capitalize" :to="`/cuisine/${serve.toLowerCase()}`">
                    {{ serve }} near me
                  </nuxt-link>
                </a-col>
              </a-row>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  layout: 'default',
  name: 'r-locations',
  props: {},
  data () {
    return {
      cities: [
        {
          name: 'Buffalo City',
          slug: 'buffalo-city'
        },
        {
          name: 'Buffalo City',
          slug: 'buffalo-city'
        },
        {
          name: 'Buffalo City',
          slug: 'buffalo-city'
        },
        {
          name: 'Buffalo City',
          slug: 'buffalo-city'
        },
        {
          name: 'Buffalo City',
          slug: 'buffalo-city'
        },
        {
          name: 'Buffalo City',
          slug: 'buffalo-city'
        },
        {
          name: 'Buffalo City',
          slug: 'buffalo-city'
        },
        {
          name: 'Buffalo City',
          slug: 'buffalo-city'
        },
        {
          name: 'Buffalo City',
          slug: 'buffalo-city'
        },
        {
          name: 'Buffalo City',
          slug: 'buffalo-city'
        },
        {
          name: 'Buffalo City',
          slug: 'buffalo-city'
        },
        {
          name: 'Buffalo City',
          slug: 'buffalo-city'
        },
        {
          name: 'Buffalo City',
          slug: 'buffalo-city'
        },
        {
          name: 'Buffalo City',
          slug: 'buffalo-city'
        },
        {
          name: 'Buffalo City',
          slug: 'buffalo-city'
        }
      ],
      cuisines: [
        'African',
        'All',
        'American',
        'Caribbean',
        'Chinese',
        'Healthy',
        'Indian',
        'Italian',
        'Japanese',
        'Korean',
        'Latin American',
        'Mediterranean',
        'Mexican',
        'Middle Eastern',
        'Nepalese',
        'Pakistani',
        'Southeast Asian',
        'Southern',
        'Specialty'
      ]
    }
  },
  mounted () {
    this.modal = this.$store.state.modal
  },
  methods: {}
}
</script>
