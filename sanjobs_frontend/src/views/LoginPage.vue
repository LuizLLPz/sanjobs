<template>
<div class="main">
  <div class="center">
    <MainHeading text="Login"/>
    <InputMain label="Email" type="email" placeholder="Digite seu email"
               v-model="email" @keydown.enter="login"/>
    <InputMain label="Senha" type="password" placeholder="Digite sua senha"
                v-model="password" @keydown.enter="login"/>
    <ButtonMain br="12px" @click="login">Entrar</ButtonMain>
  </div>
</div>
</template>

<script>
import MainHeading from "@/components/typography/MainHeading";
import InputMain from '@/components/form/InputMain.vue';
import ButtonMain from "@/components/layout/Button";

export default {
  name: "LoginPage.vue",
  components: {
    MainHeading,
    InputMain,
    ButtonMain
  },
  methods: {
    login: async function () {
      const res = await fetch('http://localhost:8000/api/session',
          {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({
              email: this.email,
              password: this.password
            })
          }
      );
      const data = await res.json();
      alert(JSON.stringify(data));
    }
  }
}
</script>

<style scoped>
.main { margin-top: 30px; }
</style>