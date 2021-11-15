<template>
  <a-row :gutter="[12,12]" justify="start" align="middle" type="flex">
    <a-col :lg="{ span: 24 }" :md="{ span: 24}"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card class="r-bg-dark r-p-0" :hoverable="true">
       <div class="r-p-12">
         <a-row :gutter="[12,12]" align="middle" justify="start" type="flex">
           <a-col flex="36px">
             <img :style="{width: '36px', height: '36px'}" :src="category.photo_url"/>
           </a-col>
           <a-col flex="1 1 0">
             <p class="r-text-bold r-text-normal r-text-white">
               {{ category.name }}
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
  name: 'r-category-head',
  props: {
    category: {
      type: Object,
      required: true,
      default: () => {
        return {
          name: 'Not set',
          photo_url: '/patterns/pattern-dark.svg'
        }
      }
    }
  },
  data () {
    return {}
  },
  created () {
  },
  computed: {},
  methods: {}
}
</script>
