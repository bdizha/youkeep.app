<template>
  <a-row :gutter="[48,48]" align="top" justify="start" type="flex">
    <a-col :lg="{ span: 9 }" :md="{ span: 9 }"
           :sm="{ span: 24 }"
           :xs="{ span: 24 }"
    >
      <a-card>
        <a-card-meta>
          <template slot="description">
            <a-collapse v-model="activeKey" accordion
                        class="r-collapse-faqs"
                        expandIconPosition="left"
            >
              <template #expandIcon="props">
                <a-icon :type="props.isActive ? 'minus' : 'plus'"/>
              </template>
              <a-collapse-panel
                v-for="(faqCategory, index) in faqs"
                :key="(index + 1).toString()"
                :header="faqCategory.name"
                class="r-collapse-panel"
              >
                <a-list :data-source="faqCategory.faqs">
                  <a-list-item slot="renderItem" slot-scope="faq, index"
                               @click="setFaq(faq, faqCategory)"
                  >
                    {{ faq.question }}
                  </a-list-item>
                </a-list>
              </a-collapse-panel>
            </a-collapse>
          </template>
        </a-card-meta>
      </a-card>
    </a-col>
    <a-col :lg="{span: 15}" :md="{ span: 15 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
    >
      <a-row :gutter="[24,24]" align="middle" justify="start" type="flex"
      >
        <a-col v-for="(faqCategory, index) in faqs"
               v-if="faqCategory == currentCategory"
               :key="index"
               :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
        >
          <a-row :gutter="[24,24]" align="middle" justify="start" type="flex"
          >
            <a-col v-for="(faq, index) in faqCategory.faqs"
                   :key="index"
                   :lg="{span: 24}" :md="{ span: 24 }" :sm="{ span: 24 }" :xs="{ span: 24 }"
            >
              <a-card class="r-card-faqs">
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[24,24]" align="middle" justify="start" type="flex"
                    >
                      <a-col v-if="faq == currentFaq"
                             :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                             class="r-text-left"
                      >
                        <a-row :gutter="[24,24]" align="middle" justify="start" type="flex"
                        >
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                                 class="r-text-left"
                          >
                            <h3 class="r-heading r-text-primary">
                              {{ faq.question }}
                            </h3>
                          </a-col>
                          <a-col :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                                 :xs="{ span: 24 }"
                                 class="r-text-left"
                          >
                            <p class="r-text-normal" v-html="faq.answer">
                            </p>
                          </a-col>
                        </a-row>
                      </a-col>
                      <a-col v-if="faq != currentFaq" :lg="{ span: 24 }" :md="{ span: 24 }" :sm="{ span: 24 }"
                             :xs="{ span: 24 }"
                             class="r-text-left"
                      >
                        <h4 class="r-heading"
                            style="cursor: pointer" @click="setFaq(faq, faqCategory)"
                        >
                          {{ faq.question }}
                        </h4>
                      </a-col>
                    </a-row>
                  </template>
                </a-card-meta>
              </a-card>
            </a-col>
          </a-row>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  name: 'r-help-list',
  props: {},
  data () {
    return {
      activeKey: ['1'],
      currentFaq: null,
      currentCategory: null
    }
  },
  computed: mapGetters({
    faqs: 'base/faqs',
    hasFaqs: 'base/hasFaqs'
  }),
  created () {
  },
  methods: {
    setFaq (faq, currentCategory) {
      this.currentFaq = faq
      this.currentCategory = currentCategory
    }
  }
}
</script>
