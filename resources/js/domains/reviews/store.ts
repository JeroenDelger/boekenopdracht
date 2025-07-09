import { storeModuleFactory } from '../../services/store';
import { getRequest } from './../../services/http';

export const reviewStore = storeModuleFactory('reviews');

reviewStore.actions.getReviewsByBookId = async (bookId) => {
    const { data } = await getRequest(`/books/${bookId}/reviews`);
    if (!data) return;
    reviewStore.setters.setAll(data);
};
