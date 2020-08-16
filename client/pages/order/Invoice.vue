<template>
    <r-account>
        <a-row type="flex" justify="center" align="middle">
            <a-col class="gutter-row r-mv-24" :xs="{ span: 24 }"
                   :sm="{ span: 24 }" :lg="{ span: 24 }">
                <h2 class="r-heading">
                    ORDER #202511935 placed on 27 July 2019 12:59
                </h2>
                <h4 class="r-heading">
                    Here you can manage all your order details.
                </h4>
            </a-col>
        </a-row>
        <a-row type="flex" justify="center" align="middle">
            <a-col :xs="{ span: 24 }">
                <a-card title="ORDER TIMELINE" style="width: 100%; margin-bottom: 20px;">
                    <a-steps :direction="isVertical ? 'vertical' : 'horizontal'" size="large">
                        <a-step title="Order received"
                                :description="isVertical ? 'We are awaiting payment for your order' : ''"/>
                        <a-step title="Order is being processed"
                                :description="isVertical ? 'Your order is being prepared by our operations team' : ''"/>
                        <a-step title="Parcel is en-route"
                                :description="isVertical ? 'Your order has been dispatched to our courier partner' : ''"/>
                        <a-step title="Order delivered"
                                :description="isVertical ? 'Your order has been delivered!' : ''"/>
                    </a-steps>
                </a-card>
            </a-col>
        </a-row>
        <a-row :gutter="16" type="flex" justify="right">
            <a-col :xs="{ span: 24 }">
                <div style="text-align: right; width: 100%; margin-bottom: 20px;">
                    <a-button @click="toggleDirection" type="primary" html-type="submit"
                              class="ant-btn-secondary r-btn-primary">
                        {{ isVertical ? 'Less' : 'Detailed' }} Timeline
                    </a-button>
                </div>
            </a-col>
        </a-row>
        <a-row type="flex" justify="center" align="middle">
            <a-col :xs="{ span: 12 }">
                <a-card title="DELIVERY ADDRESS" style="width: 100%; margin-bottom: 20px;">
                    <p class="r-text-normal">Batanayi Matuku</p>
                    <p class="r-text-normal">Respublica</p>
                    <p class="r-text-normal">10 Muswel Road Bryastan, Johannesburg, South</p>
                    <p class="r-text-normal">Bryanston</p>
                    <p class="r-text-normal">Bryanston</p>
                    <p class="r-text-normal">City Of Johannesburg</p>
                    <p class="r-text-normal">2191</p>
                    <p class="r-text-normal">Gauteng</p>
                    <p class="r-text-normal">0725228552</p>
                </a-card>
            </a-col>
            <a-col :xs="{ span: 12 }">
                <a-card title="BILLING ADDRESS" style="width: 100%; margin-bottom: 20px;">
                    <p class="r-text-normal">Batanayi Matuku</p>
                    <p class="r-text-normal">Respublica</p>
                    <p class="r-text-normal">10 Muswel Road Bryastan, Johannesburg, South</p>
                    <p class="r-text-normal">Bryanston</p>
                    <p class="r-text-normal">Bryanston</p>
                    <p class="r-text-normal">City Of Johannesburg</p>
                    <p class="r-text-normal">2191</p>
                    <p class="r-text-normal">Gauteng</p>
                    <p class="r-text-normal">0725228552</p>
                </a-card>
            </a-col>
        </a-row>
        <a-row type="flex" justify="center" align="middle">
            <a-col :xs="{ span: 12 }">
                <a-card title="PAYMENT METHOD" style="width: 100%; margin-bottom: 20px;">
                    <p class="r-text-normal">Credit & Debit Card</p>
                </a-card>
            </a-col>
            <a-col :xs="{ span: 12 }">
                <a-card title="DELIVERY METHOD" style="width: 100%; margin-bottom: 20px;">
                    <p class="r-text-normal">Kshop </p>
                </a-card>
            </a-col>
        </a-row>
        <a-table bordered :dataSource="data" :columns="columns">
            <template slot="photo" slot-scope="photo">
                <a-avatar
                        shape="square" size="large"
                        style="width: 56px; height: 56px; border-radius: 0px;"
                        slot="avatar"
                        :src="photo"
                />
            </template>
        </a-table>
    </r-account>
</template>
<script>
    const columns = [
        {
            title: 'Product Image',
            dataIndex: 'photo',
            key: 'photo',
            scopedSlots: {customRender: 'photo'},
        },
        {title: 'Product Name', dataIndex: 'title', key: 'title'},
        {title: 'Variant', dataIndex: 'variant', key: 'variant'},
        {title: 'Item SKU', dataIndex: 'item_sku', key: 'item_sku'},
        {title: 'Status', dataIndex: 'status', key: 'status'},
        {title: 'Price', dataIndex: 'price', key: 'price'},
        {title: 'Discount', dataIndex: 'discount', key: 'discount'},
        {title: 'Qty', dataIndex: 'quantity', key: 'quantity'},
        {title: 'Subtotal', dataIndex: 'sub_total', key: 'sub_total'}
    ];

    const data = [
        {
            photo: 'https://target.scene7.com/is/image/Target/GUEST_9ebabf4c-875e-497c-a1de-5b466667c333?wid=325&hei=325&qlt=80&fmt=pjpeg',
            title: 'Roma Tomato',
            variant: '1lb Bag',
            item_sku: 'A-52062240',
            status: 'Delivered',
            price: 'R 22.00',
            discount: 'R 4.00',
            quantity: '3',
            sub_total: 'R 66.00',
        },
        {
            photo: 'https://target.scene7.com/is/image/Target/GUEST_9ebabf4c-875e-497c-a1de-5b466667c333?wid=325&hei=325&qlt=80&fmt=pjpeg',
            title: 'Roma Tomato',
            variant: '1lb Bag',
            item_sku: 'A-52062240',
            status: 'Delivered',
            price: 'R 22.00',
            discount: 'R 4.00',
            quantity: '3',
            sub_total: 'R 66.00',
        },
        {
            photo: 'https://target.scene7.com/is/image/Target/GUEST_9ebabf4c-875e-497c-a1de-5b466667c333?wid=325&hei=325&qlt=80&fmt=pjpeg',
            title: 'Roma Tomato',
            variant: '1lb Bag',
            item_sku: 'A-52062240',
            status: 'Delivered',
            price: 'R 22.00',
            discount: 'R 4.00',
            quantity: '3',
            sub_total: 'R 66.00',
        },
    ];

    export default {
        components: {},
        data() {
            return {
                isVertical: false,
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
            toggleDirection() {
                this.isVertical = !this.isVertical;
            }
        },
    };
</script>
