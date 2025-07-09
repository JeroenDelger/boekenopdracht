<template>
    <div>
        <h2>Review bewerken</h2>
        <Form v-if="review" :review="review" @submit="handleSubmit" />
    </div>
</template>

<script setup>
import { useRoute, useRouter } from 'vue-router';
import Form from '../components/Form.vue';
import { reviewStore } from '../store';

const route = useRoute();
const router = useRouter();
const review = reviewStore.getters.getById(route.params.id);

const handleSubmit = async (data) => {
    await reviewStore.actions.update(route.params.id, data);
    router.push({ name: 'books.showbook', params: { id: review.value.book_id } });
};
</script>
