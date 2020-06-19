<template>
    <el-rate
  v-model="value"
  :texts="['oops', 'disappointed', 'normal', 'good', 'great']"
  show-text>
</el-rate>

</template>

<script>
  export default {
    data() {
      return {
        value: null
      }
    }
  }
</script>