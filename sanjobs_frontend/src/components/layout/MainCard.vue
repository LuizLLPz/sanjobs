<template>
  <div class="main_card">
    <MainHeading v-bind:title="title" />
  </div>
</template>

<script>
import MainHeading from "@/components/typography/MainHeading";

export default {
  name: "MainCard",
  components: {
    MainHeading
  },
  props: {
    title: String,
    scheme: String
  }

}
</script>

<style scoped>

</style>