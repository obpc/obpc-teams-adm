<template>
    <button
        v-if="this.isActive"
        class="px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-green-300 active:bg-green-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-gray transition ease-in-out duration-150"
    >
        {{ this.label }}
    </button>
    <button
        v-else
        class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150"
    >
        {{ this.label }}
    </button>
</template>

<script>
export default {
    el: "#NavButton",
    props: {
        isActive: Boolean,
        label: String,
    },
};
</script>
