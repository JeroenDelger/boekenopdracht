<template>
    <div>
        <h2>Boek bewerken</h2>
        <Form v-if="book" :book="book" @submit="handleSubmit" />
    </div>
</template>

<script setup>
import { useRoute, useRouter } from 'vue-router';
import Form from './Form.vue';
import { bookStore } from './store';

const route = useRoute();
const router = useRouter();
const book = bookStore.getters.getById(route.params.id);

const handleSubmit = async (data) => {
    await bookStore.actions.update(route.params.id, data);
    router.push({ name: 'books.overview' });
};
</script>
