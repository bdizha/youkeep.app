<template>
    <div class="r-delivery">
        <a-form class="ant-form ant-form-vertical"
                :form="formDelivery">
            <a-form-item v-if="hasTitle">
                <a-row type="flex" justify="center">
                    <a-col class="gutter-row r-text-left" :xs="{ span: 24 }">
                        <h2 class="r-heading">
                            <span>Enter delivery address</span>
                        </h2>
                    </a-col>
                </a-row>
            </a-form-item>
            <a-form-item>
                <a-auto-complete
                        dropdownClassName="certain-category-search-dropdown"
                        :dropdownMatchSelectWidth="false"
                        :dropdownStyle="{ width: '100%' }"
                        size="large"
                        style="width: 100%"
                        placeholder="Enter your delivery address"
                        optionLabelProp="value"
                        @select="onSelect"
                        @search="onSearch"
                >
                    <template slot="dataSource">
                        <a-select-option v-for="(address, index) in addresses" :key="address.description + index"
                                         v-on:click="onSelect(address, $event)"
                                         :value="address.main_text">
                            <div class="r-address-line">
                                <div class="r-address-icon">
                                    <a-icon type="environment"/>
                                </div>
                                <div class="r-address-content">
                                    <div class="r-address-main">
                                        {{ address.main_text }}
                                    </div>
                                    <div class="r-address-secondary">
                                        {{ address.secondary_text }}
                                    </div>
                                </div>
                            </div>
                        </a-select-option>
                    </template>
                    <a-input
                            size="large"
                            @keypress="onKeyPress">
                        <a-icon slot="prefix" type="environment"/>
                        <a-button
                                slot="suffix"
                                style="margin-right: -12px"
                                class="r-search-btn"
                                size="large"
                                type="primary">
                            Let's go
                        </a-button>
                    </a-input>
                </a-auto-complete>
            </a-form-item>
        </a-form>
    </div>
</template>
<script>
    export default {
        props: {
            store: {type: Object, required: false},
            hasTitle: {type: Boolean, required: false, default: false},
        },
        data() {
            return {
                formDelivery: this.$form.createForm(this, {name: 'form_delivery'}),
                addresses: [],
                search: null,
                hasData: false,
                isLoggedIn: false,
                modal: {
                    current: null,
                    isVisible: false
                },
            };
        },
        mounted() {
        },
        methods: {
            onSelect(address) {
                console.log("selecting address: ", address);

                let path = "/locations/address";
                console.log("auto completing address search >>>> " + path);

                let $this = this;
                $this.isLoggedIn = $this.$store.state.isLoggedIn;

                axios.post(path, {'data': address})
                    .then(response => {
                        console.log(response.data);
                        let address = response.data.address;

                        $this.$store.commit('onAddress', address);

                        if(!$this.isLoggedIn){
                            $this.modal.isVisible = true;
                            $this.modal.current = 'login';
                            $this.$store.commit('onModal', this.modal);
                        }

                        console.log("set address >> after");
                    })
                    .catch(e => {
                        console.log(e);
                    });
            },
            onKeyPress(event) {
                console.log('typing address: ', event);
            },
            onSearch(value) {
                this.search = value;
                let path = "/locations/" + this.search;
                console.log("auto completing address search >>>> " + path);

                let $this = this;

                axios.get(path, {})
                    .then(response => {
                        console.log("setting addresses >> before");
                        console.log(response.data);

                        $this.addresses = response.data.addresses;
                        $this.hasData = true;

                        console.log("setting addresses >> after");
                    })
                    .catch(e => {
                        console.log(e);
                    });
            },
            handleError() {

            }
        }
    };
</script>
