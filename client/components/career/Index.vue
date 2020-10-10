<template>
    <r-page style="background: #FFFFFF;overflow: hidden;">
        <a-row type="flex" justify="center" align="middle">
            <a-col :xs="{span: 24}" :md="{span: 16}" :lg="{span: 12}" class="r-padding-48 r-margin-vertical-48">
                <a-row type="flex" justify="space-around" align="middle">
                    <a-col class="gutter-row" :span="24">
                        <h1 class="r-heading r-text-secondary">
                            Current job openings at Shopple
                        </h1>
                    </a-col>
                </a-row>
                <a-row class="r-margin-vertical-24" v-if="hasData" type="flex" justify="center" align="left">
                    <a-col class="r-career r-text-left" v-for="(department, d) in departments" :key="d"
                           :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                        <a-row class="r-margin-top-24">
                            <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 12 }">
                                <h3 class="r-heading r-text-capitalize r-text-secondary">{{ department.name }}</h3>
                            </a-col>
                        </a-row>
                        <a-row class="r-margin-vertical-12" v-for="(position, p) in department.positions" :key="p">
                            <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }" :lg="{ span: 24 }">
                                <a-card class="r-p-24">
                                    <a-row type="flex" justify="start" align="middle">
                                        <a-col class="gutter-row" :xs="{ span: 24 }" :sm="{ span: 24 }"
                                               :lg="{ span: 24 }">
                                            <a-row>
                                                <a-col class="gutter-row" :sm="{ span: 24 }" :lg="{ span: 24 }">
                                                    <a :href="'/career/' + position.slug">
                                                        <h4 class="r-heading">{{ position.title }}</h4>
                                                    </a>
                                                </a-col>
                                            </a-row>
                                            <a-row>
                                                <a-col class="gutter-row" :xs="{ span: 14 }" :sm="{ span: 16 }"
                                                       :lg="{ span: 18 }">
                                                    <a :href="'/career/' + position.slug">
                                                        <a-row>
                                                            <a-col class="gutter-row" :xs="{ span: 24 }"
                                                                   :sm="{ span: 12 }"
                                                                   :lg="{ span: 24 }">
                                                                <h4 class="r-text-normal">{{ position.city.name
                                                                    }}
                                                                </h4>
                                                            </a-col>
                                                            <a-col class="gutter-row" :xs="{ span: 24 }"
                                                                   :sm="{ span: 12 }"
                                                                   :lg="{ span: 24 }">
                                                                <h4 class="r-text-primary r-text-capitalize">
                                                                    {{ position.type_formatted }}
                                                                </h4>
                                                            </a-col>
                                                            <a-col class="gutter-row r-text-secondary r-text-capitalize"
                                                                   :xs="{ span: 24 }"
                                                                   :sm="{ span: 12 }"
                                                                   :lg="{ span: 24 }">
                                                                {{ position.department }}
                                                            </a-col>
                                                        </a-row>
                                                    </a>
                                                </a-col>
                                                <a-col class="r-padding-24 gutter-row r-text-right" :xs="{ span: 10 }"
                                                       :sm="{ span: 8 }"
                                                       :lg="{ span: 6 }">
                                                    <a class="r-same-height"
                                                       :href="'/career/' + position.slug + '/apply'">
                                                        <a-button type="secondary"
                                                                  class="r-btn-secondary" size="default">
                                                            Apply
                                                        </a-button>
                                                    </a>
                                                </a-col>
                                            </a-row>
                                        </a-col>
                                    </a-row>
                                </a-card>
                            </a-col>
                        </a-row>
                    </a-col>
                </a-row>
                <a-row v-if="hasData && departments.length == 0" type="flex" justify="center">
                    <a-col class="gutter-row" :span="24">
                        <a-empty
                                image="/assets/icon_grey.svg"
                                :imageStyle="{ height: '81px',}">
                            <span slot="description">Sorry. There aren't any job openings currently.</span>
                            <a-button size="large" class="ant-btn-primary r-btn-secondary">Shop now</a-button>
                        </a-empty>
                    </a-col>
                </a-row>
            </a-col>
        </a-row>
    </r-page>
</template>
<script>
    import {mapGetters} from "vuex";

    export default {
        props: {},
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
