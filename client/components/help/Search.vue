<template>
  <a-row align="top" justify="center" type="flex">
    <a-col class="r-text-left" :lg="{ span: 24 }" :md="{ span: 24 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-form :form="form"
              class="ant-form"
              @submit="onSearch"
      >
        <a-auto-complete
          placeholder="Search keywords, questions and topics..."
          :size="size"
          :value="searchText"
          option-label-prop="title"
          style="width: 100%"
          @search="onSearch"
        >
          <a-input>
            <a-icon slot="prefix" type="search"/>
            <a-button slot="suffix"
                      class="r-btn-primary"
                      :size="size"
                      style="margin-right: -11px"
                      type="secondary"
            >
              Find
            </a-button>
          </a-input>
        </a-auto-complete>
      </a-form>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-help-search',
  props: {
    size: { type: String, required: false, default: 'large' }
  },
  data () {
    return {
      searchText: null,
      form: this.$form.createForm(this, { name: 'form-help-search' })
    }
  },
  computed: mapGetters({
    faqs: 'base/faqs',
    hasFaqs: 'base/hasFaqs'
  }),
  created () {
  },
  methods: {
    onSearch () {
      console.log('Do some searching here...')
    }
  }
}
</script>
