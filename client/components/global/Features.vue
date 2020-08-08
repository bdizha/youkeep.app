<template>
  <a-row justify="center" type="flex">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: span }" :lg="{span: span}">
      <a-row type="flex" justify="center"
             class="r-radius-right-white r-text-center">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
               :lg="{ span: 24 }" class="r-padding-48">
          <a-row :gutter="[48,48]" type="flex" justify="start"
                 class="r-radius-right-white">
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                   :lg="{span: 8}">
              <div class="r-icon">
                <a-icon type="shop"/>
              </div>
              <h3 class="r-heading-light">
                Find the stores that you want
              </h3>
              <p class="r-text-normal">
                This is a new shopping service with a completely re-imagined experiences.
              </p>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                   :lg="{span: 8}">
              <div class="r-icon">
                <a-icon type="shopping"/>
              </div>
              <h3 class="r-heading-light">
                Effortless shopping time
              </h3>
              <p class="r-text-normal">
                Get new products served to you based on your tastes and what’s moving the community around you.
              </p>
            </a-col>
            <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
                   :lg="{span: 8}">
              <div class="r-icon">
                <a-icon type="clock-circle"/>
              </div>
              <h3 class="r-heading-light">
                Instant checkout process
              </h3>
              <p class="r-text-normal">
                Easily checkout your cart with a one-click option and complete your order at a record speed.
              </p>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-features',
  props: {
    span: {type: Number, required: false, default: 18}
  },
  data() {
    return {};
  },
  created() {
  },
  computed: {},
  methods: {},
};
</script>