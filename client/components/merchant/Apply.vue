<template>
    <a-row type="flex" justify="start" align="middle">
        <a-col :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 24}"
               :lg="{span: 24}">
            <a-form :class="{'r-hidden' :isProcessing || isSuccessful}"
                    class="ant-form ant-form-vertical"
                    @submit="onApply"
                    :form="formApply">
                <a-form-item>
                    <a-row class="r-mt-48" type="flex" justify="center">
                        <a-col class="gutter-row r-text-left" :xs="{ span: 24 }">
                            <h2 class="r-heading">
                                Owami merchant application
                            </h2>
                            <p class="r-text-normal">
                                Contact us to learn more about Owami and checkout financing
                            </p>
                        </a-col>
                    </a-row>
                </a-form-item>
                <a-row :gutter="24" type="flex" justify="start">
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                        <a-form-item
                                label="Full name">
                            <a-input
                                    size="large"
                                    placeholder="Your full name"
                                    v-decorator="['name', { rules: [{ required: true, message: 'Please enter your full name' }] }]">
                                <a-icon slot="prefix" type="user"/>
                            </a-input>
                        </a-form-item>
                    </a-col>
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                        <a-form-item
                                label="Role title">
                            <a-input
                                    size="large"
                                    placeholder="Your role number"
                                    v-decorator="['role', { rules: [{ required: true, message: 'Please enter your role title' }] }]">
                                <a-icon slot="prefix" type="audit"/>
                            </a-input>
                        </a-form-item>
                    </a-col>
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                        <a-form-item
                                label="Phone number">
                            <a-input
                                    size="large"
                                    placeholder="Your phone number"
                                    v-decorator="['phone', { rules: [{ required: true, message: 'Please enter your phone number' }] }]">
                                <a-icon slot="prefix" type="phone"/>
                            </a-input>
                        </a-form-item>
                    </a-col>
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                        <a-form-item
                                label="Business email">
                            <a-input type="email"
                                     size="large"
                                     placeholder="Your company email"
                                     v-decorator="['email', { rules: [{ required: true, message: 'Please enter your company email' }] }]">
                                <a-icon slot="prefix" type="mail"/>
                            </a-input>
                        </a-form-item>
                    </a-col>
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                        <a-form-item
                                label="Business website">
                            <a-input type="text"
                                     size="large"
                                     placeholder="Your company website"
                                     v-decorator="['url', { rules: [{ required: true, message: 'Please enter your company email' }] }]">
                                <a-icon slot="prefix" type="link"/>
                            </a-input>
                        </a-form-item>
                    </a-col>
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                        <a-form-item
                                label="Platform">
                            <a-select
                                    labelInValue
                                    :defaultValue="platforms[0]"
                                    size="large"
                                    @change="onPlatform"
                                    style="min-width: 100%;">
                                <a-select-option v-for="(option, index) in platforms"
                                                 :key="index"
                                                 :value="option.key">
                                    <span class="r-sort-value">{{ option.label }}</span>
                                </a-select-option>
                            </a-select>
                        </a-form-item>
                    </a-col>
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                        <a-form-item
                                label="Business industry">
                            <a-select
                                    labelInValue
                                    :defaultValue="industries[0]"
                                    size="large"
                                    @change="onIndustry"
                                    style="min-width: 100%;">
                                <a-select-option v-for="(option, index) in industries"
                                                 :key="index"
                                                 :value="option.key">
                                    <span class="r-sort-value">{{ option.label }}</span>
                                </a-select-option>
                            </a-select>
                        </a-form-item>
                    </a-col>
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                        <a-form-item
                                label="Business website">
                            <a-input type="text"
                                     size="large"
                                     placeholder="Your company website"
                                     v-decorator="['url', { rules: [{ required: true, message: 'Please enter your company email' }] }]">
                                <a-icon slot="prefix" type="link"/>
                            </a-input>
                        </a-form-item>
                    </a-col>
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                        <a-form-item
                                label="Average order value">
                            <a-input type="text"
                                     size="large"
                                     placeholder="Your average order value"
                                     v-decorator="['order_value', { rules: [{ required: true, message: 'Please enter your company email' }] }]">
                                <a-icon slot="prefix" type="dollar"/>
                            </a-input>
                        </a-form-item>
                    </a-col>
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }" :sm="{ span: 24 }" :md="{ span: 12 }"
                           :lg="{ span: 12 }">
                        <a-form-item
                                label="Business annual sales">
                            <a-select
                                    labelInValue
                                    :defaultValue="annual_sales_range[0]"
                                    size="large"
                                    @change="onAnnualSales"
                                    style="min-width: 100%;">
                                <a-select-option v-for="(option, index) in annual_sales_range"
                                                 :key="index"
                                                 :value="option.key">
                                    <span class="r-sort-value">{{ option.label }}</span>
                                </a-select-option>
                            </a-select>
                        </a-form-item>
                    </a-col>
                </a-row>
                <a-form-item
                        label="Notes">
                    <a-input type="textarea"
                             size="large"
                             placeholder="Your message"
                             v-decorator="['notes', { rules: [{ required: true, message: 'Please enter your message' }] }]">
                        <a-icon slot="prefix" type="user"/>
                    </a-input>
                </a-form-item>
                <a-form-item class="r-mt-48">
                    <a-row :gutter="24" type="flex" justify="center">
                        <a-col class="gutter-row r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }"
                               :md="{ span: 12 }"
                               :lg="{ span: 12 }">
                        </a-col>
                        <a-col class="gutter-row r-text-left" :xs="{ span: 12 }" :sm="{ span: 12 }"
                               :md="{ span: 12 }"
                               :lg="{ span: 12 }">
                            <a-button block @click="onApply" :size="'large'" type="primary"
                                      html-type="submit"
                                      class="ant-btn-secondary r-btn-primary">
                                Submit
                            </a-button>
                        </a-col>
                    </a-row>
                </a-form-item>
            </a-form>
            <r-spinner v-if="isProcessing" :is-absolute="true"></r-spinner>
            <r-notice v-if="isSuccessful" :message="message"></r-notice>
        </a-col>
    </a-row>
