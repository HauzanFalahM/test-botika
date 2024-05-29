import { createApp } from 'vue';
import KaryawanComponent from './components/KaryawanComponent.vue';

const app = createApp({});
app.component('karyawan-component', KaryawanComponent);
app.mount('#app');
