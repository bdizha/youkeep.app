<template>
  <a-row justify="center" type="flex">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: span }" :lg="{span: span}">
      <a-row :gutter="[24,24]" type="flex" justify="center">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
               :lg="{span: 8}">
          <a-card>
            <div slot="cover" class="r-card-cover-secondary ">
              <a-icon class="r-icon r-icon-stroke r-icon-primary"
                      theme="filled"
                      type="shop"/>
            </div>
            <a-card-meta>
              <template slot="description">
                <h3 class="r-heading-light">
                  Find the stores that you want
                </h3>
                <p class="r-text-normal">
                  Shopple helps customers discover stores, purchase products, and more. Whatever your business sells, we
                  help you grow.
                </p>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
               :lg="{span: 8}">
          <a-card>
            <div slot="cover" class="r-card-cover-secondary">
              <a-icon class="r-icon r-icon-stroke r-icon-primary"
                      theme="filled"
                      type="shopping"/>
            </div>
            <a-card-meta>
              <template slot="description">
                <h3 class="r-heading-light">
                  Effortless shopping anywhere
                </h3>
                <p class="r-text-normal">
                  We're changing how shopping is experienced. Get new products served to you based on your liking and
                  preferences.
                </p>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 8 }"
               :lg="{span: 8}">
          <a-card>
            <div slot="cover" class="r-card-cover-secondary">
              <a-icon class="r-icon r-icon-stroke r-icon-primary"
                      theme="filled"
                      type="clock-circle"/>
            </div>
            <a-card-meta>
              <template slot="description">
                <h3 class="r-heading-light">
                  Instant checkout process
                </h3>
                <p class="r-text-normal">
                  Easily checkout with a one-click option and complete your order fast. Make sure you get the best
                  shopping experience anytime.
                </p>
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
