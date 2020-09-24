<template>
    <r-account>
        <a-row type="flex" justify="center" align="middle">
            <a-col class="gutter-row" :xs="{ span: 24 }"
                   :sm="{ span: 24 }" :lg="{ span: 24 }">
                <a-card title="YOUR ORDERS" style="width: 100%;">
                    <span class="r-text-sm">
                        Here you can manage all your orders.
                    </span>
                </a-card>
                <a-table bordered :dataSource="data" :columns="columns">
                    <template slot="action" slot-scope="text, record">
                        <a-row :gutter="24" type="flex" justify="center" align="middle">
                            <a-col :xs="{span: 12}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 12}">
                                <router-link to="/account/order/A-52062240">
                                    <a-button block size="small" class="r-btn-bordered-primary" type="primary">
                                        Order
                                    </a-button>
                                </router-link>
                            </a-col>
                            <a-col :xs="{span: 12}" :sm="{span: 12}" :md="{span: 12}" :lg="{span: 12}">
                                <router-link to="/account/order/A-52062240/invoice">
                                    <a-button block size="small" type="secondary" class="r-btn-bordered-secondary">
                                        Invoice
                                    </a-button>
                                </router-link>
                            </a-col>
                        </a-row>
                    </template>
                </a-table>
            </a-col>
        </a-row>
    </r-account>
</template>
<script>
    const columns = [
        {title: 'Timeline', dataIndex: 'timelime', key: 'timelime'},
        {title: 'Date Ordered', dataIndex: 'ordered_at', key: 'ordered_at'},
        {title: 'Order Number', dataIndex: 'order_number', key: 'order_number'},
        {title: 'Items Ordered', dataIndex: 'items_count', key: 'items_count'},
        {title: 'Total Cost', dataIndex: 'total_cost', key: 'total_cost'},
        {title: 'View', dataIndex: '', key: 'x', scopedSlots: {customRender: 'action'}},
    ];

    const data = [
        {
            timelime: 1,
            ordered_at: '03 March 2020',
            order_number: '202511935',
            items_count: '4',
            total_cost: 'R 360.00',
        },
        {
            timelime: 1,
            ordered_at: '27 Dec 2019',
            order_number: '202511921',
            items_count: '3',
            total_cost: 'R 1 360.00',
        },
        {
            timelime: 1,
            ordered_at: '12 August 2019',
            order_number: '202511935',
            items_count: '11',
            total_cost: 'R 2 360.00',
        },
    ];

    export default {
        components: {},
        data() {
            return {
                dataSource: [
                    {
                        title: 'Timeline',
                        key: '0',
                        name: 'Edward King 0',
                        age: '32',
                        address: 'London, Park Lane no. 0',
                    },
                    {
                        title: 'Date Ordered',
                        key: '1',
                        name: 'Edward King 1',
                        age: '32',
                        address: 'London, Park Lane no. 1',
                    },
                    {
                        title: 'Order Number',
                        key: '1',
                        name: 'Edward King 1',
                        age: '32',
                        address: 'London, Park Lane no. 1',
                    },
                ],
                count: 2,
                columns,
                data
            };
        },
        methods: {
            onDelete(key) {
                const dataSource = [...this.dataSource];
                this.dataSource = dataSource.filter(item => item.key !== key);
            },
            handleAdd() {
                const {count, dataSource} = this;
                const newData = {
                    key: count,
                    name: `Edward King ${count}`,
                    age: 32,
                    address: `London, Park Lane no. ${count}`,
                };
                this.dataSource = [...dataSource, newData];
                this.count = count + 1;
            },
        },
    };
</script>
<style>
    .editable-cell {
        position: relative;
    }

    .editable-cell-input-wrapper,
    .editable-cell-text-wrapper {
        padding-right: 24px;
    }

    .editable-cell-text-wrapper {
        padding: 5px 24px 5px 5px;
    }

    .editable-cell-icon,
    .editable-cell-icon-check {
        position: absolute;
        right: 0;
        width: 20px;
        cursor: pointer;
    }

    .editable-cell-icon {
        line-height: 18px;
        display: none;
    }

    .editable-cell-icon-check {
        line-height: 28px;
    }

    .editable-cell:hover .editable-cell-icon {
        display: inline-block;
    }

    .editable-cell-icon:hover,
    .editable-cell-icon-check:hover {
        color: #108ee9;
    }

    .editable-add-btn {
        margin-bottom: 8px;
    }
</style>