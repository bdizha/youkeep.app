<template>
  <a-form-item v-if="errors.length > 0">
    <a-row :gutter=[24,24] justify="center" type="flex">
      <a-col :xs="{ span: 24 }" class="r-text-left">
        <h4 class="r-heading r-text-secondary">
          Oops! Please correct the following errors:
        </h4>
        <div v-for="error in errors" class="r-text-normal r-text-primary">
          {{ error }}
        </div>
      </a-col>
    </a-row>
  </a-form-item>
</template>
<script>
export default {
  props: {
    errors: { type: Array, required: false, default: [] }
  },
  data () {
    return {}
  },
  mounted () {
  },
  computed: {},
  methods: {},
}
</script>
