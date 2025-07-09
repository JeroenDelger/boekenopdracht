<template>
    <div>
        <h2>Nieuwe autheur toevoegen</h2>
        <Form :author="authorStore.getters.getById" @submit="handleSubmit" />
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { useRouter } from 'vue-router';
import { authorStore } from '../store';
import Form from './Form.vue';

const router = useRouter();

const author = ref({
    name: '',
    first: '',
    last: '',
    email: '',
    password: '',
});

const handleSubmit = async (data) => {
    await authorStore.actions.create(data);
    router.push({ name: 'authors.overview' });
};
</script>
