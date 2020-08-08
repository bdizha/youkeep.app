<template>
  <a-row type="flex" justify="start" :gutter="0">
    <a-col v-if="category" class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: span }">
      <r-category-slider v-if="hasData" :categories="category.categories"></r-category-slider>
      <r-store-category v-if="hasData" v-for="(category, index) in category.categories"
                        :key="index + 1"
                        :is-store="true"
                        :is-show="false"
                        :columns="columns"
                        :category="category">
      </r-store-category>
    </a-col>
  </a-row>
</template>
<script>
  import {mapGetters} from "vuex";

  export default {
    name: 'r-store-categories',
    components: {},
    props: {
      columns: {type: Number, required: false, default: 6},
      store: {type: Object, required: false},
      span: {type: Number, required: false, default: 24},
      category: {type: Object, required: true, default: {}},
    },
    data() {
      return {
        hasData: true,
        isProcessing: true,
        width: 18
      }
    },
    computed: mapGetters({}),
    mounted() {
      this.payload();
    },
    methods: {
      payload() {
        let $this = this;
        setTimeout(function () {
          $this.isProcessing = false;
        }, 300);
      }
    }
  };
</script>
