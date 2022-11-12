<template>
  <div class="center">
    <form class="form_cadastrar">
      <MainHeading text="Cadastre-se" size="20px"/>
      <InputMain label="Nome (*)" type="text"
                 placeholder="Digite seu nome" error="Nome inválido"
                 v-model="firstName"/>

      <InputMain label="Sobrenome (*)" type="text"
                 placeholder="Digite seu sobrenome" error="Sobrenome inválido"
                 v-model="surname"/>

      <InputMain label="Email (*)" type="email"
                 placeholder="Digite seu email" error="Email inválido"
                 v-model="email"/>

      <InputMain label="Senha (*)" type="password"
                 placeholder="Digite sua senha" error="Senha inválida"
                 v-model="password"/>

      <InputMain label="Confirmar senha (*)" type="password"
                 placeholder="Confirme sua senha" error="Senha inválida"
                 v-model="password_confirmation"/>

      <TextArea label="Descrição breve"
                placeholder="Digite uma breve descrição sobre você"
                v-model="overview"/>
      <ButtonMain br="12px" @click="registerUser">Cadastrar</ButtonMain>
      <ButtonMain br="12px" @click="resetForm">Resetar</ButtonMain>
    </form>
  </div>
</template>

<script>
import MainHeading from "@/components/typography/MainHeading";
import InputMain from '@/components/form/InputMain.vue';
import TextArea from "@/components/form/TextArea";
import ButtonMain from "@/components/layout/Button";

export default {
  name: "RegisterPage",
  firstName: "",
  components: {
    ButtonMain,
    TextArea,
    MainHeading,
    InputMain
  },
  methods: {
    registerUser() {
      fetch('http://localhost:8000/api/user', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          name: this.firstName,
          surname: this.surname,
          email: this.email,
          password: this.password,
          overview: this.overview
        })
      });
    },
    resetForm() {
      this.firstName = '';
      this.surname = '';
      this.email = '';
      this.password = '';
      this.overview = '';
      document.querySelector('.form_cadastrar').reset();
    }
  }
}
</script>

<style scoped>
.form_cadastrar {
  margin-top: 10px;
  width: 320px;
  padding: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: #F7F8E5;
}
</style>