import { storeModuleFactory } from '../../services/store';

export const authorStore = storeModuleFactory('authors');
authorStore.actions.getAll();
