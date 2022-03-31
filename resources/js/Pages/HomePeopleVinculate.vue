<template>
    <h1>Olá {{ $page.props.auth.user.name }}</h1>
    <h2>
        Vamos iniciar, por favor selecione qual vinculo devo criar para você
        (por quem você preencherá os relatórios)
    </h2>
    <form @submit.prevent="submit">
        <select
            name="person"
            class="mx-auto mt-2 block px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
            id="people"
            aria-label="Vincular ao usuário"
        >
            <option >
                Vincular este usuário à...
            </option>
            <option v-for="person in people" :key="person.id">
                {{ person.name }}
            </option>
        </select>
        <Button class="mt-6 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Salvar</Button>
    </form>
</template>

<script>
import { reactive } from "vue";
import { Inertia } from "@inertiajs/inertia";
import Button from '@/Components/Button.vue';

export default {
    components: {Button, Inertia},
    props: {
        people: Array,
    },
    setup() {
        const form = reactive({
            people: null,
        });

        function submit(form) {
            console.log(form.people);
            //Inertia.post('/link-user/', form)
        }

        return { form, submit };
    },
};
</script>
