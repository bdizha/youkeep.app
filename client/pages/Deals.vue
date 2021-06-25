<template>
  <a-row type="flex" justify="center" align="middle">
    <a-col v-for="(product, index) in products" :key="index + 1" :span="6">
      <r-product :product="product"></r-product>
    </a-col>
  </a-row>
</template>
<script>
const products = [
  {
    key: 1,
    name: 'Mix Box',
    photo: '/TJBJks9irshSLe1b7M7GwTBNGKJtZy0XqySO0MN0.png',
    color_name: 'red',
    quantity: 1,
    variant: {
      key: 3,
      label: 'default',
      price: 175.00
    },
    variants: [
      {
        key: 1,
        label: 'Small',
        price: 95.00
      },
      {
        key: 2,
        label: 'Medium',
        price: 135.00
      },
      {
        key: 3,
        label: 'default',
        price: 175.00
      }
    ]
  },
  {
    key: 2,
    name: 'Fruits Only Box ',
    photo: '/P7MFw6v98zDTiB9MxipxkVnmK8eUJlpc4M6zBOTF.png',
    color_name: 'black',
    quantity: 1,
    variant: {
      key: 2,
      label: 'Medium',
      price: 135.00
    },
    variants: [
      {
        key: 1,
        label: 'Small',
        price: 95.00
      },
      {
        key: 2,
        label: 'Medium',
        price: 135.00
      },
      {
        key: 3,
        label: 'default',
        price: 175.00
      }
    ]
  },
  {
    key: 3,
    name: 'Veggies Only Box ',
    photo: '/TJBJks9irshSLe1b7M7GwTBNGKJtZy0XqySO0MN0.png',
    color_name: 'red',
    quantity: 1,
    variant: {
      key: 1,
      label: 'Small',
      price: 95.00
    },
    variants: [
      {
        key: 1,
        label: 'Small',
        price: 95.00
      },
      {
        key: 2,
        label: 'Medium',
        price: 135.00
      },
      {
        key: 3,
        label: 'default',
        price: 175.00
      }
    ]
  },
]
export default {
  data () {
    return {
      products: products
    }
  }
}
</script>
