<template>
    <div v-if="book">
        <table>
            <thead>
                <tr>
                    <td><b>Title</b></td>
                    <td><b>Summary</b></td>
                    <td><b>Author</b></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ book.title }}</td>
                    <td>{{ book.summary }}</td>
                    <!-- book.author.name geeft error bij laden pagina in console -->
                    <td>{{ book.author.name }}</td>
                </tr>
            </tbody>
        </table>
        <br />
        <div v-for="review in reviews">
            <table>
                <thead>
                    <tr>
                        <td>
                            <b>Review van: {{ authorStore.getters.getById(review.author_id).value.name }}</b>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ review.review }}</td>
                        <td>
                            <RouterLink :to="{ name: 'reviews.edit', params: { id: review.id } }"><b>Edit review</b></RouterLink>
                        </td>
                        <td>
                            <button @click="deleteReview(review.id)"><b>Verwijder review</b></button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br />
        </div>
        <RouterLink :to="{ name: 'reviews.create', params: { id: book.id } }"><b>Voeg review toe</b></RouterLink>
    </div>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import { useRoute } from 'vue-router';
import { authorStore } from '../../authors/store';
import { reviewStore } from '../../reviews/store';
import { bookStore } from './store';

const route = useRoute();
const book = bookStore.getters.getById(route.params.id);
const deleteReview = (reviewId) => reviewStore.actions.delete(reviewId);
const reviews = ref();

// TODO: zou ook zonder onMounted moeten kunnen
onMounted(async () => {
    await authorStore.actions.getAll();
    await reviewStore.actions.getReviewsByBookId(route.params.id);
    reviews.value = reviewStore.getters.all.value;
});

// onBeforeUpdate(async () => {
//     await authorStore.actions.getAll();
//     await reviewStore.actions.getReviewsByBookId(route.params.id);
//     reviews.value = reviewStore.getters.all.value;
// });
</script>

<style>
td {
    text-align: left;
    padding-left: 25px;
    padding-bottom: 5px;
}
</style>
