<template>
  <a-row :gutter="[48,96]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-row :gutter="[48,0]" align="middle" class="r-text-left" justify="center" type="flex">
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{  span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-cover-image r-bg-dark r-pull-24 r-border-none r-card-r-128">
            <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
              <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <a-row :gutter="[96,48]" align="middle" justify="start" type="flex">
                  <a-col :lg="{ span: 12 }" :md="{ span: 12 }" :sm="{ span: 24 }"
                         :xs="{ span: 24 }"
                  >
                    <div class="r-mb-48-lg">
                      <a-card class="r-bg-dark r-pull-h-24 r-border-none-sm">
                        <div class="r-mv-48">
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
                                  <h1 class="r-heading">
                                    How you <span class="r-text-primary">invest</span> is deeply <span
                                    class="r-text-secondary"
                                  >individual</span>.
                                  </h1>
                                </a-col>
                                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                       :sm="{ span: 24 }"
                                       :xs="{ span: 24 }"
                                >
                                  <p class="r-text-large">
                                    We created Addtract to make your unique life better and flexible.
                                  </p>
                                </a-col>
                                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                       :sm="{ span: 24 }"
                                       :xs="{ span: 24 }"
                                >
                                  <p class="r-text-medium">
                                    We're on the mission to make <span
                                    class="r-text-secondary"
                                  >property</span> investments
                                    <span class="r-text-primary">accessible</span> and
                                    <span class="r-text-secondary">affordable</span> for all South Africans like you.
                                  </p>
                                </a-col>
                              </a-row>
                            </a-col>
                            <a-col class="r-hide-lg" :lg="{ span: 12 }" :md="{ span: 12 }"
                                   :sm="{ span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <r-avatar data-src="/images/content/home-1.jpg" :size="300" class="r-avatar-block"
                              ></r-avatar>
                            </a-col>

                          </a-row>
                        </div>
                      </a-card>
                    </div>
                  </a-col>
                </a-row>
              </a-col>
            </a-row>
          </a-card>
        </a-col>

        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{  span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-secondary-light r-pull-h-24 r-border-none">
            <div class="r-mv-48">
              <a-row :gutter="[24,24]" align="middle" class="r-text-left" justify="center" type="flex">
                <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                       :sm="{  span: 24 }"
                       :xs="{ span: 24 }"
                >
                  <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <a-row :gutter="[24,24]" align="middle" justify="end" type="flex">
                        <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                               :sm="{  span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex">
                            <a-col :lg="{ span: 18 }" :md="{ span: 18 }"
                                   :sm="{  span: 24 }"
                                   :xs="{ span: 24 }"
                            >
                              <h2 class="r-heading-light r-text-dark">
                                Your property <span class="r-text-secondary">investment</span>
                                <span class="r-text-primary">freedom</span> is the goal.
                              </h2>
                            </a-col>
                          </a-row>
                        </a-col>
                      </a-row>
                    </a-col>
                    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
                           :sm="{ span: 24 }"
                           :xs="{ span: 24 }"
                    >
                      <r-avatar data-src="/images/content/happy-1.jpg" :size="300" class="r-avatar-block"
                      ></r-avatar>
                    </a-col>
                  </a-row>
                </a-col>
              </a-row>
            </div>
          </a-card>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 18 }"
               :sm="{  span: 24 }"
               :xs="{ span: 24 }"
        >
          <r-values></r-values>
        </a-col>
        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
               :sm="{  span: 24 }"
               :xs="{ span: 24 }"
        >
          <a-card class="r-bg-secondary-light r-pull-h-24 r-border-none">
            <div class="r-mv-48">
              <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
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
                            We help South Africans <span class="r-text-primary">achieve</span> their
                            <span class="r-text-secondary">investment</span>
                            <span class="r-text-primary">goals</span>
                          </h3>
                        </a-col>
                        <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                               :sm="{ span: 24 }"
                               :xs="{ span: 24 }"
                        >
                          <p class="r-text-medium">
                            To date, we have helped to make property possible for thousands of South Africans and are eager
                            to
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
                                    <h3 class="r-checked-item r-heading-light">
                                      <a-icon class="r-checked-item-icon" type="check"></a-icon>
                                      <span :class="'r-text-white'">
                                    {{ promise.title }}
                                  </span>
                                    </h3>
                                  </a-col>
                                  <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                                         :sm="{ span: 24 }"
                                         :xs="{ span: 24 }"
                                  >
                                    <p class="r-text-normal r-text-white">
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
              </a-row>
            </div>
          </a-card>
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
  layout: 'default',
  name: 'r-about-us',
  props: {},
  data () {
    return {
      promises: [
        {
          title: 'Inclusion',
          content: 'You’re unique and your businesses should be too. We help match your product to reliable and established property developers that fit your capital return goals . ',
          theme: 'secondary',
          textTheme: 'primary'
        },
        {
          title: 'Transparency',
          content: 'Simplify to make better informed decisions while you accelerate your innovation pace. Technology transformation keeps shifting and we keep re-inventing.',
          theme: 'primary',
          textTheme: 'secondary'
        },
        {
          title: 'Trust',
          content: 'We provide high-quality solutions that are essential to your investment growth trajectory, and the freedom to reach out to our investment advisers more effectively.',
          theme: 'dark',
          textTheme: 'primary'
        }
      ]
    }
  },
  mounted () {
    this.modal = this.$store.state.modal
  },
  methods: {
    getBgClass (theme) {
      return `r-bg-${theme}`
    },
    getTextClass (theme) {
      return `r-text-${theme}`
    }
  }
}
</script>
