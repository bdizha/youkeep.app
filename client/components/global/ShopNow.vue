<template>
  <a-card class="r-bg-primary-light">
    <a-card-meta class="r-text-center">
      <template slot="description">
        <a-row type="flex" justify="start">
          <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
                 :lg="{ span: 24 }">
            <a-card>
              <a-card-meta class="r-text-center">
                <template slot="description">
                  <a-row type="flex" justify="center">
                    <a-col :span="24">
                      <h2 class="r-heading">
                        Shop online with Shopple
                      </h2>
                      <p class="r-text-normal">
                        Join the Shopple online experience and get better deals online today.
                      </p>
                    </a-col>
                  </a-row>
                  <a-row class="r-mt-24" type="flex" justify="center" align="middle">
                    <a-col :xs="{span: 24}" :sm="{span: 18}" :md="{span: 12}" :lg="{span: 8}">
                      <a-button block size="large" type="secondary" class="r-btn-secondary">
                        Let's go
                      </a-button>
                    </a-col>
                  </a-row>
                </template>
              </a-card-meta>
            </a-card>
          </a-col>
        </a-row>
      </template>
    </a-card-meta>
  </a-card>
</template>
<script>
export default {
  name: 'r-shop-now',
  data() {
    return {}
  },
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    onModal() {
      this.modal.isVisible = true;
      this.modal.current = 'register';
      this.$store.dispatch('app/onModal', modal);
    },
  }
};
</script>

