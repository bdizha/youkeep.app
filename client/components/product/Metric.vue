<template>
  <a-card class="r-bg-dark r-pull-h-24 r-border-none">
    <div class="r-mv-48">
      <a-row :gutter="[24,24]" justify="center" type="flex">
        <a-col :lg="{ span: 16 }" :md="{ span: 18 }"
               :sm="{ span: 24 }"
               :xs="{ span: 24 }"
        >
          <div class="r-slider">
            <a-row :gutter="[24,24]" class="r-slider" justify="start" type="flex">
              <a-col :span="24" class="r-text-center">
                <h3 class="r-heading r-text-white">
                  {{ title }}
                </h3>
              </a-col>
              <a-col :span="24" class="r-text-center">
                <r-category-slider v-if="hasCategories"></r-category-slider>
              </a-col>
              <a-col :span="24" class="r-spin-holder">
                <r-product-slider :is-drop="isDrop" :filters="filters"></r-product-slider>
              </a-col>
            </a-row>
          </div>
        </a-col>
      </a-row>
    </div>
  </a-card>
</template>
<script>
export default {
  name: 'r-product-metric',
  components: {},
  props: {
    isDrop: { type: Boolean, required: false, default: false },
    hasCategories: { type: Boolean, required: false, default: false },
    title: { type: String, required: false, default: 'Just dropped in' },
    columns: { type: Number, required: false, default: 3 },
    filters: {
      type: Object,
      required: false,
      default: () => {
        return {
          metric_type_id: null,
          store_id: null,
          is_active: true,
          order_by: 'updated_at'
        }
      }
    }
  },
  data () {
    return {}
  },
  methods: {}
}
</script>
