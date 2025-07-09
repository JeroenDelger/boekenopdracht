import { storeModuleFactory } from '../../../services/store';

export const bookStore = storeModuleFactory('books');
bookStore.actions.getAll();
