<template>
    <div class="flex justify-around center mt-16">
        <form class="w-full max-w-lg">
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label
                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-state"
                    >
                        Servo
                    </label>
                    <div class="relative">
                        <select
                            v-model="form.leader"
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state"
                        >
                            <option :value="team.leader_id">
                                {{ people[team.leader_id - 2].name }}
                            </option>
                            <option
                                v-for="person in people"
                                :key="person.id"
                                :value="person.id"
                            >
                                {{ person.name }}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label
                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-state"
                    >
                        Timóteo
                    </label>
                    <div class="relative">
                        <select
                            v-model="form.timothy"
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state"
                        >
                            <option
                                v-if="team.thimoty_id"
                                :value="team.thimoty_id"
                            >
                                {{ people[team.thimoty_id - 2].name }}
                            </option>
                            <option v-else selected="selected">Não definido</option>
                            <option v-for="person in people" :key="person.id">
                                {{ person.name }}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label
                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-state"
                    >
                        Anfitrião
                    </label>
                    <div class="relative">
                        <select
                            v-model="form.hostess"
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state"
                        >
                            <option
                                v-if="team.hostess_id"
                                :value="team.thimoty_id"
                            >
                                {{ people[team.hostess_id - 2].name }}
                            </option>
                            <option v-else  selected="selected">Não definido</option>
                            <option v-for="person in people" :key="person.id">
                                {{ person.name }}
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label
                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-password"
                    >
                        Nome da célula:
                    </label>
                    <input
                        v-model="form.name"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-team-name"
                        type="text"
                    />
                    <!--p class="text-gray-600 text-xs italic">
                    Make it as long and as crazy as you'd like
                </p-->
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label
                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-day"
                    >
                        Dia da célula:
                    </label>

                    <select
                        v-model="form.day"
                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-hour"
                    >
                        <option value="segunda-feira">Segunda-feira</option>
                        <option value="terça-feira">Terça-feira</option>
                        <option value="quarta-feira">Quarta-feira</option>
                        <option value="quinta-feira">Quinta-feira</option>
                        <option value="sexta-feira">Sexta-feira</option>
                        <option value="sabado">Sábado</option>
                        <option value="domingo">Domingo</option>
                    </select>

                    <!--p v-if="errors.day" class="text-red-500 text-xs italic">
                    Please fill out this field.
                </!--p-->
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label
                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-last-name"
                    >
                        Horário da célula
                    </label>
                    <select
                        v-model="form.hour"
                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-hour"
                    >
                        <option value="23:30">23:30</option>
                        <option value="23:00">23:00</option>
                        <option value="22:30">22:30</option>
                        <option value="22:00">22:00</option>
                        <option value="21:30">21:30</option>
                        <option value="21:00">21:00</option>
                        <option value="20:30">20:30</option>
                        <option value="20:00">20:00</option>
                        <option value="19:30">19:30</option>
                        <option value="19:00">19:00</option>
                        <option value="18:30">18:30</option>
                        <option value="18:00">18:00</option>
                        <option value="17:30">17:30</option>
                        <option value="17:00">17:00</option>
                        <option value="16:30">16:30</option>
                        <option value="16:00">16:00</option>
                        <option value="15:30">15:30</option>
                        <option value="15:00">15:00</option>
                        <option value="14:30">14:30</option>
                        <option value="14:00">14:00</option>
                        <option value="13:30">13:30</option>
                        <option value="13:00">13:00</option>
                        <option value="12:30">12:30</option>
                        <option value="12:00">12:00</option>
                        <option value="11:30">11:30</option>
                        <option value="11:00">11:00</option>
                        <option value="10:30">10:30</option>
                        <option value="10:00">10:00</option>
                        <option value="09:30">09:30</option>
                        <option value="09:00">09:00</option>
                        <option value="08:30">08:30</option>
                        <option value="08:00">08:00</option>
                        <option value="07:30">07:30</option>
                        <option value="07:00">07:00</option>
                        <option value="06:30">06:30</option>
                        <option value="06:00">06:00</option>
                        <option value="05:30">05:30</option>
                        <option value="05:00">05:00</option>
                        <option value="04:30">04:30</option>
                        <option value="04:00">04:00</option>
                        <option value="03:30">03:30</option>
                        <option value="03:00">03:00</option>
                        <option value="02:30">02:30</option>
                        <option value="02:00">02:00</option>
                        <option value="01:30">01:30</option>
                        <option value="01:00">01:00</option>
                        <option value="00:30">00:30</option>
                        <option value="00:00">00:00</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label
                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-city"
                    >
                        City
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-city"
                        type="text"
                        placeholder="Albuquerque"
                    />
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label
                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-state"
                    >
                        State
                    </label>
                    <div class="relative">
                        <select
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state"
                        >
                            <option>New Mexico</option>
                            <option>Missouri</option>
                            <option>Texas</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
                        >
                            <svg
                                class="fill-current h-4 w-4"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label
                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-zip"
                    >
                        Zip
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-zip"
                        type="text"
                        placeholder="90210"
                    />
                </div>
            </div>
        </form>
    </div>
    {{macroTeamsList}}
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import axios from "axios";
export default {
    name: "TeamEditForm",
    inject: ["people"],
    props: {
        errors: Object,
        team: Object,
    },
    data() {
        return {
            macroTeamsList: [],
            form: this.$inertia.form({
                leader: this.people[this.team.leader_id - 2]
                    ? this.people[this.team.leader_id - 2].id
                    : null,
                timothy: this.people[this.team.timothy_id - 2]
                    ? this.people[this.team.timothy_id - 2].id
                    : null,
                hostess: this.people[this.team.hostess_id - 2]
                    ? this.people[this.team.hostess_id - 2].id
                    : null,
                name: this.team.name,
                day: this.team.day ? this.team.day : "Selecione",
                hour: this.team.hour,
                macroTeam: [],
            }),
        };
    },
    created() {
        this.loadMacroTeams();
    },
    methods: {
        async loadMacroTeams() {
            await axios
            .get("/macro-teams")
            .then(function (response) {
                    this.macroTeamsList = response.data;
                    console.log(response.data[0].name);
                })
            .catch( function (err){
                console.log(err);
                //this.macroTeamsList = [];
            });
        }
    },

};
</script>
