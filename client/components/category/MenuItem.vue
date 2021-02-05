<template>
  <div v-if="hasData" class="r-category-filter">
    <nuxt-link v-if="!category.has_categories"
               @click.native="onCategory(category)"
               class="r-category-menu-link"
               :to="category.route">
      <r-avatar shape="circle"
                :size="30"
                :src="category.photo"
                src-placeholder="/assets/icon_default.png"/>
      {{ category.name }}
    </nuxt-link>
    <a-collapse v-if="category.has_categories"
                default-active-key="null"
                accordion
                expandIconPosition="right">
      <template #expandIcon="props">
        <a-icon :type="props.isActive ? 'minus' : 'plus'"/>
      </template>
      <a-collapse-panel :key="category.id" :header="category.name">
        <nuxt-link @click.native="onCategory(category)" class="r-category-menu-link"
                   :to="category.route">
          <r-avatar shape="circle"
                    :size="30"
                    :src="category.photo"
                    src-placeholder="/assets/icon_default.png"/>
          {{ 'Browse All' }}
        </nuxt-link>
        <template v-for="(cat) in categories">
          <r-category-menu-item
            v-if="cat.has_categories"
            :category="cat">
          </r-category-menu-item>
        </template>
      </a-collapse-panel>
    </a-collapse>
  </div>
</template>
<script>
import axios from 'axios'

export default {
  name: 'r-category-menu-item',
  props: {
    category: {type: Object, required: true, default: {}}
  },
  async fetch() {
    if (this.category.has_categories) {
      let path = `/categories`;
      let params = {
        category_id: this.category.id,
        limit: 12,
        store_id: this.category.store_id
      };

      params.with = ['categories'];

      let $this = this;

      await axios.post(path, params)
        .then(response => {
          $this.categories = response.data.categories;
          $this.hasData = true;
        })
        .catch(e => {
          console.log(e);
        });
    } else {
      this.hasData = true;
      this.categories = this.category.categories;
    }
  },
  data() {
    return {
      hasData: false,
      categories: [],
      text: `A dog is a type of domesticated animal.Known for its loyalty and faithfulness,it can be found as a welcome guest in many households across the world.`,
    };
  },
  created() {
    this.payload();
  },
  methods: {
    async payload() {

    },
    onCategory(category) {
      this.$store.dispatch('base/onCategory', this.category.route);
    },
  }
};
</script>
