<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col class="r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }"
           :md="{ span: 9 }"
           :lg="{ span: 9 }"
    >
      <a-card>
        <a-card-meta>
          <template slot="description">
            <a-collapse v-model="activeKey"
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
    <a-col v-for="(faqCategory, index) in faqs"
           :key="index"
           v-if="faqCategory == currentCategory"
           :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 15 }" :lg="{span: 15}"
    >
      <a-row :gutter="[24,24]" type="flex" justify="start" align="middle"
      >
        <a-col v-for="(faq, index) in faqCategory.faqs"
               :key="index"
               :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24 }" :lg="{span: 24}"
        >
          <a-card>
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
                    <h3 @click="setFaq(faq, faqCategory)"
                        class="r-heading r-text-secondary" style="cursor: pointer"
                    >
                      {{ faq.question }}
                    </h3>
                  </a-col>
                </a-row>
              </template>
            </a-card-meta>
          </a-card>
        </a-col>
      </a-row>
    </a-col>
  </a-row>
</template>
<script>
    import {mapGetters} from "vuex";

    export default {
        props: {},
        name: 'r-help-list',
      async asyncData ({ store }) {
        await store.dispatch('base/onFaqs', {})
      },
        data() {
            return {
                departments: [],
                modal: {
                    isVisible: null,
                    current: null,
                    message: null,
                },
                hasData: true
            }
        },
        computed: mapGetters({
            modal: 'base/modal'
        }),
        created() {
            this.payload();
        },
        methods: {
            payload() {
                let params = {};
                let path = this.$route.path;
                let $this = this;

                axios.get(path, params)
                    .then(response => {
                        console.log("setting positions >> before");
                        console.log(response.data);

                        $this.departments = response.data.departments;
                        $this.hasData = true;

                        console.log("setting positions >> after");
                    })
                    .catch(e => {
                        console.log(e);
                    });
            }
        }
    };
</script>
