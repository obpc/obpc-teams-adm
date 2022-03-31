<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import HomePeopleVinculate from '@/Pages/HomePeopleVinculate.vue';
import HomeTeamVinculate from '@/Pages/HomeTeamVinculate.vue';

export default {
    components: {Head, BreezeAuthenticatedLayout, HomePeopleVinculate, HomeTeamVinculate},
    props:{
        personLinked: Number,
        teamsLinked: Number,
        people: Array,
        teams: Array,
    },
}
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
                    <div v-if="personLinked == 0" class="p-6 bg-white border-b border-gray-200">
                        <HomePeopleVinculate :people="people"/>
                    </div>
                    <div v-else-if="teamsLinked == 0" class="p-6 bg-white border-b border-gray-200">
                        <HomeTeamVinculate :teams="teams" />
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
