<template>
    <div>
      <button @click="createKaryawan">Tambah Karyawan</button>
      <table>
        <!-- Isi tabel karyawan -->
      </table>
    </div>
  </template>
  
  <script>
  import axios from 'axios'; // Mengimpor Axios
  
  export default {
    data() {
      return {
        karyawans: []
      };
    },
    methods: {
      fetchKaryawans() {
        axios.get('/api/karyawans')
          .then(response => {
            this.karyawans = response.data;
          });
      },
      createKaryawan() {
        // Logika untuk membuat karyawan baru
      },
      // Metode lainnya
    },
    mounted() {
      this.fetchKaryawans();
    }
  };
  </script>
  