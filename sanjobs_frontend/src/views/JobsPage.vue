<template>
  <div class="center">
    <MainHeading text="Vagas disponíveis"/>
    <div class="job_container">
      <JobCard v-for="job of jobs" v-bind:job="job" v-bind:key="job"/>
    </div>
  </div>

</template>

<script>
import MainHeading from "@/components/typography/MainHeading";
export default {
  name: "JobsPage",
  components: {
    MainHeading
  }
}

</script>

<style scoped>

</style>