<template>
    <h1 class="font-semibold my-5 text-xl text-gray-800 leading-tight">
        Célula: {{ team.name }}
    </h1>
    <h2 class="font-semibold my-5 text-lg text-gray-600 leading-tight">
        Servo: {{ person.name }}
    </h2>
    <div class="flex justify-around">
        <NavButton @click="switchMode(0)" v-bind:isActive="this.btn0" label="configurar célula" />
        <NavButton @click="switchMode(1)" v-bind:isActive="this.btn1" label="enviar relatório" />
        <NavButton @click="switchMode(2)" v-bind:isActive="this.btn2" label="consultar relatórios" />
    </div>
    <TeamEditForm v-if="this.btn0" :team="this.team" />
</template>

<script>
import NavButton from "@/Pages/NavButton.vue";
import TeamEditForm from "@/Pages/TeamEditForm.vue";

export default {
    name: "App",
     components: {
      NavButton,
      TeamEditForm,
    },
    props: {
        person: Object,
        team: Object,
    },
    provide () {
        return {
            team: this.team,
        }
    },
    data() {
        return {
            btn0: true,
            btn1: false,
            btn2: false,
            mode: "team-edit",
        };
    },
    computed: {

    },
    methods: {
        switchMode(modeId) {
            switch (modeId) {
                case 0:
                    this.btn0 = true
                    this.btn1 = false
                    this.btn2 = false
                    this.mode = 'team-edit'
                    break;
                case 1:
                    this.btn0 = false
                    this.btn1 = true
                    this.btn2 = false
                    this.mode = 'send-report'
                    break;
                case 2:
                    this.btn0 = false
                    this.btn1 = false
                    this.btn2 = true
                    this.mode = 'show-reports'
                    break;
                default:
                    case 0:
                    this.btn0 = false
                    this.btn1 = false
                    this.btn2 = false
                    this.mode = 'invalid'
                    break;
            }
        }
    },
};
</script>
