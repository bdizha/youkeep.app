<template>
  <r-page>
    <a-row class="r-art-primary">
      <a-col :span="24">
        <a-row type="flex" justify="center" align="middle">
          <a-col :xs="{span: 24}" :sm="{span: 18}" :lg="{span: 18}" class="r-page-padding r-text-center">
            <h1 class="r-heading r-text-white">
              Help center
            </h1>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
    <a-row v-if="hasData" type="flex" justify="center" align="middle">
      <a-col :xs="{span: 24}" :sm="{span: 18}" :md="{span: 16}" :lg="{span: 12}" class="r-p-48"
             style="background: #FFFFFF;">
        <a-row :gutter="0" class="r-help-breadcrumbs">
          <a-col class="gutter-row" :span="24">
            <a-breadcrumb class="r-same-height">
              <a-breadcrumb-item>
                <nuxt-link class="r-text-primary r-text-view-more"
                             :to="'/help'">
                  Help center
                </nuxt-link>
              </a-breadcrumb-item>
              <a-breadcrumb-item>
                                 <span class="r-text-view-more">
                                {{ group }}
                                 </span>
              </a-breadcrumb-item>
            </a-breadcrumb>
          </a-col>
        </a-row>
        <a-row :gutter="16" type="flex" justify="start" align="middle">
          <a-col class="gutter-row" :span="24">
            <a-collapse accordion :expandIconPosition="'right'" :defaultActiveKey="fs+1">
              <template #expandIcon="props">
                <a-icon :type="props.isActive ? 'minus' : 'plus'"/>
              </template>
              <a-collapse-panel
                v-for="(faq, f) in faqs" :key="f"
                :header="faq.question">
                <p v-html="faq.answer"></p>
              </a-collapse-panel>
            </a-collapse>
          </a-col>
        </a-row>
      </a-col>
    </a-row>
  </r-page>
</template>
<script>
  export default {
    name: 'r-help-show',
    props: {},
    data() {
      return {
        faqs: [],
        group: null,
        hasData: false
      }
    },
    mounted() {
      this.modal = this.$store.state.modal;

      this.modal.isVisible = true;
      this.$store.dispatch('app/onModal', modal);

      // this.payload();
    },
    methods: {
      payload() {
        let params = {};
        let path = this.$route.path;
        let $this = this;

        axios.get(path, params)
          .then(response => {
            console.log("setting help data >> before");
            console.log(response.data);

            $this.faqs = response.data.faqs;
            $this.group = response.data.group;
            $this.hasData = true;

            console.log("setting help data >> after");
          })
          .catch(e => {
            console.log(e);
          });
      }
    },
  };
</script>
