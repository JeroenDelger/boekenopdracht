import Create from '../pages/Create.vue';
import Edit from '../pages/Edit.vue';
import Overview from '../pages/Overview.vue';
import ShowBook from '../pages/ShowBook.vue';

export const bookRoutes = [
    { path: '/books', component: Overview, name: 'books.overview' },
    { path: '/books/create', component: Create, name: 'books.create' },
    {
        path: '/',
        component: () => import('../pages/Home.vue'),
    },

    { path: '/books/:id/edit', component: Edit, name: 'books.edit' },
    { path: '/books/:id/overview', component: ShowBook, name: 'books.showbook' },
];
