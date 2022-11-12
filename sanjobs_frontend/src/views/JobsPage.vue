<template>
  <div class="content">
    <div class="center">
      <MainHeading text="Vagas disponíveis"/>
      <div class="job_container">
        <JobCard v-for="job of jobs"
                 v-bind:job="job" v-bind:key="job"/>
      </div>
    </div>
  </div>

</template>

<script>
import MainHeading from "@/components/typography/MainHeading";
import JobCard from "@/components/jobs/JobCard";

export default {
  name: "JobsPage",
  components: {
    MainHeading,
    JobCard
  },
  data: function () {
    return {
      jobs: []
    }
  },
  methods: {
    fetchJobs: async function () {
      const response = await fetch("http://localhost:8000/api/jobs");
      this.jobs = await response.json();
      this.jobs = this.jobs.data;
    }
  },
  mounted: function () {
    this.fetchJobs();
  }
}

</script>

<style scoped>
  .content {
     margin-top: 10%;
  }

  .job_container {
    margin-top: 40px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    justify-content: center;
    align-items: center;
  }
</style>