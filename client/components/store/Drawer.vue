<template>
  <r-drawer-template placement="right"
                     current="store">
    <a-row :gutter="[24,24]" class="r-mb-24" type="flex" justify="center" align="middle">
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }"
             :lg="{ span: 24 }">
        <r-store-window :has-actions="false" :store="store"></r-store-window>
        <a-button block
                  size="default"
                  @click="onToggle"
                  :class="{'r-btn-bordered-primary': isToggled, 'r-btn-bordered-secondary' :!isToggled}">
          {{ isToggled ? 'Less' : 'More' }} info
          <a-icon type="info-circle"/>
        </a-button>
      </a-col>
      <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
             :md="{ span: 24 }"
             :lg="{ span: 24 }">
        <p class="r-text-normal">
          {{ store.description }}
        </p>
      </a-col>
    </a-row>
    <a-card class="r-mb-24" title="YOU MIGHT ALSO LIKE" style="width: 100%;">
      <p class="r-text-sm">
        Here you can discover shops that you like.
      </p>
    </a-card>
    <a-card class="r-mb-24" title="WHAT'S NEW" style="width: 100%;">
      <p class="r-text-sm">
        Buy your favourite items today.
      </p>
    </a-card>
    <r-store-info v-if="isToggled"></r-store-info>
  </r-drawer-template>
</template>
<script>
import {mapGetters} from "vuex";

export default {
  name: 'r-store-drawer',
  data() {
    return {
      isToggled: false
    };
  },
  computed: mapGetters({
    store: 'shop/store'
  }),
  created() {
    this.payload();
  },
  methods: {
    payload() {
    },
    onToggle() {
      this.isToggled = !this.isToggled;
    }
  },
}
</script>
