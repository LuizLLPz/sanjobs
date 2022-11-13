<template>
  <div class="main_card">
    <MainHeading v-bind:text="title" />
    <slot />
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
.main_card {
  background-color: v-bind("scheme ? scheme : '#F7F9F8'");
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
}
</style>