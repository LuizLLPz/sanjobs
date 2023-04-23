<template>
  <div class="job_card">

    <div class="job_card__company">
      <img class="job_company__logo"
            v-bind:src="job.company?.profilePicture"
            alt="Logo"
      />
      <div class="job_company__name">
        {{ job.company?.name}}
      </div>
    </div>

    <div class="job_card__main">
      <h1 class="job_card__title">
        {{ job.title }}
      </h1>
      <div class="job_main__city">
        {{ job.city }}
      </div>
      <div class="job_main__wage">
        {{ job.wage }}
      </div>
      <div class="job_main__published">
        {{ job.getDateStr() }}
      </div>
    </div>

    <div class="job_card__secondary">
      <div class="job_card__tag" v-if="job.modality">
        {{ job.modality }}
      </div>
      <div class="job_card__tag" v-if="job.seniority">
        {{ job.seniority }}
      </div>
    </div>

  </div>
</template>

<script lang="ts">
import {Job} from "@/models/Jobs";

export default {
  props: {
    job: {
      type: Job,
      required: true
    }
  }
}
</script>

<style scoped>

.job_card { display: grid; }


.job_card {
  width: 340px;
  height: 90px;
  grid-template-columns: 1fr 3fr 2fr;
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}


.job_card__company {
  max-height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.job_company__logo {
  width: 60%;
  border-radius: 40px;
  object-fit: cover;
  height: 50%;
}


.job_company__name {
  word-wrap: break-word;
  color: #3F4246;
  font: normal normal normal 10px Inter;
}


.job_card__main {
  max-height: 100%;
}


.job_card__secondary { display: flex; }


.job_card__title {
  color: var(--color-primary);
  font: normal normal bold 14px Inter;
}


.job_main__city {
  margin: 4px 0;
  color: #3F4246;
  font: normal normal 600 10px Inter;
}


.job_main__wage {
  color: var(--color-highlight);
  font: normal normal bold 10px Inter;
}


.job_main__published {
  margin-top: 5px;
  color: #2C2C2C;
  font: normal normal 400 8px Inter;
}


.job_card__secondary { padding-top: 50%; }


.job_card__tag {
  display: flex;
  padding: 0 4px;
  height: 15px;
  justify-content: center;
  align-items: center;
  margin: 5px;
  color: var(--color-secondary);
  font: normal normal bold 8px Inter;
  background-color: var(--color-highlight);
}

</style>