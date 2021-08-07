<template>
  <a-row align="top" justify="center" type="flex">
    <a-col :lg="{ span: 12 }" :md="{ span: 12 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-form :form="form"
              class="ant-form"
              @submit="onSearch"
      >
        <a-auto-complete
          placeholder="Search keywords, questions and topics..."
          size="large"
          :value="searchText"
          option-label-prop="title"
          style="width: 100%"
          @search="handleSearch"
        >
          <a-input>
            <a-icon slot="prefix" type="search"/>
            <a-button slot="suffix"
                      class="r-btn-secondary"
                      size="large"
                      style="margin-right: -12px"
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
  props: {},
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
