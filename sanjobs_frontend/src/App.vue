<!--suppress ALL -->
<template>
  <NavBar/>
  <router-view></router-view>
</template>

 <script>
import NavBar from '@/components/layout/NavBar.vue';

export default {
  name: 'App',
  components : {
    NavBar,
  },

}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;0,800;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&family=Montserrat:ital,wght@0,500;0,600;0,800;1,500;1,600;1,700;1,800;1,900&display=swap');


:root {
  --color-primary: #0F1973;
  --color-secondary: #FFFF;
  --color-highlight: #FF5555;
  --color-form: #BBB1E5;
}


body { margin: 0; }

.center {
  display: flex;
  justify-content: center;
}

.highlighted { color: var(--color-highlight) }


.heading {
  display: flex;
  padding: 30px;
  flex-direction: column;
  margin-top: 45px;
  align-items: center;
}


.heading__secondary {
  color: var(--color-primary);
  font: normal normal 400 20px Inter;
  line-height: 150%;
}


.heading__action {
  margin-top: 20px;
  height: 40px;
  width: 175px;
  background-color: var(--color-primary);
  color: #E2D4FF;
  font: normal normal bold 16px Inter;
  border: 0;
  border-radius: 14px;
}

.footer { height: 200px; }

.job_container {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px;
}

</style>
