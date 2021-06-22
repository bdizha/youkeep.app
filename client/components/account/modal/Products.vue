<template>
  <r-modal-template :mask-closable="maskClosable"
                    :closable="closable"
                    :current="current"
                    style="position: relative;"
  >
    <a-row type="flex" justify="center">
      <a-col class="r-text-left" :xs="{ span: 24 }">
        <h3 class="r-heading">
          Your products history
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
