<template>
  <r-page>
    <a-row :gutter="16"
           style="min-height: 200px;background: #FFFFFF;"
    >
      <a-col :span="24">
        <a-row type="flex" justify="space-around" align="middle">
          <a-col :lg="{span: 10, offset: 2}" class="r-page-padding">
            <h1 class="r-heading">
              <span class="r-text-secondary">Frequently Asked Questions</span>
            </h1>
            <p class="r-text-normal">
              Below you will find the most frequently asked questions about delivery for your
              online order. Looking for more information or can't find an answer to your
              specific question? Feel free to contact us via a channel that's convenient for
              you.
            </p>
          </a-col>
          <a-col :lg="{span: 12}" class="r-p-lg-48" style="position: relative;">
            <div class="r-page-header-photo r-page-art-primary">
              <img alt="Couple orders online" src="/assets/about-us.jpg">
            </div>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <a-row>
      <a-col :lg="{span: 12}">
        <a-row style="background: #FFFFFF; border-radius: 0 12px 12px 0;overflow: hidden;margin-top: 48px;"
               type="flex"
               justify="space-around" align="middle"
        >
          <a-col :lg="{span: 20 , offset: 4}" class="r-page-padding">
            <div style="margin-bottom: 24px;" v-for="(faqSection, fs) in sections" :key="fs+1">
              <h2 class="r-heading r-text-secondary">
                {{ faqSection.name }}
              </h2>
              <a-collapse accordion :expandIconPosition="'right'" bordered="false"
                          v-for="(faq, f) in faqSection.faqs" :key="f" :defaultActiveKey="fs+1"
              >
                <a-collapse-panel :header="faq.question" :key="f">
                  <p v-html="faq.answer"></p>
                </a-collapse-panel>
              </a-collapse>
            </div>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
export default {
  name: 'r-faqs',
  props: {
    sections: { type: Boolean, required: false }
  },
  data () {
    return {}
  },
}
</script>
