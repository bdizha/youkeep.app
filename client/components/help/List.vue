<template>
  <a-row :gutter="[48,48]" type="flex" justify="start" align="top">
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 9 }"
           :lg="{ span: 9 }"
    >
      <a-card>
        <a-card-meta>
          <template slot="description">
            <a-collapse class="r-collapse-faqs" v-model="activeKey"
                        accordion
                        expandIconPosition="left"
            >
              <template #expandIcon="props">
                <a-icon :type="props.isActive ? 'minus' : 'plus'"/>
              </template>
              <a-collapse-panel
                v-for="(faqCategory, index) in faqs"
                :key="(index + 1).toString()"
                class="r-collapse-panel"
                :header="faqCategory.name"
              >
                <a-list :data-source="faqCategory.faqs">
                  <a-list-item @click="setFaq(faq, faqCategory)" slot="renderItem"
                               slot-scope="faq, index"
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
    <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 15 }" :lg="{span: 15}"
    >
      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle"
      >
        <a-col v-for="(faqCategory, index) in faqs"
               :key="index"
               v-if="faqCategory == currentCategory"
               :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{span: 24}"
        >
          <a-row :gutter="[24,24]" type="flex" justify="start" align="middle"
          >
            <a-col v-for="(faq, index) in faqCategory.faqs"
                   :key="index"
                   :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{span: 24}"
            >
              <a-card class="r-card-faqs">
                <a-card-meta>
                  <template slot="description">
                    <a-row :gutter="[24,24]" type="flex" justify="start" align="middle"
                    >
                      <a-col v-if="faq == currentFaq"
                             class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
                             :md="{ span: 24 }"
                             :lg="{ span: 24 }"
                      >
                        <a-row :gutter="[24,24]" type="flex" justify="start" align="middle"
                        >
                          <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
                                 :md="{ span: 24 }"
                                 :lg="{ span: 24 }"
                          >
                            <h3 class="r-heading r-text-primary">
                              {{ faq.question }}
                            </h3>
                          </a-col>
                          <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
                                 :md="{ span: 24 }"
                                 :lg="{ span: 24 }"
                          >
                            <p class="r-text-normal" v-html="faq.answer">
                            </p>
                          </a-col>
                        </a-row>
                      </a-col>
                      <a-col v-if="faq != currentFaq" class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
                             :md="{ span: 24 }"
                             :lg="{ span: 24 }"
                      >
                        <h4 @click="setFaq(faq, faqCategory)"
                            class="r-heading" style="cursor: pointer"
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
    // this.currentFaq = this.faqs[0].faqs[0]
    // this.currentCategory = this.faqs[0]
  },
  methods: {
    setFaq (faq, currentCategory) {
      this.currentFaq = faq
      this.currentCategory = currentCategory
    }
  }
}
</script>
