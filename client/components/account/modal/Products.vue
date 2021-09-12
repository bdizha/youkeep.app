<template>
  <r-modal-template :closable="closable"
                    :current="current"
                    :mask-closable="maskClosable"
                    style="position: relative;"
  >
    <a-row :gutter=[24,24] justify="center" type="flex">
      <a-col :xs="{ span: 24 }" class="r-text-left">
        <h3 class="r-heading">
          Your categories history
        </h3>
        <p class="r-text-normal">
          Find your entire product history below
        </p>
      </a-col>
    </a-row>
  </r-modal-template>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-account-modal-products',
  props: {
    maskClosable: { type: Boolean, required: false, default: false },
    closable: { type: Boolean, required: false, default: false },
  },
  data () {
    return {
      current: 'account-products'
    }
  },
  computed: mapGetters({
    modal: 'base/modal'
  }),
  created () {
  },
  methods: {},
}
</script>
