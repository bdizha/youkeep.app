<template>
  <a-row :gutter="[24,24]" class="r-text-left" align="middle" justify="start" type="flex">
    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-green-light">
        <div class="r-mv-48">
          <a-row :gutter="[24,24]" align="middle" justify="space-between" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
            >
              <h3 class="r-heading-light r-text-secondary">
                This process takes time
              </h3>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
            >
              <p class="r-text-medium">
                Not everyone wants to work this way. Some clients or agencies want to create a one-off <span
                class="r-text-secondary"
              >digital
                      experience</span>, extract the <span class="r-text-secondary">immediate value</span>, and then move on
                to a new idea.
              </p>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
            >
              <p class="r-text-normal">
                However, we find it takes time and iteration to get the best solution, so most of our
                engagements are with long-term clients who are committed to building and expanding their
                digital services while providing accelerated solutions and enabling their business growth.
              </p>
            </a-col>
          </a-row>
        </div>
      </a-card>
    </a-col>
    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-secondary-light">
        <div class="r-mv-48">
          <a-row :gutter="[24,24]" align="middle" justify="space-between" type="flex">
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
            >
              <h3 class="r-heading-light  r-text-yellow">
                We can start anywhere
              </h3>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
            >
              <p class="r-text-medium">
                But for the best results, both client and project team need to believe in the value of
                <span class="r-text-yellow">iterative development</span> and be continually looking for opportunities to
                create greater impact.
              </p>
            </a-col>
            <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24}"
            >
              <p class="r-text-normal">
                Sometimes clients want us to design and develop a complete end-to-end solution, other times the priority
                is getting small-scale but immediate traction on a problem. Either is fine. We can start big or start
                small; we can create something new, or we can build on an existing solution.
              </p>
            </a-col>
          </a-row>
        </div>
      </a-card>
    </a-col>
  </a-row>
</template>
<script>
export default {
  name: 'r-gears',
  data () {
    return {}
  },
  methods: {}
}
</script>
