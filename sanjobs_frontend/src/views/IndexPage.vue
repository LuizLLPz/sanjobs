<template>

  <div class="heading">
    <MainHeading text="Sua oportunidade perto de você"/>
    <p class="heading__secondary">
      Com o Sanjobs encontrar emprego se torna uma tarefa muito mais fácil!
    </p>
    <button class="heading__action">
      Ver oportunidades
    </button>
  </div>
  <div class="job_container">
    <HighlightHeading text="Vagas relacionadas a" highlight='"marketing e design"'></HighlightHeading>
    <JobCard v-for="job of jobs" v-bind:job="job" v-bind:key="job"/>
  </div>
  <div class="footer">

  </div>

</template>

<script>
import MainHeading from "@/components/typography/MainHeading";
import HighlightHeading from "@/components/typography/HighlightHeading";
import JobCard from "@/components/jobs/JobCard";


export default {
  name: "IndexPage",

  components: {
    MainHeading,
    JobCard,
    HighlightHeading,
  },
  data() {
    return {
      jobs: [{
        title: 'Auxiliar administrativo',
        wage: 'R$1.200',
        publishedAt: 'Publicado há 1 dia',
        city: 'São José dos Pinhais',
        company: 'Maçã',
        modality: 'Presencial',
        seniority: 'Auxiliar'
      }]}
  },
}
</script>

<style scoped>

</style>