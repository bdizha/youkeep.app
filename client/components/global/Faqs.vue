<template>
  <r-page>
    <a-row :gutter="16"
           style="min-height: 200px;background: #FFFFFF;"
    >
      <a-col :span="24">
        <a-row align="middle" justify="space-around" type="flex">
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
        <a-row align="middle"
               justify="space-around"
               style="background: #FFFFFF; border-radius: 0 12px 12px 0;overflow: hidden;margin-top: 48px;" type="flex"
        >
          <a-col :lg="{span: 20 , offset: 4}" class="r-page-padding">
            <div v-for="(faqSection, fs) in sections" :key="fs+1" style="margin-bottom: 24px;">
              <h2 class="r-heading r-text-secondary">
                {{ faqSection.name }}
              </h2>
              <a-collapse v-for="(faq, f) in faqSection.faqs" :key="f" :defaultActiveKey="fs+1"
                          :expandIconPosition="'right'" accordion bordered="false"
              >
                <a-collapse-panel :key="f" :header="faq.question">
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
