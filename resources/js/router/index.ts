import { createRouter, createWebHistory } from 'vue-router';
import { authorRoutes } from '../domains/authors/routes';
import { bookRoutes } from '../domains/books/pages/routes';
import { reviewRoutes } from '../domains/reviews/routes';

export const router = createRouter({
    history: createWebHistory(),
    routes: [...bookRoutes, ...authorRoutes, ...reviewRoutes],
});