</template>
<script>
    const INDUSTRIES = [
        {
            label: 'Home & Furniture',
            key: 1
        },
        {
            label: 'Jewelry & Accessories',
            key: 2
        },
        {
            label: 'Beauty & Health',
            key: 3
        },
        {
            label: 'Clothing',
            key: 4
        },
        {
            label: 'Food & Beverage',
            key: 5
        },
        {
            label: 'Kids & Babies',
            key: 6
        },
        {
            label: 'Pets',
            key: 7
        },
        {
            label: 'Footwear',
            key: 8
        },
        {
            label: 'Sports & Outdoors',
            key: 9
        },
        {
            label: 'Travel & Experiences',
            key: 10
        },
        {
            label: 'Education',
            key: 11
        }
    ];
    const PLATFORMS = [
        {
            label: 'Bold Cashier',
            key: 1
        },
        {
            label: 'Custom API',
            key: 2
        },
        {
            label: 'Shopify',
            key: 3
        },
        {
            label: 'Magento',
            key: 4
        },
        {
            label: 'Magento 2',
            key: 5
        },
        {
            label: 'Sylius',
            key: 6
        },
        {
            label: 'BigCommerce',
            key: 7
        },
        {
            label: 'Weebly',
            key: 8
        },
        {
            label: 'Other',
            key: 9
        }
    ];
    const ANNUAL_SALES_RANGE = [
        {
            label: 'Less than R1m',
            key: 1
        },
        {
            label: 'R1-R5m',
            key: 2
        },
        {
            label: 'R5m-R10m',
            key: 3
        },
        {
            label: 'R10m-R20m',
            key: 4
        },
        {
            label: 'R20m-R50m',
            key: 5
        },
        {
            label: 'R50m-R100m',
            key: 6
        },
        {
            label: 'R100m+',
            key: 7
        }
    ];
    export default {
      name: 'r-merchant-apply',
        props: {
            maskClosable: {type: Boolean, required: false, default: false},
            closable: {type: Boolean, required: false, default: false},
        },
        data() {
            return {
                formApply: this.$form.createForm(this, {name: 'form_apply'}),
                fields: [' name', 'url', 'platform', 'order_value', 'sales_revenue', 'mobile', 'email', 'notes'],
                hasData: false,
                message: 'Thank you for contacting us! We\'ll be getting back to you soonest.',
                industry: null,
                platform: null,
                annual_sales: null,
                industries: INDUSTRIES,
                annual_sales_range: ANNUAL_SALES_RANGE,
                platforms: PLATFORMS,
                errors: [],
                isSuccessful: false,
                isProcessing: false,
                store: {
                    slug: 'all'
                },
                redirectTo: ''
            };
        },
        mounted() {
            this.modal = this.$store.state.modal;
        },
        computed: {},
        methods: {
            onApply(event) {
                event.preventDefault();

                this.hasError = false;

                this.formApply.validateFields((error, values) => {
                    if (!error) {
                        this.isProcessing = true;

                        console.log('Making request...', values);
                        let $this = this;

                        values['industry'] = this.industry;
                        values['platform'] = this.platform;
                        values['annual_sales'] = this.annual_sales;

                        let params = Object.assign({}, values);

                        console.log('Request params...', params);

                        let path = '/merchant/store';
                        HTTP.post(path, params)
                            .then(response => {
                                if ((response.status == 422 || response.status == 500) && response.data.errors != undefined) {
                                    $this.onError(response, $this);
                                } else {
                                    $this.onResponse(response, $this);
                                }
                            })
                            .catch(e => {
                                $this.isProcessing = false;
                                $this.hasError = true;
                                console.log('Errors', e);
                            });
                    } else {
                        this.hasError = true;
                        console.error(error);
                    }
                });
            },
            onResponse(response, $this) {
                $this.isSuccessful = true;
                $this.formApply.resetFields();

                setTimeout(function () {
                    $this.isProcessing = false;
                }, 3000);
            },
            onError(response, $this) {
                let errors = response.data.errors;

                this.fields.forEach(function (field) {
                    if (errors[field] != undefined) {
                        let value = $this.formApply.getFieldValue(field);
                        let fields = {};
                        fields[field] = {
                            'value': value,
                            "errors": [
                                {
                                    "notes": errors[field][0],
                                    "field": field
                                }
                            ]
                        };
                        $this.formApply.setFields(fields);
                        console.log('what is this :: ' + field, errors[field][0]);
                    }
                });

                setTimeout(function () {
                    this.isProcessing = false;
                    this.isSuccessful = false;
                }, 3000);
            },
            onIndustry(industry) {
                this.industry = industry.key;
            },
            onAnnualSales(annual_sales) {
                this.annual_sales = annual_sales.key;
            },
            onPlatform(platform) {
                this.platform = platform.key;
            },
        },
    };
</script>
