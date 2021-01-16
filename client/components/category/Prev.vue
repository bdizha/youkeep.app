<template>
  <a-row type="flex" justify="start" align="middle">
    <a-col class="r-ph-24" :xs="{ span: 24 }" :sm="{ span: 20 }" :md="{ span: 24 }"
           :lg="{ span: 24 }">
      <a-button @click="onPrev" type="secondary" class="r-btn-bordered-grey"
                icon="left">
        Back
      </a-button>
    </a-col>
  </a-row>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-category-prev',
  props: {},
  data() {
    return {
      fetchBy: {
        id: 1
      }
    }
  },
  computed: mapGetters({
    category: 'shop/category',
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    onPrev() {
      this.$router.go(-1);
    }
  }
};
</script>
