<template>
  <a-row :gutter="16" justify="center" style="padding-top: 48px;" type="flex">
    <a-col v-for="(card, index) in cards" :key="index" :span="columns">
      <a-card :loading="true" title="Please wait...">
      </a-card>
    </a-col>
  </a-row>
</template>
<script>
export default {
  props: {
    columns: { type: Number, required: true, default: 6 }
  },
  data () {
    return {
      cards: [1, 2, 3, 4]
    }
  },
  mounted () {
    this.payload()
  },
  methods: {
    payload () {
      console.log('How are we loading these cards?')
      console.log('Card columns :', this.columns)
      console.log(this.cards)
    }
  }
}
</script>
