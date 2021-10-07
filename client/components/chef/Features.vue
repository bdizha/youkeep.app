<template>
  <div class="r-mt-48 r-text-left">
    <a-row :gutter="[48,48]" align="middle" justify="start" type="flex">
      <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}" class="r-text-center">
        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}" class="r-text-center">
            <h2 class="r-heading">
              Cook whenever you're inspired to make food that people love.
            </h2>
          </a-col>
          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}" class="r-text-center">
            <p class="r-text-medium">
              Partner with us to introduce "Cooked Meal" service to your customers and multiply orders.
            </p>
          </a-col>
        </a-row>
      </a-col>
      <a-col v-for="(feature, index) in features"
             :key="index"
             :lg="{ span: 8 }" :md="{ span: 8 }" :sm="{ span: 12 }" :xs="{ span: 24 }"
      >
        <a-card class="r-card-secondary">
          <a-card-meta>
            <template slot="description">
              <r-circles align="top" theme="secondary"></r-circles>
              <r-circles align="bottom" theme="secondary"></r-circles>
              <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="center"
                     type="flex"
              >
                <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <div class="r-icon r-icon-secondary">
                    <a-icon :type="feature.icon"/>
                  </div>
                </a-col>
                <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <h3 class="r-heading">
                    {{ feature.heading }}
                  </h3>
                </a-col>
                <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-medium">
                    {{ feature.summary }}
                  </p>
                </a-col>
                <a-col :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }">
                  <p class="r-text-center">
                    {{ feature.content }}
                  </p>
                </a-col>
              </a-row>
            </template>
          </a-card-meta>
        </a-card>
      </a-col>
    </a-row>
  </div>
</template>
<script>
export default {
  name: 'r-chef-features',
  props: {},
  data () {
    return {
      features: [
        {
          heading: '<span class="r-text-secondary">Earn</span> real money',
          icon: 'gold',
          summary: 'It’s completely free to apply. Many chefs make around ZAR10,000 per week.',
          content: 'Expand revenue by building experiences that meet your customer\'s expectations.'
        },
        {
          heading: '<span class="r-text-secondary">Be</span> your own boss',
          icon: 'compass',
          summary: 'Design your own menu, set your own prices and work when you\'re inspired.',
          content: 'We’ll help you get more orders, payments, order tracking and customer support.'
        },
        {
          heading: '<span class="r-text-secondary">Serve</span> happy customers',
          icon: 'history',
          summary: 'Spazastop connects local and talented cooks and merchants with online customers.',
          content: 'We\'ll provide you with marketing support you need to grow your business.'
        }
      ]
    }
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
