<template>
  <a-row :gutter="[48,96]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-dark r-pull-h-24 r-border-none r-card-r-128"
              style="background: url(/images/content/home-1.jpg) no-repeat;background-size: 100%"
      >
        <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
            <div class="r-mv-96">
              <a-row :gutter="[96,48]" align="middle" justify="start" type="flex">
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
                    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h3 class="r-heading-light r-text-secondary r-text-uppercase">
                            It's not about us
                          </h3>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <h2 class="r-heading r-text-dark">
                            What is Brickcent?
                          </h2>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-large r-text-dark">
                            Brickcent is a <span class="r-text-primary">fractional</span> investment platform with the
                            mission
                            to make <span class="r-text-secondary">property</span> accessible for all South Africans.
                          </p>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-normal r-text-dark">
                            We believe home ownership should be a human right and aim to be the vital stepping stone in
                            achieving the key to your own home.
                          </p>
                        </a-col>
                      </a-row>
                    </a-col>
                  </a-row>
                </a-col>
                <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                       :sm="{ span: 24 }"
                       :xs="{ span: 24 }"
                >
                  &nbsp;
                </a-col>
              </a-row>
            </div>
          </a-col>
        </a-row>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
           :sm="{  span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" align="middle" class="r-text-left" justify="center" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
        >
          <a-card class="r-bg-secondary-light">
            <a-row :gutter="[24,24]" align="middle" class="r-text-left" justify="center" type="flex">
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h3 class="r-heading-light r-text-dark r-text-uppercase">
                  Our story
                </h3>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h4 class="r-heading">
                  We prioritize an <span class="r-text-primary">inclusive</span> property market in Africa.
                </h4>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <p class="r-text-medium">
                  Brickcent’s mission is to offer the best property investment opportunities in African to our
                  investors.
                </p>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <p class="r-text-normal">
                  With South African property prices growing over 40% within the last 10 years*, the dream of owning a
                  home
                  continues to be a dream for many.
                </p>
                <p class="r-text-normal">We enable you to invest in the
                  property market with as little as R2,400 in as fast as a few minutes from signup to purchase.
                </p>
              </a-col>
            </a-row>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
        >
          <r-values></r-values>
        </a-col>
      </a-row>
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
           :sm="{  span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
        <a-col :lg="{ span: 12 }" :md="{ span: 15 }" :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="middle" class="r-text-center" justify="center" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h4 class="r-heading-light r-text-uppercase">
                <span class="r-text-blue">Our promise to you</span>
              </h4>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <h3 class="r-heading">
                We help South Africans <span class="r-text-blue">achieve</span> their investment goals:
              </h3>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-medium">
                To date, we have helped to make property possible for thousands of South Africans and are eager to
                continue this journey!
              </p>
            </a-col>
          </a-row>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{  span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="middle" justify="center" type="flex">
            <a-col v-for="(promise, index) in promises"
                   :key="index"
                   :lg="{ span: 8 }" :md="{ span: 8 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <a-card :class="getBgClass(promise.theme)">
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[12,12]" align="middle" class="r-text-left" justify="center"
                           type="flex"
                    >
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h4 class="r-checked-item r-heading-light">
                          <a-icon class="r-checked-item-icon" type="check"></a-icon>
                          <span :class="getTextClass(promise.textTheme)">
                            {{ promise.title }}
                          </span>
                        </h4>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-normal">
                          {{ promise.content }}
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
    </a-col>
    <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <r-contact-us></r-contact-us>
    </a-col>
  </a-row>
</template>
<script>
export default {
  layout: 'single',
  name: 'r-about-us',
  props: {},
  data () {
    return {
      promises: [
        {
          title: 'Inclusion',
          content: 'You’re unique and your businesses should be too. We help match your product to reliable and established property developers that fit your capital return goals . ',
          theme: 'primary',
          textTheme: 'secondary'
        },
        {
          title: 'Transparency',
          content: 'Simplify to make better informed decisions while you accelerate your innovation pace. Technology transformation keeps shifting and we keep re-inventing.',
          theme: 'secondary',
          textTheme: 'primary'
        },
        {
          title: 'Trust',
          content: 'We provide high-quality solutions that are essential to your investment growth trajectory, and the freedom to reach out to our investment advisers more effectively as needed.',
          theme: 'primary',
          textTheme: 'secondary'
        }
      ]
    }
  },
  mounted () {
    this.modal = this.$store.state.modal
  },
  methods: {
    getBgClass (theme) {
      return `r-bg-${theme}-light`
    },
    getTextClass (theme) {
      return `r-text-${theme}`
    }
  }
}
</script>
