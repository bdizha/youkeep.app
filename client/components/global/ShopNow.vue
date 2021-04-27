<template>
  <a-card class="r-bg-secondary-light">
    <a-card-meta class="r-text-center">
      <template slot="description">
        <a-row :gutter="[24,24]" type="flex" justify="center">
          <a-col class="r-text-center" :xs="{span: 24}" :sm="{span: 24}" :md="{span: 24}" :lg="{span: 24}">
            <h2 class="r-heading r-text-secondary">
              Shop online with Shopple
            </h2>
            <p class="r-text-normal">
              Join the Shopple online experience and get better deals online today.
            </p>
          </a-col>
          <a-col :xs="{span: 24}" :sm="{span: 18}" :md="{span: 12}" :lg="{span: 8}">
            <a-button block size="default" type="secondary" class="r-btn-secondary">
              Let's go
            </a-button>
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

