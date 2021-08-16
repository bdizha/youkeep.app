<template>
  <a-row :gutter="[48,96]" align="middle" justify="center" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-dark r-pull-h-24 r-border-none r-card-r-128">
        <a-row :gutter="[48,48]" align="middle" justify="center" type="flex">
          <a-col :lg="{ span: 16 }" :md="{ span: 18 }" :sm="{ span: 24 }"
                 :xs="{ span: 24 }"
          >
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
                          About us
                        </h3>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <h1 class="r-heading">
                          We believe in an <span class="r-text-secondary">inclusive</span> <span class="r-text-primary">economy</span>
                          for <span class="r-text-blue">everyone</span>.
                        </h1>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-medium">
                          Changing how startup businesses access venture capital in Africa. inventing its time, capital
                          and resources to accelerate their ability to scale internationally.
                        </p>
                      </a-col>
                      <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                             :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                      >
                        <p class="r-text-normal">
                          We facilitate the whole incubation experience for startups around the African continent. Reciprocity works magic across all teams.
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
                <r-avatar :size="450" class="r-avatar-block" data-src="/images/about-us.jpg"
                ></r-avatar>
              </a-col>
            </a-row>
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
          <a-card class="r-bg-secondary">
            <a-row :gutter="[24,24]" align="middle" class="r-text-left" justify="center" type="flex">
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h4 class="r-heading-light r-text-primary r-text-uppercase">
                  Our story
                </h4>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <h3 class="r-heading">
                  We prioritize accessible catalyst services.
                </h3>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <p class="r-text-medium">
                  Graphigem’s mission is to bring the best business tools directly to the partners and
                  investors.
                </p>
              </a-col>
              <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                     :sm="{ span: 24 }"
                     :xs="{ span: 24 }"
              >
                <p class="r-text-normal">
                  Historically, early stage startup funding services have been known to be non-existent, complicated,
                  expensive and difficult to
                  access.
                </p>
                <p class="r-text-normal">
                  We partner up with startups of all sizes and help them, run, and grow their businesses within an
                  effective
                  <nuxt-link to="/approach" class="r-text-primary">Framework Model</nuxt-link>
                  .
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
                We help startups <span class="r-text-blue">achieve</span> their business goals:
              </h3>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }"
                   :sm="{ span: 24 }"
                   :xs="{ span: 24 }"
            >
              <p class="r-text-medium">
                Graphigem is
                here to make better venture catalyst services easily accessible to everyone.
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
          title: 'Progressive',
          content: 'You’re unique and your businesses should be too. We help match your product to reliable and established Network Partners that fit your business scalability and productivity needs. ',
          theme: 'blue',
          textTheme: 'blue'
        },
        {
          title: 'Relentless',
          content: 'Simplify to make better informed decisions while you accelerate your innovation pace. Technology transformation keeps shifting and we keep re-inventing.',
          theme: 'green',
          textTheme: 'green'
        },
        {
          title: 'Reliable',
          content: 'We provide high-quality solutions that are essential to your business growth trajectory, and the freedom to reach out to your customers more effectively within a supportive ecosystem.',
          theme: 'secondary',
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
