import Create from './pages/Create.vue';
import Edit from './pages/Edit.vue';
import Overview from './pages/Overview.vue';

export const reviewRoutes = [
    { path: '/reviews', component: Overview, name: 'reviews.overview' },
    { path: '/reviews/:id/create', component: Create, name: 'reviews.create' },
    { path: '/reviews/:id/edit', component: Edit, name: 'reviews.edit' },
];
