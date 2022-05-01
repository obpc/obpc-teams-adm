<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import HomePeopleVinculate from "@/Pages/HomePeopleVinculate.vue";
import HomeTeamVinculate from "@/Pages/HomeTeamVinculate.vue";
import Main from "@/Pages/Main.vue";

export default {
    components: {
        Head,
        BreezeAuthenticatedLayout,
        HomePeopleVinculate,
        HomeTeamVinculate,
        Main,
    },
    props: {
        personLinked: Number,
        teamsLinked: Number,
        people: Array,
        teams: Array,
        userTeam: Object,
        userData: Object,
    },
    provide () {
        return {
            people: this.people,
        }
    }
};
</script>
<template>
    <Head title="Gestão de células" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Gestão de células
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div
                        v-if="personLinked != 1"
                        class="p-6 bg-white border-b border-gray-200"
                    >
                        <!--HomePeopleVinculate :people="people"/-->
                        <h3>Usuário ainda não vinculado</h3>
                        <p>

                            Por favor, entre em contato com a secretaria da
                            igreja para concluir a configuração do seu perfil
                            como servo de célula. <br />Se preferir use este
                            <a href="https://wa.link/r9i3m3">link</a>
                            para iniciar uma conversa pelo Whatsapp
                        </p>
                    </div>
                    <div
                        v-else-if="teamsLinked != 1"
                        class="p-6 bg-white border-b border-gray-200"
                    >
                        <!--HomeTeamVinculate :teams="teams" /-->
                        <h2>Célula ainda não vinculada!</h2>
                        <p>
                            Por favor, entre em contato com a secretaria da
                            igreja para concluir a configuração do seu perfil
                            como servo de célula. <br />Se preferir use este
                            <a style="text-decoration: underline;" href="https://wa.link/r9i3m3">link</a>
                            para iniciar uma conversa pelo Whatsapp
                        </p>
                    </div>
                    <div
                        v-else
                        class="p-6 bg-white border-b border-gray-200"
                    >

                        <Main :team="userTeam" :person="userData" />
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
